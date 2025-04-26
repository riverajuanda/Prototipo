/**
 * Main index page for the SENA Food and Beverage Software
 * 
 * This file serves as the landing page of the application. It includes:
 * - A hero section with a welcome message and a call-to-action button.
 * - Navigation to search for recipes.
 * - Integration of reusable components such as header, footer, and scripts.
 * - Preloader and scroll-to-top functionality.
 * 
 * Features:
 * - Responsive design with AOS (Animate On Scroll) animations.
 * - Links to external and internal resources for styling and functionality.
 * 
 * Included Components:
 * - `config/head.php`: Contains meta tags, stylesheets, and other head elements.
 * - `config/header.php`: Contains the header section of the page.
 * - `config/footer.php`: Contains the footer section of the page.
 * - `config/Scrolltop.php`: Adds scroll-to-top functionality.
 * - `config/script.php`: Includes vendor JavaScript files.
 * 
 * External Resources:
 * - Cloudflare Insights for analytics.
 * - Main JavaScript file for custom functionality.
 * 
 * @file index.php
 * @package SENA Food and Beverage Software
 * @version 1.0
 * @author SENA Development Team
 * @license Proprietary
 */
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