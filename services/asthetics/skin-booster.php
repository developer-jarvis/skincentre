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
        .skin-booster-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/skin-booster.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .skin-booster-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .skin-booster-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .skin-booster-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="skin-booster-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Skin Booster</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Skin Booster
                        </li>
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
                    <p>Skin Booster Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/skin-booster.avif" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">

                        <p>
                            Skin Booster is an advanced skin hydration and rejuvenation treatment designed to deeply
                            nourish and revitalize the skin from within. Unlike regular skincare products, Skin Booster
                            treatments work by injecting hyaluronic acid-based solutions directly into the skin’s
                            layers, enhancing moisture retention, elasticity, and overall skin texture.
                        </p>

                    </div>

                    <div class="py-3">
                        <p>
                            At The Skin Centre, we offer customized Skin Booster treatments that help improve skin
                            smoothness, reduce fine lines, and restore a healthy, youthful glow. This procedure is
                            particularly effective for treating dry, dull, or tired-looking skin, as well as improving
                            skin firmness without altering facial volume.
                        </p>
                    </div>

                    <div class="py-3">
                        <p>
                            Performed under expert dermatologist supervision, Skin Booster treatments are minimally
                            invasive, safe, and require little to no downtime. Results are visible gradually as the skin
                            becomes more hydrated, radiant, and refreshed over time.
                        </p>
                    </div>


                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Skin Booster Treatments?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Use of clinically approved, high-quality skin booster products
                            </li>
                            <li class=" mb-3">
                                Performed by trained dermatology professionals
                            </li>
                            <li class=" mb-3">Personalized treatment approach based on your skin type</li>
                            <li class=" mb-3">Non-surgical, minimally invasive procedure with quick recovery</li>
                            <li class=" mb-3">Focus on natural-looking skin rejuvenation and hydration</li>
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