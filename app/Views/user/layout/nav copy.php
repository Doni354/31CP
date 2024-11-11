<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
    <div class="container">
        <div class="d-flex align-items-center">
            <div class="mx-auto">
                <nav class="site-navigation position-relative text-right" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                        <li>
                            <a href="<?= base_url('/') ?>" class="nav-link text-left" data-page="home"><?php echo lang('Blog.headerHome'); ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url('about') ?>" class="nav-link text-left" data-page="about"><?php echo lang('Blog.headerAbout'); ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url('product') ?>" class="nav-link text-left" data-page="product"><?php echo lang('Blog.headerProducts'); ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url('activities') ?>" class="nav-link text-left" data-page="activities"><?php echo lang('Blog.headerActivities'); ?></a>
                        </li>
                        <li>
                            <a href="<?= base_url('contact') ?>" class="nav-link text-left" data-page="contact"><?php echo lang('Blog.headerContact'); ?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>