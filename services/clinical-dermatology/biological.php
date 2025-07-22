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
        .bioligical-breadcrumb {
            /* background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/bioligical-banner.jpg'); */
            background: black;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .bioligical-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .bioligical-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .bioligical-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="bioligical-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Biological</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Biological</li>
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
                    <p>Biological Therapy at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <p>
                        Biological therapy, or biologics, represents a modern advancement in dermatological treatment,
                        specifically designed for managing chronic and severe skin conditions such as psoriasis, eczema,
                        and certain types of autoimmune skin disorders. Unlike conventional medicines, biologics target
                        specific parts of the immune system that contribute to inflammation and abnormal skin responses.
                    </p>
                    <div class="py-3">
                        <p>
                            At The Skin Centre, our dermatologists offer expert consultation and administration of
                            FDA-approved biological therapies. These treatments are ideal for patients who do not
                            respond well to traditional medications or who experience frequent relapses. Biologics help
                            reduce symptoms like redness, itching, scaling, and flare-ups by addressing the root cause
                            at a cellular level.
                        </p>
                        <p>
                            The treatment is carefully personalized, ensuring safety through proper screening and
                            monitoring. Administered as injections or infusions, biological therapy is supervised by
                            experienced professionals to deliver optimal results while minimizing side effects.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Biological Therapy?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists specializing in immunological skin treatments
                            </li>
                            <li class=" mb-3">
                                Access to the latest approved biologic medications
                            </li>
                            <li class=" mb-3">
                                Personalized treatment plans ensuring maximum safety and effectiveness
                            </li>
                            <li class=" mb-3">
                                Comprehensive patient monitoring and follow-up care
                            </li>
                            <li class=" mb-3">
                                Focus on long-term skin health and quality of life improvement
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