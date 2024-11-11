<!-- Navbar Start -->
<?php foreach ($profil as $header) : ?>
    <div class="container-fluid sticky-top px-0">
        <nav class="navbar navbar-expand-lg navbar-dark py-1" style="background-color: #0C2D57;">
            <a href="<?= base_url('/') ?>" class="logo d-flex align-items-center">
                <img data-src="<?= base_url('asset-user/images/'); ?><?= $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" class="img-fluid logo-img lazyload">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="<?= base_url('/') ?>" class="nav-item nav-link" data-page="home"><?php echo lang('Blog.headerHome'); ?></a>
                    <a href="<?= base_url('about') ?>" class="nav-item nav-link" data-page="about"><?php echo lang('Blog.headerAbout'); ?></a>
                    <a href="<?= base_url('artikel') ?>" class="nav-item nav-link" data-page="artikel"><?php echo lang('Blog.headerArticle'); ?></a>
                    <a href="<?= base_url('product') ?>" class="nav-item nav-link" data-page="product"><?php echo lang('Blog.headerProducts'); ?></a>
                    <a href="<?= base_url('activities') ?>" class="nav-item nav-link" data-page="activities"><?php echo lang('Blog.headerActivities'); ?></a>
                    <a href="<?= base_url('contact') ?>" class="nav-item nav-link" data-page="contact"><?php echo lang('Blog.headerContact'); ?></a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?php echo lang('Blog.headerLanguage'); ?></a>
                        <div class="dropdown-menu m-0">
                            <a href="<?= site_url('lang/in') ?>" class="dropdown-item">Indonesia</a>
                            <a href="<?= site_url('lang/en') ?>" class="dropdown-item">English</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
<?php endforeach; ?>
<!-- Navbar End -->

<style>
/* Styling untuk navbar */
.container-fluid {
    padding-left: 0;
    padding-right: 0;
}

.navbar {
    padding: 1rem 0.5rem !important; /* Mengurangi padding untuk navbar */
    background-color: #131842 !important; /* Warna latar belakang navbar disamakan dengan footer */
}

.navbar-nav .nav-link {
    font-size: 0.925rem !important; /* Ukuran font lebih kecil untuk tautan navigasi */
    padding: 0.4rem 0.7rem !important; /* Padding lebih kecil untuk tautan navigasi */
    margin: 0 1rem !important; /* Margin antar tautan */
    color: white; /* Warna teks tautan navigasi */
    text-transform: capitalize !important; /* Huruf kapital di awal kata */
}

.logo-img {
    height: 33px; /* Tinggi logo diperbesar */
    width: auto; /* Lebar logo otomatis */
    margin-left: 20px; 
}

@media (max-width: 991.98px) {
    .navbar-nav .nav-link {
        font-size: 0.5rem; /* Ukuran font lebih kecil untuk layar lebih kecil */
        padding: 0.1rem 0.3rem; /* Padding lebih kecil untuk layar lebih kecil */
    }
}
</style>
