
<?php 
  $pg = "contacto";
  ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contacto</title>
  <link rel="stylesheet" href="css/fontawesome-free-6.7.2-web/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome-free-6.7.2-web/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js "></script>
</head>

<body id="contacto" class="d-flex flex-column h-100">
  <header class="container">
     <?php include_once("menu.php"); ?>
  </header>
  <main class="container">
    <div class="row">
      <div class="col-12 pt-3 pb-5">
        <h1>Contacto</h1>
      </div>
      <div class="row">
        <div class=" col-12 col-sm-6">
          <P>Te invito a que me envies un mensaje </P>
        </div>

        <div class="col-12 col-sm-6">
          <form action="" method="post" class="custom-form">
            <div class="pb-3">
              <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
            </div>
            <div class="pb-3">
              <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
            </div>
            <div class="pb-3">
              <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono" class="form-control">
            </div>
            <div class="pb-5">
              <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe un mensaje"
                class="form-control"></textarea>
            </div>
            <div class="pb-3">
              <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary">ENVIAR</button>
            </div>
          </form>
        </div>



      </div>
  </main>

  <footer class="container mt-auto pb-4 ">

    <div class="row">

      <div class="col-sm-4">
        <a href="mailto:joaquinavedikianotero@gmail.com">Joaquinavedikianotero@gmail.com</a>
      </div>

      <div class="col-sm-4">
        <a href="https://www.linkedin.com/in/joaquin-avedikian-otero/" target="_blank" title="linkedin">
          <i class="fa-brands fa-linkedin-in"></i>

          <a href="https://github.com/Avedikiangit" target="_blank" title="github"><i
              class="fa-brands fa-square-github"></i></a>
        </a>
      </div>
    </div>

  </footer>

  <div class="logo">
    <a href="https://web.whatsapp.com/" target="_blank" title="whatsapp"><i class="fa-brands fa-whatsapp"></i></a>
  </div>

</body>

</html>