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
        .psoriasis-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/psoriasis.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .psoriasis-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .psoriasis-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .psoriasis-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="psoriasis-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Psoriasis</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Psoriasis</li>
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
                    <p>Psoriasis Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/clinical-dermatology/psoriasis.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Psoriasis is a chronic skin condition characterized by red, scaly, and itchy patches on the
                        skin, often affecting areas like the elbows, knees, scalp, and back. It occurs due to an
                        overactive immune system, leading to faster skin cell turnover. While it cannot be completely
                        cured, psoriasis can be effectively managed with the right medical care.
                    </p>
                    <div class="py-3">
                        <p>
                            At The Skin Centre, we offer comprehensive psoriasis treatment plans designed to reduce
                            symptoms, control flare-ups, and improve skin appearance. Our dermatologists use a
                            combination of therapies, including topical medications, oral treatments, phototherapy
                            (light therapy), and advanced biologic injections, depending on the severity and type of
                            psoriasis.
                        </p>
                        <p>
                            We focus on customized care, ensuring each patient receives treatment suited to their skin
                            type and health condition. Along with medical treatments, we also guide patients on skincare
                            routines and lifestyle adjustments to help manage psoriasis in the long term.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Psoriasis Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Experienced dermatologists specializing in chronic skin conditions
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans for mild to severe psoriasis
                            </li>
                            <li class=" mb-3">
                                Access to advanced therapies, including phototherapy and biologics
                            </li>
                            <li class=" mb-3">
                                Focus on long-term skin health and flare-up prevention
                            </li>
                            <li class=" mb-3">
                                Complete patient education, care, and follow-up support
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