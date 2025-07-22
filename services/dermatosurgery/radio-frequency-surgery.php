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
        .radio-frequency-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/radoi-frequency.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .radio-frequency-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .radio-frequency-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .radio-frequency-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="radio-frequency-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Radio Frequency Surgery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Radio Frequency Surgery</li>
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
                    <p>Radiofrequency (RF) Surgery at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/radio-surgery.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Radiofrequency (RF) Surgery is a modern, minimally invasive dermatological procedure used to
                        treat various skin concerns with precision and minimal discomfort. At The Skin Centre, we use RF
                        surgery for the safe removal of skin tags, warts, moles, benign skin growths, and other minor
                        skin lesions.
                    </p>
                    <div class="py-3">

                        <p>
                            This technique works by using high-frequency radio waves to cut, coagulate, or remove
                            targeted skin tissue without causing significant damage to the surrounding skin. Compared to
                            traditional surgical methods, RF surgery offers quicker healing, minimal scarring, and
                            reduced risk of infection.
                        </p>
                        <p>
                            Our experienced dermatologists perform RF surgery under local anesthesia, ensuring patient
                            safety and comfort throughout the procedure. It’s a fast, effective solution for both
                            cosmetic and medical skin concerns, with minimal downtime required.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for RF Surgery?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Advanced radiofrequency equipment for precise skin procedures
                            </li>
                            <li class=" mb-3">
                                Experienced dermatologists ensuring safe and effective treatment
                            </li>
                            <li class=" mb-3">
                                Minimal scarring and faster recovery compared to traditional surgery
                            </li>
                            <li class=" mb-3">
                                Ideal for skin tags, warts, moles, and benign skin lesions
                            </li>
                            <li class=" mb-3">
                                Clean, professional clinical setup with post-procedure care guidance
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