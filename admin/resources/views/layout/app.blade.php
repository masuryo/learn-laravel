<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="/staradmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="/staradmin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="/staradmin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="/staradmin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="/staradmin/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:/staradmin/partials/_navbar.html -->
    @include('layout.header')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:/staradmin/partials/_sidebar.html -->
      
    @include('layout.sidebar')
      
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:/staradmin/partials/_footer.html -->
    @include('layout.footer')
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="/staradmin/vendors/js/vendor.bundle.base.js"></script>
  <script src="/staradmin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="/staradmin/js/off-canvas.js"></script>
  <script src="/staradmin/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
