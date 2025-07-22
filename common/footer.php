<!-- Bootstrap 5.3.3 JS Bundle (includes Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
<!-- JS Scripts -->
<script>
    document.querySelectorAll('.whatsapp-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();

            // Bootstrap validation check
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            const name = form.querySelector('[name="name"]').value.trim();
            const number = form.querySelector('[name="number"]').value.trim();
            const email = form.querySelector('[name="email"]')?.value.trim() || "";
            const services = form.querySelector('[name="services"]').value.trim();
            const message = form.querySelector('[name="message"]').value.trim();

            const whatsappNumber = "917209292777"; // ← Replace with your WhatsApp number

            const whatsappMessage = `Name: ${name}
Number: ${number}
Email: ${email}
Service: ${services}
Message: ${message}`;

            const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
            window.open(url, '_blank');
        });
    });
</script>
<!-- ============================================================================================ -->
<style>
    .footer-social a {
        font-size: 18px;
        transition: all 0.3s ease-in-out;
        color: var(--primary-color);
    }

    .footer-main a {
        color: var(--tertiary-color);
        text-decoration: none;
    }



    .footer-main h5 {
        font-weight: 600;
        margin-bottom: 15px;
    }

    .footer-main ul li {
        margin-bottom: 8px;
    }

    .footer-main ul li a {
        text-decoration: none;
    }

    .footer-main ul li a:hover {
        color: #8a014b;
    }

    .footer-top {
        background-color: var(--secondary-color);
        border-top: 1px solid var(--primary-color);
        border-bottom: 1px solid var(--tertiary-color);
    }

    .footer-main {
        background-color: var(--primary-color);
        color: var(--tertiary-color);
    }
</style>
<footer class="footer-section" data-scroll data-scroll-speed="2">
    <!-- Top Footer -->
    <div class="footer-top py-3  text-white">
        <div class="container d-flex justify-content-between align-items-center flex-wrap">
            <div class="footer-logo">
                <img src="<?= $base_url ?>assets/images/logo/logo.png" alt="Skin Centre" height="50">
            </div>
            <div class="footer-social">
                <a href="https://www.facebook.com/share/1BsTkWnG9m/?mibextid=wwXIfr" target="_blank"
                    class=" me-3 text-decoration-none">
                    <img src="<?= $base_url ?>assets/images/others/facebook.webp" alt="facebook" class="img-fluid"
                        width="30px">
                </a>
                <a href="https://www.instagram.com/_md.dr.abhinavkumar?igsh=MXBhNnMzNTF6bTA5NA%3D%3D#" target="_blank"
                    class=" me-3 text-decoration-none">
                    <img src="<?= $base_url ?>assets/images/others/instagram.webp" alt="insta" class="img-fluid"
                        width="30px">
                </a>
                 <a href="https://www.linkedin.com/in/abhinav-kumar-24240118?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class=" me-3 text-decoration-none">
                    <img src="<?= $base_url ?>assets/images/others/linkedin.webp" alt="twitter" class="img-fluid"
                        width="30px">
                </a>
                <a href="#" class=" me-3 text-decoration-none">
                    <img src="<?= $base_url ?>assets/images/others/twitter.webp" alt="twitter" target="_blank" class="img-fluid"
                        width="30px">
                </a>
                <a href="#" class="text-decoration-none">
                    <img src="<?= $base_url ?>assets/images/others/youtube.webp" alt="insta" target="_blank" class="img-fluid"
                        width="30px">
                </a>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <div class="footer-main py-5">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-4 mb-4">
                    <h5>About Skin Centre</h5>
                    <p class="text-justify">
                        We provide advanced skin, hair, and cosmetic treatments with professional care and modern
                        technology. Your trusted dermatology partner.
                    </p>
                </div>

                <!-- Quick Links -->
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="">Home</a></li>
                        <li><a href="about.php" class="">About Us</a></li>
                        <li><a href="services.php" class="">Services</a></li>
                        <li><a href="testimonials.php" class="">Testimonials</a></li>
                        <li><a href="contact.php" class="">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-md-4 mb-4">
                    <h5>Contact Us</h5>
                    <div class="py-1">
                        <p class="text-justify"><i class="bi bi-geo-alt me-2"></i>Plot no B-54, People's Cooperative
                            colony ,
                            Near Ganga Devi Mahila College and
                            Medanta Hospital, Patna -800020</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-envelope me-2"></i>Email: info@theskincentre.co.in</p>
                    </div>
                    <div class="py-1">
                        <p class=""><i class="bi bi-telephone me-2"></i> +91-7209292777</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Footer -->
    <div class="footer-bottom py-2 bg-dark text-center ">
        <p class="mb-0 text-white">
            <script>
                document.write(new Date().getFullYear());
            </script>
            &copy; Skin Centre. All rights reserved | Designed & Managed By <a href="" target="_blank"
                class="text-decoration-none text-white">Digital Web Seo Ads Agency</a>
        </p>
    </div>
</footer>
<!-- Locomotive Scroll JS -->