/**
* Estacionalidad de Costos Page
*
* This page displays a dynamic line chart showing the cost variations of different ingredients
* over the course of a year. Users can select different ingredients (Carne de Res, Carne de Cerdo,
* Arroz, Sal) to view their respective cost trends from January to December.
*
* Features:
* - Interactive dropdown to select ingredient
* - Chart dynamically updates based on selected ingredient
* - Displays monthly cost data with color-coded lines
*
* @uses Chart.js for rendering the line graph
* @uses select2 for enhanced dropdown functionality
*/

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('config/head.php'); ?>
  <script src="assets/js/main2.js"></script>
</head>
<body class="index-page">
  <!-- header -->
  <?php include('config/header.php'); ?>

  <!-- Main -->
  <main class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-success">Estacionalidad de Costos</h6>
              <div class="form-group">
                <label>Costos por Ingrediente</label>
                <br>
                <select class="form-control select2-single-placeholder" id="productSelector">
                  <option value="res">Carne de Res</option>
                  <option value="cerdo">Carne de Cerdo</option>
                  <option value="arroz">Arroz</option>
                  <option value="sal">Sal</option>
                </select>
              </div>
            </div>
            <div class="card-body">
              <div class="chart-area">
                <canvas id="costChart" style="height: 320px; width: 100%"></canvas>
              </div>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Script modificado -->
  <?php include('config/script.php'); ?>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const ctx = document.getElementById('costChart');
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
          labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
          ],
          datasets: [{
            label: productData.res.label,
            data: productData.res.data,
            borderColor: productData.res.color,
            backgroundColor: 'rgba(0, 0, 0, 0.05)',
            tension: 0.4,
            pointRadius: 4,
            pointBackgroundColor: productData.res.color
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

      document.getElementById('productSelector').addEventListener('change', function(e) {
        const selectedProduct = e.target.value;
        chart.data.datasets[0] = {
          label: productData[selectedProduct].label,
          data: productData[selectedProduct].data,
          borderColor: productData[selectedProduct].color,
          backgroundColor: 'rgba(0, 0, 0, 0.05)',
          tension: 0.4,
          pointRadius: 4,
          pointBackgroundColor: productData[selectedProduct].color
        };
        chart.update();
      });
    });
  </script>

  <?php include('config/footer.php'); ?>
  <!-- Resto del código -->
</body>

</html>