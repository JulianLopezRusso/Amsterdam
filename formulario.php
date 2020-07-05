<?php
$nombre = $_POST['nombre'];
$sexo = $_POST['sexo'];
$nacimiento = $_POST['nacimiento'];
$mail = $_POST['mail'];
$noticias = $_POST['noticias'];

$para = 'semow40890@enmail1.com';
$asunto = 'Mensaje desde la web';

$headers = "mime-vesion: 1.0\r\n";
$headers .= "content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "To: $para\r\n";

$comentar = "<h1 style='color: red'>" $nombre "</h1>";
$comentar .= "<p>El usuario es de sexo:</p>" $sexo;
$comentar .= "<p>El usuario nació en la fecha:</p>" $nacimiento;
$comentar .= "<p>Quiere el usuario recibir noticias?</p>" $noticias;
$comentar .= "<hr />"
$comentar .= $_POST['comentar'];

mail($para, $asunto, $comentar, $headers);
header("location: gracias.html");

 ?>