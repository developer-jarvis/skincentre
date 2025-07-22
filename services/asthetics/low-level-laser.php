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
        .low-level-laser-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/low-level-laser-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .low-level-laser-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .low-level-laser-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .low-level-laser-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="low-level-laser-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Low Level Laser With Therapy Face Mask</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Low Level Laser With Therapy Face Mask
                        </li>
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
                    <p>Low Level Laser Therapy (LLLT) with Face Mask at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/low-level-laser.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">

                        <p>
                            Low Level Laser Therapy (LLLT) with Face Mask is an advanced, non-invasive skin treatment
                            designed to rejuvenate, repair, and refresh facial skin using gentle laser light energy.
                            This therapy uses low-intensity laser beams combined with specially designed LED face masks
                            that deliver light at controlled wavelengths, stimulating skin cells without causing heat or
                            damage.
                        </p>

                    </div>

                    <div class="py-3">
                        <p>
                            At The Skin Centre, LLLT with Face Mask is recommended for improving overall skin tone,
                            reducing fine lines, minimizing acne and inflammation, and boosting collagen production. The
                            treatment enhances blood circulation and promotes cellular repair, leaving your skin
                            clearer, firmer, and more radiant. It’s completely painless, requires no downtime, and is
                            suitable for all skin types seeking safe, visible skin improvement.
                        </p>
                    </div>

                    

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Low Level Laser Therapy?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Advanced FDA-approved laser and LED face mask systems
                            </li>
                            <li class=" mb-3">
                                Dermatologist-supervised procedures ensuring safe application
                            </li>
                            <li class=" mb-3">Suitable for anti-aging, acne control, and skin brightening</li>
                            <li class=" mb-3">Comfortable, non-invasive treatment with no downtime</li>
                            <li class=" mb-3">Personalized care and guidance based on your skin goals</li>
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