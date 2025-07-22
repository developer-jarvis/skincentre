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
        .wart-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/wart-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .wart-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .wart-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .wart-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="wart-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Wart Treatment</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wart Treatment</li>
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
                    <p>Wart Treatment at The Skin Centre</p>
                </div>

                <div class="col-md-8">
                    <div class="py-3">
                        <img src="<?= $base_url ?>assets/images/services/dermatosurgery/wart.jpg" alt=""
                            class="img-fluid">
                    </div>
                    <p>
                        Warts are small, rough growths on the skin caused by the human papillomavirus (HPV). While
                        generally harmless, they can be bothersome, spread to other areas, or cause discomfort. At The
                        Skin Centre, we offer safe, effective wart treatment solutions to help you achieve smooth, clear
                        skin again.
                    </p>
                    <div class="py-3">

                        <p>
                            Our dermatologists use advanced methods such as cryotherapy (freezing), radiofrequency (RF)
                            surgery, laser treatment, or chemical applications depending on the type, size, and location
                            of the wart. Each treatment is carefully tailored to ensure maximum effectiveness while
                            minimizing discomfort and scarring.
                        </p>
                        <p>
                            Wart treatment at The Skin Centre is performed in a hygienic, clinical setting by
                            experienced professionals, ensuring safe procedures and long-term results. Follow-up care
                            and guidance are provided to reduce the chances of recurrence and maintain healthy skin.
                        </p>
                    </div>

                    <div class="py-3">
                        <h4>Why Choose The Skin Centre for Wart Treatment?</h4>
                        <ul class="mb-3">
                            <li class=" mb-3">
                                Expert dermatologists experienced in treating all types of warts
                            </li>
                            <li class=" mb-3">
                                Use of advanced technologies: cryotherapy, RF surgery, and laser
                            </li>
                            <li class=" mb-3">
                                Customized treatment plans based on wart type and skin condition
                            </li>
                            <li class=" mb-3">
                                Minimal scarring, quick recovery, and professional follow-up care
                            </li>
                            <li class=" mb-3">
                                Safe, hygienic environment focused on patient comfort
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