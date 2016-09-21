/*!
 * ADDjs v1.0.0 

jQuery(document).ready(function() {
  var container = document.querySelector('.grid');
  imagesLoaded(container, function() {
    var msnry = new Masonry( container, {
      // options
      columnWidth: 200, // no lo usamos porque bootstrap configura el tamano
      itemSelector: '.grid-item'
    });
  });
});
 */
 jQuery(document).ready(function($) { 

	var elem = document.querySelector('.grid');
	var msnry = new Masonry( elem, {
	  // options
	  itemSelector: '.grid-item',
	  columnWidth: '.grid-sizer'
	});

	// element argument can be a selector string
	//   for an individual element
	var msnry = new Masonry( '.grid', {
	  // options
	  	  gutter: '.gutter-sizer'
	});

	$("#share").jsSocials({
	    shares: ["email", "twitter", "facebook", "googleplus", "linkedin"]
	});

 });

	
