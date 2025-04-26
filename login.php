<!DOCTYPE html>
/**
 * Login page for the web application
 * 
 * This page provides a user interface for authentication, including:
 * - Email and password input fields
 * - "Remember me" checkbox
 * - Login button
 * - Password recovery modal
 * - Registration link
 * 
 * The page uses Bootstrap for styling and includes responsive design
 * for various screen sizes.
 */
<html lang="es">

<head>
  <?php include('config/head.php'); ?>
</head>

<body class="md-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-10 col-md-8">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center py-4">
                    <h1 class="h4 text-success mb-3">Login</h1>
                  </div>
                  <form class="user px-4">
                    <div class="form-group mb-3">
                      <input type="email" class="form-control" id="exampleInputEmail" 
                             aria-describedby="emailHelp" placeholder="Ingrese correo electronico">
                    </div>
                    <div class="form-group mb-3">
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Contraseña">
                    </div>
                    <div class="form-group mb-3">
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                      </div>
                    </div>
                    <div class="form-group mb-4 text-center">
                      <a href="index.php" class="btn btn-success px-4 py-2" style="min-width: 150px;">Login</a>
                    </div>
                    <hr class="my-3">
                  </form>
                  <div class="text-center pb-4">
                    <div class="d-flex justify-content-center">
                      <a href="register.php" class="btn btn-success mx-2 px-3">
                        Crea una cuenta
                      </a>
                      <button type="button" class="btn btn-success mx-2 px-3" data-toggle="modal"
                              data-target="#exampleModalScrollable">
                        Olvidaste tu contraseña?
                      </button>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="myModal">¿Olvidaste tu usuario o contraseña?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Dirección de Correo Electrónico</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Ingresa correo electronico">
              <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tus datos con nadie</small>
            </div>
            <div class="form-group">
              <small>¿Ya tienes cuenta?</small>
              <a type="submit" class="text-success" data-dismiss="modal">Inicia sesión</a>
            </div>
          </form>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" class="btn btn-success" data-dismiss="modal">Restaura tu contraseña</button>
        </div>
      </div>
    </div>
  </div>

  <?php include 'config/footer.php'; ?>
  <?php include 'config/script.php'; ?>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="assets/js/bootstrap/bootstrap.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
</body>
</html>i