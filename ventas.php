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
            <h6 class="m-0 font-weight-bold text-primary text-success">VENTAS</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
              <thead class="thead-light">
                <tr>
                  <th>RECETA</th>
                  <th>PORCIONES VENDIDAS</th>
                  <th>PRECIO PORCION</th>
                  <th>PRECIO TOTAL</th>
                  <th>ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Arroz con huevo</td>
                  <td>4</td>
                  <td>$ 7.000</td>
                  <td>$ 28.000</td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                      data-target="#exampleModalCenter">Editar</button>
                  </td>
                </tr>
                <tr>
                  <td>Espaguetis a la boloñesa</td>
                  <td>1</td>
                  <td>$ 10.000</td>
                  <td>$ 10.000</td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                      data-target="#exampleModalCenter">Editar</button>

                  </td>
                </tr>
                <tr>
                  <td>Ensalada de pollo</td>
                  <td>3</td>
                  <td>$ 5.000</td>
                  <td>$ 15.000</td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                      data-target="#exampleModalCenter">Editar</button>
                  </td>
                </tr>
                <tr>
                  <td>Mondongo</td>
                  <td>2</td>
                  <td>$ 7.000</td>
                  <td>$ 14.000</td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                      data-target="#exampleModalCenter">Editar</button>
                  </td>
                </tr>
                <!-- Otros registros aquí... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div>
      <div class="card-body mb-3">
        <button type="button" class="btn btn-success" data-toggle="modal"
          data-target="#exampleModalCenter">Añadir</button>
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title text-success" id="exampleModalLabel">Añadir o editar ventas</h5>
              </div>
              <div class="modal-body">
                <form id="addLotForm">
                  <div class="form-group">
                    <label for="recipeName">Receta</label>
                    <input type="text" class="form-control" id="materialName"
                      placeholder="Ingrese el nombre de la receta" required>
                  </div>
                  <div class="form-group">
                    <label for="materialQuantity">Porciones vendidas</label>
                    <input type="number" class="form-control" id="materialQuantity"
                      placeholder="Ingrese la cantidad de porciones" required>
                  </div>
                  <div class="form-group">
                    <label for="recipeName">Precio porción</label>
                    <input type="number" class="form-control" id="materialName"
                      placeholder="Ingrese el precio por porción" required>
                  </div>
                  <div class="form-group">
                    <label for="recipeName">Precio total</label>
                    <input type="number" class="form-control" id="materialName"
                      placeholder="Ingrese el precio total" required>
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