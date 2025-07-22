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
        .xanthelasma-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/xanthelasma-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .xanthelasma-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .xanthelasma-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .xanthelasma-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="xanthelasma-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Xanthelasma Removal</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Xanthelasma Removal</li>
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
                    <p>Xanthelasma Removal at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/xanthelasma.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Xanthelasma are yellowish cholesterol deposits that appear as soft, flat bumps around the
                        eyelids. While generally harmless, they can affect appearance and may indicate underlying lipid
                        imbalances. At The Skin Centre, we offer safe and effective xanthelasma removal treatments
                        performed by experienced dermatologists.
                    </p>
                    <div class="py-3">
                        <p>
                            Our team uses advanced techniques such as radiofrequency (RF) surgery, laser treatment, or
                            minor excision procedures to gently remove xanthelasma while preserving the delicate skin
                            around the eyes. Each treatment is customized based on the size, depth, and location of the
                            deposits.
                        </p>
                        <p>
                            The procedure is quick, performed under local anesthesia, and requires minimal recovery
                            time. Our focus is on achieving smooth, natural-looking skin with minimal scarring and
                            patient comfort throughout the process.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Xanthelasma Removal?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Dermatologist-supervised procedures ensuring precision and safety
                            </li>
                            <li class=" mb-3">
                                Advanced techniques like RF surgery and laser treatment
                            </li>
                            <li class=" mb-3">
                                Minimal scarring and quick healing
                            </li>
                            <li class=" mb-3">
                                Personalized care tailored to each patient’s skin type and condition
                            </li>
                            <li class=" mb-3">
                                Professional post-treatment support and follow-up care
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