<?php
		

		$para='sergio199468@gmail.com';
		$mensaje=
		'<h3>Nombre:</h3>'.$_POST['nombre'].'
			<h3>Mensaje:</h3>'.$_POST['mensaje'].'';
		$asunto ="Contacto Página Avance";
		$headers="MIME-version: 1.0\r\n";
		$headers.="Content-type:text/html; charset=utf8\r\n";
		$headers.="From: ".$_POST['correo'].">\r\n";
		$headers.="Bcc:sistemas@quintanaroo.uno";
		if (mail($para, $asunto, $mensaje, $headers)) {
				echo "<script type='text/javascript'>alert('Mensaje enviado con exito');
						document.location.href='../INICIO'
		  			  </script>";
		}
		else {
			echo "<script type='text/javascript'>
			alert('Ocurrio un error al enviar el mensaje intentelo mas tarde');
						document.location.href='../INICIO'
		  			  </script>";
		}
?>


						


