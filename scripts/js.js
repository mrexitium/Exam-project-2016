
jQuery('.open').click(function () {
    jQuery(this).closest('.post-content').find('.open-content').toggleClass('hidden');
});



jQuery('.close1').click(function() {
	jQuery('#day-img').removeClass('hidden');
	jQuery('#daymenu').removeClass('hidden');
	jQuery('.menu1').addClass('hidden');
	jQuery('.menu1').animate({'opacity': '0'});

}); 