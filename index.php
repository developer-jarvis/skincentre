<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <main>
        <?php include 'common/header.php'; ?>
        <!-- ========================================= -->
        <section class="hero position-relative">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= $base_url ?>assets/images/banner/1.jpg" class="d-block w-100"
                            alt="skin centre banner">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $base_url ?>assets/images/banner/2.jpg" class="d-block w-100"
                            alt="skin centre banner">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $base_url ?>assets/images/banner/3.jpg" class="d-block w-100"
                            alt="skin centre banner">
                    </div>
                </div>

                <!-- Overlay -->
                <div
                    class="carousel-overlay position-absolute w-100 h-100 top-0 start-0 d-flex flex-column justify-content-center align-items-center text-center text-white px-3">
                    <h1 class="display-4 fw-bold">Your Skin, Our Care</h1>
                    <p class="lead mb-4">Advanced Dermatology & Cosmetic Solutions</p>
                    <a href="<?= $base_url ?>contact-us.php" class="custom-btn  px-4 py-2">Contact Us <i
                            class="bi bi-arrow-right"></i></a>
                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>
        <!-- ========================================================================================= -->
        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="head-title">
                        <p>Who We Are</p>
                        <h2>About Skin Centre</h2>
                    </div>

                    <div class="col-md-5">
                        <img src="<?= $base_url ?>assets/images/about/1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                        <p class="text-justify">
                            Our dermatology clinic “The Skin Center” care for both common and rare problems of skin,
                            hair,
                            nails, spots, and mucous membranes.
                        </p>
                        <p class="text-justify">
                            Medical specialists at The Skin Center provide medical and surgical dermatology services.
                            Our
                            medical specialists have helped via medicines, spotlights, lasers, and surgery, and have
                            comforted thousands of patients suffering from colourful skin issues. We also deal with
                            sexually
                            transmitted complaints (STDs). We are a pioneering Centre for exclusive hair transplants
                            with a
                            largely professed medical specialist team led by Dr Abhinav Kumar. We've helped thousands of
                            patients & cases to overcome delicate and uncomely skin conditions. Whether you suffer from
                            sun
                            damage, acne scars, wrinkles, blots, leg veins or birthmarks, one of our providers will help
                            you
                            find the proper treatment.
                        </p>
                        <div class="py-3">
                            <a href="<?= $base_url ?>about-us.php" class="btn rounded-pill px-4 py-2">Read More <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =============================================================================================== -->
        <style>
            .services .service-card {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                border-radius: 10px;
                transition: transform 0.3s ease;
            }

            .services .services-card img {
                height: 200px;
                object-fit: cover;
                background-color: var(--primary-color);
            }
        </style>
        <section class="py-5 services bg-white">
            <div class="container">
                <div class="row">
                    <div class="head-title  mb-4">
                        <p>What We Do</p>
                        <h2>Our Services</h2>
                        <p class="text-muted">We offer personalized skin, hair, and cosmetic treatments using the latest
                            dermatological technology and care standards.</p>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="service-card text-center p-4 rounded-4 h-100">
                            <img src="<?= $base_url ?>assets/images/services/asthetics/botox.jpg" alt="Aesthetics"
                                class="img-fluid mb-3">
                            <h5 class="fw-semibold mb-2">Aesthetics</h5>
                            <p class="text-muted ">Enhance your appearance with Botox, fillers, skin rejuvenation,
                                anti-aging
                                facials, and personalized cosmetic procedures.</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="service-card text-center p-4 rounded-4 h-100">
                            <img src="<?= $base_url ?>assets/images/services/asthetics/acne-scar.jpg"
                                alt="Dermatosurgery" class="img-fluid mb-3">
                            <h5 class="fw-semibold mb-2">Dermatosurgery</h5>
                            <p class="text-muted">Expert surgical solutions for moles, cysts, skin tags, scars, and
                                other
                                skin conditions requiring precision care.</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="service-card text-center p-4 rounded-4 h-100">
                            <img src="<?= $base_url ?>assets/images/services/asthetics/pigmentation.jpg"
                                alt="Clinical Dermatology" class="img-fluid mb-3">
                            <h5 class="fw-semibold mb-2">Clinical Dermatology</h5>
                            <p class="text-muted">Comprehensive treatment for acne, eczema, psoriasis, pigmentation,
                                fungal
                                infections, and other chronic skin concerns.</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="service-card text-center p-4 rounded-4 h-100">
                            <img src="<?= $base_url ?>assets/images/services/asthetics/tatoo-removal.jpg"
                                alt="Laser Treatments" class="img-fluid mb-3">
                            <h5 class="fw-semibold mb-2">Laser Treatments</h5>
                            <p class="text-muted">Advanced laser therapies for hair removal, tattoo removal,
                                pigmentation
                                reduction, scar treatment, and skin tightening.</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="service-card text-center p-4 rounded-4 h-100">
                            <img src="<?= $base_url ?>assets/images/services/asthetics/hair-loss.jpg" alt="Trichology"
                                class="img-fluid mb-3">
                            <h5 class="fw-semibold mb-2">Trichology</h5>
                            <p class="text-muted">Specialized diagnosis and treatment of hair fall, dandruff, scalp
                                infections, and advanced hair regrowth solutions.</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="service-card text-center p-4 rounded-4 h-100">
                            <img src="<?= $base_url ?>assets/images/services/asthetics/stis.jpg" alt="Venereology"
                                class="img-fluid mb-3">
                            <h5 class="fw-semibold mb-2">Venereology</h5>
                            <p class="text-muted">Confidential care for sexually transmitted infections (STIs), ensuring
                                safe and effective diagnosis, treatment, and counseling.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================================================== -->
        <!-- <style>
        .comparison-container {
            position: relative;
            width: 700px;
            max-width: 100%;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            cursor: ew-resize;
            transition: box-shadow 0.3s ease;
        }

        .comparison-container:hover {
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.3);
        }

        .comparison-container img {
            width: 100%;
            display: block;
            height: auto;
            user-select: none;
            pointer-events: none;
        }

        .after-image-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            overflow: hidden;
            width: 50%;
            z-index: 2;
            transition: width 0.05s linear;
        }

        .after-image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }

        .slider-handle {
            position: absolute;
            top: 0;
            left: 50%;
            width: 4px;
            height: 100%;
            background: #ffffff;
            z-index: 3;
            transform: translateX(-50%);
            transition: left 0.05s linear;
        }

        .slider-handle::before {
            content: "\2194";
            font-size: 20px;
            color: #333;
            font-weight: bold;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #000;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.25);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        </style>

        <section class="py-5">
            <div class="container">
                <div class="comparison-container" id="slider">
                    <img src="<?= $base_url ?>assets/images/services/asthetics/acne-scar.jpg" alt="Before">

                    <div class="after-image-wrapper" id="afterImageWrapper">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/botox.jpg" alt="After">
                    </div>

                    <div class="slider-handle" id="sliderHandle"></div>
                </div>
            </div>
        </section>

        <script>
        const slider = document.getElementById('slider');
        const afterWrapper = document.getElementById('afterImageWrapper');
        const handle = document.getElementById('sliderHandle');

        function moveSlider(x) {
            const rect = slider.getBoundingClientRect();
            let offset = x - rect.left;
            offset = Math.max(0, Math.min(offset, rect.width));
            const percent = (offset / rect.width) * 100;

            afterWrapper.style.width = `${percent}%`;
            handle.style.left = `${percent}%`;
        }

        slider.addEventListener('mousedown', (e) => {
            moveSlider(e.clientX);
            document.addEventListener('mousemove', mouseMove);
            document.addEventListener('mouseup', mouseUp);
        });

        function mouseMove(e) {
            moveSlider(e.clientX);
        }

        function mouseUp() {
            document.removeEventListener('mousemove', mouseMove);
            document.removeEventListener('mouseup', mouseUp);
        }

        slider.addEventListener('touchstart', (e) => {
            moveSlider(e.touches[0].clientX);
            document.addEventListener('touchmove', touchMove);
            document.addEventListener('touchend', touchEnd);
        });

        function touchMove(e) {
            moveSlider(e.touches[0].clientX);
        }

        function touchEnd() {
            document.removeEventListener('touchmove', touchMove);
            document.removeEventListener('touchend', touchEnd);
        }
        </script> -->

        <!-- ==================================================================================== -->
        <!-- Style (can go in your CSS file) -->
        <style>
            .review-box {
                background: #fff;
                border-radius: 20px;
                padding: 25px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.07);
                transition: all 0.3s ease-in-out;
                height: 100%;
                position: relative;
                overflow: hidden;
            }

            .review-box:hover {
                transform: translateY(-5px);
            }

            .review-box .profile-img {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                object-fit: cover;
                border: 2px solid #00aaff;
                margin-bottom: 10px;
            }

            .review-box .star-rating {
                color: #f7b500;
                font-size: 1.2rem;
            }

            .review-box .quote {
                font-style: italic;
                color: #555;
                margin: 15px 0;
            }

            .review-box .reviewer {
                font-weight: bold;
                color: #333;
            }
        </style>

        <section class="py-5" style="background-color: #f5f8ff;">
            <div class="container">
                <div class="head-title">
                    <p class="">Testimonials</p>
                    <h2 class=" mb-5">What Our Clients Say</h2>
                </div>
                <div class="swiper googleReviewSwiper">
                    <div class="swiper-wrapper" id="google-reviews-slider"></div>
                </div>
            </div>
        </section>
        <!-- ===================================================================================== -->
        <?php include 'youtube.php'; ?>
        <!-- ====================================================================================== -->
        <style>
            .latest-blogs .card img {
                height: 250px;
                width: 100%;
                width: 100%;
                object-fit: contain;
                background-color: var(--primary-color);
            }
        </style>
        <section class="py-5 latest-blogs">
            <div class="container">
                <div class="row">
                    <div class="head-title mb-2">
                        <div class="head-title mb-3">
                            <p>Our Blogs</p>
                            <h2>Latest Blogs</h2>
                        </div>
                        <?php
                        include 'admin/common/config.php';

                        $stmt = $conn->prepare("SELECT slug, cover_title, cover_desc, cover_image, cover_alt, created_at FROM blogs ORDER BY created_at DESC LIMIT 3");
                        $stmt->execute();
                        $result = $stmt->get_result();

                        while ($row = $result->fetch_assoc()) {
                            $slug = urlencode($row['slug']);
                            $coverTitle = htmlspecialchars($row['cover_title']);
                            $coverDesc = $row['cover_desc'];
                            $coverAlt = htmlspecialchars($row['cover_alt']);
                            $coverImage = "admin/uploads/blogs/" . htmlspecialchars($row['cover_image']);
                            $createdAt = date("d M Y", strtotime($row['created_at']));
                            ?>
                            <div class="col-md-4 mb-4">
                                <a href="blogs/<?= $slug; ?>" class="text-decoration-none text-dark">
                                    <div class="card h-100 shadow-sm border-0">
                                        <img src="<?= $coverImage; ?>" class="card-img-top" alt="<?= $coverAlt; ?>"
                                            title="<?= $coverTitle; ?>">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $coverTitle; ?></h5>
                                            <p class="card-text">
                                                <?= mb_strimwidth($coverDesc, 0, 160, '...'); ?>
                                            </p>
                                        </div>
                                        <div class="card-footer bg-white border-0">
                                            <small class="text-muted">Published on <?= $createdAt; ?></small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <!-- =============================================================================== -->
        <?php include 'common/footer.php'; ?>
        <!-- ============================================================================= -->
    </main>
</body>
<!-- Script -->
<script>
    fetch("google-reviews.php?t=" + new Date().getTime())
        .then(res => res.json())
        .then(reviews => {
            let html = "";
            reviews.forEach(review => {
                let fullText = review.text;
                let shortText = fullText.length > 500 ? fullText.substring(0, 500) + "..." : fullText;

                html += `<div class="swiper-slide">
                    <div class="review-box">
                        <div class="star-rating" style="color:#fbc02d; font-size: 20px;">${"★".repeat(review.rating)}${"☆".repeat(5 - review.rating)}</div>
                        <p>"${shortText}"</p>
                        <p><strong>- ${review.author_name}</strong></p>
                    </div>
                </div>`;
            });
            document.getElementById("google-reviews-slider").innerHTML = html;

            new Swiper(".googleReviewSwiper", {
                slidesPerView: 1,
                spaceBetween: 20,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2
                    },
                    992: {
                        slidesPerView: 3
                    }
                },
                loop: true,
                speed: 600,
                grabCursor: true,
            });
        });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            counter.innerText = '0';
            const updateCounter = () => {
                const target = +counter.getAttribute('data-target');
                const current = +counter.innerText;
                const increment = target / 200;

                if (current < target) {
                    counter.innerText = `${Math.ceil(current + increment)}`;
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target + "+";
                }
            };
            updateCounter();
        });
    });
</script>

</html>