$( document ).ready( function() {
	
	var this_page = $(this);
    $( '#content' ).load( this_page );

	$( 'ul#nav li.dropdown a ul li a' ).click(function() {
		var page = $( this ).attr( 'href' );
		$( '#content' ).load( page );
		return false;
	});

	$( 'ul#nav li.list a' ).click(function() {
		var page = $( this ).attr( 'href' );
		$( '#content' ).load( page );
		return false;
	});
	
	$( 'a#home' ).click(function(){
		var page = $( this ).attr( 'href' );		
		$( '#content' ).load( page );
		return false;
	});
	
	$( 'div#main_content a' ).click(function(){		
		var page = $( this ).attr( 'href' );		
		$( '#content' ).load( page );
		return false;
	});
	
	
		//LLAMADA
	$( 'ul#callMenu li a' ).click(function() {
		var page = $( this ).attr( 'href' );
		//$( "#main_content" ).remove();
		$( '#content' ).load( page );
		return false; 
	});
	
	//FEES
	$( 'ul#feeID li a' ).click(function() {
		var page = $( this ).attr( 'href' );
		$( '#content' ).load( page );
		return false; 
	});
		
	//EXTENSIONS
	$( 'ul#extensionID li a' ).click(function() {
		var page = $( this ).attr( 'href' );
		$( '#content' ).load( page );
		return false; 
	});	
	
	/*$( ':submit' ).click(function(){
				
		var page = $( '#hidden' ).attr( 'value' );		
		window.alert(page);
		$( '#content' ).load( page );
		return false;
	});*/
	
});