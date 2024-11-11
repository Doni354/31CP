<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000" data-bs-pause="false">
        <div class="carousel-inner">
            <?php foreach ($tbslider as $key => $slider) : ?>
                <div class="carousel-item <?php echo $key === 0 ? 'active' : ''; ?>">
                    <img class="d-block w-100 carousel-image lazyload" data-src="asset-user/images/<?= $slider->file_foto_slider; ?>" alt="<?= $profil[0]->nama_perusahaan; ?>">
                </div>
            <?php endforeach; ?>
        </div>
        <div class="page">
            <?php for ($a = 0; $a < count($tbslider); $a++) : ?>
                <span class="dot" data-bs-slide-to="<?= $a ?>" data-bs-target="#header-carousel"></span>
            <?php endfor; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<style>
.carousel-item {
    height: 700px; /* Set the desired height */
}

.carousel-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the image covers the entire area */
}
</style>
