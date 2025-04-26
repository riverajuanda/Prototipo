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
            <h6 class="m-0 font-weight-bold text-primary text-success">STOCK DISPONIBLE</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <div id="dataTable_filter" class="dataTables_filter"><label>Buscar alimento:<input type="search"
                    class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
              <thead class="thead-light">
                <tr>
                  <th>ALIMENTO</th>
                  <th>CANTIDAD</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Harina</td>
                  <td>76</td>
                </tr>
                <tr>
                  <td>Levadura</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>Azúcar</td>
                  <td>72</td>
                </tr>
                <tr>
                  <td>Leche</td>
                  <td>80</td>
                </tr>
                <tr>
                  <td>Mermelada</td>
                  <td>57</td>
                </tr>
                <tr>
                  <td>Huevo</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>Pollo</td>
                  <td>37</td>
                </tr>
                <tr>
                  <td>Carne de Cerdo</td>
                  <td>40</td>
                </tr>
                <tr>
                  <td>Yuca</td>
                  <td>18</td>
                </tr>
              </tbody>
            </table>
            <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
              <ul class="pagination">
                <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#"
                    aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link text-success">Anterior</a>
                </li>
                <li class="paginate_button page-item active "><a href="#" aria-controls="dataTable" data-dt-idx="1"
                    tabindex="0" class="page-link bg-success">1</a></li>
                <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable"
                    data-dt-idx="7" tabindex="0" class="page-link text-success">Siguiente</a></li>
              </ul>
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

  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
    integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
    data-cf-beacon='{"rayId":"92362635cd60a67b","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"68c5ca450bae485a842ff76066d69420"}'
    crossorigin="anonymous"></script>
</body>

</html>