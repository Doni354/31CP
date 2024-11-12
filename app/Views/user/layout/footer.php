<?php
// Set default language to 'id'
$lang = session()->get('lang') ?? 'id';

// Get current URL
$current_url = uri_string();

// Extract the first segment to detect language
$lang_segment = explode('/', $current_url)[0]; // Detect 'id' or 'en'

// Define page links based on language
$homeLink = '';  // No trailing slash
$aboutLink = $lang_segment === 'en' ? 'about' : 'tentang';
$articleLink = $lang_segment === 'en' ? 'articles' : 'artikel';
$productLink = $lang_segment === 'en' ? 'service' : 'layanan';
$activitiesLink = $lang_segment === 'en' ? 'activities' : 'aktivitas';
$contactLink = $lang_segment === 'en' ? 'contact' : 'kontak';

// Replace map for slugs (to be applied in dynamic content if needed)
$replace_map = [
    'tentang' => 'about',
    'artikel' => 'articles',
    'layanan' => 'service',
    'aktivitas' => 'activities',
    'kontak' => 'contact'
];

// Define new language segment ('id' <-> 'en')
$new_lang_segment = ($lang_segment === 'en') ? 'id' : 'en';

// Remove language segment from current URL
$url_without_lang = substr($current_url, strlen($lang_segment) + 1);

// Only apply the translation logic if switching between different languages
if ($new_lang_segment !== $lang_segment) {
    // Switch segments based on the current language
    foreach ($replace_map as $indonesian_segment => $english_segment) {
        if ($lang_segment === 'en') {
            $url_without_lang = str_replace($english_segment, $indonesian_segment, $url_without_lang);
        } else {
            $url_without_lang = str_replace($indonesian_segment, $english_segment, $url_without_lang);
        } 
    }
}

// Rebuild the clean URL without trailing slashes
$clean_url = rtrim($new_lang_segment . '/' . ltrim($url_without_lang, '/'), '/');

// Define base URLs for the language switch
// If the language switch is the same as the current one, just return the same URL
$english_url = ($lang_segment === 'en') ? current_url() : base_url('en' . ($url_without_lang ? '/' . ltrim($url_without_lang, '/') : ''));
$indonesia_url = ($lang_segment === 'id') ? current_url() : base_url('id' . ($url_without_lang ? '/' . ltrim($url_without_lang, '/') : ''));
?>


<!-- Footer Start -->
<style>
    /* Styling untuk footer */
    .footer-container {
        background-color: #131842; /* Warna latar belakang gelap */
        color: white; /* Warna teks putih */
        border-top: 2px solid #007bff; /* Border atas berwarna biru */
        padding: 2rem 0; /* Padding atas dan bawah */
        position: relative;
    }

    .footer-content {
        display: flex;
        flex-direction: row; /* Mengatur arah konten menjadi baris */
        padding: 1.5rem 2rem;
        align-items: flex-start; /* Menyelaraskan konten ke atas */
        justify-content: space-between; /* Menyebarkan konten dengan spasi di antara */
        flex-wrap: wrap; /* Membungkus elemen jika diperlukan */
        max-width: 1200px; /* Menambahkan lebar maksimum untuk konten */
        margin-right: 5%; /* Menggeser seluruh konten sedikit ke kiri */
        position: relative; /* Menambahkan posisi relatif untuk mengatur posisi logo */
    }

    .footer-logo {
        margin-right: 0.5rem; /* Jarak kanan logo */
    }

    .footer-logo img {
        max-width: 150px; /* Lebar maksimum logo */
        height: auto; /* Menjaga proporsi logo */
    }

    .footer-info {
        display: flex;
        flex-direction: column; /* Mengatur arah info menjadi kolom */
        gap: 1rem; /* Jarak antar item info */
    }

    .contact-item {
        display: flex;
        align-items: center;
        gap: 1rem; /* Jarak antar ikon dan teks */
    }

    .icon {
        font-size: 1.5rem; /* Ukuran ikon */
        color: #FC6736; /* Warna ikon */
    }

    .contact-item h6 {
        font-size: 1rem; /* Ukuran teks heading */
        font-weight: bold;
        color: #EFECEC;
        margin-bottom: 0.5rem; /* Jarak bawah heading */
    }

    .contact-item span {
        font-size: 0.875rem; /* Ukuran teks tambahan */
    }

    .footer-menu {
        display: flex;
        flex-direction: column; /* Mengatur menu menjadi kolom */
        gap: 0.5rem; /* Jarak antar tautan menu */
        margin-left: 1rem; /* Geser menu ke kiri dengan margin */
        margin-bottom: 2rem; /* Jarak bawah antara menu dan copyright */
        margin-right: 5%; /* Menggeser menu sedikit ke kiri untuk menyelaraskan dengan konten di atasnya */
    }

    .footer-menu h5 {
        font-size: 1.125rem; /* Ukuran heading untuk menu */
        font-weight: bold;
        color: #EFECEC;
        margin-bottom: 1rem; /* Jarak bawah heading menu */
    }

    .footer-menu a {
        color: white; /* Warna teks tautan */
        text-decoration: none; /* Menghapus garis bawah pada tautan */
        margin-bottom: 0.5rem; /* Jarak bawah antar tautan */
    }

    .footer-menu a:hover {
        text-decoration: underline; /* Menambahkan garis bawah pada hover */
    }

    .copyright {
        text-align: left; /* Menempatkan teks copyright di kiri */
        padding: 0.5rem 2rem; /* Padding atas dan bawah copyright */
        border-top: 1px solid #EFECEC; /* Border atas untuk memisahkan copyright dari info footer */
        width: 100%; /* Memastikan copyright mengambil lebar penuh */
        position: absolute;
        bottom: 0; /* Memastikan copyright berada di bagian bawah */
        background-color: #131842; /* Latar belakang footer untuk menjaga keseragaman */
    }

    @media (max-width: 991px) {
        .footer-content {
            flex-direction: column; /* Mengatur arah konten menjadi kolom pada tampilan mobile */
            align-items: center; /* Memusatkan konten */
            margin-right: 0; /* Menghapus margin kanan pada tampilan mobile */
        }

        .footer-logo {
            margin-right: 0; /* Menghapus margin kanan logo pada tampilan mobile */
            margin-bottom: 2rem; /* Menambahkan margin bawah pada logo */
        }

        .footer-info {
            margin-top: 1rem; /* Mengatur jarak atas untuk info pada tampilan mobile */
            align-items: center; /* Memusatkan informasi pada tampilan mobile */
        }

        .footer-menu {
            margin-top: 2rem; /* Jarak atas untuk menu pada tampilan mobile */
            margin-bottom: 2rem; /* Jarak bawah antara menu dan copyright pada tampilan mobile */
        }
        
        .copyright {
            text-align: center; /* Memusatkan teks copyright pada tampilan mobile */
        }
    }
