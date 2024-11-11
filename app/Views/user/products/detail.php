<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>');">
    <?php foreach ($profil as $perusahaan) : ?>
        <h1 class="display-3 text-uppercase text-white mb-3">
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

<!-- detail Start -->
<div class="container-fluid py-5 px-5">
    <div class="row g-5 justify-content-center align-items-center">

        <div class="col-lg-4 pb-4">
            <div class="position-relative bg-dark-radial h-100 ms-3">
                <img class="w-100 h-100 mt-3 ms-n3 lazyload" data-src="/asset-user/images/<?= $tbproduk->foto_produk ?>" alt="<?php if (lang('Blog.Languange') == 'en') {
                                                                                                                                    echo $tbproduk->nama_produk_en;
                                                                                                                                } ?>
                                    <?php if (lang('Blog.Languange') == 'in') {
                                        echo $tbproduk->nama_produk_in;
                                    } ?>" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-7">
            <h1 class="display-5 text-uppercase mb-4"><span class="text-primary"><?php if (lang('Blog.Languange') == 'en') {
                                                                                        echo $tbproduk->nama_produk_en;
                                                                                    } elseif (lang('Blog.Languange') == 'in') {
                                                                                        echo $tbproduk->nama_produk_in;
                                                                                    } ?></span></h1>
            <p><?php if (lang('Blog.Languange') == 'en') {
                    echo $tbproduk->deskripsi_produk_en;
                } elseif (lang('Blog.Languange') == 'in') {
                    echo $tbproduk->deskripsi_produk_in;
                } ?></p>
        </div>

    </div>
</div>
<!-- detail End -->
<?= $this->endSection('content'); ?>