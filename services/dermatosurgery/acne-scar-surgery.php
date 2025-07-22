<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../common/config.php'; ?>
    <?php include '../../common/head.php'; ?>
    <?php include '../../common/plugins.php'; ?>
</head>

<body>
    <?php include '../../common/header.php'; ?>
    <!-- ======================================== -->
    <style>
        .acne-scar-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/acne-scar-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .acne-scar-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .acne-scar-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .acne-scar-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="acne-scar-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Acne Scar Surgery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Acne Scar Surgery</li>
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
                    <p>Acne Scar Surgery at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/acne-surgery.avif" alt="" class="img-fluid">
                    </div>
                    <p>
                        Acne scars can leave permanent marks on the skin, affecting both appearance and confidence. At
                        The Skin Centre, we offer specialized acne scar surgery as part of our dermatosurgery services,
                        targeting deep and stubborn scars that may not respond to regular skin treatments. This
                        procedure involves advanced dermatological techniques such as subcision, punch excision, or
                        laser-assisted scar revision, depending on the scar type and skin condition.
                    </p>
                    <div class="py-3">

                        <p>
                            Acne scar surgery helps break down scar tissue, stimulate collagen regeneration, and
                            smoothen uneven skin texture. It is ideal for individuals dealing with boxcar scars,
                            ice-pick scars, rolling scars, and other prominent acne-related marks. The treatment is
                            performed in a controlled, sterile environment by experienced dermatologists, ensuring both
                            safety and visible, lasting results.
                        </p>
                        <p>
                            With personalized treatment planning and careful post-surgical care, patients can expect
                            significant improvement in skin smoothness and clarity, restoring a healthier, more even
                            complexion.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Acne Scar Surgery?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists specialized in dermatosurgery
                            </li>
                            <li class=" mb-3">
                                Use of advanced scar revision techniques tailored to scar type
                            </li>
                            <li class=" mb-3">
                                Personalized care plans for each skin condition
                            </li>
                            <li class=" mb-3">
                                Safe, hygienic clinical environment with post-surgery guidance
                            </li>
                            <li class=" mb-3">
                                Focus on natural skin restoration and patient comfort
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