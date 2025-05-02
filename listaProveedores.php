<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('config/head.php'); ?>
</head>

<!--/**
 * Renders the Providers List page with a table of providers
 * 
 * This page displays a list of providers with their details including:
 * - Provider Code
 * - Provider Name
 * - Characteristic
/**
 * This script is responsible for managing the list of suppliers (Proveedores).
 * 
 * Features:
 * - Displays a list of suppliers.
 * - Includes supplier status information.
 * 
 */
 * - Status
 * - Edit Action
 * 
 * Includes a logout modal and integrates with the site's standard layout
 * by including header, footer, and script configurations
 */-->
<body class="index-page">
  <!-- header -->
  <?php include('config/header.php'); ?>


  <!-- Main -->
  <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Lista de Proveedores</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>              
              <li class="breadcrumb-item active" aria-current="page">Tabla de Proveedores</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-success">Lista de Proveedores</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Código de Proveedor</th>
                        <th>Nombre de Proveedor</th>
                        <th>Característica</th>
                        <th>Estado</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="text-success" href="#">RA0449</a></td>
                        <td>Frigocentro</td>
                        <td>Carne de res y cerdo</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="agregarProveedor.php" class="btn btn-sm btn-success">Editar</a></td>
                      </tr>
                      <tr>
                        <td><a class="text-success" href="#">RA5324</a></td>
                        <td>Super Pollo</td>
                        <td>Pollo</td>
                        <td><span class="badge badge-warning">Shipping</span></td>
                        <td><a href="agregarProveedor.php" class="btn btn-sm btn-success">Editar</a></td>
                      </tr>
                      <tr>
                        <td><a class="text-success" href="#">RA8568</a></td>
                        <td>Supermercado Mercaldas</td>
                        <td>Granos y Abarrotes</td>
                        <td><span class="badge badge-danger">Pending</span></td>
                        <td><a href="agregarProveedor.php" class="btn btn-sm btn-success">Editar</a></td>
                      </tr>
                      <tr>
                        <td><a class="text-success" href="#">RA1453</a></td>
                        <td>Tienda el Madrigal</td>
                        <td>Abarrotes</td>
                        <td><span class="badge badge-info">Processing</span></td>
                        <td><a href="agregarProveedor.php" class="btn btn-sm btn-success">Editar</a></td>
                      </tr>
                      <tr>
                        <td><a class="text-success" href="#">RA1998</a></td>
                        <td>Salsamentaria del centro</td>
                        <td>Salsas</td>
                        <td><span class="badge badge-success">Delivered</span></td>
                        <td><a href="agregarProveedor.php" class="btn btn-sm btn-success">Editar</a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
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
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"92362635cd60a67b","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"68c5ca450bae485a842ff76066d69420"}'
    crossorigin="anonymous"></script>
</body>

</html>