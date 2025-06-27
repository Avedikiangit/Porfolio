
<?php 
  $pg = "inicio";
  ?>


<!DOCTYPE html>
<html lang="es" class="h-100 ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/fontawesome-free-6.7.2-web/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome-free-6.7.2-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js "></script>
</head>

<body id="index">
    <header class="container">
       <?php include_once("menu.php"); ?>
      </header>

    <main class="container">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete my-5">

                <a href="proyectos.php"> <img src="imagenes/cohete.svg" alt="cohete"></a>

            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <p class="my-5">
                    <span class="px-5 py-5"> Bienvenidos a mi sitio web sobre desarrolo de sistemas.</span>
                </p>
            </div>

            <div class="col-12 text-center pt-3 pb-5">

                <a href="proyectos.html" class="btn shadow my-5 ">Conoce mis proyectos</a>

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