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
    .dermoscopy-breadcrumb {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/dermoscopy-banner.avif');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        padding: 120px 0;
    }

    .dermoscopy-breadcrumb h1 {
        color: var(--secondary-color);
        font-family: 'Times New Roman', Times, serif;
    }

    .dermoscopy-breadcrumb a {
        color: var(--secondary-color);
        font-family: 'Times New Roman', Times, serif;
        text-decoration: none;
    }

    .dermoscopy-breadcrumb .active {
        color: var(--secondary-color);
        font-family: 'Times New Roman', Times, serif;
        text-decoration: none;
    }
    </style>
    <section class="dermoscopy-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Dermoscopy</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dermoscopy</li>
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
                    <p>Dermoscopy at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/clinical-dermatology/dermoscopy.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Dermoscopy is a non-invasive diagnostic procedure that allows dermatologists to examine skin
                        lesions and moles in detail using a specialized tool called a dermatoscope. This advanced
                        technique provides a magnified, illuminated view of the skin's surface and sub-surface
                        structures, helping in the early detection and accurate diagnosis of various skin conditions.
                    </p>
                    <div class="py-3">
                        <p>
                            At The Skin Centre, dermoscopy is routinely used for evaluating pigmented lesions,
                            suspicious moles, skin cancers, and chronic skin diseases. It assists in distinguishing
                            harmless skin changes from those requiring further medical attention, without the need for
                            immediate biopsy.
                        </p>
                        <p>
                            This quick, painless procedure enhances diagnostic precision, ensuring that patients receive
                            the right treatment at the right time. Our dermatologists rely on dermoscopy to guide both
                            clinical decisions and ongoing skin monitoring.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Dermoscopy?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists trained in dermoscopic evaluation
                            </li>
                            <li class=" mb-3">
                                Early detection of skin cancers, including melanoma
                            </li>
                            <li class=" mb-3">
                                Non-invasive, painless, and quick diagnostic procedure
                            </li>
                            <li class=" mb-3">
                                Accurate assessment of moles, pigmentation, and skin lesions
                            </li>
                            <li class=" mb-3">
                                Personalized care with detailed skin health monitoring
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