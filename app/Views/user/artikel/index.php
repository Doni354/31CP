<?= $this->extend('user/template/template') ?>
<?= $this->Section('content'); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>');">
    <?php foreach ($profil as $perusahaan) : ?>
        <h1 class="display-3 text-uppercase text-white mb-3">
            <?php echo lang('Blog.titleOurarticle');
            if (!empty($perusahaan)) {
                echo ' ' . htmlspecialchars($perusahaan->nama_perusahaan); // Menghindari XSS
            } ?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0"><?php echo lang('Blog.headerArticle'); ?></h6>
        </div>
    <?php endforeach; ?>
</div>
<!-- Page Header Start -->

<!-- News With Sidebar Start -->
<div class="container-fluid mt-5 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary"><?php echo lang('Blog.newsArticles'); ?></h5>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <?php foreach ($artikelterbaru as $row) : ?>
                <div class="col-lg-4 mb-4">
                    <div class="position-relative d-flex flex-column h-100 mb-3">
                        <img class="img-fluid w-100" style="object-fit: cover;" src="<?= base_url('asset-user/images/' . $row->foto_artikel); ?>" loading="lazy" alt="<?= htmlspecialchars(strip_tags($row->judul_artikel)); ?>"> <!-- Tambahkan alt untuk SEO -->
                        <div class="bg-white border border-top-0 p-4 flex-grow-1">
                            <div class="mb-2">
                                <a class="text-uppercase mb-3 text-body"><?= date('d F Y', strtotime($row->created_at)); ?></a>
                            </div>
                            <a class="h4 display-5" href="<?= base_url(($locale !== '' ? $locale . '/' : '') . ($locale === 'en' ? 'articles' : 'artikel') . '/' . (($locale === 'en') ? $row->slug_en : $row->slug_in)) ?>"><?= htmlspecialchars(substr(strip_tags($row->judul_artikel), 0, 10)) ?>...</a> <!-- Menggunakan htmlspecialchars untuk keamanan -->
                            <p><?= htmlspecialchars(substr(strip_tags($row->deskripsi_artikel), 0, 30)) ?>...</p> <!-- Menggunakan htmlspecialchars untuk keamanan -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- News With Sidebar End -->

<?= $this->endSection('content'); ?>
