<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <?= $this->renderSection('title'); ?>

  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>/assets/img/icon/logocjl.png" rel="icon">
  
  <!-- Sweet Alert 2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>/assets/extensions/sweetalert2/sweetalert2.min.css">

  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>/assets/landing/extension/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/extension/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/extension/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/extension/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/extension/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>/assets/landing/extension/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>/assets/landing/css/style.css" rel="stylesheet">
  <link href=" <?= base_url(); ?>/assets/css/shop.css" rel="stylesheet" media="all">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header sticky-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <img src="<?= base_url(); ?>/assets/img/icon/logocjl.png" alt="">
      </a>

      <nav id="navbar" class="navbar justify-content-center">
        <ul>
          <li><a class="nav-link" href="<?= site_url('home'); ?>">Home</a></li>
          <li class="dropdown"><a href="javascript:void(0)"><span>Catalogue</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= site_url('machinery'); ?>">Machinery</a></li>
              <li><a href="<?= site_url('machinetools'); ?>">Machine Tool</a></li>
              <li><a href="<?= site_url('cuttingtools'); ?>">Cutting Tool</a></li>
              <li><a href="<?= site_url('measuringtools'); ?>">Measuring Tool</a></li>
              <li><a href="<?= site_url('handtools'); ?>">Hand Tool</a></li>
              <li><a href="<?= site_url('cuttingcoolant'); ?>">Cutting Coolant</a></li>
              <li><a href="<?= site_url('abrasive'); ?>">Abrasive</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="<?= site_url('abouts'); ?>">About Us</a></li>
          <li><a class="nav-link" href="<?= site_url('promo'); ?>">Promo</a></li>
          <li><a class="nav-link" href="<?= site_url('newproducts'); ?>">New Products</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <?= $this->renderSection('home'); ?>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="<?= site_url('home'); ?>" class="logo d-flex align-items-center">
              <img src="<?= base_url(); ?>/assets/img/icon/logocjl.png" alt="Logo">
              <h2>Cipta Jaya Lestari</h2>
            </a>
            <p>Metalworking and Machinery</p>
            
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              <strong>Phone Office</strong><br>
                <i class="bi bi-telephone"></i>
                <a href="tel:0313896920" class="nobor">031-3896920</a><br>
              <strong>E-mail</strong><br>
              <i class="bi bi-envelope"></i> <a class="text-dark " href="mailto:ciptajayalestari@gmail.com"> <u>ciptajayalestari@gmail.com</u></a>
            </p>
            <p>
              <strong>Office</strong><br>
              <i class="bi bi-house-door"></i> Jalan Kenjeran 300, Block A-7 <br>
              Surabaya, Jawa Timur, 60145 <br>
              Indonesia
            </p>
            <p>
              <strong>Warehouse</strong><br>
              <i class="bi bi-building"></i> Kompleks Pergudangan SiRIE S-7<br>
              Lingkar Timur, Sidoarjo <br>
              Jawa Timur
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-contact text-center text-md-start">
            <h4>Phone Sales</h4>
            <p>
              <strong>Sales Counter</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6281335700084&amp;text=Halo Sales Counter, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 81335700084</a>
            </p>
            <p>
              <strong>Pak Edi</strong><br>
              <a href="https://api.whatsapp.com/send?phone=628123170863&amp;text=Halo Pak Edi, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 8123170863</a>
            </p>
            <p>
              <strong>Pak Ilyas</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6281254693810&amp;text=Halo Pak Ilyas, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 81254693810</a>
            </p>
            <p>
              <strong>Pak Rochman</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6281331637497&amp;text=Halo Pak Rochman, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 81331637497</a>
            </p>
            <p>
              <strong>Pak Dwiono</strong><br>
              <a href="https://api.whatsapp.com/send?phone=6285232777499&amp;text=Halo Pak Dwiono, Saya dapat nomor dari www.ciptajayalestari.id"><img height="30" src="<?= base_url(); ?>/assets/img/icon/whatsapp.png"> +62 85232777499</a>
            </p>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Cipta Jaya Lestari</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <!--<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>-->
  
  <!-- Sweet ALert 2 -->
  <script src="<?= base_url(); ?>/assets/extensions/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/extensions/sweetalert2/sweetalert2.min.js"></script>

  <!-- extension JS Files -->
  <script src="<?= base_url(); ?>/assets/landing/extension/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="<?= base_url(); ?>/assets/landing/extension/aos/aos.js"></script>
  <script src="<?= base_url(); ?>/assets/landing/extension/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>/assets/landing/extension/glightbox/js/glightbox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>/assets/landing/js/main.js"></script>
  
  <script src="<?= base_url(); ?>/assets/js/my.js"></script>
  
  <!-- Live Chat -->
  <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/630f102537898912e96657e9/1gbpde59g';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
  <!--End of Tawk.to Script-->

</body>

</html>