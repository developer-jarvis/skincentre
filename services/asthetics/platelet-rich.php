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
        .platelet-rich-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/platelet-rich-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .platelet-rich-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .platelet-rich-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .platelet-rich-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="platelet-rich-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Platelet Rich Plasma In Face</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Platelet Rich Plasma In Face</li>
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
                    <p>Platelet Rich Plasma (PRP) for Face at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/plasma-rich.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">
                        <h4>Naturally Boost Skin Regeneration & Radiance</h4>
                        <p>
                            Platelet Rich Plasma (PRP) facial treatment uses growth factors from your own blood to
                            stimulate skin healing, collagen production, and cell renewal. It is a safe, non-surgical
                            method to improve skin quality, reduce signs of aging, and restore a healthy glow.
                        </p>
                        
                    </div>

                    <div class="py-3">
                        <h4>Benefits of PRP Facial Treatment:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Reduces fine lines and wrinkles
                            </li>
                            <li class=" mb-3">
                                Improves skin texture, tone, and elasticity
                            </li>
                            <li class=" mb-3">
                                Fades acne scars and pigmentation
                            </li>
                            <li class=" mb-3">
                                Tightens pores and reduces dullness
                            </li>
                            <li class=" mb-3">
                                Encourages natural collagen formation
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>How PRP Facial Works:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                               A small amount of your blood is drawn.
                            </li>
                            <li class=" mb-3">
                                Platelet-rich plasma is separated and processed.
                            </li>
                            <li class=" mb-3">PRP is either injected or applied through microneedling across facial areas.</li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose PRP at The Skin Centre?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Treatment performed by certified dermatologists
                            </li>
                            <li class=" mb-3">
                                Advanced PRP extraction methods for optimal results
                            </li>
                            <li class=" mb-3">Personalized treatment plans based on your skin type</li>

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