<!--
* Buscar Recetas Page
*
* This PHP file renders the recipe search page for the culinary website.
* It includes a search input, recipe search button, and displays recent recipe cards
* with detailed preparation instructions for dishes like Arroz con Huevo, Ajiaco,
* and Espaguetis a la Boloñesa.
*
* @package RecipeWebsite
* @subpackage Pages
* @version 1.0
*/-->
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('config/head.php'); ?>
</head>

<body class="index-page">
    <!-- header -->
    <header id="header" class="header d-flex align-items-center fixed-top>
  <?php include('config/header.php'); ?>
  </header>
  <!-- Bootstrap Icons -->
  <link rel=" stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <style>
            .search-container {
                max-width: 580px;
                width: 100%;
                margin: 20px auto;
                margin-bottom: 70px;
                margin-top: 100px;
                padding: 20px;
                color: #333;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 1px 6px rgba(69, 148, 50, 0.28);

            }

            .search-input {
                border-radius: 24px;
                padding: 12px 20px;
                transition: all 0.3s ease;
                box-shadow: 0 1px 6px rgba(32, 33, 36, .28);
                border: 1px solid rgba(223, 225, 229, 0);
                background-color: #f8f9fa;
            }

            .search-input:focus {
                box-shadow: 0 1px 6px rgba(32, 33, 36, .28);
                border-color: rgba(223, 225, 229, 0);

            }

            #featured-services {
                margin-top: -100px;
            }
        </style>

        <!-- Main -->
        <main>
            <section style="background-image: url(admin/img/FONDO.png);">
                <div class="container min-vh- d-flex justify-content-center align-items-center">
                    <div class="search-container row-gy-4">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="bi bi-search text-success"></i>
                            </span>
                            <input type="text" class="form-control search-input border-start-0"
                                placeholder="Buscar Receta" aria-label="Buscar">
                        </div>

                        <div class="d-flex justify-content-center mt-4 gap-6">
                            <button type="button" class="btn btn-outline-success btn-lg"
                                onclick="window.location.href='nuevaReceta.php'">
                                Buscar Receta
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Section Title -->
                <div class="container section-title aos-init aos-animate" data-aos="fade-up">
                    <h2>RECETAS</h2>
                    <br>
                    <br>
                    <p>Acá podrás ver las últimas recetas buscadas</p>
                </div><!-- End Section Title -->

                <!-- Section -->
                <section id="featured-services" class="featured-services section" style="background-image: url(admin/img/FONDO.png);">

                    <div class="container">
                        <div class="row gy-4">
                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                                <div class="card">
                                    <img src="admin/img/arroz_con_huevo.jpg" alt="" class="img-fluid">
                                    <div class="card-body">
                                        <h3><a href="#" class="stretched-link text-success">Arroz con Huevo</a></h3>
                                        <div class="card-content">
                                            <p>Preparación</p>
                                            <ol>
                                                <li>Paso 1: Rompe 3 huevos en un pequeño tazón y bátelos. Bate el último
                                                    huevo en un tazón separado. </li>
                                                <li>Paso 2: Calienta una sartén grande o un wok con media cucharada de
                                                    aceite a fuego medio-alto. Una vez que la sartén esté caliente,
                                                    añade los 3 huevos batidos y revuélvelos durante un minuto. Pasa los
                                                    huevos a un plato y apaga el fuego. Limpia la sartén o el wok con
                                                    una toalla desechable de cocina.</li>
                                                <li>Paso 3: Rocía las 1 1/2 cucharadas restantes de aceite en el sartén
                                                    o el wok a fuego medio-alto. Añade las cebollas y cocínalas durante
                                                    unos 2 minutos, revolviendo constantemente. Incorpora las verduras
                                                    mezcladas, las cebolletas y cocínalas durante otro minuto. Si te
                                                    gusta guardar algunas de las cebolletas (la parte verde oscuro)
                                                    úsalas para adornar.</li>
                                                <li>Paso 4: Añade el arroz blanco cocido en la sartén o en el wok y
                                                    cocínalo durante unos minutos, hasta que el arroz esté bien
                                                    caliente. Si quedan grandes grupos de arroz, rómpelos con la parte
                                                    posterior de la espátula. Vierte el huevo batido sobre el arroz y
                                                    revuelve para cubrir el arroz con el huevo. Cocina durante un minuto
                                                    más.</li>
                                                <p>Añade la salsa de soya y revuelve para distribuir las salsas.</p>
                                                <li>Paso 5: Añade la salsa de soya y revuelve para distribuir las
                                                    salsas. Añade los 3 huevos revueltos y revuelve para mezclar de
                                                    nuevo. ¡Nuestro arroz con huevo con su toque oriental está listo
                                                    para servir! Adórnalo, si quieres, y acompaña siempre con tus
                                                    galletas Saltín Noel preferidas. Será un plato completo para
                                                    resolver de manera práctica en cualquier ocasión.</li>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card Item -->

                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                                <div class="card">
                                    <img src="admin/img/ajiaco.jpg" alt="" class="img-fluid">
                                    <div class="card-body">
                                        <h3><a href="#" class="stretched-link text-success">Ajiaco</a></h3>
                                        <div class="card-content">
                                            <p>Preparación</p>
                                            <ol>
                                                <li>Paso 1: En una olla, añade 1 cucharada de aceite y 1 diente de ajo.
                                                    Cocina hasta que el ajo se dore.</li>
                                                <li>Paso 2: Añade 1 pizca de sal y 1 cucharada de pimentón dulce. Cocina
                                                    durante unos 30 segundos, hasta que el pimentón se dore.</li>
                                                <li>Paso 3: Añade 1 cucharada de agua y 1 cucharada de sazón de ajiaco.
                                                    Cocina hasta que la sazón se dissolve.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card Item -->

                            <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                                <div class="card">
                                    <img src="admin/img/espaguetis_a_la_boloñesa.jpg" alt="" class="img-fluid">
                                    <div class="card-body">
                                        <h3><a href="#" class="stretched-link text-success">Espaguetis a la boloñesa</a></h3>
                                        <div class="card-content">
                                            <p>Preparación </p>
                                            <ol>
                                                <li>Paso 1: En una olla grande, añade 1 cucharada de aceite y 1 diente
                                                    de ajo. Cocina hasta que el ajo se dore.</li>
                                                <li>Paso 2: Añade 1 pizca de sal y 1 cucharada de pimentón dulce. Cocina
                                                    durante unos 30 segundos, hasta que el pimentón se dore.</li>
                                                <li>Paso 3: Añade 1 cucharada de agua y 1 cucharada de sazón de ajiaco.
                                                    Cocina hasta que la sazón se dissolve.</li>
                                                <li>Paso 4: Añade 1 taza de pollo cocido y desmenuzado. Cocina durante
                                                    unos minutos, hasta que el pollo esté caliente.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Card Item -->


                        </div>

                    </div>

                </section>
            </section>
        </main>
        <!-- Bootstrap 5 JS Bundle -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- footer -->
        <?php include('config/footer.php'); ?>

        <!-- Scroll Top -->
        <?php include('config/Scrolltop.php'); ?>

        <!-- Preloader -->
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <?php include('config/script.php'); ?>

        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>


</body>

</html>