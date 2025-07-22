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
        .keloids-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/keloids-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .keloids-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .keloids-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .keloids-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="keloids-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Keloids Treatment</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Keloids Treatment</li>
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
                    <p>Keloid Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/vitiligo.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Keloids are thick, raised scars that form due to an overgrowth of fibrous tissue after skin
                        injury, surgery, or acne. They can be itchy, painful, and often cause cosmetic concerns. At The
                        Skin Centre, we offer specialized keloid treatment under the supervision of experienced
                        dermatologists, focusing on reducing both the size and discomfort of these scars.
                    </p>
                    <div class="py-3">

                        <p>
                            Our approach combines advanced dermatological procedures such as corticosteroid injections,
                            laser therapy, cryotherapy, and minor surgical options when necessary. The treatment plan is
                            customized based on the keloid’s size, location, and patient’s skin type.
                        </p>
                        <p>
                            Keloid treatment at The Skin Centre is performed with precision and care to minimize
                            recurrence and improve skin appearance. With consistent follow-up and personalized guidance,
                            patients experience relief from irritation while regaining smoother, healthier-looking skin.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Keloid Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists experienced in managing keloids
                            </li>
                            <li class=" mb-3">
                                Combination of non-surgical and surgical treatment options
                            </li>
                            <li class=" mb-3">
                                Customized care plans for each patient’s skin condition
                            </li>
                            <li class=" mb-3">
                                Focus on reducing keloid size, discomfort, and recurrence
                            </li>
                            <li class=" mb-3">
                                Hygienic clinic environment with professional follow-up care
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