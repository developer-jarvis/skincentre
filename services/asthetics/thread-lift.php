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
        .thread-lift-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/thread-lift.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .thread-lift-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .thread-lift-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .thread-lift-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="thread-lift-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Thread-lift</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thread Lift</li>
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
                    <p>Thread Lift Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/thread-lift.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">
                        <h4>Non-Surgical Face Lifting for a Youthful Look</h4>
                        <p>
                            A Thread Lift is a minimally invasive cosmetic procedure that gently lifts and tightens
                            sagging skin using dissolvable threads. It’s an ideal solution for those looking to restore
                            facial contour and firmness without undergoing surgery.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Benefits of Thread Lift:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Lifts sagging skin on the face, jawline, and neck
                            </li>
                            <li class=" mb-3">
                                Reduces fine lines and wrinkles
                            </li>
                            <li class=" mb-3">
                                Improves skin elasticity and texture
                            </li>
                            <li class=" mb-3">
                                Stimulates natural collagen production
                            </li>
                            <li class=" mb-3">
                                Quick recovery with minimal downtime
                            </li>

                        </ul>
                    </div>

                    <div class="py-3">
                        <h4>Common Areas Treated:</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Cheeks
                            </li>
                            <li class=" mb-3">
                                Jawline
                            </li>
                            <li class=" mb-3">Eyebrows</li>
                            <li class=" mb-3">Neck</li>
                            <li class=" mb-3">Under-eye area</li>
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