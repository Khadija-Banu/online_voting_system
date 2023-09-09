<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Online Vote</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="vote.png" rel="icon">
  <link href="{{asset('ui')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('ui')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('ui')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('ui')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('ui')}}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{asset('ui')}}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{asset('ui')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('ui')}}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('ui')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('layouts.navigation')
  <!-- ======= Header ======= -->
 

  <main id="main" class="main">

    <!-- End Page Title -->

     <section class="section dashboard">
      @yield('content')
     </section>

   </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Voting</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">Khadija</a>
    </div>
  </footer><!-- End Footer -->

 

  <!-- Vendor JS Files -->
  <script src="{{asset('ui')}}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{asset('ui')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('ui')}}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{asset('ui')}}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{asset('ui')}}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{asset('ui')}}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{asset('ui')}}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{asset('ui')}}/assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Template Main JS File -->
  <script src="{{asset('ui')}}/assets/js/main.js"></script>




 

</body>

</html>