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
        .double-fillers-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/double-fillers.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .double-fillers-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .double-fillers-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .double-fillers-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="double-fillers-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Double Fillers</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Double Fillers
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
                    <p>Double Fillers Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/double-fillers.avif" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">

                        <p>
                            Double Fillers, commonly referred to as dermal fillers, are a non-surgical cosmetic
                            procedure designed to restore lost facial volume, enhance contours, and reduce the
                            appearance of fine lines and wrinkles. At The Skin Centre, we offer expert-administered
                            filler treatments that help achieve natural-looking facial rejuvenation without invasive
                            surgery.
                        </p>

                    </div>

                    <div class="py-3">
                        <p>
                            This treatment involves injecting medically approved filler substances into targeted areas
                            of the face, such as cheeks, jawline, lips, and under-eye hollows. The goal is to create a
                            balanced, fuller, and more youthful appearance by smoothing wrinkles, lifting sagging skin,
                            and enhancing facial features.
                        </p>
                    </div>

                    <div class="py-3">
                        <p>
                            At The Skin Centre, every filler treatment is customized based on your face structure, skin
                            type, and personal aesthetic goals. Our experienced dermatologists ensure safe application,
                            precision, and long-lasting results that complement your natural beauty.
                        </p>
                    </div>


                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Double Fillers?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Treatment performed by certified dermatologists and aesthetic experts
                            </li>
                            <li class=" mb-3">
                                Use of USFDA-approved, high-quality filler products
                            </li>
                            <li class=" mb-3">Customized filler plans for facial contouring and anti-aging</li>
                            <li class=" mb-3">Focus on natural-looking, balanced results</li>
                            <li class=" mb-3">Comfortable procedure with minimal downtime</li>
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