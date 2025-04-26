<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.php" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">Software Alimentos y Bebidas</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li class="dropdown"><a href="./buscarRecetas.php"><span>Recetas</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="buscarRecetas.php">Buscar recetas</a></li>
                        <li><a href="nuevaReceta.php">Ingresar nueva receta</a></li>
                    </ul>
                <li class="dropdown"><a href="#"><span>Proovedores</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="./listaProveedores.php">Lista de proveedores</a></li>
                        <li><a href="./consultaProveedor.php">Consultar proveedores</a></li>

                    </ul>
                <li class="dropdown"><a href="#"><span>Análisis financiero</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="./listaMaestra.php">Lista maestra</a></li>
                        <li><a href="./costosMateriaPrima.php">Costos de materia prima</a></li>
                        <li><a href="./estacionalidadDeCostos.php">Estacionalidad de costos</a></li>
                        <li><a href="./ventas.php">Ventas</a></li>
                        <li><a href="./generarReportes.php">Generar reportes</a></li>
                    </ul>
                <li class="dropdown"><a href="#"><span>Inventarios</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="./seguimientoLotes.php">Seguimiento de lotes</a></li>
                        <li><a href="./stock.php">Stock</a></li>
                        <li><a href="./materiaPrima.php">Materia prima</a></li>
                    </ul>

                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                <li>
                    <a class="btn btn-success btn-ls m-1 p-1" href="login.php">Inicio de sesion</a>
                </li>
        </nav>


    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">