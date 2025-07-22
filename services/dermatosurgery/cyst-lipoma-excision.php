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
        .cryst-lopoma-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/cryst-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .cryst-lopoma-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .cryst-lopoma-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .cryst-lopoma-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="cryst-lopoma-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Cryst & Lipoma Excision</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cryst & Lipoma Excision</li>
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
                    <p>Cyst & Lipoma Excision at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/cryst.webp" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Cysts and lipomas are common benign growths that can appear under the skin, often causing
                        discomfort or cosmetic concerns. Cysts are fluid-filled sacs, while lipomas are soft, fatty
                        lumps that grow slowly beneath the skin. At The Skin Centre, we offer professional cyst and
                        lipoma excision procedures performed by experienced dermatologists to safely remove these
                        growths.
                    </p>
                    <div class="py-3">

                        <p>
                            The excision process is carried out under local anesthesia, ensuring minimal discomfort and
                            precise removal of the growth without affecting the surrounding healthy tissue. Whether the
                            concern is medical or cosmetic, our team focuses on complete removal to prevent recurrence
                            while aiming for minimal scarring.
                        </p>
                        <p>
                            Cyst & lipoma excision is a minor surgical procedure, and most patients can return to their
                            routine soon after treatment. We also provide clear post-procedure care instructions to
                            support proper healing and recovery.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Cyst & Lipoma Excision?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists skilled in minor skin surgeries
                            </li>
                            <li class=" mb-3">
                                Safe, sterile procedure with focus on complete removal
                            </li>
                            <li class=" mb-3">
                                Minimal scarring and quick recovery time
                            </li>
                            <li class=" mb-3">
                                Treatment for both cosmetic concerns and medical indications
                            </li>
                            <li class=" mb-3">
                                Personalized care plans with professional post-treatment guidance
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