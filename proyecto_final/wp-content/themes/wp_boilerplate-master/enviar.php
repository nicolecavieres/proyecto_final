<?php
function valores_formulario(){
	
	if( empty( $_POST['txtnombre'] ) || empty( $_POST['txtmensaje'] ) ):

	// Enviamos al usuario a la misma página con una variable GET de error.
		wp_redirect( add_query_arg( array( 'errormsg' => "Campos incompletos" ), get_home_url()) );
		exit;

	endif;


	// SIEMPRE SE DEBEN SANITIZAR LOS VALORES
	$nombre     = sanitize_text_field( $_POST['nombre'] );
	$mensaje    = sanitize_text_field( $_POST['mensaje'] );


	/*
	Una vez que tenemos los datos del formulario podemos
	hacer con ellos lo que nuestro proyecto web necesite, ej:
	a)  Enviar un email con esta información
	b)  Guardar los valores en base de datos
	c)  Hacer una nueva llamada POST a otro servicio que necesita
		esta información.

	En nuestro caso vamos a mandar un email con el nombre y el mensaje del usuario.
	*/
	wp_mail( "nicole61192@gmail.com", "Formulario de contacto", $nombre . " envió este mensaje => " . $mensaje  );


	/* Una vez que hayamos trabajado con los datos debemos
	redireccionar al usuario a la misma u a otra nueva página.
	En nuestro ejemplo, vamos a redirigirlo a la misma página
	de contacto con una variable de éxito.*/
	wp_redirect( get_home_url() . '/noticias'); exit;
	
}
add_action('admin_post_nopriv_accion', 'valores_formulario'); 
add_action('admin_post_accion', 'valores_formulario');

?>