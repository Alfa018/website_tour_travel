<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/admin/vendors/iconfonts/ionicons/dist/css/ionicons.css">
  <link rel="stylesheet" href="assets/admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/admin/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/admin/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/admin/css/shared/style.css">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/admin/css/demo_1/style.css">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="assets/user/img/logo1.png" />
</head>

<body>
  
  @include('admin.navbar')

  @include('admin.sidebar')
  @yield('content')
  

  
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/admin/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/admin/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="assets/admin/js/shared/off-canvas.js"></script>
  <script src="assets/admin/js/shared/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/admin/js/demo_1/dashboard.js"></script>
  <!-- End custom js for this page-->
  <script src="assets/admin/js/shared/jquery.cookie.js" type="text/javascript"></script>
</body>
</html>