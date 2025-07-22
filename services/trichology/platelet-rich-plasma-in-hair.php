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
        .plasma-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/plasma-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .plasma-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .plasma-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .plasma-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="plasma-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Platelet Rich Plasma In Hair</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Platelet Rich Plasma In Hair</li>
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
                    <p>Platelet Rich Plasma (PRP) Therapy for Hair at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/trichology/plasma.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Platelet Rich Plasma (PRP) Therapy is a clinically proven, non-surgical treatment for hair loss
                        that uses the body's natural growth factors to stimulate hair regrowth. It involves drawing a
                        small amount of the patient’s own blood, processing it to concentrate the platelets, and
                        injecting this platelet-rich plasma into the scalp. These platelets contain essential proteins
                        and growth factors that help revive dormant hair follicles, improve hair thickness, and reduce
                        hair shedding.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, PRP Therapy is performed by experienced dermatologists using precise
                            techniques to ensure maximum effectiveness and patient comfort. It is suitable for treating
                            conditions like androgenetic alopecia (pattern baldness), hair thinning, and post-illness
                            hair loss.
                        </p>
                        <p>
                            Regular sessions, as recommended by our specialists, can lead to noticeable improvements in
                            hair density, volume, and scalp health over time.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for PRP Hair Therapy?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Performed by certified dermatologists and trained professionals
                            </li>
                            <li class=" mb-3">
                                Use of advanced centrifuge systems for high-quality PRP extraction
                            </li>
                            <li class=" mb-3">
                               Safe, natural, and minimally invasive procedure with no major downtime
                            </li>
                            <li class=" mb-3">
                                Effective in improving hair density, thickness, and scalp condition
                            </li>
                            <li class=" mb-3">
                                Personalized treatment schedules tailored to individual hair loss needs
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