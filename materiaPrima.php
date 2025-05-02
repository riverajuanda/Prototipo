<!DOCTYPE html>
<html lang="en">

<!--
 * Includes the head configuration file for the materiaPrima.php page.
 * This typically includes meta tags, CSS links, and other HTML head elements.
 * 
 * @file config/head.php Contains the HTML head configuration
 */-->
<head>
  <?php include('config/head.php'); ?>
</head>

<body class="index-page">
  <!-- header -->
  <?php include('config/header.php'); ?>

  <!-- Main -->
  <div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary text-success">ULTIMOS AGREGADOS</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>MATERIA PRIMA</th>
                  <th>CANTIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Harina</td>
                  <td>19</td>
                </tr>
                <tr>
                  <td>Levadura</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>Azúcar</td>
                  <td>27</td>
                </tr>
              </tbody>
            </table>
            <div>
              <div class="card-body">
                <button type="button" class="btn btn-success" data-toggle="modal"
                  data-target="#exampleModalCenter">Añadir materia prima</button>

                </button>
                <button type="button" class="btn btn-primary btn-success" onclick="window.location.href='stock.php'">
                  ir a stock
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title text-success" id="exampleModalLabel">Añadir materia prima</h5>
                    </div>
                    <div class="modal-body">
                      <form id="addLotForm">
                        <div class="form-group">
                          <label for="materialName">Nombre de la materia prima</label>
                          <input type="text" class="form-control" id="materialName"
                            placeholder="Ingrese el nombre de la materia prima" required>
                        </div>
                        <div class="form-group">
                          <label for="materialQuantity">Cantidad</label>
                          <input type="number" class="form-control" id="materialQuantity"
                            placeholder="Ingrese la cantidad" required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary btn-success"
                            data-dismiss="modal">Cerrar</button>
                          <button type="button" class="btn btn-primary btn-success"
                            data-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                  </div>
                </div>
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

    <!-- Asegúrate de incluir estas bibliotecas de Bootstrap -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/popper/popper.min.js"></script>
    <script src="assets/js/jquery/jquery-3.5.1.slim.min.js"></script>
</body>

</html>