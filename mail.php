<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$call = $_POST['call'];
$tipocontacto = $_POST['tipocontacto'];
$status = $_POST['status'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" De: $name \n Teléfono: $phone \n El cliente desea ser contactado mediante: $tipocontacto \n Estatus Laboral del Interesado: $status \n Tipo de Negocio: $type \n Mensaje: $message";
$recipient = "administracion@barriosbienesraices.com";
$subject = "Contacto";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location:index.html");
?>