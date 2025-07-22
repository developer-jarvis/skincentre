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
    .dark-circle-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/dark-circle-banner.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 120px 0;
    }

    .dark-circle-breadcrumb h1 {
        color: var(--secondary-color);
        font-family: 'Times New Roman', Times, serif;
    }

    .dark-circle-breadcrumb a {
        color: var(--secondary-color);
        font-family: 'Times New Roman', Times, serif;
        text-decoration: none;
    }

    .dark-circle-breadcrumb .active {
        color: var(--secondary-color);
        font-family: 'Times New Roman', Times, serif;
        text-decoration: none;
    }
    </style>
    <section class="dark-circle-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Dark Circle</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dark Circle</li>
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
                    <p>Dark Circle Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/dark-circle.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">
                        <h4>Say Goodbye to Tired Eyes and Dark Circles</h4>
                        <p>
                            Dark circles under the eyes can make you look tired, older, or stressed. At The Skin Centre,
                            we offer advanced dark circle treatments designed to reduce pigmentation, puffiness, and
                            under-eye hollowness—giving you a fresher and more youthful appearance.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Causes of Dark Circles:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Genetics
                            </li>
                            <li class=" mb-3">
                                Lack of sleep
                            </li>
                            <li class=" mb-3">
                                Stress and fatigue
                            </li>
                            <li class=" mb-3">
                                Aging and skin thinning
                            </li>
                            <li class=" mb-3">
                                Sun exposure
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Our Treatment Options:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                <strong>Under-Eye Fillers:</strong> To treat hollowness and volume loss.
                            </li>
                            <li class=" mb-3">
                                <strong>Laser Therapy:</strong> To treat hollowness and volume loss.
                            </li>
                            <li class=" mb-3">
                                <strong>Peels & Topical Treatments:</strong> Mild chemical peels and specialized creams
                                to lighten pigmentation.
                            </li>
                            <li class=" mb-3">
                                <strong>PRP Therapy:</strong> Natural treatment using your own platelets to rejuvenate
                                under-eye skin.
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Customized treatment plans as per your skin type.
                            </li>
                            <li class=" mb-3">
                                Safe, clinically tested procedures.
                            </li>
                            <li class=" mb-3">
                                Experienced dermatologists and skin specialists.
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