</style>

<div class="container-fluid footer-container px-0">
    <div class="footer-content">
        <div class="footer-logo">
            <?php foreach ($profil as $header) : ?>
                <img data-src="<?= base_url('asset-user/images/'); ?><?= $header->logo_perusahaan ?>" alt="<?= $header->nama_perusahaan ?>" class="img-fluid logo-img lazyload">
            <?php endforeach; ?>
        </div>

        <div class="footer-info">
            <?php foreach ($profil as $header) : ?>
                <div class="contact-item">
                    <i class="bi bi-geo-alt fs-1 icon"></i>
                    <div class="text-start">
                        <h6 class="fw-bold mb-1">Indonesia</h6>
                        <span><?= $header->alamat; ?></span>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="bi bi-envelope-open fs-1 icon"></i>
                    <div class="text-start">
                        <h6 class="fw-bold mb-1"><?= $header->email; ?></h6>
                        <span><?php echo lang('Blog.email'); ?></span>
                    </div>
                </div>
                <div class="contact-item">
                    <i class="bi bi-phone-vibrate fs-1 icon"></i>
                    <div class="text-start">
                        <h6 class="fw-bold mb-1"><?= $header->no_hp; ?></h6>
                        <span><?php echo lang('Blog.notelp'); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="footer-menu">
            <h5><?php echo lang('Blog.menu'); ?></h5>
            <a href="<?= base_url($lang . '/' . $homeLink) ?>" class="footer-link"><?php echo lang('Blog.headerHome'); ?></a>
            <a href="<?= base_url($lang . '/' . $aboutLink) ?>" class="footer-link"><?php echo lang('Blog.headerAbout'); ?></a>
            <a href="<?= base_url($lang . '/' . $articleLink) ?>" class="footer-link"><?php echo lang('Blog.headerArticle'); ?></a>
            <a href="<?= base_url($lang . '/' . $productLink) ?>" class="footer-link"><?php echo lang('Blog.headerProducts'); ?></a>
            <a href="<?= base_url($lang . '/' . $activitiesLink) ?>" class="footer-link"><?php echo lang('Blog.headerActivities'); ?></a>
            <a href="<?= base_url($lang . '/' . $contactLink) ?>" class="footer-link"><?php echo lang('Blog.headerContact'); ?></a>
        </div>
    </div>

    <p class="copyright">
        Copyright &copy;<script>
            document.write(new Date().getFullYear());
        </script>. <?php foreach ($profil as $footer) : ?><?= $footer->teks_footer; ?><?php endforeach; ?>
    </p>
</div>
<!-- Footer End -->
