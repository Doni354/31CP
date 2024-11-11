<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>');">
    <h1 class="display-3 text-uppercase text-white mb-3">
        <?= lang('Blog.titleAboutUs'); ?>
    </h1>
    <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="<?= base_url('/') ?>"><?= lang('Blog.headerHome'); ?></a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0"><?= lang('Blog.headerAbout'); ?></h6>
    </div>
</div>
<!-- Page Header End -->

<section id="how-work" class="how-work">
    <style>
        #how-work {
            margin-top: 50px; /* Atur jarak atas sesuai kebutuhan */
            margin-bottom: 50px; /* Atur jarak bawah sesuai kebutuhan */
        }
    </style>
    <div class="container">
        <?php foreach ($profil as $descper) : ?>
            <div class="row">
                <div class="col-md-6">
                    <div class="how-work-cont">
                        <h1><?= $descper->nama_perusahaan; ?></h1>
                        <p>
                            <?= lang('Blog.Languange') == 'en' ? $descper->deskripsi_perusahaan_en : $descper->deskripsi_perusahaan_in; ?>
                        </p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5 m-auto">
                    <div class="how-work-img wow fadeInUp" data-wow-delay="0.3s">
                        <img data-src="asset-user/images/<?= $descper->foto_utama; ?>" alt="<?= $descper->nama_perusahaan; ?>" class="img-fluid lazyload">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?= $this->endSection(); ?>
