<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body >
    <?php include 'common/header.php'; ?>
    <!-- ========================================= -->
    <style>
        .about-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/about-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .about-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .about-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .about-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="about-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <section class="py-5" id="meet-doctor" >
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="head-title mb-3">
                    <p>About Us</p>
                    <h2 class="fw-bold">About Dr. Abhinav Kumar</h2>
                </div>

                <div class="col-md-5">
                    <img src="<?= $base_url ?>assets/images/about/doctor.jpg" alt="" class="img-fluid">

                </div>
                <div class="col-md-7">
                    <p>
                        MBBS (MAMC, New Delhi), MD (LHMC, New Delhi), (Senior Resident Lok Nayak Hospital, New Delhi),
                        Ex
                        Hair Transplant Surgeon at Eugenix Hair Sciences ( 2017-2020)
                    </p>
                    <p>
                        Dr Abhinav Kumar did his MBBS from prestigious Maulana Azad Medical College, New Delhi in 2011.
                        He followed it up with MD degree in Dermatology from Lady Hardinge Medical College, New Delhi.
                        He completed fellowship in Hair Transplantation at renowned Eugenix Hair Sciences Gurugram, in
                        2017 under Dr Pradeep Sethi and Dr Arika Bansal. He further enhanced his skills by solely
                        devoting into hair transplantation for 3 years till 2020. He has conducted more than 300
                        independent surgeries at various centres of Eugenix Hair Sciences itself.
                    </p>
                    <p>
                        He followed it up with internationally acclaimed textbook of Hair transplant – Step by Step Hair
                        Transplantion which wrote while working in Eugenix by burning midnight oil where he penned down
                        his experience of surgeries. The book was launched by none other than Mr Gulam Navi Azad.
                    </p>
                    <p>
                        Not relaxing on his laurels as a Hair Transplant surgeon, he further enhanced his skill as a
                        senior resident in Dermatology at Delhi’s flagship govt Hospital- Lok Nayak Hospital and GB
                        Pantop Hospital from 2020 to 2023. He not only treated hundreds of patients daily in OPD at the
                        extremely busy Lok Nayak Hospital but also enhanced his dermatosurgery skills by doing complex
                        dermatosurgery procedures like skin grafting for vitiligo , skin excision surgeries , excision
                        of skin Cancer, Laser treatment. He is not only a good doctor but a great teacher and speaker as
                        well and has participated in hundreds of conferences over last 10 years. Currently he is a
                        member of IADVL, member of elite coalition of Hair transplant surgeons- FUE ASIA. He is solely
                        devoted to his patients and follows up his patient meticulously
                    </p>

                    <div class="py-3 text-end">
                        <a href="<?= $base_url ?>contact-us.php" class="btn"> Read More <i
                                class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <section class="py-5 bg-white" id="skin-centre" >
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title mb-3">
                    <p>About Skin Centre</p>
                    <h2>About The Skin Centre</h2>
                </div>

                <div class="col-md-7">
                    <p>
                        At <strong class="title">The Skin Centre</strong>, we believe that healthy skin is the foundation of confidence and well-being.
                        Founded with a vision to provide trusted, modern, and personalized skin care solutions, The Skin
                        Centre offers a wide range of dermatology services under one roof.
                    </p>
                    <p>
                        Our clinic is equipped with advanced technology and led by experienced skin care professionals
                        committed to delivering safe, effective, and ethical treatments. Whether it’s acne,
                        pigmentation, anti-aging concerns, hair loss, or specialized cosmetic procedures, we design
                        treatment plans tailored to each individual’s unique skin needs.
                    </p>
                    <p>
                        We follow international standards of hygiene and patient care, ensuring that every visitor
                        experiences comfort, transparency, and visible results.
                    </p>
                </div>

                <div class="col-md-5">
                    <img src="assets/images/about/2.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <section class="py-5  mission-vission" >
        <div class="container">
            <div class="row">
                <div class="head-title mb-3">
                    <p>About Us</p>
                    <h2>Mission & Vision</h2>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="title">Our Mission</h5>
                            <p>At The Skin Centre, our mission is to provide safe, effective, and personalized skin care
                                solutions using advanced dermatological techniques. We are committed to enhancing skin
                                health and confidence through ethical practices, modern treatments, and compassionate
                                care tailored to each individual’s unique needs.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="title">Our Vision</h5>
                            <p>Our vision is to become a trusted leader in skin and hair care services, known for
                                delivering quality treatment outcomes with integrity and innovation. We aim to create a
                                skin care environment where every patient feels valued, informed, and confident in their
                                skin journey with us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <?php include 'common/footer.php'; ?>
</body>

</html>