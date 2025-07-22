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
        .nail-surgery-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/nail-surgery-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .nail-surgery-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .nail-surgery-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .nail-surgery-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="nail-surgery-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Nail Surgery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Nail Surgery</li>
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
                    <p>Nail Surgery at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/nail-surgery.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Nail problems such as ingrown nails, fungal infections, nail tumors, or chronic nail deformities
                        can cause both discomfort and affect appearance. At The Skin Centre, we provide specialized nail
                        surgery services as part of our dermatosurgery treatments to address a wide range of
                        nail-related conditions safely and effectively.
                    </p>
                    <div class="py-3">

                        <p>
                            Nail surgery involves minor procedures performed under local anesthesia, ensuring patient
                            comfort throughout the treatment. Techniques such as partial or total nail removal, nail
                            matrix ablation, or excision of abnormal nail growths are carefully selected based on each
                            patient’s specific issue.
                        </p>
                        <p>
                            Our expert dermatologists carry out nail surgery in a clean, controlled environment,
                            focusing on long-term relief, healthy nail regrowth, and preventing recurrence of the
                            problem. Post-procedure care and guidance are provided to support proper healing and
                            recovery.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Nail Surgery?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Dermatologist-supervised procedures ensuring safety and accuracy
                            </li>
                            <li class=" mb-3">
                                Treatment for ingrown nails, fungal infections, nail tumors, and more
                            </li>
                            <li class=" mb-3">
                                Minimally invasive techniques with quick recovery
                            </li>
                            <li class=" mb-3">
                                Personalized care plans based on the patient’s nail condition
                            </li>
                            <li class=" mb-3">
                                Hygienic clinical setup with professional follow-up support
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