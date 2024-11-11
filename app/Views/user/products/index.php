<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>');">
    <?php foreach ($profil as $perusahaan) : ?>
        <h1 class="display-3 text-white mb-3">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                <?php echo lang('Blog.titleProductof');
                if (!empty($perusahaan)) {
                    echo ' ' . $perusahaan->nama_perusahaan;
                } ?></h1>
            <div class="d-inline-flex text-white">
                <h6 class="text-uppercase m-0"><a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a></h6>
                <h6 class="text-white m-0 px-3">/</h6>
                <h6 class="text-uppercase text-white m-0"><?php echo lang('Blog.headerProducts');  ?></h6>
            </div>
        <?php endforeach; ?>
</div>
<!-- Page Header Start -->

<!-- Portfolio Start -->
<div class="container-fluid bg-light py-6 px-5">
    <div class="row g-5 portfolio-container">
        <?php foreach ($tbproduk as $produk) : ?>
            <div class="col-xl-4 col-lg-6 col-md-6 portfolio-item first">
                <div class="position-relative portfolio-box">
                    <img src="asset-user/images/<?= $produk->foto_produk; ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                        echo $produk->nama_produk_en;
                                                                                    } else {
                                                                                        echo $produk->nama_produk_in;
                                                                                    } ?>" class="img-fluid" width="456.6" height="400">

                    <a class="portfolio-title shadow-sm" href="<?= base_url('product/detail/' . $produk->id_produk . '/' . url_title($produk->nama_produk_en) . '_' . url_title($produk->nama_produk_in)) ?>">
                        <p class="h4 text-uppercase">
                            <?php if (lang('Blog.Languange') == 'en') {
                                echo $produk->nama_produk_en;
                            } ?>
                            <?php if (lang('Blog.Languange') == 'in') {
                                echo $produk->nama_produk_in;
                            } ?>
                        </p>
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Portfolio End -->


<?= $this->endSection('content'); ?>