<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ========================================================== -->
    <style>
        .contact-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/contact-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .contact-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .contact-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .contact-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="contact-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ========================================= -->
    <style>
        .contact-card {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            padding: 10px 10px;
            margin-bottom: 30px;
            transition: all 0.3s ease-in-out;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.15);
        }

        .contact-card .icon {
            font-size: 40px;
            color: var(--primary-color);
            margin-bottom: 15px;
        }

        .contact-card h5.title {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-card p {
            font-size: 16px;
            color: #666;
            margin: 0;
            line-height: 1.6;
        }

        .contact-section .row {
            align-items: stretch;
        }
    </style>

    <section class="py-5 contact-section">
        <div class="container">
            <div class="row g-4">
                <!-- Address -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon"><i class="bi bi-geo-alt"></i></div>
                        <h5 class="title">Our Location</h5>
                        <p>Plot No B-54, People's Cooperative Colony,<br>
                            Near Ganga Devi Mahila College & Medanta Hospital,<br>Patna - 800020</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon"><i class="bi bi-telephone"></i></div>
                        <h5 class="title">Contact Numbers</h5>
                        <p>+91-7209292777<br>+91-7209292888</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-md-4">
                    <div class="contact-card">
                        <div class="icon"><i class="bi bi-envelope"></i></div>
                        <h5 class="title">Email Us</h5>
                        <p>info@theskincentre.co.in</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =========================================== -->
    <style>
        .form-card {
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .form-card h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .form-card p.text-muted {
            margin-bottom: 30px;
            font-size: 0.95rem;
            color: #6c757d;
        }

        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd;
            transition: border-color 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color, #0d6efd);
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.1);
        }

        .btn-submit {
            background-color: var(--primary-color, #0d6efd);
            color: #fff;
            border: none;
            border-radius: 50px;
            padding: 12px 32px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .btn-submit:hover {
            background-color: #084298;
            transform: translateY(-2px);
        }

        .invalid-feedback {
            font-size: 0.875rem;
            color: #dc3545;
        }

        textarea.form-control {
            resize: none;
        }
    </style>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4">
                    <div class="iframe-wrapper">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57569.804793817886!2d85.10549510049196!3d25.601167734523933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed59bb9fb974a9%3A0x908ddeef9dfd7e00!2sThe%20Skin%20Centre%3A-%20best%20skin%20hair%20doctor%20in%20patna%20l%20hair%20transplant%20in%20patna%20l%20dermatologist%20in%20patna!5e0!3m2!1sen!2sjp!4v1752905530279!5m2!1sen!2sjp"
                            width="100%" height="450" class="responsive-iframe" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form-card">
                        <h2 class="fw-bold">Leave a Message</h2>
                        <p class="text-muted">Your email address will not be published. Required fields are marked *</p>

                        <form method="POST" class="needs-validation whatsapp-form" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Name *</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Enter your name" required>
                                    <div class="invalid-feedback">Please enter your name.</div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email </label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                        name="number">
                                    <div class="invalid-feedback">Please enter a valid Number .</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="number" class="form-label">Number *</label>
                                    <input type="number" class="form-control" id="number" placeholder="Enter your Number"
                                        name="number" required>
                                    <div class="invalid-feedback">Please enter a valid number .</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="services" class="form-label">Services *</label>
                                    <select name="services" class="form-select" id="services" required>
                                        <option value="Asthetics">Asthetics</option>
                                        <option value="Dermatosurgery">Dermatosurgery</option>
                                        <option value="Clinical Dermatology">Clinical Dermatology</option>
                                        <option value="Laser">Laser</option>
                                        <option value="Trichology">Trichology</option>
                                        <option value="Venereology">Venereology</option>
                                    </select>
                                    <div class="invalid-feedback">Please Select Services.</div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Message </label>
                                <textarea class="form-control" id="message" name="message"
                                    placeholder="Enter your message" rows="3"></textarea>
                                <div class="invalid-feedback">Please enter a message.</div>
                            </div>

                            <button type="submit" class="btn btn-submit">
                                Submit <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <?php include 'common/footer.php'; ?>
</body>


</html>