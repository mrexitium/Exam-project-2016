(function($) {
var isActive = false;
$(window).scroll(function(){
    if  (!isActive && $(window).scrollTop() == $(document).height() - $(window).height()){
    	isActive = true;
    	loadMorePictures();
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

