(function($) {
var isActive = false;
$(window).scroll(function(){
	if (window.location.href == 'http://localhost/wordpress/index.php/teaching/') {
	    if  (!isActive && $(window).scrollTop() == $(document).height() - $(window).height()){
	    	isActive = true;
	    	loadMorePictures();
	    }
	}
});

offset = "";
offsetNum = "";

function loadMorePictures() {
	$.ajax({
		url: 'http://localhost/wordpress/wp-admin/admin-ajax.php' + offset + offsetNum,
		type: 'post',
		data: {
			action: 'lazy_load'
		},
		success: function( result ) {
			isActive = false;
			for (var i = 0; i < result.data.length; i++) {
				var thumbnail = result.data[i].thumbnail;
				$('.content').append('<div class="horse">' + thumbnail + '</div>');
			}

			if (offset == "") {
				offset = "?offset=";
				offsetNum = 2;
			}
			else {				
				offset = "?offset=";
				offsetNum += 2;
			}

			
		}
	})
}

})(jQuery);

jQuery('.open').click(function () {
    jQuery(this).closest('.post-content').find('.open-content').toggleClass('hidden', 1000);
    
});

jQuery.fn.toggleText = function(t1, t2){
  if (this.text() == t1) this.text(t2);
  else                   this.text(t1);
  return this;
};
jQuery('.open').click(function(){
  jQuery(this).toggleText('See Less', 'See More');
})

jQuery('.loop-content-staff .post-content-staff:nth-child(2)').css({'position': 'relative', 'top': '5vh'});
jQuery('.loop-content-staff .post-content-staff:nth-child(3)').css({'position': 'relative', 'top': '10vh'});
jQuery('.loop-content-staff .post-content-staff:nth-child(5)').css({'position': 'relative', 'top': '5vh'});
jQuery('.loop-content-staff .post-content-staff:nth-child(6)').css({'position': 'relative', 'top': '10vh'});

