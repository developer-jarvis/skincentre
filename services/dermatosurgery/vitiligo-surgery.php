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
        .vitiligo-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/vitiligo-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .vitiligo-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .vitiligo-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .vitiligo-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="vitiligo-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Vitiligo Surgery</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vitiligo Surgery</li>
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
                    <p>Vitiligo Surgery at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/vitiligo.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Vitiligo is a skin condition characterized by the loss of skin pigment, resulting in white
                        patches that can affect both appearance and self-confidence. At The Skin Centre, we offer
                        specialized vitiligo surgery as part of our dermatosurgery services for patients who do not
                        respond to medical treatments. The goal is to restore natural skin color in affected areas
                        through advanced surgical techniques.
                    </p>
                    <div class="py-3">

                        <p>
                            Our dermatologists use methods such as skin grafting or melanocyte transfer to reintroduce
                            pigment-producing cells into depigmented areas. These procedures are performed with
                            precision and care, focusing on blending the treated skin seamlessly with the surrounding
                            healthy skin.
                        </p>
                        <p>
                            Vitiligo surgery is ideal for stable vitiligo cases where white patches have not changed in
                            size or spread for a significant period. With expert supervision, personalized treatment
                            plans, and proper post-surgical care, patients can achieve long-lasting, natural-looking
                            repigmentation.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Vitiligo Surgery?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists skilled in vitiligo surgical techniques
                            </li>
                            <li class=" mb-3">
                                Advanced procedures like skin grafting and melanocyte transfer
                            </li>
                            <li class=" mb-3">
                                Customized treatment plans tailored to each patient’s skin condition
                            </li>
                            <li class=" mb-3">
                                Safe, sterile clinical environment ensuring patient comfort and care
                            </li>
                            <li class=" mb-3">
                                Focus on achieving natural skin tone restoration with visible results
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