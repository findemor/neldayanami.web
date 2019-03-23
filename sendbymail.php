<?php
			error_reporting(E_ERROR | E_WARNING | E_PARSE);
		
				if (isset($_POST["nombre"] )){	error_reporting(E_ERROR | E_WARNING | E_PARSE);

					$nombre=$_POST["nombre"];
					$mail=$_POST["email"];
					$asunto=$_POST["asunto"];
					$comentario=$_POST["comment"];
					

					$destinatario = "correo@neldayanami.es";//email de la persona que quiero enviar
					$cuerpo = '
					<html>
					<head>
					   <title>Datos de contacto</title>
					</head>
					<body>
					
					<h3 style=" color:#738ba0;">Datos de contacto</h3>
					
					<p><b style=" color:#738ba0;">Nombre:</b> '.$nombre.'</p>
					<p><b style=" color:#738ba0;">Mail:</b> '.$mail.'</p>
					<p><b style=" color:#738ba0;">Asunto:</b> '.$asunto.'</p>
					<p><b style=" color:#738ba0;">Comentario:</b> '.$comentario.'</p>
					</body>
					</html>
					';

					//para el envio en formato HTML
					$headers = "MIME-Version: 1.0\r\n";
					$headers .= "Content-type: text/html; charset=UTF-8 \r\n";

					//dirección del remitente, el nuestro o de la pagina web
					$headers .= "From: ".$mail."\r\n";

					//dirección de respuesta, si queremos que sea distinta que la del remitente
					$headers .= "Reply-To: correo@neldayanami.es\r\n";

					//ruta del mensaje desde origen a destino
					$headers .= "Return-path: correo@neldayanami.es\r\n";

					//direcciones que recibiran copia
					$headers .= "Cc: correo@neldayanami.es\r\n";

				
					mail($destinatario,$asunto,$cuerpo,$headers);
						
					}
						
						/*
					$redirect = "<script type='text/javascript'>
						function redireccion() {
						document.location.href='index.html#pagCuatro';
						}
						setTimeout('redireccion()',5000);
						</script>";

					echo 
						'<html><head></head><body id="sendbymail">'.$redirect.
						'<h1>Gracias por enviarnos una consulta.</h1>'.
						'<a href="index.html#pagCuatro">Volver</a>'.
						'</body></html>';*/
						

?>	


<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Lobster|Bree+Serif|Pontano+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body class="fondoAvisos">
	<div class="avisos">
		<h1>¡Su mensaje se ha enviado!</h1><br />
		<p>Gracias por escribir a Neld Ayanami, recibirá una respuesta con la mayor brevedad posible.</p><br /><br />
		<input class="botonFormulario" type="button" value="Volver" onClick="document.location.href='index.html#pagCuatro'" />
	</div>
	<script type='text/javascript'>
		function redireccion() {
			document.location.href='index.html#pagCuatro';
		}
		setTimeout('redireccion()',5000);
	</script>
</body></html>





