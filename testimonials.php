<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'common/config.php'; ?>
    <?php include 'common/head.php'; ?>
    <?php include 'common/plugins.php'; ?>
</head>

<body>
    <?php include 'common/header.php'; ?>
    <!-- ======================================================== -->
    <style>
        .testimonials-breadcrumb {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= $base_url ?>assets/images/banner/testimonials-banner.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 120px 0;
        }

        .testimonials-breadcrumb h1 {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
        }

        .testimonials-breadcrumb a {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }

        .testimonials-breadcrumb .active {
            color: var(--secondary-color);
            font-family: 'Times New Roman', Times, serif;
            text-decoration: none;
        }
    </style>
    <section class="testimonials-breadcrumb">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                <h1 class="mb-2 fw-bold">Testimonials</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ====================================================== -->
    <section class="py-5">
        <div class="container">
            <h2>Reviews From Our Client</h2>
            <div class="row" id="google-reviews-list"></div>
        </div>
    </section>
    <!-- ====================================================== -->
    <?php include 'common/footer.php'; ?>
    <!-- ======================================================== -->
</body>
<script>
    fetch("google-reviews.php")
        .then(res => res.json())
        .then(reviews => {
            let html = "";
            reviews.forEach(review => {
                html += `<div class="col-md-6 mb-4">
                <div class="review-box">
                    <p>⭐ ${review.rating}</p>
                    <p>"${review.text}"</p>
                    <p><strong>- ${review.author_name}</strong></p>
                </div>
            </div>`;
            });
            document.getElementById("google-reviews-list").innerHTML = html;
        });
</script>

</html>