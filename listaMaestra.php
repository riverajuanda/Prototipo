/**
 * Lista Maestra de Ingredientes - Página de inventario de ingredientes
 * 
 * Esta página muestra una tabla detallada de los ingredientes disponibles en el inventario,
 * incluyendo información como nombre, unidad de medida, precio unitario, proveedor y stock actual.
 * 
 * Características:
 * - Tabla interactiva con DataTables
 * - Opciones de búsqueda y filtrado
 * - Responsive design
 * 
 * @package Inventario
 * @subpackage Ingredientes
 * @version 1.0
 */
<!DOCTYPE html>
<html lang="es">

<head>
    <?php include('config/head.php'); ?>
    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
</head>

<body class="index-page">
    <!-- header -->
    <?php include('config/header.php'); ?>

    <!-- Main -->
    <main class="main">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-success">Lista Maestra de Ingredientes</h6>

                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover" style="width:100%">
                        <thead class="thead-light">
                            <tr class="|text-center text-success">
                                <th>Ingrediente</th>
                                <th>Unidad</th>
                                <th>Precio Unitario (COP)</th>
                                <th>Proveedor</th>
                                <th>Stock Actual</th>
                            </tr>
                            </thead>
                        <tbody>
                            <tr>
                                <td>Harina de Trigo</td>
                                <td>kg</td>
                                <td>$2,500</td>
                                <td>Distribuciones Panaderas S.A.</td>
                                <td>50 kg</td>
                            </tr>                        
                            <tr>
                                <td>Harina de Trigo</td>
                                <td>kg</td>
                                <td>$2,500</td>
                                <td>Distribuciones Panaderas S.A.</td>
                                <td>50 kg</td>
                            </tr>
                            <tr>
                                <td>Azúcar Blanca</td>
                                <td>kg</td>
                                <td>$3,200</td>
                                <td>Dulces del Valle</td>
                                <td>75 kg</td>
                            </tr>
                            <tr>
                                <td>Sal Refinada</td>
                                <td>kg</td>
                                <td>$1,800</td>
                                <td>Salinas de Manaure</td>
                                <td>40 kg</td>
                            </tr>
                            <tr>
                                <td>Aceite Vegetal</td>
                                <td>L</td>
                                <td>$8,000</td>
                                <td>Aceites La Fina</td>
                                <td>30 L</td>
                            </tr>
                            <tr>
                                <td>Leche Entera</td>
                                <td>L</td>
                                <td>$3,500</td>
                                <td>Lácteos San Marcos</td>
                                <td>60 L</td>
                            </tr>
                            <tr>
                                <td>Huevos</td>
                                <td>unidad</td>
                                <td>$300</td>
                                <td>Granja Avícola Santa Rita</td>
                                <td>500 unidades</td>
                            </tr>
                            <tr>
                                <td>Mantequilla sin Sal</td>
                                <td>kg</td>
                                <td>$12,000</td>
                                <td>Lácteos El Campo</td>
                                <td>20 kg</td>
                            </tr>
                            <tr>
                                <td>Tomate Maduro</td>
                                <td>kg</td>
                                <td>$4,500</td>
                                <td>Verdulería Frescampo</td>
                                <td>35 kg</td>
                            </tr>
                            <tr>
                                <td>Cebolla Cabezona</td>
                                <td>kg</td>
                                <td>$2,800</td>
                                <td>Hortalizas Don Pedro</td>
                                <td>45 kg</td>
                            </tr>
                            <tr>
                                <td>Ajo</td>
                                <td>kg</td>
                                <td>$15,000</td>
                                <td>Especias La Abuela</td>
                                <td>10 kg</td>
                            </tr>
                            <tr>
                                <td>Pimienta Negra</td>
                                <td>g</td>
                                <td>$200</td>
                                <td>Especias del Mundo</td>
                                <td>5,000 g</td>
                            </tr>
                            <tr>
                                <td>Pollo Entero</td>
                                <td>kg</td>
                                <td>$10,000</td>
                                <td>Carnicería El Rancherito</td>
                                <td>80 kg</td>
                            </tr>
                            <tr>
                                <td>Carne Molida</td>
                                <td>kg</td>
                                <td>$18,000</td>
                                <td>Carnes Premium</td>
                                <td>25 kg</td>
                            </tr>
                            <tr>
                                <td>Arroz Blanco</td>
                                <td>kg</td>
                                <td>$4,000</td>
                                <td>Arrocera La Esmeralda</td>
                                <td>100 kg</td>
                            </tr>
                            <tr>
                                <td>Pasta Spaghetti</td>
                                <td>kg</td>
                                <td>$6,500</td>
                                <td>Pastas La Italiana</td>
                                <td>40 kg</td>
                            </tr>
                            <tr>
                                <td>Queso Mozzarella</td>
                                <td>kg</td>
                                <td>$25,000</td>
                                <td>Quesos Selectos</td>
                                <td>15 kg</td>
                            </tr>
                            <tr>
                                <td>Vino Tinto</td>
                                <td>mL</td>
                                <td>$150</td>
                                <td>Licores Finos</td>
                                <td>200,000 mL</td>
                            </tr>
                            <tr>
                                <td>Crema de Leche</td>
                                <td>L</td>
                                <td>$7,500</td>
                                <td>Lácteos La Vaquita</td>
                                <td>25 L</td>
                            </tr>
                            <tr>
                                <td>Chocolate en Polvo</td>
                                <td>kg</td>
                                <td>$9,800</td>
                                <td>Dulces y Más</td>
                                <td>30 kg</td>
                            </tr>
                            <tr>
                                <td>Canela en Rama</td>
                                <td>g</td>
                                <td>$500</td>
                                <td>Especias Exóticas</td>
                                <td>2,000 g</td>
                            </tr>
                            <tr>
                                <td>Levadura Fresca</td>
                                <td>kg</td>
                                <td>$20,000</td>
                                <td>Panadería La Tradición</td>
                                <td>5 kg</td>
                            </tr>
                            <tr>
                                <td>Azúcar Morena</td>
                                <td>kg</td>
                                <td>$3,800</td>
                                <td>Dulces del Valle</td>
                                <td>50 kg</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <?php include('config/footer.php'); ?>

    <!-- Scripts necesarios -->
<script src="assets/tables/jquery-3.6.0.min.js"></script>
<script src="assets/tables/jquery.dataTables.min.js"></script>
<script src="assets/tables/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            var table = $('#dataTableHover').DataTable({
                "lengthMenu": [
                    [5, 10, 20, -1],
                    [5, 10, 20, "Todos"]
                ],
                "language": {
                    "search": "Buscar:",
                    "lengthMenu": "Mostrar _MENU_ registros",
                    "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    "paginate": {
                        "previous": "Anterior",
                        "next": "Siguiente"
                    }
                },
                initComplete: function() {
                    // Filtrado por columnas
                    this.api().columns().every(function() {
                        var column = this;
                        var header = $(column.header());

                        header.find('input').on('keyup change clear', function() {
                            if (column.search() !== this.value) {
                                column.search(this.value).draw();
                            }
                        });
                    });
                }
            });

            // Búsqueda general
            $('#generalSearch').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
</body>

</html>