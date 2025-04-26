/**
 * Register page for user account creation
 * 
 * This HTML document provides a registration form for new users to create an account.
 * The form includes fields for:
 * - First Name
 * - Last Name
 * - Email
 * - Password
 * - Password Confirmation
 * 
 * Includes links to login page for existing users and submits registration data.
 * 
 * @package UserAuthentication
 * @subpackage Registration
 * @version 1.0.0
 */
<!DOCTYPE html>
<html lang="es">

<head>

  <?php include('config/head.php'); ?>

</head>

<class="bg-gradient-login">
  <!-- Register Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-10 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-success mb-4 py-4">Registro</h1>
                  </div>
                  <form>
                    <div class="form-group px-3">
                      <label>Nombre: </label>
                      <input type="text" class="form-control" id="exampleInputFirstName"
                        placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group px-3">
                      <label>Apellido</label>
                      <input type="text" class="form-control" id="exampleInputLastName"
                        placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group px-3">
                      <label>Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                        placeholder="Ingrese su Email">
                    </div>
                    <div class="form-group px-3">
                      <label>Contraseña</label>
                      <input type="password" class="form-control" id="exampleInputPassword"
                        placeholder="Ingrese su Contraseña">
                    </div>
                    <div class="form-group px-3">
                      <label>Repita Contraseña</label>
                      <input type="password" class="form-control" id="exampleInputPasswordRepeat"
                        placeholder="Repita Contraseña">
                    </div>

                    <div class="text-center">
                      <a class="font-weight-bold small text-success" href="login.php">¿Ya tienes una cuenta?</a>
                    </div>
                    <hr>
                    <div class="form-group px-3">
                      <button type="submit" class="btn btn-success btn-block mb-4">Registrarse</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'config/footer.php'; ?>


  <!-- Register Content -->

  </body>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>

</html>