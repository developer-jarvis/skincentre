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
        .chemical-peeling-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/chemical-peeling-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .chemical-peeling-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .chemical-peeling-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .chemical-peeling-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="chemical-peeling-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Chemical Peeling</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chemical Peeling</li>
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
                    <p>Chemical Peeling at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/chemical-peeling.avif" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">

                        <p>
                            Chemical peeling is a scientifically backed skin rejuvenation procedure that involves the
                            controlled application of safe chemical solutions to exfoliate and remove dead or damaged
                            skin cells. At The Skin Centre, our dermatologists use medical-grade peels to reveal
                            healthier, brighter, and smoother skin underneath. This treatment helps in reducing
                            pigmentation, acne scars, sun damage, uneven tone, and early signs of aging.
                        </p>

                    </div>

                    <div class="py-3">
                        <p>
                            Each chemical peel is carefully selected and customized based on your skin type and
                            concern—whether it's dullness, fine lines, acne, or stubborn pigmentation. As the old skin
                            gently peels away, new skin surfaces with improved clarity, texture, and radiance.
                        </p>
                    </div>

                    <div class="py-3">
                        <p>
                            Performed in a safe, clinical environment, chemical peeling offers visible improvement with
                            minimal downtime. With proper post-care and expert supervision, this non-invasive procedure
                            helps restore your skin’s youthful glow while supporting long-term skin health.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Chemical Peeling?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Dermatologist-supervised treatments tailored to your skin type
                            </li>
                            <li class=" mb-3">
                                Use of safe, clinically approved chemical solutions
                            </li>
                            <li class=" mb-3">Advanced techniques ensuring minimal discomfort and downtime</li>
                            <li class=" mb-3">Personalized post-peel care guidance for long-lasting results</li>
                             <li class=" mb-3">Clean, hygienic, and professional clinic environment</li>
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