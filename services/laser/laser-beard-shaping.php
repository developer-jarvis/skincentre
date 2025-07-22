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
        .laser-beard-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/beard-shaping-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .laser-beard-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .laser-beard-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .laser-beard-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="laser-beard-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Laser Beard Shaping</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laser Beard Shaping</li>
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
                    <p>Beard Shaping at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/beard-shaping.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Beard shaping is more than grooming—it's about enhancing your facial features and achieving a
                        clean, defined look. At The Skin Centre, we offer professional laser beard shaping services,
                        providing long-lasting, precise beard lines without the hassle of daily shaving or trimming.
                    </p>
                    <div class="py-3">

                        <p>
                            Using advanced laser technology, our dermatologists target unwanted hair along the cheeks,
                            neckline, and jawline, creating sharp, symmetrical beard edges. This non-invasive procedure
                            helps reduce ingrown hairs, skin irritation, and uneven growth, giving you a consistently
                            neat appearance.
                        </p>
                        <p>
                            Whether you prefer a full beard, goatee, or stubble style, beard shaping at The Skin Centre
                            ensures personalized results that match your face shape and preferences.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Beard Shaping?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists and trained laser specialists
                            </li>
                            <li class=" mb-3">
                                Advanced laser equipment for precise, long-lasting shaping
                            </li>
                            <li class=" mb-3">
                                Custom styling to suit individual face shapes and beard preferences
                            </li>
                            <li class=" mb-3">
                                Minimally painful, safe, and quick procedure
                            </li>
                            <li class=" mb-3">
                                Reduces ingrown hairs and skin irritation caused by shaving
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