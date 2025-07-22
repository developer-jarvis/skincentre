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
        .laser-toning-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/laser-toning.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .laser-toning-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .laser-toning-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .laser-toning-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="laser-toning-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Laser Toning</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Laser Toning</li>
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
                    <p>Laser Toning at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/laser/hair-removal.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Laser Toning is an advanced skin rejuvenation procedure that helps improve uneven skin tone,
                        pigmentation, acne marks, and dull skin texture. Using gentle, low-energy laser technology, the
                        treatment stimulates collagen production, reduces pigmentation, and enhances overall skin
                        clarity without damaging the surrounding skin.
                    </p>
                    <div class="py-3">

                        <p>
                            At The Skin Centre, we offer professional Laser Toning services tailored for concerns such
                            as melasma, tanning, fine lines, open pores, and stubborn pigmentation. The treatment is
                            safe for all skin types and requires minimal downtime, making it suitable even for sensitive
                            skin areas like the face and neck.
                        </p>
                        <p>
                            With a series of sessions, Laser Toning helps restore a brighter, more even-toned, and
                            youthful appearance, offering a non-invasive alternative to harsher skin treatments.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Laser Toning?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Advanced laser technology for safe, effective skin brightening
                            </li>
                            <li class=" mb-3">
                                Experienced dermatologists customizing treatment plans
                            </li>
                            <li class=" mb-3">
                                Suitable for pigmentation, melasma, acne scars, and skin dullness
                            </li>
                            <li class=" mb-3">
                                Minimal discomfort and downtime with visible improvement
                            </li>
                            <li class=" mb-3">
                                Clean, professional setup with patient-friendly care and follow-up
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