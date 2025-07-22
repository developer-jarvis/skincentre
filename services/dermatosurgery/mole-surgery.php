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
        .mole-surgery-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/mole-surgery.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .mole-surgery-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .mole-surgery-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .mole-surgery-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="mole-surgery-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Mole Surgery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mole Surgery</li>
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
                    <p>Mole Surgery at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/mole-surgery.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Moles are common skin growths that can appear anywhere on the body. While most moles are
                        harmless, some may cause cosmetic concerns or require removal due to irritation, changes in
                        shape, size, or color. At The Skin Centre, we offer professional mole surgery services aimed at
                        safe, precise, and scar-minimized mole removal.
                    </p>
                    <div class="py-3">

                        <p>
                            Our dermatologists perform mole surgery using methods such as excision or laser removal,
                            depending on the mole’s type, depth, and location. Every procedure is carried out under
                            strict clinical supervision, ensuring patient safety and comfort. Whether for cosmetic
                            reasons or medical necessity, our approach prioritizes clean removal while preserving the
                            surrounding healthy skin.
                        </p>
                        <p>
                            Patients receive full guidance before and after the procedure, ensuring proper wound care
                            and minimizing the chances of scarring or recurrence.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Mole Surgery?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Performed by experienced dermatologists and skin surgeons
                            </li>
                            <li class=" mb-3">
                                Use of advanced techniques for safe, scar-minimized mole removal
                            </li>
                            <li class=" mb-3">
                                Personalized treatment approach based on mole type and skin condition
                            </li>
                            <li class=" mb-3">
                                Hygienic clinical environment with complete post-procedure care
                            </li>
                            <li class=" mb-3">
                                Focus on both cosmetic and medical skin health outcomes
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