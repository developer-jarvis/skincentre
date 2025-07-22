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
        .vitiligo-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/vitiligo.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .vitiligo-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .vitiligo-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .vitiligo-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="vitiligo-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Vitiligo</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vitiligo</li>
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
                    <p>Vitiligo Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/clinical-dermatology/vitiligo.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Vitiligo is a skin condition where patches of skin lose their natural pigment, resulting in
                        white or lighter-colored areas. It occurs when the pigment-producing cells (melanocytes) stop
                        functioning or are destroyed. While vitiligo is not harmful or contagious, it can affect a
                        person’s appearance and self-confidence.
                    </p>
                    <div class="py-3">
                        <p>
                            At The Skin Centre, we provide expert care and personalized treatment plans for vitiligo.
                            Our dermatologists use a combination of therapies such as topical medications, phototherapy
                            (narrowband UVB light therapy), surgical options like skin grafting, and melanocyte
                            transplants in suitable cases.
                        </p>
                        <p>
                            The goal of our vitiligo treatment is to restore pigmentation, balance skin tone, and slow
                            the progression of depigmentation. Each patient receives a customized approach based on the
                            extent and type of vitiligo, ensuring safe, effective, and long-term skin health.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Vitiligo Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Experienced dermatologists with expertise in managing vitiligo
                            </li>
                            <li class=" mb-3">
                                Advanced treatment options including phototherapy and surgical methods
                            </li>
                            <li class=" mb-3">
                                Customized care plans tailored to each patient’s condition and skin type
                            </li>
                            <li class=" mb-3">
                                Focus on visible results, skin tone improvement, and patient confidence
                            </li>
                            <li class=" mb-3">
                                Supportive, professional care with long-term follow-up and guidance
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