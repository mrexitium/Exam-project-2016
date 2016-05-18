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
			console.log(result);
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
				console.log(offset + offsetNum);
			}

			
		}
	})
}

})(jQuery);

jQuery('.open').click(function () {
    jQuery(this).closest('.post-content').find('.open-content').toggleClass('hidden');
    
});

jQuery.fn.toggleText = function(t1, t2){
  if (this.text() == t1) this.text(t2);
  else                   this.text(t1);
  return this;
};
jQuery('.open').click(function(){
  jQuery(this).toggleText('See Less', 'See More');
})

