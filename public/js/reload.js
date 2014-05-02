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
	
	//Buscadores
	$( 'div#main_content #form1' ).submit(function(){	
		var texto = document.getElementById('search').value;
		var seleccion = document.getElementById('option').value;

		/*for (var i = 0, length = radio.length; i < length; i++) {
			if (radio[i].checked)
			{
				var seleccion = radio[i].value;
			}
			
		};*/

		var page = $( this ).attr( 'action' );			
		$( '#content' ).load( page+"?search="+texto+"&option="+seleccion );		
		return false;
	});
	
	var flag = false ;
	
	//Usuarios
	$('#option').click(function(){
		flag = true;		
		
		$('#nivel').click(function(){
			var hola = document.getElementById('option').value;
			if (flag == true) {
				window.alert(hola);	
			};
			 
			flag = false;
			/*var seleccion = document.getElementById('option').value;
			if (seleccion == "Nivel")
			{
				var texto = "<select class='form-control' id='search'>	<option>usuario</option>						<option>administrador</option>		</select>";				
				$('#search').hide();
				$('#div_reload').html(texto);		
			}
			else
			
				var texto = "<select class='form-control' id='search'>	<option>usuario</option>						<option>administrador</option>		</select>";				
				$('#search').hide();
				$('#div_reload').html(texto);	
			}
			*/			
			return false;
		});			
		return false;
	});

	//Anadir usuario
	$( 'div#main_content #form_add' ).submit(function(){	
		var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		var nivel = document.getElementById('nivel').value;
		
		var page = $( this ).attr( 'action' );			
		$( '#content' ).load( page+"?username="+username+"&password="+password+"&nivel="+nivel );		
		return false;
	});

	//Editar usuario
	$( 'div#main_content #form_edit' ).submit(function(){	
		var username = document.getElementById('username').value;		
		var nivel = document.getElementById('nivel').value;
		
		var page = $( this ).attr( 'action' );			
		$( '#content' ).load( page+"?username="+username+"&nivel="+nivel );		
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