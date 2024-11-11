<?= $this->extend('user/template/template') ?>
<?= $this->section('content'); ?>

<div class="container-fluid page-header" style="background-image: linear-gradient(rgba(4, 15, 40, 0.7), rgba(4, 15, 40, 0.7)), url('<?= base_url('asset-user/images/hero_1.jpg'); ?>');">
    <?php foreach ($profil as $perusahaan) : ?>
        <h1 class="display-3 text-uppercase text-white mb-3">
            <?php echo lang('contact');
            if (!empty($perusahaan)) {
                echo ' ' . $perusahaan->nama_perusahaan;
            } ?></h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a href="<?= base_url('/') ?>"><?php echo lang('Blog.headerHome'); ?></a></h6>
            <h6 class="text-white m-0 px-3">/</h6>
            <h6 class="text-uppercase text-white m-0"><?php echo lang('Blog.headerContact');  ?></h6>
        </div>
    <?php endforeach; ?>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-5" style="padding-top: 100px;">
                <div class="testimonial" style="border: 2px solid #ccc; padding: 10px; box-sizing: border-box; overflow: hidden;">
                    <div style="width: 100%; height: auto; max-width: 100%; overflow: hidden; box-sizing: border-box;">
                        <?php foreach ($profil as $maps): ?>
                            <div style="border: 2px solid #ccc; padding: 0; width: 100%; height: auto; max-width: 100%; box-sizing: border-box;">
                                <?= $maps->link_maps ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- Konten mulai dari deskripsi kontak hingga no_hp digeser ke kanan 100px -->
            <div class="col-md-6 mb-5 mb-md-5" style="padding-top: 100px; padding-left: 100px;">
                <div class="testimonial">
                    <h2 style="margin-bottom:0.5px;">Alamat</h2> <!-- Menambahkan judul di atas konten -->
                    <?php foreach ($profil as $desc): ?>
                        <blockquote style="margin-bottom: 20px;">
                            <p>
                                <?php if (lang('Blog.Languange') == 'en'): ?>
                                    <?= $desc->deskripsi_kontak_en; ?>
                                <?php elseif (lang('Blog.Languange') == 'in'): ?>
                                    <?= $desc->deskripsi_kontak_in; ?>
                                <?php endif; ?>
                            </p>
                        </blockquote>
                    <?php endforeach; ?>

                    <?php foreach ($profil as $lok): ?>
                        <blockquote style="margin-bottom: 20px;">
                            <p><?= $lok->alamat; ?></p>
                        </blockquote>
                    <?php endforeach; ?>

                    <?php foreach ($profil as $mail): ?>
                        <blockquote style="margin-bottom: 20px;">
                            <p><?= $mail->email; ?></p>
                        </blockquote>
                    <?php endforeach; ?>

                    <?php foreach ($profil as $no): ?>
                        <blockquote>
                            <p><?= $no->no_hp; ?></p>
                        </blockquote>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>
