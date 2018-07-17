
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="styles.css">
	<title>Ale Ardanaz</title>

</head>
<body>
	<div class="container">
		<header>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"
					type="text/javascript" charset="utf-8"></script>
			<script >
				$(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});
			</script>
			<h3 class="titleheader">Ale</h3>
			<nav>
				<a class="ancla" href="#info">Info</a>

			</nav>
		</header>
	<main>
		<div class="inicio" id="inicio">
			<img src="imgs/AA_logo.jpg">
			<h1 class="main-title">Alejo Ardanaz</h1>
			<h2 class="main-subtitle">Web Developer</h2>
		</div>
		<div class="info" id="info">
			<h2>Acerca de mi</h2>
			<div class="asd">
					<img src="imgs/cvv.jpg">
				<div class="textoinfo">
					<h2>Alejo Ardanaz</h2>
					<h3>|  Full Stack Web Developer|</h3>
					<p>27/6/2000</p>
					<p>Nuñez, CABA</p>
					<p>alejo.ardanaz@gmail.com</p>
					<p>En busqueda de desafíos</p>
			</div>
		</div>
	</div>
	<div class="mas-info">
		<div class="academica">
			<h2>Formación académica</h2>
			<h3>Marzo 2018 - Actualmente</h3>
			<p>Licenciatura en Sistemas de información, Universidad de Buenos Aires - En curso</p>
			<h3>Febrero 2018 - Actualmente</h3>
			<p>Desarrollo web Full Stack, Digital House Coding School - En curso</p>
			<h3>Diciembre 2017 - Finalizado</h3>
			<p>Instituto San Román - Bachiller con orientación econónmica</p>
			<h3>Julio 2016 - Finalizado</h3>
			<p>First Certificate - Cambridge</p>
		</div>
		<div class="skills">
			<h2>Skills</h2>
			<h3>Html 5</h3>
			<h3>CSS 3</h3>
			<h3>PHP</h3>
			<h3>JavaScript</h3>
			<h3>Laravel</h3>
			<h3>MySQL</h3>
		</div>
		</div>
		</main>
		<div class="contacto">
			<h2>Contacto</h2>
			<form action="index.php" method="post" class="form-consulta">

					<label>Nombre y apellido: <span>*</span>
					</label>
						<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>
					<label>Email: <span>*</span>
					</label>
						<input type="email" name="email" placeholder="Email" class="campo-form" required>

					<label>Consulta:
					</label>
						<textarea name="consulta" class="campo-form"></textarea>

						<input type="submit" name="enviado" value="Enviar" class="btn-form">
			</form>
			<?php
if (isset($_POST['enviado'])) {
			if(isset($_POST['email']) &&
			isset($_POST['nombre']) &&
			isset($_POST['consulta'])) {


				$email_to = "alejo.ardanaz@gmail.com";
				$email_subject = "Contacto desde el sitio web";


				$cuerpo = "Nombre y apellido: " . $_POST["nombre"] . "\r\n";
				$cuerpo .= "Email: " . $_POST["email"] . "\r\n";
				$cuerpo .= "Consulta: " . $_POST["consulta"] . "\r\n";



				$headers  = "MIME-Version: 1.0\n";
				$headers .= "Content-type: text/plain; charset=utf-8\n";
				$headers .= "X-Priority: 3\n";
				$headers .= "X-MSMail-Priority: Normal\n";
				$headers .= "X-Mailer: php\n";
				$headers .= "From: \"".$_POST['nombre']."\" <".$_POST["email"].">\n";
				@mail($email_to, $email_subject, $cuerpo, $headers);

				echo "¡El formulario se ha enviado con éxito!";
	}
		elseif(!isset($_POST['nombre']) ||
			!isset($_POST['email']) ||
			!isset($_POST['consulta'])) {

			echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
			echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
			die();
			}
				}
	?>

		</div>
		<div class="cierre">
			<h3>Disponibilidad horaria: Part Time | Por horas | Full Time</h3>
			<h3>Referencias a disposición.</h3>
			<a href="#inicio" class="volver">Volver al inicio</a>
		</div>
	</div>
</body>
</html>
