<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    GAS
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?php echo e(asset('assets/css/nucleo-icons.css')); ?>" rel="stylesheet" />
  <link href="<?php echo e(asset('assets/css/nucleo-svg.css')); ?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?php echo e(asset('assets/css/material-kit.css?v=3.0.4')); ?>" rel="stylesheet" />
</head>

<body class="offline-doc">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  navbar-transparent my-3 py-2 start-0 end-0 mx-4">
    <div class="container-fluid px-0">
      <a class="navbar-brand font-weight-bolder ms-sm-3" href="https://demos.creative-tim.com/material-kit/index" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
        GAS.ID
      </a>
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
      <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
        <ul class="navbar-nav navbar-nav-hover ms-auto">
          <li class="nav-item dropdown dropdown-hover mx-2">
            <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="material-icons opacity-6 me-2 text-md">dashboard</i>
              Pages
              <img src="<?php echo e(asset('assets/img/down-arrow-dark.svg')); ?>" alt="down-arrow" class="arrow ms-auto ms-md-2">
            </a>
            <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages">
              <div class="d-none d-lg-block">
                <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                  Beranda
                </h6>
                <a href="/" class="dropdown-item border-radius-md">
                    <span>Beranda</span>
                </a>
                <a href="<?php echo e(url('tentang.tentang.blade.php')); ?>" class="dropdown-item border-radius-md">
                    <span>Tentang GAS</span>
                </a>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                    <span>Fitur</span>
                </a>
                <a href="../pages/about-us.html" class="dropdown-item border-radius-md">
                    <span>Daftar</span>
                </a>
                <a href="#" class="dropdown-item border-radius-md">
                    <span>Karir</span>
                </a>
              </div>
            </div>
          </li>

          <li class="nav-item my-auto ms-3 ms-lg-0">
            <a href="https://mitra.gas.id/" class="btn btn-sm  bg-gradient-primary  mb-0 me-1 mt-2 mt-md-0">Masuk Mitra</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter">
    <div class="page-header-image" style="background-image: url('<?php echo e(asset('assets/img/denys.jpg')); ?>;"></div>
    <div class="content-center text-center">
      <div class="col-md-8 mx-auto">
        <div class="brand">
          <h1 class="title">
            Bergabung dengan GAS
          </h1>
          <h3 class="description">Aplikasi untuk memudahkan pelaku usaha menjangkau calon pembeli lebih luas. Daftarkan tokomu dan nikmati keuntungan bersama GAS!</h3>
          <br />
          <a href="https://play.google.com/store/apps/details?id=id.gas.app&amp;hl=en" class="btn btn-primary btn-lg">Unduh Sekarang</a>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer pt-5 mt-5">
    <div class="container">
      <div class=" row">
        <div class="col-md-3 mb-4 ms-auto">
          <div>
            <a href="https://www.creative-tim.com/product/material-kit">
              <img src="<?php echo e(asset('assets/img/logo-ct-dark.png')); ?>" class="mb-3 footer-logo" alt="main_logo">
            </a>
            <h6 class="font-weight-bolder mb-4">GAS</h6>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Tentang GAS</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://gas.id/terms" target="_blank">
                    Terms and Conditions Privacy
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Hubungi Kami</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://iradesign.io/" target="_blank">
                  Kritik dan Saran
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4">
          <div>
            <h6 class="text-sm">Ikuti Kami</h6>
            <ul class="flex-column ms-n3 nav">
                <li class="nav-item">
                    <a class="nav-link pe-1" href="https://www.facebook.com/aplikasigas" target="_blank">
                      <i class="fab fa-facebook text-lg opacity-8"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link pe-1" href="https://github.com/aplikasigas" target="_blank">
                      <i class="fab fa-instagram text-lg opacity-8"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link pe-1" href="https://www.youtube.com/@aplikasigas5291/featured" target="_blank">
                      <i class="fab fa-youtube text-lg opacity-8"></i>
                    </a>
                  </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6 col-6 mb-4 me-auto">
          <div>
            <h6 class="text-sm">Unduh</h6>
            <ul class="flex-column ms-n3 nav">
              <li class="nav-item">
                <a class="nav-link" href="https://play.google.com/store/apps/details?id=id.gas.app&amp;hl=en" target="_blank">
                  PlayStore
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" target="_blank">
                  AppStore
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-12">
          <div class="text-center">
            <p class="text-dark my-4 text-sm font-weight-normal">
              All rights reserved. Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Material Kit by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="<?php echo e(asset('assets/js/core/popper.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('assets/js/core/bootstrap.min.js')); ?>" type="text/javascript"></script>
  <script src="<?php echo e(asset('assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
  <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
  <script src="<?php echo e(asset('assets/js/plugins/parallax.min.js')); ?>"></script>
  <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
  <script src="<?php echo e(asset('assets/js/material-kit.min.js?v=3.0.4')); ?>" type="text/javascript"></script>
</body>

</html><?php /**PATH C:\xampp\htdocs\tes laravel\lara7\resources\views/layouts/mitra.blade.php ENDPATH**/ ?>