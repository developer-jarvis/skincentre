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
        .botox-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/botox-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .botox-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .botox-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .botox-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="botox-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Botox</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Botox</li>
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
                    <p>Botox Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/botox.avif" alt="" class="img-fluid">
                    </div>
                    <h2>Botox</h2>
                    <p>
                        At The Skin Centre, we offer safe and effective Botox treatments designed to reduce the
                        appearance of fine lines, wrinkles, and expression lines, helping you achieve a more youthful,
                        refreshed look.
                    </p>
                    <div class="py-3">
                        <h4>What is Botox?</h4>
                        <p>
                            Botox is a non-surgical cosmetic procedure that temporarily relaxes targeted facial muscles,
                            smoothing out wrinkles and preventing new lines from forming. It’s FDA-approved and widely
                            trusted for both aesthetic and medical use.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Common Treatment Areas:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Forehead lines
                            </li>
                            <li class=" mb-3">
                                Frown lines (between eyebrows)
                            </li>
                            <li class=" mb-3">
                                Crow’s feet (around eyes)
                            </li>
                            <li class=" mb-3">
                                Bunny lines (nose wrinkles)
                            </li>
                            <li class=" mb-3">
                                Jawline contouring
                            </li>
                            <li class=" mb-3">
                                Excessive sweating treatment (Hyperhidrosis)
                            </li>
                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose Botox at The Skin Centre?</h4>
                        <ul class="mb-3">
                            <li>Administered by experienced dermatologists</li>
                            <li>Customized treatment plans based on your facial structure</li>
                            <li>Quick procedure with minimal downtime</li>
                            <li>Natural-looking results</li>
                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>How Long Do Results Last?</h4>
                        <p>
                            Botox effects typically last 3–6 months depending on skin type, age, and treatment area.
                            Regular sessions help maintain smoother, youthful-looking skin.
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