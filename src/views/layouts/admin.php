<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<?php partial("_head");?>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!--  Menu -->
      <?php partial("_sidebar");?>
      <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <?php partial("_navbar");?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
          <div class="container-xxl flex-grow-1 container-p-y">
            <!--content-->
            {{ $content }}
            <!--content-->
          </div>
            <!-- Footer -->
            <?php partial("_footer");?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="<?= assets("./assets/vendor/libs/jquery/jquery.js")?>"></script>
    <script src="<?= assets("./assets/vendor/libs/popper/popper.js")?>"></script>
    <script src="<?= assets("./assets/vendor/js/bootstrap.js")?>"></script>
    <script src="<?= assets("./assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js")?>"></script>

    <script src="<?= assets("./assets/vendor/js/menu.js")?>"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="<?= assets("./assets/js/main.js")?>"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>