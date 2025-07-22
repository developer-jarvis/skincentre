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
        .hair-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/hair-removal.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .hair-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .hair-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .hair-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="hair-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Laser Hair Removal</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laser Hair Removal</li>
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
                    <p>Laser Hair Removal at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/hair-removal.jpg" alt="" class="img-fluid">
                    </div>
                    <p>
                        Unwanted body or facial hair can be a persistent concern for many. Laser Hair Removal offers a
                        safe, long-lasting solution by targeting hair follicles with focused laser energy, effectively
                        reducing hair growth over time.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, we use advanced, medical-grade laser technology suitable for all skin
                            types. Our experienced dermatologists and trained technicians provide personalized treatment
                            plans tailored to each patient’s skin tone, hair type, and area of concern.
                        </p>
                        <p>
                            Laser Hair Removal is ideal for areas like the face, underarms, arms, legs, back, bikini
                            line, and more. The procedure is non-invasive, quick, and provides smoother skin without the
                            hassle of frequent shaving, waxing, or threading.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Laser Hair Removal?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                FDA-approved laser machines for safe and effective treatment
                            </li>
                            <li class=" mb-3">
                                Expert dermatologists and certified laser technicians
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans for all skin tones and hair types
                            </li>
                            <li class=" mb-3">
                                Minimal discomfort with advanced cooling systems
                            </li>
                            <li class=" mb-3">
                                Focus on long-term hair reduction and smooth skin results
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