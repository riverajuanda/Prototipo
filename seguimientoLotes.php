/**
 * Seguimiento de Lotes (Batch Tracking) Page
 * 
 * This PHP file renders a web page for tracking and managing production batches.
 * It includes a responsive table displaying batch details such as lot number, 
 * production date, current status, location, and estimated delivery date.
 * 
 * Features:
 * - View existing batch information
 * - Edit batch details via modal dialog
 * - Add new batches
 * 
 * Components:
 * - Responsive table with batch tracking information
 * - Modal form for editing/adding batch details
 * - Includes header, footer, and necessary script/style dependencies
 * 
 * @package BatchTracking
 * @version 1.0
 */
<!DOCTYPE html>
<html lang="en">

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
            <h6 class="m-0 font-weight-bold text-primary text-success">SEGUIMIENTO DE LOTES</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>NÚMERO DE LOTE</th>
                  <th>FECHA DE PRODUCCIÓN</th>
                  <th>ESTADO ACTUAL</th>
                  <th>UBICACIÓN ACTUAL</th>
                  <th>FECHA DE ENTREGA ESTIMADA</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>LOTE12345</td>
                  <td>2025-02-05</td>
                  <td>EN PROCESO</td>
                  <td>ALMACEN CENTRAL</td>
                  <td>2025-02-04</td>
                  <td>
                    <!-- Botón Editar -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Editar</button>

                  </td>
                </tr>
                <tr>
                  <td>LOTE12345</td>
                  <td>2025-02-05</td>
                  <td>EN PROCESO</td>
                  <td>ALMACEN CENTRAL</td>
                  <td>2025-02-04</td>
                  <td>
                    <!-- Botón Editar -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Editar</button>


                  </td>
                </tr>
                <tr>
                  <td>LOTE1234</td>
                  <td>2025-02-05</td>
                  <td>ENVIADO</td>
                  <td>ALMACEN CENTRAL</td>
                  <td>2025-02-04</td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Editar</button>

                  </td>
                </tr>
                <tr>
                  <td>LOTE12345</td>
                  <td>2025-02-05</td>
                  <td>EN PROCESO</td>
                  <td>ALMACEN CENTRAL</td>
                  <td>2025-02-04</td>
                  <td>
                    <!-- Botón Editar -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Editar</button>
                  </td>
                </tr>
                <tr>
                  <td>LOTE12345</td>
                  <td>2025-02-05</td>
                  <td>EN PROCESO</td>
                  <td>ALMACEN CENTRAL</td>
                  <td>2025-02-04</td>
                  <td>
                    <!-- Botón Editar -->
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">Editar</button>

                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                  <form id="addLotForm">
                    <div class="form-group">
                      <div class="modal-header">
                        <h5 class="modal-title text-success" id="exampleModalLabel">Editar o agregar lote</h5>
                      </div>
                      <label for="lotNumber">Número de Lote</label>
                      <input type="text" class="form-control" id="lotNumber" placeholder="Ingrese el número de lote" required>
                    </div>
                    <div class="form-group">
                      <label for="productionDate">Fecha de Producción</label>
                      <input type="date" class="form-control" id="productionDate" required>
                    </div>
                    <div class="form-group">
                      <label for="status">Estado Actual</label>
                      <select class="form-control" id="status">
                        <option>EN PROCESO</option>
                        <option>ENVIADO</option>
                        <option>FINALIZADO</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="location">Ubicación Actual</label>
                      <input type="text" class="form-control" id="location" placeholder="Ingrese la ubicación" required>
                    </div>
                    <div class="form-group">
                      <label for="estimatedDelivery">Fecha de Entrega Estimada</label>
                      <input type="date" class="form-control" id="estimatedDelivery" required>
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-success" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary btn-success" data-dismiss="modal">Guardar</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="margin-bottom: 20px;">Agregar</button>
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
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="assets/js/popper/popper.min.js"></script>
  <script src="assets/js/jquery/jquery-3.5.1.slim.min.js"></script>
</body>

</html>