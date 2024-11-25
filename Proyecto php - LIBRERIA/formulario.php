<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Formulario</title>
  <link href="css/stylee.css" rel="stylesheet" type="text/css" />
  <link rel="icon" type="image/x-icon" href="assets/favicon (1).ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
    include 'bd/conexion.php';
    ?>
  <form action="procesar_comentario.php" method="POST">


    <h1 >Formulario De Contacto</h1>
    <p>Enviar un correo electrónico. Todos los campos con el asterisco <abbr title="required">*</abbr> son obligatorios.
    </p>

    <div class="container">
       

      <label for="nombre">Nombre <abbr title="required" aria-label="required">*</abbr> </label>
      <label for="correo">Correo electrónico <abbr title="required" aria-label="required">*</abbr></label>
      <label for="asunto">Asunto<abbr title="required" aria-label="required">*</abbr></label>

    </div>

    <div class="container">

      <input type="text" id="nombre" name="nombre" maxlength="20" minlength="3" required />

      <input type="email" id="correo" name="correo" placeholder="e.g. cris.smith@itla.com" required />
      <input type="text" id="asunto" name="asunto"  required />

      <!--<input type="text" id="asunto" name="asunto" maxlength="50" minlength="5" required />-->

    </div>
    <br><br>
    <label for="mensaje">Mensaje<abbr title="required" aria-label="required">*</abbr> </label>
    <textarea id="mensaje" name="mensaje" required></textarea>


    <br><br>

    <button type="submit">Enviar</button>



  </form>



</body>

</html>

