$( document ).ready( function() {
	
	var this_page = $(this);
    $( '#content' ).load( this_page );

	$( 'ul#nav li.dropdown a ul li a' ).click(function() {
		var page = $( this ).attr( 'href' );
		$( '#content' ).load( page );
		return false;
	});

	//Menu
	$( 'ul#nav li.list a' ).click(function() {
		var page = $( this ).attr( 'href' );
		$( '#content' ).load( page );
		page ="";
		return false;
	});

	//HOME 
	$( 'a#home' ).click(function(){
		var page = $( this ).attr( 'href' );		
		$( '#content' ).load( page );
		return false;
	});
	
});