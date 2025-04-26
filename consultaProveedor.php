/**
* Consulta Proveedor Page
*
* This PHP file renders a search page for finding providers/suppliers.
* It includes a search input field with a search icon and a button
* to navigate to the full list of providers.
*
* Key features:
* - Responsive design using Bootstrap 5
* - Styled search container with custom CSS
* - Includes standard page components like header, footer, and preloader
*
* @package ProviderManagement
* @subpackage SearchInterface
*/
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('config/head.php'); ?>
</head>

<body class="index-page" style="background-image: url(admin/img/FONDO.png);">
    <!-- header -->
    <?php include('config/header.php'); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .search-container {
            max-width: 580px;
            width: 100%;
            margin: 0 auto;
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
    </style>

    <!-- Main -->
    <div class="container min-vh-100 d-flex justify-content-center align-items-center" style="background-image: url(admin/img/FONDO.png);">
        <div class="search-container">
            <div class="input-group">
                <span class="input-group-text bg-transparent border-end-0">
                    <i class="bi bi-search text-success"></i>
                </span>
                <input type="text"
                    class="form-control search-input border-start-0"
                    placeholder="Buscar Proveedor por nombre o código"
                    aria-label="Buscar">
            </div>

            <div class="d-flex justify-content-center mt-4 gap-6">
                <button type="button" class="btn btn-outline-success btn-lg" onclick="window.location.href='listaProveedores.php'">
                    Buscar Proveedor
                </button>

            </div>
        </div>
    </div>


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

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"92362635cd60a67b","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"68c5ca450bae485a842ff76066d69420"}'
        crossorigin="anonymous"></script>
</body>

</html>