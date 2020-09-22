<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$website = $_POST['website'];
$priority = $_POST['priority'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" De: $name \n Teléfono: $phone \n Llamar de vuelta: $call \n Website: $website \n Prioridad: $priority \n Tipo de Negocio: $type \n Mensaje: $message";
$recipient = "josemax277@gmail.com";
$subject = "Contacto";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location:index.html");
?>