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
        .glutathione-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/glutathione.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .glutathione-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .glutathione-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .glutathione-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="glutathione-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Glutathione</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Glutathione</li>
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
                    <p>Glutathione Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/glutathione.avif" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">
                        <h4>Enhance Your Skin’s Natural Glow from Within</h4>
                        <p>
                            Glutathione is a powerful antioxidant that helps detoxify the body, reduce oxidative stress,
                            and promote brighter, healthier skin. At The Skin Centre, we offer medically supervised
                            Glutathione treatments that support skin lightening, even skin tone, and overall wellness.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Benefits of Glutathione Treatment
                            :</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Skin lightening and brightening
                            </li>
                            <li class=" mb-3">
                                Reduction in pigmentation, dark spots, and blemishes
                            </li>
                            <li class=" mb-3">
                                Improves skin texture and elasticity
                            </li>
                            <li class=" mb-3">
                                Boosts immunity and detoxification
                            </li>
                            <li class=" mb-3">
                                Provides anti-aging benefits by reducing oxidative damage
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Treatment Methods:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                <strong>Glutathione IV Drips:</strong> Fast and effective absorption for skin and body benefits.
                            </li>
                            <li class=" mb-3">
                                <strong>Oral Supplements:</strong> Maintenance therapy post-IV sessions.
                            </li>
                            
                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Glutathione?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Supervised by qualified dermatologists
                            </li>
                            <li class=" mb-3">
                                Safe and clinically approved products
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans based on your skin type and goals
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