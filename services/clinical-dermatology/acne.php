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
        .acne-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/acne-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .acne-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .acne-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .acne-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="acne-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Acne</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Acne</li>
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
                    <p>Acne Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/clinical-dermatology/acne.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Acne is one of the most common skin concerns affecting individuals across all age groups, not
                        just teenagers. It can present as blackheads, whiteheads, pimples, or deeper cystic lesions,
                        often leading to skin irritation, scarring, and reduced confidence. At The Skin Centre, we
                        provide customized, medically supervised acne treatment solutions tailored to each patient’s
                        skin type and acne severity.
                    </p>
                    <div class="py-3">
                        <p>
                            Our dermatologists focus on addressing both active breakouts and underlying causes such as
                            excess oil production, clogged pores, hormonal imbalances, or bacterial growth. Treatment
                            options may include prescription creams, oral medications, chemical peels, laser therapy, or
                            advanced skin treatments like microneedling or RF therapy.
                        </p>
                        <p>
                            Every treatment plan is designed for long-term skin health, aiming not just to clear
                            existing acne but also to prevent future breakouts and minimize scarring. Regular follow-ups
                            and skin care guidance ensure sustainable, visible results.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Acne Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists specializing in clinical acne management
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans addressing all types of acne
                            </li>
                            <li class=" mb-3">
                                Combination of medical therapies, skin treatments, and lifestyle advice
                            </li>
                            <li class=" mb-3">
                                Focus on both acne clearance and scar prevention
                            </li>
                            <li class=" mb-3">
                                Hygienic, professional setup with full patient support and care
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