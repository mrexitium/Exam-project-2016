(function($) {
var isActive = false;
$(window).scroll(function(){
	if ((window.location.href == 'http://jespers-design.dk/fyensrideklub/undervisning/') || (window.location.href == 'http://fyensrideklub.jespers-design.dk/undervisning/')) {
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
		url: 'http://jespers-design.dk/fyensrideklub/wp-admin/admin-ajax.php' + offset + offsetNum,
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
	jQuery(this).toggleText('Se Mindre', 'Se Mere');
    jQuery(this).closest('.post-content-events').find('.open-content').fadeToggle(500);
    
    
});

jQuery.fn.toggleText = function(t1, t2){
  if (this.text() == t1) this.text(t2);
  else                   this.text(t1);
  return this;
};

if (window.matchMedia( "(min-width: 750px)" ).matches) {
	jQuery('.loop-content-staff .post-content-staff:nth-child(2)').css({'position': 'relative', 'top': '5vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(3)').css({'position': 'relative', 'top': '10vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(5)').css({'position': 'relative', 'top': '5vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(6)').css({'position': 'relative', 'top': '10vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(8)').css({'position': 'relative', 'top': '5vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(9)').css({'position': 'relative', 'top': '10vh'});	
}
else {
	jQuery('.loop-content-staff .post-content-staff:nth-child(2)').css({'position': 'relative', 'top': '0vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(3)').css({'position': 'relative', 'top': '0vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(5)').css({'position': 'relative', 'top': '0vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(6)').css({'position': 'relative', 'top': '0vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(8)').css({'position': 'relative', 'top': '0vh'});
	jQuery('.loop-content-staff .post-content-staff:nth-child(9)').css({'position': 'relative', 'top': '0vh'});
}

jQuery(".photo-content-staff").mouseenter(function(){
	jQuery(this).siblings('h2').css("color","#B2A897");
	jQuery(this).siblings('p').css({"color": "#B2A897", "border-bottom": "1px solid #B2A897"});
});

jQuery(".photo-content-staff").mouseleave(function(){
	jQuery(this).siblings('h2').css("color","#000000");
	jQuery(this).siblings('p').css({"color": "#000", "border-bottom": "0px"});
});
