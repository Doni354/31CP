<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<!-- Tambahkan link CSS AOS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">

<!-- TEST SLIDER img -->
<?= $this->include('user/home/slider'); ?>

<!-- How Work Section Start -->
<section id="how-work" class="how-work py-5" data-aos="fade-up">
    <div class="container">
        <?php foreach ($profil as $descper) : ?>
            <div class="row" data-aos="fade-up">
                <div class="col-md-6">
                    <div class="how-work-cont" data-aos="fade-up">
                        <!-- Slogan -->
                        <h1><?= $descper->nama_perusahaan; ?></h1>
                        <h2 class="title-centered"><?= $descper->title_website; ?></h2>
                        <?php
                        // Batasi jumlah kalimat
                        $deskripsi = lang('Blog.Languange') == 'en' ? $descper->deskripsi_perusahaan_en : $descper->deskripsi_perusahaan_in;
                        $sentences = explode('.', $deskripsi);
                        $limitedDescription = implode('.', array_slice($sentences, 0, 2)); // Batasi 2 kalimat
                        ?>
                        <p><?= $limitedDescription; ?>...</p> <!-- Menambahkan ellipses di sini -->
                        <!-- Tombol untuk melihat lebih lanjut -->
                        <a href="<?= base_url('about') ?>" class="btn btn-custom mt-auto">Lihat Selengkapnya</a> <!-- Menggunakan kelas khusus untuk tombol -->
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 m-auto">
                    <div class="how-work-img" data-aos="fade-up">
                        <img data-src="asset-user/images/<?= $descper->foto_utama; ?>" alt="<?= $descper->nama_perusahaan; ?>" class="img-fluid lazyload">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<!-- How Work Section End -->

<!-- Portfolio Start -->
<section id="blog" class="blog py-5 position-relative" data-aos="fade-up">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="heading mb-4">
                    <h1 class="display-4"><?php echo lang('Blog.btnOurproducts'); ?></h1>
                    <div class="border-bottom w-25 mx-auto"></div>
                </div>
            </div>
        </div>
        <div class="position-relative"> <!-- Tambahkan container untuk arrow -->
            <div class="scrolling-wrapper d-flex align-items-center" data-aos="fade-up"> <!-- Pastikan konten slider tetap flex -->
                <?php foreach ($tbproduk as $produk) : ?>
                    <div class="product-card h-100 shadow-sm" data-aos="fade-up">
                        <img src="asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php echo lang('Blog.Languange') == 'en' ? $produk->nama_produk_en : $produk->nama_produk_in; ?>" class="card-img-top img-fluid lazyload">
                        <div class="card-body d-flex flex-column">
                            <a href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>" class="btn btn-custom mt-auto">
                                <?php echo lang('Blog.Languange') == 'en' ? $produk->nama_produk_en : $produk->nama_produk_in; ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="arrow arrow-left"><i class="fas fa-chevron-left"></i></div>
            <div class="arrow arrow-right"><i class="fas fa-chevron-right"></i></div>
        </div>
    </div>
</section>
<!-- Portfolio End -->

<style>
    .product-card {
        flex: 0 0 auto;
        width: calc(100% / 4 - 24px); /* Mengatur ukuran produk lebih kecil dengan margin */
        margin-right: 24px; /* Spasi antar produk */
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease;
    }

    .product-card img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        max-width: 100%; /* Menyesuaikan ukuran gambar */
        height: auto; /* Menjaga proporsi gambar */
    }

    .product-card:hover img {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        transform: scale(1.05);
    }

    .scrolling-wrapper {
        display: flex;
        overflow-x: auto;
        scroll-behavior: smooth;
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
        padding: 10px 0;
        margin: 0 60px; /* Berikan margin untuk memastikan panah tidak terpotong */
    }

    .scrolling-wrapper::-webkit-scrollbar {
        display: none;  /* Chrome, Safari, and Opera */
    }

    .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        border-radius: 50%;
        width: 40px; /* Ukuran panah */
        height: 40px; /* Ukuran panah */
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 1000; /* Pastikan panah berada di atas elemen lain */
        transition: background-color 0.3s ease;
    }

    .arrow-left {
        left: 0; /* Posisi panah kiri */
    }

    .arrow-right {
        right: 0; /* Posisi panah kanan */
    }

    .arrow:hover {
        background-color: rgba(0, 0, 0, 0.7);
    }

    .arrow i {
        font-size: 18px; /* Ukuran ikon */
    }

    @media (max-width: 768px) {
        .product-card {
            width: calc(100% / 3 - 24px); /* Mengatur untuk layar yang lebih kecil */
        }
    }

    @media (max-width: 576px) {
        .product-card {
            width: calc(100% / 2 - 24px); /* Mengatur untuk layar yang sangat kecil */
        }
    }

    /* Custom styles for how-work section */
    #how-work {
        padding-top: 1000px; /* Adjust padding-top as needed */
        padding-bottom: 1000px; /* Adjust padding-bottom as needed */
    }

    .how-work-cont h1 {
        margin-bottom: 10px; /* Kurangi jarak antara nama_perusahaan dan title_website */
    }

    .how-work-cont p {
        line-height: 1.6;
    }

    .title-centered {
        text-align: left; /* Posisikan teks di tengah */
        font-size: 2rem; /* Ukuran font sama dengan Produk */
        color: #040F28; /* Warna teks */
        margin-bottom: 20px; /* Jarak antara title_website dan deskripsi */
    }

    /* Custom button styles */
    .btn-custom {
        background-color: #FD5D14; /* Warna tombol oranye */
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #e04e0f; /* Warna lebih gelap saat hover */
    }
</style>

<!-- Tambahkan skrip AOS -->
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Inisialisasi AOS
        AOS.init({
            duration: 1000, // Durasi animasi dalam milidetik
            easing: 'ease-in-out', // Jenis easing
            once: true, // Hanya animasi sekali
        });

        // Slider arrows
        const wrapper = document.querySelector('.scrolling-wrapper');
        const cards = document.querySelectorAll('.product-card');
        const cardWidth = cards[0].offsetWidth + parseInt(window.getComputedStyle(cards[0]).marginRight, 10);

        document.querySelector('.arrow-left').addEventListener('click', function() {
            wrapper.scrollBy({ left: -cardWidth, behavior: 'smooth' });
        });

        document.querySelector('.arrow-right').addEventListener('click', function() {
            wrapper.scrollBy({ left: cardWidth, behavior: 'smooth' });
        });
    });
</script>

<?= $this->endSection('content') ?>
