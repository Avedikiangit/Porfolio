
<?php 
  $pg = "proyectos";
  ?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>proyectos</title>
  <link rel="stylesheet" href="css/fontawesome-free-6.7.2-web/css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome-free-6.7.2-web/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  <script src="css/bootstrap/js/bootstrap.bundle.min.js "></script>
</head>

<body id="proyectos" class="d-flex flex-column h-100">
  <header class="container">
      <?php include_once("menu.php"); ?>
  </header>
  <main class="container">
    <div class="row">
      <div class="col-12">
        <h1>Proyectos</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <P>Estos son algunos de mis proyectos :</P>
      </div>
    </div>

    <div class="row">
      <div class="ol-12 col-sm-4 p-4">
        <div class="row border proyecto">
          <div class="col-12 p-0">
            <img src="imagenes/abmclientes.png" alt="ABM CLIENTES" class="img-fluid">
            <h2>ABM CLIENTES</h2>
            <p class="py-2 px-3">Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
              Bootstrap y Json</p>
          </div>


          <div class="col-6 mb-5">
            <a href="#" class="btn-rojo">Ver online</a>
          </div>
          <div class="col-6 mb-5 text-center">
            <a href="#" class="link-rojo">Codigo fuente</a>
          </div>
        </div>
      </div>

      <div class="ol-12 col-sm-4 p-4">
        <div class="row border proyecto">
          <div class=" col-12 p-0">
            <img src="imagenes/abmventas.png" alt="ABM ventas" class="img-fluid">
            <h2>SISTEMA DE GESTION DE VENTAS</h2>
            <p class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
              Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.</p>
          </div>


          <div class="col-6 mb-5">
            <a href="#" class="btn-rojo">Ver online</a>
          </div>
          <div class="col-6 mb-5 text-center">
            <a href="#" class="link-rojo">Codigo fuente</a>
          </div>
        </div>
      </div>

      <div class=" col-12 col-sm-4 p-4">
        <div class="row border proyecto">
          <div class="col-12 p-0 ">
            <img src="imagenes/proyecto-integrador.png" alt="proyecto-integrador" class="img-fluid">
            <h2>PROYECTO INTEGRADOR</h2>
            <p class="py-2 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
              Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines.</p>
          </div>


          <div class="col-6 mb-5">
            <a href="#" class="btn-rojo">Ver online</a>
          </div>
          <div class="col-6 mb-5 text-center">
            <a href="#" class="link-rojo">Codigo fuente</a>
          </div>
        </div>
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
          <i class="fa-brands fa-linkedin"></i>

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