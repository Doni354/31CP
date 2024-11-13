<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<style>
    .article-title {
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
        width: 100%;
    }

    .article-item {
        display: flex;
        height: 110px;
        overflow: hidden;
        margin-bottom: 1rem; /* Added space between items */
    }

    .article-image {
        width: 110px;
        height: 110px;
        object-fit: cover;
    }

    .article-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        flex: 1;
        padding: 0 1rem;
        white-space: normal;
        overflow-wrap: break-word; /* Menambahkan properti ini */
        text-overflow: ellipsis;
    }

    .bg-white {
        background-color: #fff;
    }

    .text-body {
        color: #6c757d;
    }

    .display-5 {
        font-size: 2.5rem;
        word-break: break-word; /* Ensure long words break */
    }

    .display-7 {
        font-size: 1.25rem;
        overflow-wrap: break-word; /* Gunakan overflow-wrap untuk memastikan kata-kata panjang dipatahkan */
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .section-title {
        border-bottom: 2px solid #003366;
    }

    .border-primary {
        border-color: #003366 !important;
    }

    /* Responsive Adjustments */
    @media (max-width: 767.98px) {
        .display-5 {
            font-size: 1.5rem; /* Adjust the font size for smaller screens */
            padding: 0 1rem; /* Add padding to avoid edge overflow */
        }
        
        .display-7 {
            font-size: 1rem; /* Ukuran font yang lebih kecil untuk tampilan mobile */
            overflow: hidden; /* Menyembunyikan teks yang melebihi batas */
            text-overflow: ellipsis; /* Menampilkan tanda elipsis (...) untuk teks yang melebihi batas */
            word-break: break-word; /* Menggunakan word-break untuk memisahkan kata-kata panjang */
            max-width: 90%; /* Menetapkan lebar maksimum untuk judul */
        }

        .article-item {
            flex-direction: column;
            height: auto;
        }

        .article-image {
            width: 100%;
            height: auto;
        }

        .article-content {
            padding: 0.5rem 0;
        }
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>');">
    <?php foreach ($profil as $perusahaan) : ?>
        <h1 class="display-3 text-uppercase text-white mb-3">
            <?php echo lang('Blog.titleOurarticle');
            if (!empty($perusahaan)) {
                echo ' ' . $perusahaan->nama_perusahaan; // Menghindari XSS
            } ?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0"><?php echo lang('Blog.headerArticle');  ?></h6>
        </div>
    <?php endforeach; ?>
</div>
<!-- Page Header Start -->

<!-- News With Sidebar Start -->
<div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="<?= base_url('asset-user/images/' . $artikel->foto_artikel); ?>" style="object-fit: cover;" alt="<?= htmlspecialchars(strip_tags($artikel->judul_artikel)); ?>"> <!-- Tambahkan alt untuk SEO -->
                    <div class="bg-white border border-top-0 p-4">
                        <div class="mb-3">
                            <p class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($artikel->created_at)); ?></p>
                        </div>
                        <h1 class="display-5 mb-2"><?= $locale === 'id' ? strip_tags($artikel->judul_artikel) : strip_tags($artikel->judul_artikel_en) ?></h1> <!-- Menggunakan htmlspecialchars untuk keamanan -->
                        <p class="fs-5"><?php if (lang('Blog.Languange') == 'en') {
                                echo $artikel->deskripsi_artikel_en;
                            } else {
                                echo $artikel->deskripsi_artikel;
                            } ?></p> <!-- Menggunakan htmlspecialchars untuk keamanan -->
                    </div>
                </div>
                <!-- News Detail End -->
            </div>

            <div class="col-lg-4">
                <!-- Popular News Start -->
                <div class="mb-3">
                    <div class="section-title mb-0">
                        <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary"><?php echo lang('Blog.Read');?></h5>
                    </div>
                    <br>
                    <div class="bg-white border border-top-0 p-3">
                        <?php foreach ($artikel_lain as $artikel_item) : ?>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid article-image" src="<?= base_url('asset-user/images/' . $artikel_item->foto_artikel); ?>" alt="<?= htmlspecialchars(strip_tags($artikel_item->judul_artikel)); ?>"> <!-- Tambahkan alt untuk SEO -->
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="text-body" href="<?= base_url($locale . '/' . ($locale === 'en' ? 'articles' : 'artikel') . '/' . ($locale === 'id' ? $artikel_item->slug_in : $artikel_item->slug_en)) ?>"><small><?= date('d F Y', strtotime($artikel_item->created_at)); ?></small></a>
                                    </div>
                                    <a class="h6 m-0 display-7" href="<?= base_url($locale . '/' . ($locale === 'en' ? 'articles' : 'artikel') . '/' . ($locale === 'id' ? $artikel_item->slug_in : $artikel_item->slug_en)) ?>"><?= htmlspecialchars(substr($artikel_item->judul_artikel, 0, 20)); ?>...</a> <!-- Menggunakan htmlspecialchars untuk keamanan -->
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- Popular News End -->
            </div>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

<?= $this->endSection('content'); ?>
