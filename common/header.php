<style>
    /* Base Header Styling */

    .navbar {
        padding: 1rem 0;
        background-color: rgba(255, 255, 255, 0.8);
        /* semi-transparent white */
        transition: all 0.3s ease;
        z-index: 1000;
        border-radius: 20px 20px 0 0;
        backdrop-filter: blur(10px);
        /* optional, blur effect */
    }

    .navbar-shrink {
        padding-top: 0.3rem !important;
        padding-bottom: 0.3rem !important;
        background-color: #fff !important;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    .navbar .nav-link {
        padding: 0.8rem 1rem;
        color: #333;
        font-weight: 500;
        position: relative;
        transition: color 0.3s ease;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link.active {
        color: var(--primary-color);
    }

    /* Nav Item Hover Effect */
    /* Nav Item Hover Effect, Excluding Dropdown Toggle */
    .navbar .nav-link:not(.dropdown-toggle) {
        position: relative;
        overflow: hidden;
    }

    .navbar .nav-link:not(.dropdown-toggle)::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0%;
        height: 2px;
        background-color: var(--primary-color);
        /* Tumhara primary-color */
        transition: width 0.3s ease;
    }

    .navbar .nav-link:not(.dropdown-toggle):hover::after,
    .navbar .nav-link:not(.dropdown-toggle).active::after {
        width: 100%;
    }

    .navbar-brand img {
        max-height: 60px;
        transition: all 0.3s ease;
    }

    /* Dropdown Styling */
    .navbar .dropdown-menu {
        background-color: var(--primary-color);
        border-radius: 0px;
        border-top: 2px solid var(--secondary-color);
        border: none;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        margin-top: 0.5rem;
        opacity: 0;
        visibility: hidden;
        transform: translateY(10px);
        transition: all 0.3s ease;
    }

    .navbar .dropdown:hover .dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
        display: block;
        position: absolute;
        top: 40px;
        left: 0;
    }

    .navbar .dropdown-item {
        padding: 0.6rem 1.2rem;
        color: #333;
        font-size: 1rem;
    }

    .navbar .dropdown-item:hover {
        background-color: var(--tertiary-color);
        color: var(--primary-color);
    }

    /* Offcanvas Styling */
    .offcanvas {
        background-color: #fff;
    }

    .offcanvas .nav-link {
        font-size: 1.1rem;
        padding: 0.6rem 0;
        color: #333;
        font-weight: 500;
    }

    .offcanvas .nav-link:hover {
        color: var(--tertiary-color);
    }

    .offcanvas .collapse .nav-link {
        padding-left: 1.5rem;
    }

    /* Smooth Transition */
    .transition {
        transition: all 0.3s ease;
    }

    .offcanvas .nav-link.toggle::after {
        content: '\25BC';
        /* Down Arrow */
        float: right;
        transition: transform 0.3s ease;
        font-size: 0.8rem;
    }

    .offcanvas .nav-link[aria-expanded="true"]::after {
        transform: rotate(180deg);
        /* Rotate Arrow Up when open */
    }
</style>

<style>
    .top-header {
        font-size: 0.95rem;
        background: black;
        color: var(--tertiary-color);
    }

    .marquee {
        white-space: nowrap;
        display: inline-block;
        animation: scroll-left 15s linear infinite;
    }

    @keyframes scroll-left {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .offcanvas {
        background: var(--primary-color);
        color: var(--tertiary-color);
    }

    .offcanvas .nav-link {
        color: var(--tertiary-color) !important;
        font-weight: 400;
    }

    .offcanvas .dropdown-item {
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        padding: 10px 20px;
        margin: 0px 20px;
        font-weight: 400px;
    }

    .offcanvas .dropdown-item:hover {
        background: var(--secondary-color);
        color: var(--primary-color);
    }
</style>
<style>
    .dropdown-menu .dropdown-item {
        color: var(--tertiary-color);
        background-color: var(--primary-color);
        /* padding: 10px 20px; */
        font-size: 15px;
        transition: all 0.3s ease;
        border: none;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        font-weight: 400;
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: var(--secondary-color);
        color: var(--primary-color);
    }

    /* Optional: Remove default Bootstrap border radius if needed */
    .dropdown-menu {
        border-radius: 0;
    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0px !important;
        left: 189px !important;
        margin-top: 0;
        display: none !important;
        border: none;
        border-top: 2px solid var(--primary-color);
    }

    .dropdown-submenu>.dropdown-menu .dropdown-item {
        color: var(--tertiary-color) !important;
        background-color: var(--primary-color);
        border: none;
        border-top: 2px solid var(--primary-color);
        font-size: 15px;
        transition: all 0.6s ease;
        font-weight: 400;
    }

    .dropdown-submenu>.dropdown-menu .dropdown-item:hover {
        background-color: var(--secondary-color) !important;
        color: var(--primary-color) !important;
    }

    /* webkit scrollbar */
    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
        background-color: var(--primary-color);
    }

    ::-webkit-scrollbar-thumb {
        background-color: var(--tertiary-color);
        border-radius: 10px;
    }

    /* For hover on desktop */
    @media (min-width: 992px) {
        .dropdown-submenu>.dropdown-menu {
            display: none;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block !important;
            position: absolute;
        }
    }
