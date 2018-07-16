<?php
if ($_POST) {

$nombre=$_POST["nombre"];
$email=$_POST["email"];
$mensaje=$_POST["mensaje"];
$para="alejo.ardanaz@gmail.com";
$titulo="Ale Ardanaz";

if(!isset($_POST['nombre']) ||
!isset($_POST['email']) ||
!isset($_POST['mensaje'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}
$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['nombre'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";

$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($para, $titulo, $email_message, $headers);

echo "¡El formulario se ha enviado con éxito!";
  }
?>
