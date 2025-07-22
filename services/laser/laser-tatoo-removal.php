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
        .tatoo-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/tatoo-removal.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .tatoo-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .tatoo-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .tatoo-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="tatoo-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Laser Tatoo Removal</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laser Tatoo Removal</li>
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
                    <p>Laser Tattoo Removal at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/laser.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Unwanted tattoos can now be safely and effectively removed with advanced laser technology. Laser
                        tattoo removal is a non-invasive procedure that uses focused laser light to break down tattoo
                        ink particles in the skin. Over time, the body naturally clears away these particles, fading and
                        eventually removing the tattoo.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, we offer professional laser tattoo removal using modern Q-switched and
                            other medical-grade laser systems. Our dermatologists assess each tattoo’s size, color,
                            depth, and skin type to create a customized removal plan. Multiple sessions may be required
                            depending on these factors, but our approach focuses on minimizing skin damage while
                            achieving the best possible results.
                        </p>
                        <p>
                            Whether it’s a name, design, or cosmetic tattoo, our team ensures safe treatment in a
                            clinical setting with proper skin care guidance throughout the process.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Laser Tattoo Removal?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Advanced laser technology for all tattoo types and colors
                            </li>
                            <li class=" mb-3">
                                Experienced dermatologists ensuring safe and effective removal
                            </li>
                            <li class=" mb-3">
                                Customized treatment plans based on tattoo size, color, and skin type
                            </li>
                            <li class=" mb-3">
                                Minimal scarring and faster skin recovery with expert care
                            </li>
                            <li class=" mb-3">
                                Hygienic clinical environment with complete patient support
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