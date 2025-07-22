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
        .earlobe-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/earlobe-banner.avif');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .earlobe-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .earlobe-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .earlobe-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="earlobe-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Earlobe Surgery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Earlobe Surgery</li>
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
                    <p>Earlobe Surgery at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/earlobe.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Earlobe surgery, also known as earlobe repair, is a simple yet precise cosmetic procedure aimed
                        at correcting torn, stretched, or deformed earlobes. Factors such as heavy earrings, accidental
                        tears, or aging can lead to split or elongated earlobes. At The Skin Centre, we offer expert
                        earlobe surgery services to restore the natural shape and appearance of your earlobes.
                    </p>
                    <div class="py-3">
                        <p>
                            The procedure is performed under local anesthesia, ensuring minimal discomfort. Our
                            dermatologists carefully repair and reshape the earlobe with fine sutures, focusing on
                            achieving a natural, symmetrical result with minimal scarring. Whether it’s for cosmetic
                            reasons or to allow for re-piercing, earlobe surgery provides a lasting solution.
                        </p>
                        <p>
                            Post-procedure care is simple, with quick healing times and clear instructions provided for
                            aftercare. Most patients can resume normal activities the same day.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Earlobe Surgery?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists with experience in cosmetic skin procedures
                            </li>
                            <li class=" mb-3">
                                Safe, sterile clinic environment ensuring patient comfort
                            </li>
                            <li class=" mb-3">
                                Minimal scarring and natural-looking results
                            </li>
                            <li class=" mb-3">
                                Quick procedure with fast recovery time
                            </li>
                            <li class=" mb-3">
                                Personalized care and guidance throughout the treatment
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