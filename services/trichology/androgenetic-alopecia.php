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
        .androgenetic-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/androgenetic-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .androgenetic-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .androgenetic-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .androgenetic-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="androgenetic-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Androgenetic Alopecia</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Androgenetic Alopecia</li>
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
                    <p>Androgenetic Alopecia Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/trichology/androgenetic.jpg" alt="" class="img-fluid">
                    </div>
                    <p>
                        Androgenetic Alopecia, commonly known as male or female pattern baldness, is the most prevalent
                        cause of progressive hair thinning. It is primarily driven by genetic factors and hormonal
                        influences, leading to gradual hair loss along the scalp’s crown, temples, or parting line.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, we offer customized treatment solutions for Androgenetic Alopecia,
                            aiming to slow hair loss, stimulate hair regrowth, and improve scalp health. Our
                            dermatologists carefully evaluate each patient's condition and recommend evidence-based
                            therapies such as topical medications, oral treatments, platelet-rich plasma (PRP) therapy,
                            mesotherapy, and advanced laser hair growth techniques.
                        </p>
                        <p>
                            Early intervention is key, and with consistent treatment, noticeable improvement in hair
                            density and thickness can be achieved.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Androgenetic Alopecia Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists experienced in hair loss management
                            </li>
                            <li class=" mb-3">
                                Comprehensive diagnostic evaluation and personalized treatment plans
                            </li>
                            <li class=" mb-3">
                                Latest treatment methods including PRP therapy and laser therapies
                            </li>
                            <li class=" mb-3">
                                Focus on both hair regrowth and scalp health
                            </li>
                            <li class=" mb-3">
                                Ethical and transparent treatment approach with proper guidance
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