jQuery( document ).ready( function( $ ) {
	/* Masonry + Infinite Scroll */
	var $container = $('.list-realisation');

	$container.infinitescroll({
		navSelector: '#page-nav',
		nextSelector: '#page-nav a',
		itemSelector: '.realisation',
		loading: {
			msgText: 'Chargement des contenus...',
			finishedMsg: 'Aucun contenu à charger.',
			img: 'http://i.imgur.com/6RMhx.gif'
		}
	}, function (newElements) {
		var $newElems = $(newElements).css({
			opacity: 0
		});
		$newElems.imagesLoaded(function () {
			$newElems.animate({
				opacity: 1
			});
			$container.masonry('appended', $newElems, true);
		});
	});
	$(window).unbind('.infscr');

	jQuery("#page-nav a").click(function () {
		jQuery('.list-realisation').infinitescroll('retrieve');
		return false;
	});

	$(document).ajaxError(function (e, xhr, opt) {
		if (xhr.status == 404) $('#page-nav a').remove();
	});

	var search = $('#search');
	search.on('click', function(e){
		e.stopPropagation();
		//$('#search-form').css('display', 'block');
		$('#search-form').toggle();

	});



});


