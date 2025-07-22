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
        .exosomes-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/exosomes-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .exosomes-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .exosomes-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .exosomes-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="exosomes-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Exosomes</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Exosomes
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
                    <p>Exosomes Therapy at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/exosomes.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">

                        <p>
                            Exosomes therapy is a cutting-edge skin rejuvenation treatment that harnesses the power of
                            cellular communication to repair, regenerate, and renew the skin. Exosomes are tiny
                            extracellular particles naturally produced by cells, rich in growth factors, proteins, and
                            genetic material that promote healing and stimulate collagen production.
                        </p>

                    </div>

                    <div class="py-3">
                        <p>
                            At The Skin Centre, Exosomes therapy is offered as a non-invasive solution for improving
                            skin texture, tone, and elasticity. It helps reduce fine lines, wrinkles, pigmentation, and
                            acne scars while promoting overall skin regeneration. The treatment works by delivering
                            these powerful exosomes into the skin, triggering natural repair mechanisms and enhancing
                            skin vitality from within.
                        </p>
                    </div>

                    <div class="py-3">
                        <p>
                            Performed under the supervision of expert dermatologists, Exosomes therapy is safe,
                            painless, and requires minimal downtime. It is ideal for individuals seeking advanced skin
                            rejuvenation without undergoing surgical procedures.
                        </p>
                    </div>


                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Exosomes Therapy?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Advanced skin rejuvenation using exosome-rich formulations
                            </li>
                            <li class=" mb-3">
                                Dermatologist-supervised procedures ensuring safety and precision
                            </li>
                            <li class=" mb-3">Personalized treatment plans tailored to skin concerns and goals</li>
                            <li class=" mb-3">Suitable for anti-aging, pigmentation, scar reduction, and skin glow</li>
                            <li class=" mb-3">Clean, hygienic environment with professional post-treatment care</li>
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