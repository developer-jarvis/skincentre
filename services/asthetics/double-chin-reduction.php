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
        .double-chin-reduction-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/double-chin-reduction-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .double-chin-reduction-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .double-chin-reduction-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .double-chin-reduction-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="double-chin-reduction-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Double Chin Reduction</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Double Chin Reduction
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
                    <p>Double Chin Reduction at The Skin Centre</p>
                </div>

                <div class="col-md-8">

                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/asthetics/double-chin.avif" alt=""
                            class="img-fluid">
                    </div>
                    <div class="py-3">

                        <p>
                            Double chin, also known as submental fat, is a common concern that can affect both
                            appearance and confidence. At The Skin Centre, we offer non-surgical double chin reduction
                            treatments designed to target and reduce stubborn fat under the chin, helping achieve a more
                            defined jawline and balanced facial profile.
                        </p>

                    </div>

                    <div class="py-3">
                        <p>
                            Using advanced techniques such as fat-dissolving injections, ultrasound therapy, or
                            radiofrequency-based treatments, we safely break down excess fat cells while tightening the
                            surrounding skin. These procedures are carefully selected based on each client’s skin type,
                            fat volume, and treatment goals, ensuring natural-looking results without the need for
                            surgery.
                        </p>
                    </div>

                    <div class="py-3">
                        <p>
                            Double chin reduction treatments at our clinic are comfortable, require minimal downtime,
                            and are performed under the supervision of experienced dermatologists. Regular sessions can
                            lead to noticeable contour improvement, boosting both facial harmony and self-confidence.
                        </p>
                    </div>


                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Double Chin Reduction?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Non-surgical, clinically safe fat reduction methods
                            </li>
                            <li class=" mb-3">
                                Customized treatment plans tailored to your facial structure
                            </li>
                            <li class=" mb-3">Supervised by trained dermatologists and aesthetic experts</li>
                            <li class=" mb-3">Minimal downtime with long-lasting results</li>
                            <li class=" mb-3">Hygienic, professional clinic environment</li>
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