
<?php
 // require 'vendor/autoload.php';
 

  require "vendor/swiftmailer/swiftmailer/lib/swift_required.php";
  
  // Configuración
  $transport = Swift_SmtpTransport::newInstance()
  ->setHost('smtp.gmail.com')
  ->setPort('587')
  ->setEncryption('tls')
  ->setUsername('admin@gmail.com')
  ->setPassword('password');
  
  $mailer = Swift_Mailer::newInstance($transport);
  
  // Si el formulario es enviado
  if (isset($_POST["swiftmailer"]))
  {
  // Crear el mensaje
  $message = Swift_Message::newInstance()
    // Asunto
    ->setSubject('Hola Mundo')
    // Remitente
    ->setFrom(array('admin@gmail.com' => 'Administrador'))
    // Destinatario/s
    ->setTo(array('as3-2-20.19@uni.eus' => 'destinatario1'))
    // Body del mensaje
    ->setBody('<h1>Hola Mundo</h1>', 'text/html');
  
  // Enviar el mensaje
  if ($mailer->send($message))
  {
      echo "Mensaje enviado correctamente";
  }
  else
  {
      echo "Mensaje fallido";
  }
  }
  ?>
  
  <form method="POST">
      <button type="submit">Enviar email</button>
      <input type="hidden" name="swiftmailer">
  </form> 


?>