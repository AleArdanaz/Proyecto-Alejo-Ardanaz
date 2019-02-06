<?php
require_once("funciones.php");


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"
      type="text/javascript" charset="utf-8"></script>
  <link rel="text/javascript" src="js/wow.min.js">
  <script src="js/wow.min.js"></script>
             <script>
             new WOW().init();
             </script>

	<title>Ale Ardanaz</title>

</head>
<body>
	<div class="container">
	<main>
    <header id="header" class="header1">
      <nav>
        <h3 class="titleheader"><a href="#inicio" class="anclap">Ale</a></h3>
      </nav>
      <nav class="anclas-header">
        <a class="ancla" href="#info">Info</a>
        <a class="ancla "href="#contacto">Contacto</a>

      </nav>
    </header>
		<div class="inicio" id="inicio">
      <div class="titulos">
        <h1 class="main-title">Alejo Ardanaz</h1>
        <span class="word" id="word">Web Developer</span>
      </div>
    </div>
		<div class="info" id="info">
			   <h2 class="acerca">Acerca de mi</h2>
			<div class="asd">
        <div class="foto">
          <img src="imgs/cvv.jpg">
        </div>
				<div class="textoinfo">
					<h2 class="wow fadeInLeft">Alejo Ardanaz</h2>
					<h3 class="wow fadeInLeft">|  Full Stack Web Developer  |</h3>
					<p class="wow fadeInLeft">27/6/2000</p>
					<p class="wow fadeInLeft">Nuñez, CABA</p>
					<p class="wow fadeInLeft">alejo.ardanaz@gmail.com</p>
					<p class="wow fadeInLeft">En busqueda de desafíos</p>
          <p class="wow fadeInLeft">| Simple |</p>
          <div class="social-media">
            <button type="button" value="" onclick="document.getElementById('twitter').innerHTML = twitter();document.getElementById('twitter').classList.add('wow','bounceIn');" class="botonr wow fadeInLeft">
            <img class="logos"src="imgs/logotw.png" onmouseover="agrandar();"> </button>
            <button type="button" onclick="document.getElementById('insta').innerHTML = insta();document.getElementById('insta').classList.add('wow','bounceIn');" class="botonr wow fadeInLeft"><img class="logos"src="imgs/logoinsta.png"></button>

          </div>
          <div class="sm1">
            <div style="width:40%;">
              <p id="twitter" style="color:black;" class="sm"></p>
            </div>
            <div style="width:40%">
              <p id="insta" style="color:black;" class="sm" ></p>
            </div>
          </div>
          </div>
		</div>
	</div>
	<div class="mas-info" class="description wow">
		<div class="academica" class="wow fadeInLeft">
			<h2 class="titulos-info">Formación académica</h2>
  		<h3>Marzo 2018 - Actualmente</h3>
			<p>Licenciatura en Sistemas de información de las Organizaciones, Universidad de Buenos Aires - En curso</p>
			<h3>Febrero 2018 - Actualmente</h3>
			<p>Desarrollo web Full Stack, Digital House Coding School - En curso</p>
			<h3>Diciembre 2017 - Finalizado</h3>
			<p>Instituto San Román - Bachiller con orientación económica</p>
			<h3>Julio 2016 - Finalizado</h3>
			<p>First Certificate - Cambridge</p>
		</div>
		<div class="skills">
			<h2 class="wow fadeInLeft titulos-info">Skills</h2>
			<h3 class="wow fadeInLeft" >   Html 5   </h3>
			<h3 class="wow fadeInLeft" >  CSS 3  </h3>
			<h3 class="wow fadeInLeft">  PHP  </h3>
			<h3 class="wow fadeInLeft">  JavaScript  </h3>
			<h3 class="wow fadeInLeft">  Laravel  </h3>
			<h3 class="wow fadeInLeft">  MySQL  </h3>
		</div>
		</div>
		</main>
		<div class="contacto" id="contacto">
			<h2>Contacto</h2>
			<form action="" method="post" class="form-consulta">

					<label>Nombre y apellido: <span>*</span></label>
					<input type="text" name="nombre" placeholder="Nombre y apellido" class="campo-form" required>

					<label>Email:<span>*</span></label>

					<input type="email" name="email" placeholder="Email" class="campo-form" required>

					<label>Consulta:</label>
					<textarea name="consulta" class="campo-form"></textarea>
					<input type="submit" name="enviado" value="Enviar" class="btn-form wow bounceIn">
			</form>

			<?php
			if ($_POST) {
				$nombre=$_POST["nombre"];
				$email=$_POST["email"];
				$consulta=$_POST["consulta"];
				$errores=validarDatos($_POST);
			 if (empty($errores)) {
				enviarMail();
				echo "La consulta ha sido realizada!";
			} else{

				echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
				echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
			}
		} ?>

		</div>
    <div class="footer">
      <h3>2018</h3>
      <h3>alejo.ardanaz@gmail.com</h3>
    </div>
	</div>
  <script src="js/functions.js">
  </script>
  <script src="js/wow.min.js"></script>
             <script>
             new WOW().init();
             </script>
</body>
</html>
