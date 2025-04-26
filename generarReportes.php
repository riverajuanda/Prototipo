<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('config/head.php'); ?>
</head>

<body class="index-page">
    <?php include('config/header.php'); ?>

    <!-- Main -->
    <div class="container-fluid align-items-center justify-content-center" id="container-wrapper">
        <div class="row">
            <div class="col-lg-12 " style="margin-top: 100px; margin-bottom: 90px;">
                <div class="card mb-5">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary text-success">GENERAR REPORTES</h6>
                    </div>
                    <div class="card-body">
                        <!-- Calendario y selector de fechas -->
                        <div class="form-group">
                            <label for="datePicker">Seleccione fecha</label>
                            <input type="date" class="form-control" id="datePicker">
                        </div>
                        <br>
                        <div>
                            <button type="button" class="btn btn-primary btn-success" onclick="alert('REPORTE GENERADO')">
                                Generar Reporte
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Asegúrate de incluir las bibliotecas de Bootstrap y jQuery (si es necesario para otros efectos) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>