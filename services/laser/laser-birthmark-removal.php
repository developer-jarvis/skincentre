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
        .laser-birthmark-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/birthmark-removal.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .laser-birthmark-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .laser-birthmark-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .laser-birthmark-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="laser-birthmark-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Laser Birth Mark Removal</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laser Birth Mark Removal</li>
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
                    <p>Laser Birthmark Removal at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/birth-mark-removal.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Birthmarks are natural skin markings that may appear as red, brown, or bluish patches. While
                        many birthmarks are harmless, some individuals may choose to have them removed for cosmetic or
                        personal reasons. Laser Birthmark Removal is a safe, non-surgical procedure that uses targeted
                        laser energy to break down the pigmentation or abnormal blood vessels causing the birthmark.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, we offer advanced laser treatments for different types of birthmarks,
                            including pigmented birthmarks (like café-au-lait spots) and vascular birthmarks (such as
                            port-wine stains). Our dermatologists assess each case individually and design a treatment
                            plan based on the size, type, and location of the birthmark.
                        </p>
                        <p>
                            The procedure is precise, effective, and performed in a professional clinical environment,
                            helping restore clearer, even-toned skin over a series of sessions.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Laser Birthmark Removal?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Experienced dermatologists specializing in laser skin treatments
                            </li>
                            <li class=" mb-3">
                                Use of advanced medical-grade laser technology
                            </li>
                            <li class=" mb-3">
                                Customized treatment plans for various birthmark types
                            </li>
                            <li class=" mb-3">
                                Minimal discomfort and downtime during and after the procedure
                            </li>
                            <li class=" mb-3">
                                Focus on patient comfort, safety, and visible skin improvement
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