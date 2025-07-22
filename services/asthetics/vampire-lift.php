<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../common/config.php'; ?>
    <?php include '../../common/head.php'; ?>
    <?php include '../../common/plugins.php'; ?>
</head>

<body>
    <?php include '../../common/header.php'; ?>
    <!-- ======================================== -->
    <style>
        .vampire-lift-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/vampire-lift.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .vampire-lift-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .vampire-lift-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .vampire-lift-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="vampire-lift-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Vampire lift</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vampire Lift</li>
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
                    <p>Vampire Lift (PRP Facial) at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/vampire-lift.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">
                        <h4>Naturally Rejuvenate Your Skin Using Your Own Growth Factors</h4>
                        <p>
                            A Vampire Lift, also known as a PRP (Platelet-Rich Plasma) Facial, is a non-surgical skin
                            rejuvenation treatment that uses your body’s own platelets to stimulate collagen production,
                            improve skin texture, and restore youthful volume.
                        </p>
                        <p>
                            At The Skin Centre, we provide safe and personalized Vampire Lift treatments performed by
                            trained dermatologists.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Benefits of Vampire Lift (PRP Facial):</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Reduces fine lines and wrinkles
                            </li>
                            <li class=" mb-3">
                                Improves skin tone, texture, and elasticity
                            </li>
                            <li class=" mb-3">
                                Minimizes acne scars and pigmentation
                            </li>
                            <li class=" mb-3">
                                Restores lost facial volume
                            </li>
                            <li class=" mb-3">
                                Boosts collagen and natural healing
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>How Does It Work:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                A small amount of your blood is drawn.
                            </li>
                            <li class=" mb-3">
                                Platelet-rich plasma (PRP) is separated using a centrifuge.
                            </li>
                            <li class=" mb-3">PRP is carefully injected or applied to the skin to promote healing and rejuvenation.</li>
                           
                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                PRP treatment under expert dermatologist supervision
                            </li>
                            <li class=" mb-3">
                                Latest technology and sterile procedure rooms
                            </li>
                            <li class=" mb-3">Natural, long-lasting results with minimal downtime</li>
                           
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