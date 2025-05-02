<!--/**
 * costosMateriaPrima.php
 *
 * This script generates a web page that displays a table of raw material costs
 * and a dynamic chart showing cost seasonality. It includes the following features:
 *
 * 1. **HTML Structure**:
 *    - Declares the HTML5 document type and sets the language to Spanish.
 *    - Includes external resources such as Chart.js and DataTables for enhanced functionality.
 *
 * 2. **Header and Footer**:
 *    - Includes reusable header and footer components from external PHP files.
 *
 * 3. **Main Content**:
 *    - Displays a table of raw material costs with columns for ingredient, unit, average price, supplier, and annual variation.
 *    - Provides a chart for visualizing the seasonal cost trends of selected ingredients.
 *
 * 4. **JavaScript Functionality**:
 *    - Initializes a DataTable for the raw material cost table with Spanish localization.
 *    - Configures a Chart.js line chart to display cost trends for selected ingredients.
 *    - Implements interactivity between the table and the chart, allowing users to click on a table row to update the chart with the corresponding ingredient's data.
 *
 * 5. **Data Sources**:
 *    - Hardcoded data for ingredients, including their labels, colors, and monthly cost trends.
 *
 * 6. **Styling and Responsiveness**:
 *    - Uses Bootstrap for responsive design and styling.
 *    - Ensures the chart is responsive and maintains its aspect ratio.
 *
 * 7. **Dependencies**:
 *    - jQuery and DataTables for table functionality.
 *    - Chart.js for rendering the line chart.
 *
 * This script is designed to provide an interactive and user-friendly interface for analyzing raw material costs and their seasonal variations.
 */
/**
 * Declares the HTML5 document type for the current HTML document.
 * This declaration helps browsers render the page in standards mode and ensures proper document interpretation.
 */-->
<!DOCTYPE html>
<html lang="es">

<head>
  <?php include('config/head.php'); ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- DataTables CSS -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
</head>

<body class="index-page">
  <!-- header -->
  <?php include('config/header.php'); ?>

  <!-- Main -->
  <main class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-success">Tabla de Costos de Materias Primas</h6>
            </div>
            <div class="table-responsive p-3">
              <table class="table align-items-center table-flush table-hover" id="costTable" style="width:100%">
                <thead class="thead-light">
                  <tr>
                    <th>Ingrediente</th>
                    <th>Unidad</th>
                    <th>Precio Promedio</th>
                    <th>Proveedor</th>
                    <th>Variación Anual</th>
                  </tr>
                </thead>
                <tbody>
                  <tr data-ingrediente="res">
                    <td>Carne de Res</td>
                    <td>kg</td>
                    <td>$18,500</td>
                    <td>Carnes Premium S.A.</td>
                    <td>+15%</td>
                  </tr>
                  <tr data-ingrediente="cerdo">
                    <td>Carne de Cerdo</td>
                    <td>kg</td>
                    <td>$12,300</td>
                    <td>Porcicarnes Ltda</td>
                    <td>+22%</td>
                  </tr>
                  <tr data-ingrediente="arroz">
                    <td>Arroz</td>
                    <td>kg</td>
                    <td>$4,150</td>
                    <td>Arrocera del Valle</td>
                    <td>+8%</td>
                  </tr>
                  <tr data-ingrediente="sal">
                    <td>Sal</td>
                    <td>kg</td>
                    <td>$1,850</td>
                    <td>Salinas de Manaure</td>
                    <td>+5%</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Estacionalidad de Costos</h6>
            </div>
            <div class="card-body">
              <canvas id="costChart" style="height: 400px; width: 100%"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Scripts -->
  <script src="assets/tables/jquery-3.6.0.min.js"></script>
  <script src="assets/tables/jquery.dataTables.min.js"></script>
  <script src="assets/tables/dataTables.bootstrap4.min.js"></script>
  <script src="assets/tables/chart.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Inicializar DataTable
      $('#costTable').DataTable({
        "language": {
          "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json"
        }
      });

      // Configuración del gráfico
      const ctx = document.getElementById('costChart').getContext('2d');
      const productData = {
        res: {
          label: "Carne de Res",
          color: "rgba(78, 115, 223, 1)",
          data: [0, 9000, 5500, 12000, 11500, 25000, 15300, 25000, 20000, 30000, 25000, 40000]
        },
        cerdo: {
          label: "Carne de Cerdo",
          color: "rgb(252, 5, 5)",
          data: [0, 10000, 5000, 15000, 10000, 20000, 15000, 25000, 20000, 30000, 25000, 40000]
        },
        arroz: {
          label: "Arroz",
          color: "rgb(34, 139, 34)",
          data: [500, 520, 510, 530, 540, 550, 560, 570, 580, 590, 600, 610]
        },
        sal: {
          label: "Sal",
          color: "rgb(128, 128, 128)",
          data: [200, 210, 205, 215, 220, 225, 230, 235, 240, 245, 250, 255]
        }
      };

      const chart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun",
            "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"
          ],
          datasets: [{
            label: 'Seleccione un ingrediente',
            data: [],
            borderColor: '#cccccc',
            backgroundColor: 'rgba(0, 0, 0, 0.05)',
            tension: 0.4
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            x: {
              grid: {
                display: false
              }
            },
            y: {
              ticks: {
                callback: function(value) {
                  return '$' + value.toLocaleString();
                }
              }
            }
          }
        }
      });

      // Interactividad entre tabla y gráfico
      $('#costTable tbody').on('click', 'tr', function() {
        const ingrediente = $(this).data('ingrediente');
        const selectedData = productData[ingrediente];

        chart.data.datasets[0] = {
          label: selectedData.label,
          data: selectedData.data,
          borderColor: selectedData.color,
          backgroundColor: 'rgba(0, 0, 0, 0.05)',
          tension: 0.4,
          pointRadius: 4,
          pointBackgroundColor: selectedData.color
        };

        chart.update();
      });
    });
  </script>


  <?php include('config/footer.php'); ?>

  <!-- Resto del código -->
</body>

</html>