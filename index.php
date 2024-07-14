<?php require 'header.php' ?>

<!-- Hero Section -->
<section id="hero" class="hero section">

    <!-- slide -->
    <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <?php $i = 1 ?>
        <?php $slide = get("SELECT * FROM slide ORDER BY urutan ASC"); ?>
        <?php foreach ($slide as $row) : ?>
            <div class="carousel-item <?= $i == 1 ? 'active' : ''; ?>">
                <img src="<?= $base_url; ?>/assets/uploads/slide/<?= $row['gambar']; ?>" alt="<?= $row['judul']; ?>">
                <div class="carousel-container">
                    <h2><?= $row['judul']; ?></h2>
                    <p><?= $row['deskripsi']; ?></p>
                    <a href="<?= $row['link']; ?>" class="btn-get-started" target="_blank"><?= $row['tombol']; ?></a>
                </div>
            </div>
            <?php $i++ ?>
        <?php endforeach ?>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
    <!-- end slide -->

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="section about">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="<?= $base_url; ?>front/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 order-2 order-lg-1 content">
                <h3>Voluptatem dignissimos provident</h3>
                <p class="fst-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                </p>
                <ul>
                    <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                    <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</span></li>
                </ul>
                <p>
                    Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident
                </p>
            </div>
        </div>

    </div>

</section><!-- /About Section -->

<!-- prodi -->
<section id="services" class="services section">

    <div class="container">

        <div class="row gy-4 justify-content-center">

            <?php $i = 100 ?>
            <?php $prodi = get("SELECT * FROM prodi ORDER BY urutan ASC"); ?>
            <?php foreach ($prodi as $row) : ?>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $i; ?>">
                    <div class="service-item  position-relative">
                        <div class="icon">
                            <i class="<?= $row['icon']; ?>"></i>
                        </div>
                        <a href="#" class="stretched-link">
                            <h3><?= $row['prodi']; ?></h3>
                        </a>
                        <p><?= $row['deskripsi']; ?></p>
                    </div>
                </div>
                <?php $i += 100 ?>
            <?php endforeach ?>

        </div>

    </div>

</section>
<!-- end prodi -->

<!-- Clients Section -->
<section id="clients" class="section clients">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Clients</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                        "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                    },
                    "breakpoints": {
                        "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                        },
                        "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                        },
                        "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                        },
                        "992": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                        }
                    }
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-1.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-2.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-3.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-4.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-5.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-6.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-7.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="<?= $base_url; ?>front/img/clients/client-8.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Clients Section -->

<?php require 'footer.php' ?>