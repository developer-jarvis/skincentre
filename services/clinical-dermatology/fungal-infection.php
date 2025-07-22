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
        .fungal-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/fungal-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .fungal-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .fungal-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .fungal-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="fungal-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Fungal Infection</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Fungal Infection</li>
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
                    <p>Fungal Infection Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/clinical-dermatology/fungal.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Fungal infections are common skin concerns caused by various types of fungi that thrive in warm,
                        moist environments. They can affect different parts of the body, including the skin, nails,
                        scalp, and mucous membranes. Conditions like ringworm, athlete’s foot, fungal nail infections,
                        and candidiasis fall under this category.
                    </p>
                    <div class="py-3">
                        <p>
                            At The Skin Centre, we offer expert diagnosis and customized treatment for all types of
                            fungal infections. Our dermatologists provide effective solutions using a combination of
                            antifungal creams, oral medications, and advanced therapies suited to the severity and
                            location of the infection.
                        </p>
                        <p>
                            We focus not only on clearing the infection but also on preventing recurrences through
                            proper skin care advice, hygiene guidance, and follow-up support. Timely treatment helps
                            avoid complications like skin damage, spread to other areas, or long-term nail involvement.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Fungal Infection Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists trained in dermoscopic evaluation
                            </li>
                            <li class=" mb-3">
                                Experienced dermatologists with expertise in fungal skin conditions
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans using topical and oral antifungal therapies
                            </li>
                            <li class=" mb-3">
                                Comprehensive care for skin, nail, and scalp fungal infections
                            </li>
                            <li class=" mb-3">
                                Focus on long-term results and recurrence prevention
                            </li>
                            <li class=" mb-3">
                                Hygienic clinical setup with complete patient care and follow-up
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