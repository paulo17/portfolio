jQuery( document ).ready( function( $ ) {

	var offset = $('#container-realisation article').last().offset();
	console.log(offset);

	var search = $('#search');
	search.on('click', function(e){
		e.stopPropagation();
		//$('#search-form').css('display', 'block');
		$('#search-form').toggle();

	});



});


