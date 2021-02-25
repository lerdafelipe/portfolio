<?php
	$destinatario = 'lerdafelipe@gmail.com';

	// 

	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];


	$header = "Formulario de contacto de Página lerdafelipe.com";
	$mensajeCompleto = $mensaje . "\nAtentamente: ".  $nombre . "\nEmail: " . $email;

	mail($destinatario, $asunto, $mensajeCompleto, $header);
	echo "<script>alert('Correo enviado exitosamente')</script>";
	echo "<script> setTimeout(\"location.href='index.html'\",1)</script>";

?>