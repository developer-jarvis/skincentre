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
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/freckless-banner.jpg');
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
                    <p>Freckles & Lentigines Removal at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/freckles.jpg" alt="" class="img-fluid">
                    </div>
                    <p>
                        Freckles and lentigines are common skin pigmentation concerns caused by sun exposure, aging, or
                        genetic factors. While harmless, they can affect skin appearance and confidence. At The Skin
                        Centre, we offer safe and effective laser treatments specifically designed to reduce and remove
                        freckles and lentigines, helping restore clearer, even-toned skin.
                    </p>
                    <div class="py-3">

                        <p>
                            Using advanced laser technology, our dermatologists target excess melanin in the skin
                            without harming surrounding tissues. The laser breaks down pigmentation, allowing the body’s
                            natural healing process to fade the spots over a series of sessions.
                        </p>
                        <p>
                            The treatment is non-invasive, suitable for various skin types, and requires minimal
                            downtime, making it an ideal option for both men and women seeking visible improvement in
                            skin tone and clarity.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Freckles & Lentigines Removal?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists with experience in pigmentation treatments
                            </li>
                            <li class=" mb-3">
                                Advanced laser systems for precise targeting of pigment spots
                            </li>
                            <li class=" mb-3">
                                Effective for freckles, age spots, sun spots, and lentigines
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans based on skin type and concern
                            </li>
                            <li class=" mb-3">
                                Minimal downtime with a focus on patient comfort and safety
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