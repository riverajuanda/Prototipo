/**
 * Nueva Receta Page
 * 
 * This PHP file represents a web page for creating a new recipe in the system.
 * It provides a form with fields for:
 * - Recipe name input
 * - Recipe category selection
 * - Recipe status selection
 * - Recipe procedure input
 * - Recipe image upload
 * 
 * The page includes:
 * - Select2 dropdown functionality for enhanced form interactions
 * - Buttons to save or cancel recipe creation
 * - Redirects to 'buscarRecetas.php' after save/cancel actions
 * 
 * @package RecipeManagement
 * @subpackage RecipeCreation
 * @version 1.0
 */
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
                <h6 class="m-0 font-weight-bold text-success">Ingresar Nueva Receta</h6>
            </div>
            <div class="card-body">
                <p class="text-success">Acá podrás ingresar una nueva receta, editarla o cambiar su estado general</p>

                <!-- Selector Simple -->
                <div class="form-group">
                    <label for="select2Single">Ingrese el nombre de la receta</label>
                    <input type="text"
                        class="form-control search-input border-start-0"
                        placeholder="Ingrese el nombre de la receta"
                        aria-label="Buscar">
                </div>
                <br>
                <!-- Selector con Placeholder -->
                <div class="form-group">
                    <label for="select2SinglePlaceholder" placeholder="Selecciona una opción">Característica</label>
                    <select class="form-control select2-single-placeholder" id="select2SinglePlaceholder" >
                        <option></option>
                        <!-- Opciones reducidas para ejemplo -->
                        <option value="Proteína de res">Entrada</option>
                        <option value="Proteína de cerdo">Plato Fuerte</option>
                        <option value="Proteína de pollo">Postre</option>
                        <option value="Proteína de pollo">Bebida</option>
                        </option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="select2SinglePlaceholder">Estado</label>
                    <select class="form-control select2-single-placeholder" id="select2SinglePlaceholder">
                        <option></option>
                        <!-- Opciones reducidas para ejemplo -->
                        <option value="Desactualizado">Actualizar</option>
                        <option value="Desactualizado">Desactualizado</option>
                        <option value="Nuevo">Nuevo</option>
                        <option value="Desactualizado">Eliminar</option>
                        </option>
                    </select>
                </div>
                <br>
                <div class="form-group-lg">
                    <label for="select2Single">Ingresa el procedimiento de la receta</label>
                    <br>
                    <input type="text"
                        class="form-control search-input border-start-0"
                        placeholder="Ingrese el procedimiento de la receta"
                        aria-label="Buscar">
                        <div class="form-group">
                            <br>
                            <label for="select2Single">Ingresa la imagen de la receta</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                      </div>
                    </div></div>
                </div>
                <div class="d-flex justify-content-center mt-4 gap-6">
                    <button type="button" class="btn btn-outline-success btn-lg m-1" style="gap:20px;" onclick="window.location.href='buscarRecetas.php'">
                        Guardar Receta</button>
                    <div>
                        <button type="button" class="btn btn-outline-danger gap-6 btn-lg m-1" onclick="window.location.href='buscarRecetas.php'">
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