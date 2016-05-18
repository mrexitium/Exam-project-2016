
jQuery('.open').click(function () {
    jQuery(this).closest('.post-content').find('.open-content').toggleClass('hidden');
    
});

jQuery.fn.toggleText = function(t1, t2){
  if (this.text() == t1) this.text(t2);
  else                   this.text(t1);
  return this;
};
jQuery('.open').click(function(){
  $(this).toggleText('See Less', 'See More');
})

jQuery('.close1').click(function() {
	jQuery('#day-img').removeClass('hidden');
	jQuery('#daymenu').removeClass('hidden');
	jQuery('.menu1').addClass('hidden');
	jQuery('.menu1').animate({'opacity': '0'});

}); 