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
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="mb-5 text-center">Reviews From Our Clients</h2>
            <div class="row" id="google-reviews-list"></div>
        </div>
    </section>

    <style>
        .review-box {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            padding: 25px;
            height: 100%;
            transition: transform 0.3s ease, opacity 0.3s ease;
            animation: fadeIn 0.8s ease-in-out;
        }

        .review-box:hover {
            transform: translateY(-5px);
        }

        .review-box .client-image {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            margin-right: 15px;
            border: 2px solid #f7941e;
        }

        .review-box .star {
            color: #f7941e;
            font-size: 18px;
        }

        .review-header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .review-author {
            font-weight: bold;
            margin-bottom: 4px;
            color: #333;
        }

        .review-text {
            color: #555;
            font-size: 15px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>


    <script>
        fetch("google-reviews.php")
            .then(res => res.json())
            .then(reviews => {
                let html = "";
                reviews.forEach(review => {
                    const stars = '★'.repeat(review.rating) + '☆'.repeat(5 - review.rating);
                    html += `
                <div class="col-md-6 col-lg-6 mb-4 d-flex">
                    <div class="review-box">
                        <div class="review-header">
                            <div>
                                <div class="review-author">${review.author_name}</div>
                                <div class="star">${stars}</div>
                            </div>
                        </div>
                        <div class="review-text">"${review.text}"</div>
                    </div>
                </div>`;
                });
                document.getElementById("google-reviews-list").innerHTML = html;
            })
            .catch(err => {
                document.getElementById("google-reviews-list").innerHTML =
                    "<p class='text-danger'>Unable to load reviews.</p>";
                console.error(err);
            });
    </script>
    <!-- ====================================================== -->
    <?php include 'common/footer.php'; ?>
    <!-- ======================================================== -->
</body>

</html>