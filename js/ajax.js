/*
	jQuery for All-AJAX theme
	Original JavaScript by Chris Coyier
	Updated October 2010 by Stewart Heckenberg & Chris Coyier
	Updated May 2011 by Chris Coyier
	Updated Sep 2012 by Jeff Starr
*/

// Self-Executing Anonymous Function to avoid more globals
(function(){

	// set variables
	var 
	$mainContentCenter = $("#ajaxCenterContainer"),
	// $mainContentLeft = $("#ajaxLeftContainer"),
	// $mainContentRight = $("#ajaxRightContainer"),
	$loader     = $("#loading"),
	$searchInput     = $(".HeaderSearchInput"), 
	$allLinks        = $("a"),
	$el;

	var loadInsidePage; // Variable bool que en 1, hace que la página carge el contenido solo en la izquierda (y que el bloque derecho siga igual y no cambie)

	// auto-clear search field
	$searchInput.focus(function(){
		if ($(this).val() == "Search..."){
			$(this).val("");
		}
	});

	// query search results
	$('.searchform').submit(function(){
		var s = $searchInput.val().replace(/ /g, '+');
		if (s){
			var query = '/?s=' + s;
			$.address.value(query);
		}
		return false;
	});
 
	// URL internal is via plugin http://benalman.com/projects/jquery-urlinternal-plugin/
	$('a:urlInternal').live('click', function(e){ 

		var path = $(this).attr('href').replace(base, '');

		$el = $(this); // Caching
		loadInsidePage = 0;

		if ($el.parents('.pagination').length == 1) {
			loadInsidePage = 1;
			$.address.value(path); // 1 = Just load left
			return false;
		}
		if ( !$el.hasClass("noAjax") ) {	

			$.address.value(path); // 0 = Load left and right

			$('.HeaderMenu li').removeClass("selected");
			$el.parent().addClass("selected");

			if($el.parent('.HeaderLogo').length == 1)
			{
				$('.HeaderMenu li:first-child').addClass("selected");
			}
			else if($el.parents('.HeaderMenuDropdown').length == 1)
			{
				$('.HeaderMenu li:nth-child(2)').addClass("selected");
			}
			
			return false;
		}

		// Default action (go to link) prevented for comment-related links (which use onclick attributes)
		e.preventDefault();
	});

	// Fancy ALL AJAX Stuff
	$.address.change(function(event){ 
 	

 		if (loadInsidePage == 1) {
 			// Si pulsan la pagination
 		};
		// if(event.value.contains('send')) {
			
		// 	$mainContentCenter.empty().load(base + event.value + ' #ajaxCenterContainerint', function(){
		// 		$mainContentCenter.fadeIn('fast');
		// 	});
		// 	$mainContentLeft.hide();
		// 	$mainContentRight.hide();
		// 	alert('fdkjfd');
		// }

		if (event.value){
			$loader.show(0);

			$mainContentCenter.empty().load(base + event.value + ' #ajaxCenterContainerint', function(){
				$loader.fadeOut(300);
				$mainContentCenter.fadeIn('fast');
			});

			// $mainContentLeft.empty().load(base + event.value + ' #ajaxLeftContainerint', function(){
			// 	$loaderLeft.hide(0);
			// 	$mainContentLeft.fadeIn('fast');
			// });
			// $mainContentRight.empty().load(base + event.value + ' #ajaxRightContainerint', function(){
			// 	$loaderRight.hide(0);
			// 	$mainContentRight.fadeIn('fast');
			// });
		}	 

		var current = location.protocol + '//' + location.hostname + location.pathname;
		if (base + '/' != current) {
			var diff = current.replace(base, '');
			location = base + '/#' + diff;
		}	


	});

})(); // End SEAF