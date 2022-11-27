<!DOCTYPE html>
<html>

<head>
  <title>Registrar usuario</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>

<body>
  <!-- <form action="https://formsubmit.co/pachotable2022@gmail.com" method="post"> -->
  <form method="post" multiple action="https://formsubmit.co/globaloscar360@gmail.com">
    <h1>¡Registrate para que obtengas tu cotización!</h1>
    <input type="text" name="name" placeholder="Nombre completo">
    <input type="email" name="email" placeholder="Email">

    <input type="hidden" name="_next" value="http://localhost/Pagina%20Cotizacion/">
    <input type="hidden" name="_captcha" value="false">
    <input type="hidden" name="_template" value="table">
    <input type="hidden" name="_autoresponse" value="Muchas gracias! Hemos recibido tu Mensaje. Próximamente enviaremos a tu correo tu cotización">


    <input type="submit" name="register">


  </form>
  <?php
  include("registrar.php");
  ?>
</body>

</html>
