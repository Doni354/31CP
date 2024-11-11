<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="<?php echo $Meta; ?>" />

  <?php foreach ($profil as $perusahaan) : ?>
    <link rel="shortcut icon" href="<?= base_url('asset-user/images/') ?><?= $perusahaan->favicon_website ?>">
  <?php endforeach; ?>


  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="<?= base_url('asset-user') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('asset-user') ?>/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
  <link href="<?= base_url('asset-user') ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="<?= base_url('asset-user') ?>/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="<?= base_url('asset-user') ?>/css/style.css" rel="stylesheet">

  <title><?php echo $Title; ?> | <?php foreach ($profil as $descper) : ?><?= $descper->nama_perusahaan; ?><?php endforeach; ?></title>
</head>


<body>
  <?= $this->include('user/layout/header'); ?>
  <?= $this->include('user/layout/nav'); ?>

  <!-- render halaman konten -->
  <?= $this->renderSection('content'); ?>

  <!-- footer -->
  <?= $this->include('user/layout/footer');  ?>

  <!-- WhatsApp Icons -->
  <div class="floating-container">
    <div class="element-container">
      <?php foreach ($profil as $iconwa) : ?>
        <a class="whats-app" href="<?= $iconwa->link_whatsapp ?>" target="">
          <img src="<?= base_url('asset-user/images/iconwa.png'); ?>" alt="WhatsApp" class="my-float" style="width: 60px; height: 60px; padding: 10px; transition: background-color 0.3s ease-in-out;">
        </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- loader -->
  <div id="loader" class="fullscreen">
    <img src="/asset-user/images/loading.gif" alt="Loading" class="gif-loader">
  </div>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/easing/easing.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/waypoints/waypoints.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/tempusdominus/js/moment.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/isotope/isotope.pkgd.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/lib/lightbox/js/lightbox.min.js"></script>
  <script src="<?= base_url('asset-user') ?>/js/lazysizes.min.js"></script>

  <!-- Template Javascript -->
  <script src="<?= base_url('asset-user') ?>/js/main.js"></script>


  <!-- untuk menambahkan class="active" pada <li> di navbar -->
  <script>
    // Fungsi untuk menandai tautan sebagai aktif berdasarkan data-page
    function markLinkAsActive(page) {
      // Dapatkan semua tautan dalam menu
      var menuLinks = document.querySelectorAll(".navbar-nav a.nav-link");

      // Hapus kelas "active" dari semua tautan
      menuLinks.forEach(function(link) {
        link.classList.remove("active");
      });

      // Temukan tautan yang sesuai dengan data-page dan tambahkan kelas "active" ke tautan terkait
      var linkToMark = document.querySelector('[data-page="' + page + '"]');
      linkToMark.classList.add("active");
    }

    // Panggil fungsi markLinkAsActive saat mengklik tautan
    document.addEventListener("DOMContentLoaded", function() {
      // Ambil URL halaman saat ini
      var currentURL = window.location.pathname;

      // Tentukan halaman saat ini berdasarkan URL
      var currentPage = 'home'; // Default: 'home'

      if (currentURL === window.location.origin + '/') {
        currentPage = 'home';
      } else if (currentURL.includes('/about')) {
        currentPage = 'about';
      } else if (currentURL.includes('/artikel')) {
        currentPage = 'artikel';
      } else if (currentURL.includes('/product')) {
        currentPage = 'product';
      } else if (currentURL.includes('/activities')) {
        currentPage = 'activities';
      } else if (currentURL.includes('/contact')) {
        currentPage = 'contact';
      }

      // Panggil fungsi markLinkAsActive dengan currentPage saat dokumen dimuat
      markLinkAsActive(currentPage);
    });

    // Panggil fungsi markLinkAsActive saat tautan di klik
    var menuLinks = document.querySelectorAll(".navbar-nav a.nav-link");
    menuLinks.forEach(function(link) {
      link.addEventListener("click", function() {
        var page = link.getAttribute("data-page");
        markLinkAsActive(page);
      });
    });
  </script>

  <script src="<?= base_url('asset-user') ?>/js/main.js"></script>

</body>

</html>