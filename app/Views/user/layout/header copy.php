<div class="header-top bg-light">

    <div class="container">
        <?php foreach ($profil as $header) :  ?>
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <a href="<?= base_url('/') ?>" class="logo">
                        <img src="<?= base_url('asset-user/images/'); ?><?= $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" class="img-fluid logo-img" style="height: 80px; width:150px;">
                    </a>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex align-items-center">
                        <div class="icon align-self-center mt-3">
                            <span class="icon-room text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">Indonesia</span>
                            <span class="caption-text"><?= $header->alamat; ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex align-items-center">
                        <div class="icon align-self-center mt-3">
                            <span class="icon-phone text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block"><?= $header->no_hp; ?></span>
                            <span class="caption-text"><?php echo lang('Blog.notelp'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex align-items-center">
                        <div class="icon align-self-center mt-3">
                            <span class="icon-envelope text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block"><?= $header->email; ?></span>
                            <span class="caption-text"><?php echo lang('Blog.email'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="col-6 d-block d-lg-none text-right">
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
                </div>
            </div>

        <?php endforeach;  ?>
    </div>



    <?= $this->include('user/layout/nav'); ?>

</div>