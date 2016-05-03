$( document ).ready( function () {

	function capitalizeWord(s){

		var flg = 1; // por padrão, a palavra tem a primeira letra em maiusculo

		var stopwords = ["do", "da", "de", "e"];

		jQuery.each(stopwords, function(index, value) {
			if (s.toLowerCase() == value) {
				flg = 0; // nenhuma alteração na palavra
			}
		});

		var upperwords = ["hr"];

		jQuery.each(upperwords, function(index, value) {
			if (s.toLowerCase() == value) {
				flg = 2; // palavra inteira em maiusculo
			}
		});

		if (flg === 1)
	    	return s.toLowerCase().replace( /^\b./g, function(a){ return a.toUpperCase(); } );
	    else if (flg === 2)
    		return s.toUpperCase();
    	else
    		return s;
	    	

	};

	function capitalizeString(index, value) {
  		
  		var li = $(this);
		var words = li.text().split(" ");
		$(this).empty();
		li.empty();

		jQuery.each(words, function(index, value) {
	       var w = capitalizeWord(value);
	       li.append(w).append(" ");
	   });

	}

	$(".sg-title").each(capitalizeString);
	$(".sg-subnav-parent li a").each(capitalizeString);

})