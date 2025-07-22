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
        .hydrafacial-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/hydrafacial-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .hydrafacial-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .hydrafacial-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .hydrafacial-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="hydrafacial-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Hydrafacial</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Hydrafacial</li>
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
                    <p>HydraFacial Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/hydrafacial.avif" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">
                        <h4>Reveal Your Skin’s Natural Glow with HydraFacial</h4>
                        <p>
                            HydraFacial is a non-invasive, multi-step facial treatment that cleanses, exfoliates, and
                            hydrates the skin—all in one session. Using advanced vortex technology, HydraFacial deeply
                            cleanses pores while infusing skin with nourishing serums, leaving your skin instantly
                            radiant and refreshed.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Benefits of HydraFacial:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Deep cleansing and exfoliation
                            </li>
                            <li class=" mb-3">
                                Hydration and nourishment for all skin types
                            </li>
                            <li class=" mb-3">
                                Reduces fine lines and wrinkles
                            </li>
                            <li class=" mb-3">
                                Improves skin tone, texture, and elasticity
                            </li>
                            <li class=" mb-3">
                                Minimizes pore size and controls oil
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose HydraFacial at The Skin Centre?</h4>
                        <p>
                            At The Skin Centre, our dermatology experts provide customized HydraFacial treatments
                            tailored to your skin’s specific needs—whether it’s dullness, dryness, acne, or anti-aging.
                            Experience visible skin improvement with zero downtime and long-lasting results.
                        </p>
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