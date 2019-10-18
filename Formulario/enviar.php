<?php
$destino = "munoznoe1616@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail{$destino, $asunto, $mensajeCompleto};

echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='correo.html'\",1000)</script>"

?>