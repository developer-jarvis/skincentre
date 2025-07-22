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
        .laser-carbon-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/laser-peeling.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .laser-carbon-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .laser-carbon-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .laser-carbon-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="laser-carbon-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Laser Carbon</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laser Carbon</li>
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
                    <p>Laser Carbon Peel at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/laser-peeling.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Laser Carbon Peel is a modern skin rejuvenation treatment designed to deeply cleanse, exfoliate,
                        and refresh dull or oily skin. It uses a thin layer of medical-grade carbon applied to the skin,
                        followed by laser energy that targets the carbon particles, gently removing dead skin cells,
                        impurities, and excess oil.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, we provide safe and effective Laser Carbon Peel sessions performed by
                            experienced dermatologists. This treatment helps reduce enlarged pores, acne, blackheads,
                            and uneven skin tone while promoting collagen production for a firmer, smoother appearance.
                            It’s often referred to as the "Hollywood Facial" due to its popularity and immediate visible
                            glow post-treatment.
                        </p>
                        <p>
                            With minimal downtime and a comfortable procedure, Laser Carbon Peel is ideal for
                            individuals seeking clearer, brighter, and healthier skin without aggressive chemical peels
                            or abrasive exfoliation methods.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Laser Carbon Peel?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Advanced laser technology with high-quality carbon solutions
                            </li>
                            <li class=" mb-3">
                                Experienced dermatologists ensuring precise and safe treatment
                            </li>
                            <li class=" mb-3">
                                Effective for oily skin, acne, pigmentation, and enlarged pores
                            </li>
                            <li class=" mb-3">
                                Quick procedure with minimal discomfort and zero downtime
                            </li>
                            <li class=" mb-3">
                                Personalized skin care plans and complete aftercare guidance
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