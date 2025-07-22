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
        .scar-revision-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/scar-revision.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .scar-revision-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .scar-revision-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .scar-revision-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="scar-revision-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Scar Revision</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Scar Revision</li>
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
                    <p>Scar Revision at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/scar-revision.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Scars can form due to injuries, surgeries, burns, or acne, often affecting both appearance and
                        self-confidence. At The Skin Centre, we offer professional scar revision treatments aimed at
                        reducing the visibility of scars and improving overall skin texture and tone.
                    </p>
                    <div class="py-3">
                        <p>
                            Scar revision is a dermatological procedure designed to make scars less noticeable.
                            Depending on the scar’s type, size, and location, our dermatologists may recommend
                            treatments such as laser therapy, surgical excision, dermabrasion, or radiofrequency (RF)
                            procedures. Each treatment plan is customized, focusing on blending the scar with the
                            surrounding skin and restoring a smoother, more even look.
                        </p>
                        <p>
                            Our approach combines advanced techniques with expert care, helping patients achieve visible
                            improvement while maintaining skin health. Post-procedure guidance ensures proper healing
                            and lasting results.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Scar Revision?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Experienced dermatologists skilled in multiple scar treatment techniques
                            </li>
                            <li class=" mb-3">
                               Personalized treatment plans tailored to scar type and skin condition
                            </li>
                            <li class=" mb-3">
                                Use of advanced technologies like laser therapy and RF procedures
                            </li>
                            <li class=" mb-3">
                                Focus on natural-looking results with minimal downtime
                            </li>
                            <li class=" mb-3">
                                Hygienic clinical setup with patient-first care and guidance
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