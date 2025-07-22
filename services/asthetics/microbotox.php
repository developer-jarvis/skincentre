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
        .microbotox-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/microbotox-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .microbotox-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .microbotox-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .microbotox-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="microbotox-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Microbotox</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Microbotox</li>
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
                    <p>MicroBotox Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/microbotox.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="py-3">
                        <h4>What is Microbotox?</h4>
                        <p>
                            Microbotox is an advanced cosmetic treatment that uses tiny doses of Botox injected
                            superficially into the skin. Unlike traditional Botox, which targets deeper muscles to
                            reduce wrinkles, Microbotox focuses on improving skin texture, minimizing pores, controlling
                            oil production, and providing a smoother, more refined appearance.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Benefits of Microbotox Treatment:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Reduces fine lines and superficial wrinkles
                            </li>
                            <li class=" mb-3">
                                Minimizes enlarged pores
                            </li>
                            <li class=" mb-3">
                                Controls excessive oil and sebum production
                            </li>
                            <li class=" mb-3">
                                Improves skin smoothness and glow
                            </li>
                            <li class=" mb-3">
                                Provides a natural, refreshed look without a “frozen” appearance
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose Microbotox at The Skin Centre?</h4>
                        <p>
                            At The Skin Centre, we use precision techniques and USFDA-approved products to ensure safe,
                            effective, and natural-looking results. Our dermatologists tailor each Microbotox session
                            based on individual skin needs, ensuring optimal rejuvenation with minimal downtime.
                        </p>
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