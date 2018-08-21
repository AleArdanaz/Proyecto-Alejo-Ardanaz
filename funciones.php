<?php
function validarDatos($datos){
  $errores=[];

  if($datos["nombre"]==""){
    $errores[]="nombre";
  }
  if ($datos["email"]=="") {
    $errores[]="email";
  }elseif (filter_var($datos["email"],FILTER_VALIDATE_EMAIL)==false) {
    $errores["email"]="Por Favor ingrese un email valido";
  }
  if ($datos["consulta"]=="") {
    $errores[]="consulta";
  }
  return $errores;
}
  function enviarMail() {
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







  }
?>
