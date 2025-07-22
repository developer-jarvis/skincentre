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
        .micro-needling-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/micro-needling-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .micro-needling-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .micro-needling-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .micro-needling-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="micro-needling-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Micro Needling</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Micro Needling</li>
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
                    <p>Microneedling at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/micro-needling.avif" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">

                        <p>
                            Microneedling is a minimally invasive skin rejuvenation procedure that uses fine,
                            medical-grade needles to create controlled micro-injuries on the skin’s surface. These tiny
                            punctures naturally stimulate the body’s collagen and elastin production, leading to
                            smoother, firmer, and healthier-looking skin.
                        </p>

                    </div>

                    <div class="py-3">
                        <p>
                            At The Skin Centre, microneedling is performed using advanced technology under the guidance
                            of experienced dermatologists. It helps address various skin concerns, including acne scars,
                            enlarged pores, uneven skin tone, fine lines, and stretch marks. The treatment works by
                            promoting the skin’s natural healing process without causing significant downtime or damage.
                        </p>
                    </div>

                    <div class="py-3">
                        <p>
                            Microneedling is suitable for most skin types and offers visible improvement in texture and
                            clarity after just a few sessions. With the right post-care, patients can expect gradual,
                            natural-looking skin rejuvenation that enhances both appearance and confidence.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Microneedling?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Performed by trained dermatology professionals
                            </li>
                            <li class=" mb-3">
                                Use of certified, high-quality microneedling devices
                            </li>
                            <li class=" mb-3">Customized treatment plans based on skin type and concern</li>
                            <li class=" mb-3">Safe, hygienic procedures with minimal downtime</li>
                            <li class=" mb-3">Personalized pre- and post-treatment care guidance</li>
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