</style>



<div class="top-header py-2 border-bottom">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">

            <!-- Left: Slogan -->
            <div class="col-md-3 fw-semibold border-end ">
                <i class="bi bi-envelope"></i> info@theskincentre.co.in
            </div>

            <!-- Center: Scrolling Notification -->
            <div class="col-md-6 position-relative overflow-hidden">
                <div class="marquee  fw-medium">
                    <i class="bi bi-geo-alt text-white"></i> Plot no B-54, People's Cooperative colony , Near Ganga Devi
                    Mahila College and Medanta Hospital,
                    Patna - 800020
                </div>
            </div>

            <!-- Right: Contact Details -->
            <div class="col-md-3 text-md-end  fw-medium small border-start">
                <i class="bi bi-telephone"></i> 7209292777
            </div>

        </div>
    </div>
</div>

<header>
    <nav class="navbar navbar-expand-lg transition" id="mainNavbar">
        <div class="container navbars">
            <!-- Logo -->
            <a class="navbar-brand" href="<?php echo $base_url; ?>">
                <img src="<?= $base_url; ?>assets/images/logo/logo.png" alt="skin centre" class="img-fluid"
                    width="80px">
            </a>

            <!-- Toggle for Mobile Offcanvas -->
            <span class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </span>

            <!-- Desktop Navbar -->
            <div class="collapse navbar-collapse d-none d-lg-block">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?php echo $base_url; ?>">Home</a>
                    </li>

                    <!-- Discover Dropdown -->
                    <li class="nav-item dropdown me-4">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us.php#meet-doctor">Meet
                                    The Doctor</a>
                            </li>
                            <li><a class="dropdown-item" href="<?php echo $base_url; ?>about-us.php#skin-centre">About
                                    Skin Centre</a></li>
                    </li>
                </ul>
                </li>

                <!-- Services Dropdown -->
                <!-- Services Dropdown with Sub Dropdown -->
                <li class="nav-item dropdown me-4">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Services
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Asthetics</a>
                            <ul class="dropdown-menu" style="height: 400px; overflow-y: scroll;">
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/botox.php">Botox</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/microbotox.php">Microbotox</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/hydrafacial.php">Hydrafacial</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/dark-circle.php">Dark Circle
                                        Treatment</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/glutathione.php">Glutathione
                                        Treatment</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/thread-lift.php">Thread Lift</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/vampire-lift.php">Vampire Lift</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/platelet-rich.php">Platelet Rich
                                        Plasma in face</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/chemical-peeling.php">Chemical
                                        Peeling</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/micro-needling.php">Micro Needling</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/low-level-laser.php">Low Level Laser
                                        With Therapy Face Mask</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/double-chin-reduction.php">Double Chin
                                        Reduction</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/dermal-fillers.php">Dermal Fillers</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/exosomes.php">Exosomes</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/asthetics/skin-booster.php">Skin Booster</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Dermatosurgery</a>
                            <ul class="dropdown-menu" style="height: 350px; overflow-y: scroll;">
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/acne-scar-surgery.php">Acne Scar
                                        Surgery</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/vitiligo-surgery.php">Vitiligo
                                        Surgery</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/Keloids-treatment.php">Keloids
                                        Treatments</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/nail-surgery.php">Nail
                                        Surgery</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/mole-surgery.php">Mole
                                        Surgery</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/radio-frequency-surgery.php">Radio
                                        Frequency Surgery</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/cyst-lipoma-excision.php">Cyst &
                                        Lipoma Excision</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/wart-treatment.php">Wart
                                        Treatment</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/earlobe-surgery.php">Earlobe
                                        Surgery</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/scar-revision.php">Scar
                                        Revision</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/dermatosurgery/xanthelasma-removal.php">Xanthelasma
                                        Removal</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Clinical Dermatology</a>
                            <ul class="dropdown-menu" style="height: 300px; overflow-y: scroll;">
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/acne.php">Acne</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/psoriasis.php">Psoriasis</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/vitiligo.php">Vitiligo</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/geriatic-dermatology.php">geriatic
                                        Dermatology</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/phototherapy.php">Phototherapy</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/dermoscopy.php">Dermoscopy</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/fungal-infection.php">Fungal
                                        Infection</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url; ?>services/clinical-dermatology/biological.php">Biological</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Lasers</a>
                            <ul class="dropdown-menu" style="height: 300px; overflow-y: scroll;">
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/laser-tatoo-removal.php">Laser Tattoo
                                        Removal</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/laser-hair-removal.php">Laser Hair
                                        Removal</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/laser-toning.php">Laser Toning</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/laser-carbon-peel.php">Laser Carbon
                                        Peel</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/laser-birthmark-removal.php">Laser Birth
                                        Mark Removal</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/laser-beard-shaping.php">Laser Beard
                                        Shaping</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/laser-acne-reduction.php">Laser Acne
                                        Reduction</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/laser/freckles-lentingenes-removal.php">Freckles
                                        & Lentingenes Removal</a></li>
                                <li><a class="dropdown-item" href="<?= $base_url ?>services/laser/co2-laser.php">Co2
                                        Laser</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Trichology</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/trichology/androgenetic-alopecia.php">Androgenetic
                                        Alopecia</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/trichology/exosome-mesotherapy.php">Exosome &
                                        Mesotherapy</a></li>
                                <li><a class="dropdown-item"
                                        href="<?= $base_url ?>services/trichology/platelet-rich-plasma-in-hair.php">Platelet
                                        Rich Plasma In Hair</a></li>
                            </ul>
                        </li>

                        <li><a class="dropdown-item"
                                href="<?php echo $base_url; ?>services/venereology.php">Venereology</a></li>
                    </ul>
                </li>


                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>blogs/">Blogs</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>gallery.php">Gallery</a>
                </li>


                <li class="nav-item me-4">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Enquiry Now
                    </button>
                </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Mobile Menu -->
    <!-- Offcanvas Mobile Menu -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">
                The Skin Centre
            </h5>
            <span type="button" class="btn-close bi bi-x text-white fs-1" data-bs-dismiss="offcanvas"></span>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>about-us.php">About</a>
                </li>

                <!-- Services with Arrow -->
                <!-- Services in Offcanvas -->
                <li class="nav-item">
                    <a class="nav-link toggle" data-bs-toggle="collapse" href="#servicesCollapse" role="button"
                        aria-expanded="false">
                        Services
                    </a>
                    <div class="collapse" id="servicesCollapse">
                        <ul class="list-unstyled ps-3">

                            <!-- Asthetics -->
                            <li>
                                <a class="nav-link toggle" data-bs-toggle="collapse" href="#astheticsCollapse"
                                    role="button">
                                    Asthetics
                                </a>
                                <div class="collapse" id="astheticsCollapse">
                                    <ul class="list-unstyled ps-3">
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/botox.php">Botox</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/microbotox.php">Microbotox</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/hydrafacial.php">Hydrafacial</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/dark-circle.php">Dark Circle
                                                Treatment</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/glutathione.php">Glutathione
                                                Treatment</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/thread-lift.php">Thread
                                                Lift</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/vampire-lift.php">Vampire
                                                Lift</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/platelet-rich.php">Platelet
                                                Rich
                                                Plasma in face</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/chemical-peeling.php">Chemical
                                                Peeling</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/micro-needling.php">Micro
                                                Needling</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/low-level-laser.php">Low Level
                                                Laser
                                                With Therapy Face Mask</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/double-chin-reduction.php">Double
                                                Chin
                                                Reduction</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/dermal-fillers.php">Dermal
                                                Fillers</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/exosomes.php">Exosomes</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/asthetics/skin-booster.php">Skin
                                                Booster</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- Dermatosurgery -->
                            <li>
                                <a class="nav-link toggle" data-bs-toggle="collapse" href="#dermatoCollapse"
                                    role="button">
                                    Dermatosurgery
                                </a>
                                <div class="collapse" id="dermatoCollapse">
                                    <ul class="list-unstyled ps-3">
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/acne-scar-surgery.php">Acne
                                                Scar
                                                Surgery</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/vitiligo-surgery.php">Vitiligo
                                                Surgery</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/Keloids-treatment.php">Keloids
                                                Treatments</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/nail-surgery.php">Nail
                                                Surgery</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/mole-surgery.php">Mole
                                                Surgery</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/radio-frequency-surgery.php">Radio
                                                Frequency Surgery</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/cyst-lipoma-excision.php">Cyst
                                                &
                                                Lipoma Excision</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/wart-treatment.php">Wart
                                                Treatment</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/earlobe-surgery.php">Earlobe
                                                Surgery</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/scar-revision.php">Scar
                                                Revision</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/dermatosurgery/xanthelasma-removal.php">Xanthelasma
                                                Removal</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a class="nav-link toggle" data-bs-toggle="collapse" href="#Clinical-Dermatology"
                                    role="button">
                                    Clinical Dermatology
                                </a>
                                <div class="collapse" id="Clinical-Dermatology">
                                    <ul class="list-unstyled ps-3">
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/acne.php">Acne</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/psoriasis.php">Psoriasis</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/vitiligo.php">Vitiligo</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/geriatic-dermatology.php">geriatic
                                                Dermatology</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/phototherapy.php">Phototherapy</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/dermoscopy.php">Dermoscopy</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/fungal-infection.php">Fungal
                                                Infection</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url; ?>services/clinical-dermatology/biological.php">Biological</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a class="nav-link toggle" data-bs-toggle="collapse" href="#Lasers" role="button">
                                    Lasers
                                </a>
                                <div class="collapse" id="Lasers">
                                    <ul class="list-unstyled ps-3">
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/laser-tatoo-removal.php">Laser
                                                Tattoo
                                                Removal</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/laser-hair-removal.php">Laser Hair
                                                Removal</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/laser-toning.php">Laser Toning</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/laser-carbon-peel.php">Laser Carbon
                                                Peel</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/laser-birthmark-removal.php">Laser
                                                Birth
                                                Mark Removal</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/laser-beard-shaping.php">Laser
                                                Beard
                                                Shaping</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/laser-acne-reduction.php">Laser
                                                Acne
                                                Reduction</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/freckles-lentingenes-removal.php">Freckles
                                                & Lentingenes Removal</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/laser/co2-laser.php">Co2
                                                Laser</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a class="nav-link toggle" data-bs-toggle="collapse" href="#Trichology" role="button">
                                    Trichology
                                </a>
                                <div class="collapse" id="Trichology">
                                    <ul class="list-unstyled ps-3">
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/trichology/androgenetic-alopecia.php">Androgenetic
                                                Alopecia</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/trichology/exosome-mesotherapy.php">Exosome
                                                &
                                                Mesotherapy</a></li>
                                        <li><a class="dropdown-item"
                                                href="<?= $base_url ?>services/trichology/platelet-rich-plasma-in-hair.php">Platelet
                                                Rich Plasma In Hair</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a class="dropdown-item"
                                    href="<?php echo $base_url; ?>services/venereology.php">Venereology</a></li>
                            <!-- Repeat same structure for other services -->
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>blogs/">Blogs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>testimonials.php">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>gallery.php">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $base_url; ?>contact-us.php">Contact</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Enquiry Now
                    </button>
                </li>
            </ul>
        </div>
    </div>
</header>
<?php include __DIR__ . '/enquiry.php'; ?>
<?php include __DIR__ . '/chat-bot.php'; ?>



<!-- ================================================================ -->
<script>
    let prevScrollPos = window.pageYOffset;
    const navbar = document.getElementById('mainNavbar');

    window.addEventListener('scroll', () => {
        const currentScrollPos = window.pageYOffset;

        // Shrink navbar after 50px scroll
        if (currentScrollPos > 50) {
            navbar.classList.add('navbar-shrink');
        } else {
            navbar.classList.remove('navbar-shrink');
        }

        // Hide navbar on scroll down, show on scroll up
        if (currentScrollPos > prevScrollPos && currentScrollPos > 100) {
            navbar.classList.add('navbar-hidden');
        } else {
            navbar.classList.remove('navbar-hidden');
        }

        prevScrollPos = currentScrollPos;
    });

    // Active link highlight
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function () {
            document.querySelectorAll('.nav-link').forEach(el => el.classList.remove('active'));
            this.classList.add('active');
        });
    });
</script>