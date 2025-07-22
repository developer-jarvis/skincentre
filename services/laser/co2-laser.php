<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../common/config.php'; ?>
    <?php include '../../common/head.php'; ?>
    <?php include '../../common/plugins.php'; ?>
</head>

<body >
    <?php include '../../common/header.php'; ?>
    <!-- ======================================== -->
    <style>
        .freckless-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/co2-laser-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .freckless-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .freckless-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .freckless-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="freckless-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Freckles Lentingenes Removal</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Freckles Lentingenes Removal</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ======================================== -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="head-title mb-3">
                    <p>CO2 Laser Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/co2-laser.jpg" alt="" class="img-fluid">
                    </div>
                    <p>
                        CO2 Laser Treatment is a highly effective skin resurfacing procedure that helps treat various
                        skin concerns, including acne scars, wrinkles, fine lines, uneven skin texture, and
                        pigmentation. This advanced laser technology works by creating controlled micro-injuries on the
                        skin’s surface, stimulating collagen production and promoting new, healthier skin growth.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, our dermatologists use fractional CO2 laser systems to deliver precise
                            and safe treatments tailored to your skin type and concern. Whether you're dealing with deep
                            scars, signs of aging, or skin damage, CO2 Laser Treatment offers visible improvement in
                            skin tone, texture, and overall appearance.
                        </p>
                        <p>
                            The procedure involves some downtime as the skin heals, but it provides long-lasting results
                            with a single or multiple sessions, depending on individual needs.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for CO2 Laser Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Advanced fractional CO2 laser technology for safer, more precise results
                            </li>
                            <li class=" mb-3">
                                Expert dermatologists specializing in laser skin resurfacing
                            </li>
                            <li class=" mb-3">
                                Effective for acne scars, wrinkles, pigmentation, and stretch marks
                            </li>
                            <li class=" mb-3">
                                Customized treatment plans and thorough aftercare support
                            </li>
                            <li class=" mb-3">
                                Clean clinical environment ensuring patient comfort and safety
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <?php include '../sidebar.php'; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================== -->
    <?php include '../../common/footer.php'; ?>
</body>

</html>