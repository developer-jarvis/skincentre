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
        .geriatic-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/geriatic-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .geriatic-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .geriatic-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .geriatic-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="geriatic-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Geriatic Dermatology</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Geriatic Dermatology</li>
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
                    <p>Geriatric Dermatology at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/clinical-dermatology/geriatic.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        As we age, our skin undergoes significant changes, becoming thinner, drier, and more prone to
                        conditions such as itching, pigmentation, wrinkles, skin infections, and benign or malignant
                        growths. Geriatric dermatology focuses on diagnosing, treating, and managing skin issues
                        specifically related to older adults.
                    </p>
                    <div class="py-3">
                        <p>
                            At The Skin Centre, we provide specialized geriatric dermatology services that address the
                            unique needs of aging skin. Our expert dermatologists offer care for a wide range of
                            age-related skin concerns, including eczema, psoriasis, skin cancers, age spots, fungal
                            infections, and delayed wound healing.
                        </p>
                        <p>
                            We prioritize gentle, customized treatment approaches considering both medical conditions
                            and aesthetic concerns. From skin health maintenance to managing chronic skin diseases, our
                            team ensures older patients receive respectful, compassionate care focused on comfort,
                            quality of life, and skin wellness.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Geriatric Dermatology?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Experienced dermatologists trained in elderly skin care
                            </li>
                            <li class=" mb-3">
                                Comprehensive management of age-related skin conditions
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans prioritizing safety and comfort
                            </li>
                            <li class=" mb-3">
                                Focus on both medical and cosmetic dermatology for older adults
                            </li>
                            <li class=" mb-3">
                                Supportive clinical environment with professional follow-up care
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