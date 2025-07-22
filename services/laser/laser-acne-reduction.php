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
        .laser-beard-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/acne-reduction-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .laser-beard-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .laser-beard-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .laser-beard-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="laser-beard-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Laser Beard Shaping</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laser Beard Shaping</li>
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
                    <p>Laser Acne Reduction at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/laser-acne-removal.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Persistent acne can affect both skin health and confidence. Laser Acne Reduction is a
                        scientifically advanced treatment that targets the root causes of acne—excess oil production,
                        bacteria, and inflammation. The procedure uses focused laser light to reduce active acne
                        lesions, prevent future breakouts, and improve overall skin texture.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, our dermatologists offer safe and effective Laser Acne Reduction
                            treatments tailored to your skin type and acne severity. This non-invasive procedure helps
                            in reducing not just pimples but also redness, post-acne pigmentation, and scarring over
                            time.
                        </p>
                        <p>
                            With minimal discomfort and downtime, Laser Acne Reduction is ideal for individuals who want
                            clearer, smoother skin without relying solely on medications or topical treatments.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Laser Acne Reduction?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists specializing in acne management
                            </li>
                            <li class=" mb-3">
                                Use of advanced laser technology for targeted acne treatment
                            </li>
                            <li class=" mb-3">
                                Effective for active acne, acne scars, and pigmentation
                            </li>
                            <li class=" mb-3">
                                Minimal downtime with quick and noticeable results
                            </li>
                            <li class=" mb-3">
                                Personalized care plans with professional aftercare guidance
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