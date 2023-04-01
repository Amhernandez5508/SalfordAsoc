<?php
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$comentarios = $_POST["comentarios"];

$to = "ahernandez5508@gmail.com";
$subject = "Contacto desde Web Salford y Asociados";
$body = "Una persona se ha contactado desde la web."
    . "\n\n\nNombre: " . $nombre
    . "\n\nComentarios: " 
    . "\n" . $comentarios;
$headers = "From: $email";

mail($to, $subject, $body, $headers);
echo    "<h1 style= 'font-weight: bold; font-size: 36px; color: brown; text-align: center; margin: auto; margin-top: 15%; border: 3px inset rgb(95, 28, 28); width: fit-content;'>
                Hemos recibido correctamente sus datos, en breve nos contactaremos con usted.
        </h1>";
?>