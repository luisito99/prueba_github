<?php 

	$destino ="luisito.ac9@gmail.com";
	$asunto ="Contacto desde el sitio web";
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$celular = $_POST["celular"];
	$comentarios = $_POST["comentarios"];
	$contenido = "
	<b>Nombre :</b> " . $nombre . "<br><b>Email :</b>" . $email . "<br><b>Celular :</b> " . $celular . "<br><b>Comentarios : </b> " . $comentarios;
	
	// PARA QUE RECONOZCA LAS ETIQUETAS HTML

	$encabezados  = "MIME-Version: 1.0" . "\r\n";
	$encabezados .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// FUNCION MAIL Y REDIRECCIONAMIENTO
	mail($destino, $asunto, $contenido, $encabezados);
	header("Location: gracias.php");

 ?>