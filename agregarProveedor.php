<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('config/head.php'); ?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
</head>

<body class="index-page">
    <!-- header -->
    <?php include('config/header.php'); ?>


    <!-- Main -->
    <main>
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-success">Ingresar Nuevo Proveedor</h6>
            </div>
            <div class="card-body">
                <!-- Selector Simple -->
                <div class="form-group">
                    <label for="select2Single">Ingrese el nombre del proveedor</label>
                    <br>
                    <input type="text"
                        class="form-control search-input border-start-0"
                        placeholder="Ingrese el nombre del proveedor"
                        aria-label="Buscar">
                </div>

                <!-- Selector con Placeholder -->
                <div class="form-group">
                    <label for="select2SinglePlaceholder">Característica</label>
                    <select class="form-control select2-single-placeholder" id="select2SinglePlaceholder">
                        <option></option>
                        <!-- Opciones reducidas para ejemplo -->
                        <option value="Proteína de res">Carne de Res</option>
                        <option value="Proteína de cerdo">Carne de Cerdo</option>
                        <option value="Proteína de pollo">Pollo</option>
                        </option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="select2SinglePlaceholder">Estado</label>
                    <select class="form-control select2-single-placeholder" id="select2SinglePlaceholder">
                        <option></option>
                        <!-- Opciones reducidas para ejemplo -->
                        <option value="Activo">Activo</option>
                        <option value="Desactualizado">Desactualizado</option>
                        <option value="Nuevo">Nuevo</option>
                        </option>
                    </select>
                </div>
                <div class="d-flex justify-content-center mt-4 gap-6">
                    <button type="button" class="btn btn-outline-success btn-lg m-1" style="gap:20px; " onclick="window.location.href='listaProveedores.php'">
                        Guardar Proveedor</button>
                    <div>
                        <button type="button" class="btn btn-outline-danger gap-6 btn-lg m-1" onclick="window.location.href='listaProveedores.php'">
                            Cancelar</button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {
                // Inicialización para selector simple
                $('.select2-single').select2({
                    placeholder: 'Seleccione una opción',
                    allowClear: true
                });

                // Inicialización para selector con placeholder específico
                $('.select2-single-placeholder').select2({
                    placeholder: 'Seleccione un estado',
                    allowClear: true
                });

                // Inicialización para selector múltiple
                $('.select2-multiple').select2({
                    placeholder: 'Seleccione múltiples opciones',
                    allowClear: true
                });
            });
        </script>
    </main>

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
</body>

</html>