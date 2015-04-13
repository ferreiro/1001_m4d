
$(window).resize(function() {
	/** Calculate the height of the box depending on the width **/
	
	var boxWidth = $('.Box').width();
	$('.BoxImage').css("height",boxWidth);


	var songRelatedWidth = $('.SongRelated li').width();
	$('.SongRelated ul li').css("height",songRelatedWidth);


	// var sliderWidth = $('.slider').width() ;
	// $('.slider').css("height",sliderWidth / 2.5);
	// $('.sliderDiapos').css("height",sliderWidth / 2.5);

	/** Calculate the height of the song depending on the width **/

	var songAvatarWidth = $('.SongAvatar').width() ;
	$('.SongAvatar').css("height",songAvatarWidth);

});

$(window).scroll(function() {

	/** Fixing Right menu when scroll down **/
	var rightPanel = $('.ContainerRight'),
		windowHeight = $(window).height(),
		foo = rightPanel.height() - windowHeight,
		bottomMargin = scrollY - (rightPanel.height() - windowHeight);

	console.log("Right height: " + rightPanel.height() );
	console.log("Window Height: " + windowHeight);
	console.log("Bottom Margin: " + bottomMargin);

	if (bottomMargin >= 0) {
		// Fixed the right Menu
		console.log("Heooo");
	/*
		rightPanel.css({
			"top": -foo,
			"position": "fixed"
		});
	*/
	}
	else {
		// unfix right menu
	}

});

// Executes this when the ajax finish
$( document ).ajaxComplete(function( event,request, settings ) {
  	var ls = localStorage; 

	/** Bottom advise **/

	$('#close_banner').click(function(){
		ls.followPop = 100;
		hideAdvise();
	}); 

	if(ls.followPop > 0) {

		ls.followPop++;

		if (ls.followPop >= 50) {
			hideAdvise();
		}
		else if (ls.followPop >= 3 && ls.followPop < 50) {
			showAdvise();
		}
	}
	else {
		ls.followPop = 1; // Reset the counter
	}


	function showAdvise() {
		var time = 5000;
		// $('.header_advise_second').addClass('header_advise_second_Fixed').delay(time).slideDown(time / 10);
		// $('.Container').delay(time).addClass('containerMarginAdvise');
		$('.followPop').show(0);
	} 
	function hideAdvise() {
		// $('.header_advise_second').hide(0).removeClass('header_advise_second_Fixed');
		// $('.Container').removeClass('containerMarginAdvise');
		$('.followPop').hide(0);
	}



	$('.sliderDiapos').DDSlider({

	  nextSlide: '.sliderButtonNext',
	  prevSlide: '.sliderButtonPrev',
	  selector: '.sliderSelector'

	});



	$(".shareTwitter").click(function() {
		var shareContent = $(this).siblings('.twitterLink');  
		var twitterUrl = $(shareContent).find('span').html();
		
		var windowTop = (window.screen.availWidth/2) - 500;
		var windowLeft = (window.screen.availHeight/2) + 150;
		// var w = 500, h = 300;
		// var left = (screen.width/2)-(w/2);
  		// var top = (screen.height/2)-(h/2);

		// window.open(twitterUrl, 'Share on twitter', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);

		window.open(twitterUrl, '_blank', 'location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,height=250,width=520, top='+windowTop+', left='+windowLeft+' ');

		return false;
	});

	$(".shareFacebook").click(function() {
		var shareContent = $(this).siblings('.facebookLink');  
		var facebookUrl = $(shareContent).find('span').html();
		
		var windowTop = (window.screen.availWidth/2) - 550;
		var windowLeft = (window.screen.availHeight/2) + 170;
 
		window.open(facebookUrl, '_blank', 'location=no,directories=no, status=no, menubar=no, scrollbars=no, resizable=no,height=300,width=560, top='+windowTop+', left='+windowLeft+' ');

		return false;
	}); 
	
  	$( "#openSearch" ).click(function() {
  		$('.HeaderSearch').slideDown(200);  
  		$('.HeaderSearchInput').val('');
  		$('.HeaderSearchInput').focus();
  	}); 


  	$( "#try_again" ).click(function() {
  		$('.HeaderSearch').slideDown(200);   
  		$('.HeaderSearchInput').val('');
  		$('.HeaderSearchInput').focus();
  		return false;
  	}); 

  	$( ".closeMobileSearch" ).click(function() {
  		$('.HeaderSearch').hide(0);  
  	}); 

  	$( "#open_mobile" ).click(function() {
  		$('.HeaderWhiteBg').fadeIn(200);
  		$('.HeaderMenu').fadeIn(200); 
  		$('#closemobile').delay(200).show(0);
  	}); 

  	$( "#closemobile" ).click(function() {
  		$('.HeaderWhiteBg').fadeOut(200);
  		$('.HeaderMenu').hide(0);
  		$('#closemobile').hide(0);
  	}); 

  	if(navigator.userAgent.match(/Android/i)
  	|| navigator.userAgent.match(/webOS/i)
  	|| navigator.userAgent.match(/iPhone/i)
  	|| navigator.userAgent.match(/iPad/i)
	|| navigator.userAgent.match(/iPod/i)
	|| navigator.userAgent.match(/BlackBerry/i)
  	|| navigator.userAgent.match(/Windows Phone/i)) {

  		// Open the menu

  		$( ".HeaderMenu" ).click(function() {
  			$('.HeaderMenu-submenu').show(0); 
  			$( ".HeaderMenu" ).addClass('menu_pulsado');
  		});

  		$( ".menu_pulsado" ).click(function() {
  			$('.HeaderMenu-submenu').hide(0); 
  			$( ".HeaderMenu" ).removeClass('menu_pulsado');
  		});
  	 
  	}
  	else
  	{   

  		$( ".HeaderMenu" ).hover(
  		  function() {
  		    $('.HeaderMenu-submenu').show();
  		  }, function() {
  		    $('.HeaderMenu-submenu').hide();
  		  }
  		);

  	}

  	// Añadir clase a la impaginación
  	$('.page-numbers').addClass("button");


	/** Calculate the height of the box depending on the width **/

	var boxWidth = $('.Box').width();
	$('.BoxImage').css("height",boxWidth);

	/** Calculate the height of the slider depending on the width **/

	// var sliderWidth = $('.slider').width() ;
	// $('.slider').css("height",sliderWidth / 2.8);
	// $('.sliderDiapos').css("height",sliderWidth / 2.8);

	/** Calculate the height of the song depending on the width **/

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
