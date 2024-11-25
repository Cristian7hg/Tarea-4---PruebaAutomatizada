<?php
include 'bd/conexion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cristian's Libreria</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon (1).ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Simple line icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand"><a href="#page-top">Libreria</a></li>
            <li class="sidebar-nav-item"><a href="#page-top">Inicio</a></li>
            <li class="sidebar-nav-item"><a href="#tiendas">Tiendas</a></li>
            <li class="sidebar-nav-item"><a href="#libros">Libros</a></li>
            <li class="sidebar-nav-item"><a href="#autores">Autores</a></li>
            <li class="sidebar-nav-item"><a href="#contact">Contacto</a></li>
            <li class="sidebar-nav-item"><a href="#footer">Redes</a></li>
        </ul>
    </nav>
    <!-- Inicio-->
    <header class="masthead d-flex align-items-center">
        <div class="container px-4 px-lg-5 text-center">
            <h1 class="mb-1">Libreria Proyecto Final</h1>
            <h3 class="mb-5"><em>Lo Que Necesites!</em></h3>
            <a class="btn btn-primary btn-xl" href="#tiendas">Buscar Más</a>
        </div>
    </header>
    <!-- Tiendas-->
    <section class="content-section bg-light" id="tiendas">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>Nuestras Tiendas Disponibles!</h2>
                    <p class="lead mb-5">
                        <?php
                        $libreria = new DBGestionLibreria();
                        $tiendas = $libreria->getTiendas();
                        //var_dump($tiendas);
                        foreach ($tiendas as $registro) {
                            //print_r($registro);
                            //print ('<p>'. $registro['nombre_tienda'].' </p>');
                            print('<p>' . $registro['nombre_tienda'] . '. Ubicación: ' . $registro['direcc_tienda'] . ' ' . $registro['cod_postal'] . ' ' . $registro['pais'] . ' </p>');
                        }

                        ?>


                        <!-- <a href="https://unsplash.com/">Unsplash</a>   -->

                    </p>
                    <a class="btn btn-dark btn-xl" href="#libros">Nuestros Libros</a>
                </div>
            </div>
        </div>
    </section>



    <!-- Libros-->
    <section class="content-section bg-primary text-white text-center" id="libros">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Libros</h3>
                <h2 class="mb-5">Nuestros Libros Disponibles</h2>
            </div>
        </div>

        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <p class="lead mb-5">
                        <?php
                        $libreria = new DBGestionLibreria();
                        $libros = $libreria->getLibros();
                        //var_dump($tiendas);
                        foreach ($libros as $registro) {
                            //print_r($registro);
                            //print ('<p>'. $registro['titulo'].' </p>');
                            print('<p>' . $registro['titulo'] . '</p>');
                        }

                        ?>


                        <!-- <a href="https://unsplash.com/">Unsplash</a>   -->

                    </p>
                    <a class="btn btn-dark btn-xl" href="#autores">Nuestros Autores</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Autores -->
     
    <section class="content-section bg-light" id="autores">
        <div class="container px-4 px-lg-5 text-center">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10">
                    <h2>Nuestros Autores!</h2>
                    <p class="lead mb-5">
                        <?php
                        $libreria = new DBGestionLibreria();
                        $tiendas = $libreria->getAutores();
                        //var_dump($tiendas);
                        foreach ($tiendas as $registro) {
                            //print_r($registro);
                            //print ('<p>'. $registro['nombre'].' </p>');
                            print('<p>' . $registro['nombre'] . ' ' . $registro['apellido'] . '</p>');
                        }

                        ?>


                        <!-- <a href="https://unsplash.com/">Unsplash</a>   -->

                    </p>
                    <a class="btn btn-dark btn-xl" href="#contact">Ponte En Contacto Con Nosotros!</a>
                </div>
            </div>
        </div>
    </section>


    <section class="content-section bg-primary text-white text-center" id="contact">
        <div class="container px-4 px-lg-5">
            <div class="content-section-heading">
                <h3 class="text-secondary mb-0">Servicios</h3>
                <h2 class="mb-5">Ponte En Contacto Con Nostros!</h2>
            </div>

            <div class="center">
                <a href="formulario.php" target="_blank">
                    <span class="service-icon rounded-circle mx-auto mb-3">
                        <i class="icon-mustache"></i>
                    </span>
                </a>
                <h4><strong>Preguntas</strong></h4>
                <p class="text-faded mb-0">Debo tener una pregunta (Click Icono de Arriba)...</p>
            </div>

    </section>

    <!-- Callout-->
    <section class="callout">
        <div class="container px-4 px-lg-5 text-center">
            <h2 class="mx-auto mb-5">
                Bienvenido a
                <em>nuestra</em>
                página.
            </h2>
            <!--  <a class="btn btn-primary btn-xl" href="https://startbootstrap.com/theme/stylish-portfolio/">Download Now!</a> -->
        </div>
    </section>


    <!-- Map-->
    <div class="map" id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3787.3807971768463!2d-69.67496049999999!3d18.455913399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf7ffa6fbb22ab%3A0x70dd696ef6cb822a!2sITLA!5e0!3m2!1sen!2sdo!4v1649367958913!5m2!1sen!2sdo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        <!--<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe> -->
        <br />
        <small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a></small>
    </div>
    <!-- Footer-->
    <footer class="footer text-center" id="footer">
        <div class="container px-4 px-lg-5">
            <ul class="list-inline mb-5">
                <li class="list-inline-item">
                    
                    <a class="social-link rounded-circle text-white mr-3" href="https://www.instagram.com/cristian7hg/" target="_blank"><i class="icon-social-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter" target="_blank"></i></a>
                </li>
                <li class="list-inline-item">
                    <a class="social-link rounded-circle text-black" href="https://github.com/Cristian7hg" target="_blank"><i class="icon-social-github"></i></a>
                </li>
            </ul>
            <p class="text-muted small mb-0">Copyright &copy; Cristian Heredia Website 2024</p>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>