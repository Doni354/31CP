<div class="slides">
    <?php foreach ($tbslider as $key => $slider) : ?>
        <div class="slide">
            <img data-src="/asset-user/images/<?= $slider->file_foto_slider;  ?>" <?php foreach ($profil as $perusahaan) :  ?> alt="<?= $perusahaan->nama_perusahaan; ?>"<?php endforeach; ?> class="lazyload">
        </div>
    <?php endforeach; ?>

    <div class="navigation">
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div class="page">
        <?php for ($a = 1; $a <= count($tbslider); $a++) : ?>
            <span class="dot" onclick="dotslide(<?= $a; ?>)"></span>
        <?php endfor; ?>
    </div>
</div>