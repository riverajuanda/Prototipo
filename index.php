<!DOCTYPE html>
<html lang="en">

<head>
  <?php include('config/head.php'); ?>
</head>

<body class="index-page">
  <!-- header -->
  <?php include('config/header.php'); ?>


  <!-- Main -->
  <main class="main">

    <!-- Hero Section -->
    <section id="" class="hero section ">

      <img src="admin/img/FONDO.png" alt="" data-aos="fade-in">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Bienvenido al software de alimentos y bebidas del SENA</h2>
            <p>Acá podrás costear y consultar las recetas que necesitas</p>
            <a href="buscarRecetas.php" class="btn-get-started">Empecemos!!</a>
          </div>
        </div>
      </div>
    </section>


  </main>

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