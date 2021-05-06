<?php
	$destinatario = 'lerdafelipe@gmail.com';

	// 

	$nombre = $_POST['nombre'];
	$asunto = $_POST['asunto'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];


	$to = 'lerdafelipe@gmail.com'; // 
	$email_subject = "lerdafelipe Formulario de contacto:  $name";
	$email_body = "Acabas de recibir un mensaje del formulario de contacto.\n\n"."Aquí estan los detalles:\n\nNombre: $nombre\n\nEmail: $email\n\nMensaje:\n$mensaje";
	$headers = "From: noreply@lerdafelipe.com\n"; // 
	$headers .= "Responda-a: $email_address";   
	mail($to,$email_subject,$email_body,$headers);
	echo "<script>alert('Correo enviado exitosamente.
						Message sent succefully.')</script>";
	echo "<script> setTimeout(\"location.href='index.html'\",1)</script>";

?>