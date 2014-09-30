
$(window).resize(function() {
	/** Calculate the height of the box depending on the width **/
	
	var boxWidth = $('.Box').width();
	$('.BoxImage').css("height",boxWidth);

	var sliderWidth = $('.slider').width() ;
	$('.slider').css("height",sliderWidth / 2.5);
	$('.sliderDiapos').css("height",sliderWidth / 2.8);

	/** Calculate the height of the song depending on the width **/

	var songAvatarWidth = $('.SongAvatar').width() ;
	$('.SongAvatar').css("height",songAvatarWidth);

});

// Executes this when the ajax finish
$( document ).ajaxComplete(function( event,request, settings ) {
  	
	$('.sliderDiapos').DDSlider({

	  nextSlide: '.sliderButtonNext',
	  prevSlide: '.sliderButtonPrev',
	  selector: '.sliderSelector'

	});

	$('#openLogin').click(function(){
		$('#loginPop').show(0);
		return false;
	});
	$('#openRegister').click(function(){
		$('#registerPop').show(0);
		return false;
	});

	/** Calculate the height of the box depending on the width **/

	var boxWidth = $('.Box').width();
	$('.BoxImage').css("height",boxWidth);

	/** Calculate the height of the slider depending on the width **/

	var sliderWidth = $('.slider').width() ;
	$('.slider').css("height",sliderWidth / 2.8);
	$('.sliderDiapos').css("height",sliderWidth / 3.1);

	/** Calculate the height of the song depending on the width **/

	var songAvatarWidth = $('.SongAvatar').width() ;
	$('.SongAvatar').css("height",songAvatarWidth);


	var songHeader = $('.SongHeader').height();
 
	$('#SongBackground').hide(0);

	$('#SongBackgroundBlur').blurjs({
	  source: '#SongBackground',
	  radius: 30,
	  overlay: 'rgba(36, 36, 36, .2)'
	}); 
	$(function() {
		// Handler for .ready() called.
		$('#SongBackground').delay(500);
		$('#SongBackground').fadeIn(1000);
	});

	var totalElements = $('.trendingList .wpp-list li').length;

	for ( var i = 1; i <= totalElements; i++ ) {
	// Logs "try 0", "try 1", ..., "try 4".
		$('.trendingList .wpp-list li:nth-child(' + i + ')').prepend('<p>' + i + '</p>');
	}

});


$('#open_DrowDown').hover(function () {
	$('#menuDropdown').slideToggle(0); 
	return false;
});

$('#menuDropdown a').click(function () {
	$('#menuDropdown').hide(0); 
});

$('#menu_drop').mouseleave(function () {
	$('#menuDropdown').delay(100);
	$('#menuDropdown').hide(0);
	return false;
});

$('.sectionWrap').click(function () {	
	$('#menuDropdown').delay(100);
	$('#menuDropdown').hide(0); 
	console.log("pressed");
});

if(navigator.userAgent.match(/Android/i)
  	|| navigator.userAgent.match(/webOS/i)
  	|| navigator.userAgent.match(/iPhone/i)
  	|| navigator.userAgent.match(/iPad/i)
  	|| navigator.userAgent.match(/iPod/i)
  	|| navigator.userAgent.match(/BlackBerry/i)
  	|| navigator.userAgent.match(/Windows Phone/i)) {

	// Open the menu
 
}
else
{   
	var scrollHeight;

	// scrollHeight = $('#footer').offset().top - $('#Player').height() - $('#Player').offset().top;
  
	// $(window).scroll(function() {

	// 	// topLimit = ($('.footer').offset().top - window.innerHeight())+ window.scrollY;
	// 	topLimit = 0;
	// 	console.log('offset desde el footer'+$('.footer').offset().top)
	// 	console.log('Scroll'+window.scrollY)
	// 	console.log('Footer - Window'+ ( $('.footer').offset().top - window.innerHeight()) )
	// 	if (topLimit <= 165) {
	// 		console.log("es menor")
	// 	}
	// 	 //    if (scrollHeight <= 160) {
	// 	 //        $('#Player').css({
	// 	 //            'position': 'relative', 
	// 	 //            'margin-top':'100px'
	// 	 //        });
	// 	 //    } else {
	// 	 //        $('#Player').css({
	// 	 //            'position': 'fixed'
	// 	 //        });
	// 	 //    }
	// });

	$('#comment').attr("placeholder", "Enter your number");

	$('#reply-title').click(function () {
		$('#respond').delay(500).toggleClass('respondOpened');	 
		return false;
	});
	$('#cancel-comment-reply-link').click(function () {
		return true;
	});

	$('#comment').attr("placeholder", "Enter your number");

	$('#reply-title').click(function () {
		$('#respond').delay(500).toggleClass('respondOpened');	 
		return false;
	});
	$('#cancel-comment-reply-link').click(function () {
		return true;
	});
 

}