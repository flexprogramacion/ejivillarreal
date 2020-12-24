<?php
  $destinatario = 'gnfreytes@gmail.com';

  $nombre = $_POST ['nombre'];
  $apellido = $_POST ['apellido'];
  $email = $_POST ['email'];
  $asunto = $_POST ['asunto'];
  $mensaje = $_POST ['mensaje'];

  $header = "Enviado desde la página Web";
  $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

  mail($destinatario, $asunto, $mensajeCompleto, $header);
  echo "<script>alert('correo enviado exitosamente')</script>";
  echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
