$( document ).ready( function(  ) {

	//var offset = $('#container-realisation article').last().offset();
	//console.log(offset);

	var search = $('#search');
	search.on('click', function(e){
		e.stopPropagation();
		//$('#search-form').css('display', 'block');
		$('#search-form').toggle();

	});

	var techno = $('#select-techno');
	var annee = $('#select-annee');
	var promotion = $('#select-promotion');

	function filtre(){
		window.location.href =  $(this).val();
	}

	techno.change(filtre);
	annee.change(filtre);
	promotion.change(filtre);

});


