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
        .exosome-mesotherapy-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/exosome-mesotherapy-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .exosome-mesotherapy-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .exosome-mesotherapy-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .exosome-mesotherapy-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="exosome-mesotherapy-breadcrumb">
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
                    <p>Exosome Mesotherapy at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/trichology/mesotherapy.avif" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Exosome Mesotherapy is an advanced regenerative skin and hair treatment that utilizes the power
                        of exosomes—naturally occurring, cell-derived vesicles packed with growth factors, proteins, and
                        genetic material. These exosomes help stimulate cell repair, collagen production, and overall
                        tissue regeneration, making the treatment highly effective for skin rejuvenation and hair
                        restoration.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, we offer Exosome Mesotherapy for both skin and scalp concerns. For the
                            skin, it helps improve texture, reduce wrinkles, and enhance radiance. For hair, it aids in
                            revitalizing hair follicles, promoting new hair growth, and reducing hair thinning.
                        </p>
                        <p>
                            The procedure involves microinjections of exosome-rich serums into targeted areas using
                            mesotherapy techniques. It’s minimally invasive, with little to no downtime, and is suitable
                            for both men and women seeking natural-looking, long-lasting results.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Exosome Mesotherapy?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Latest exosome therapy techniques with scientifically backed products
                            </li>
                            <li class=" mb-3">
                                Expert dermatologists ensuring safe and precise treatment application
                            </li>
                            <li class=" mb-3">
                                Effective for both skin rejuvenation and hair regrowth
                            </li>
                            <li class=" mb-3">
                                Minimal discomfort, quick recovery time, and visible improvement
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans tailored to individual skin and hair needs
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