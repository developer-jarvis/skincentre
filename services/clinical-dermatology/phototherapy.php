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
        .phototherapy-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/phototherapy-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .phototherapy-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .phototherapy-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .phototherapy-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="phototherapy-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Phototherapy</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Phototherapy</li>
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
                    <p>Phototherapy at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/clinical-dermatology/phototherapy.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Phototherapy is an advanced dermatological treatment that uses controlled exposure to
                        ultraviolet (UV) light to manage various skin conditions. It is especially effective in treating
                        chronic skin disorders like psoriasis, vitiligo, eczema, and certain forms of dermatitis.
                    </p>
                    <div class="py-3">
                        <p>
                            At The Skin Centre, we offer professional phototherapy services using medically approved UVB
                            narrowband or UVA light systems. The treatment helps reduce skin inflammation, slow abnormal
                            skin cell growth, and encourage repigmentation in conditions like vitiligo. Each session is
                            carefully supervised by experienced dermatologists to ensure both safety and effectiveness.
                        </p>
                        <p>
                            Phototherapy is a non-invasive, well-tolerated treatment option suitable for patients who
                            prefer alternatives to long-term medication. Results typically improve gradually over a
                            series of sessions, with noticeable reduction in symptoms and improvement in skin
                            appearance.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Phototherapy?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists with experience in light-based skin treatments
                            </li>
                            <li class=" mb-3">
                                Use of modern, medically certified phototherapy equipment
                            </li>
                            <li class=" mb-3">
                                Personalized treatment schedules tailored to each patient’s condition
                            </li>
                            <li class=" mb-3">
                                Safe, non-invasive procedure with minimal side effects
                            </li>
                            <li class=" mb-3">
                                Focus on long-term skin health and consistent patient follow-up
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