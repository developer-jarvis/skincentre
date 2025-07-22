<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../common/config.php"); ?>
    <?php include("../common/plugins.php"); ?>
    <?php include("../common/head.php"); ?>

</head>

<body>
    <?php include("../common/header.php"); ?>
    <!-- ================================================ -->
    <style>
        .blogs-breadcrumb-section {
            background: #000;
            padding: 60px 0;
            color: #fff;
            text-align: center;
            position: relative;
        }

        .blogs-breadcrumb-section h1 {
            font-size: 3rem;
            color: var(--secondary-color);
            font-weight: 700;
            margin-bottom: 15px;
        }

        .blogs-breadcrumb {
            list-style: none;
            padding: 0;
            margin: 0;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            gap: 8px;
            font-size: 1rem;
        }

        .blogs-breadcrumb li {
            color: #fff;
        }

        .blogs-breadcrumb li a {
            color: var(--secondary-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        .blogs-breadcrumb li a:hover {
            color: #fff;
        }

        .blogs-breadcrumb li::after {
            content: ">";
            margin: 0 5px;
            color: #fff;
        }

        .blogs-breadcrumb li:last-child::after {
            content: "";
        }
    </style>
    <section class="blogs-breadcrumb-section">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Blogs</h1>
                <nav aria-label="blogs-breadcrumb">
                    <ol class="blogs-breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- =============================================================================== -->
    <style>
        .blogs .card {
            border-radius: 0px;
        }

        .blogs .card img {
            height: 250px;
            width: 100%;
            width: 100%;
            object-fit: contain;
            background-color: var(--primary-color);
        }

        .blogs a {
            text-decoration: none;
        }
    </style>
    <section class="py-5 blogs">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="head-title mb-3 text-center">
                    <h2>Our <span>Blogs</span></h2>
                    <p class="fst-italic">We are committed to providing our customers with the highest quality products
                        and services.</p>
                </div>

                <?php
                include '../admin/common/config.php';

                $stmt = $conn->prepare("SELECT slug, cover_title, cover_desc, cover_image, cover_alt, created_at FROM blogs ORDER BY created_at DESC");
                $stmt->execute();
                $result = $stmt->get_result();

                while ($row = $result->fetch_assoc()) {
                    $slug = urlencode($row['slug']);
                    $coverTitle = htmlspecialchars($row['cover_title']);
                    $coverDesc = $row['cover_desc']; // No htmlspecialchars here
                    $coverAlt = htmlspecialchars($row['cover_alt']);
                    $coverImage = "../admin/uploads/blogs/" . htmlspecialchars($row['cover_image']);
                    $createdAt = date("d M Y", strtotime($row['created_at']));
                    ?>
                    <div class="col-md-4 mb-4">
                        <a href="<?= $slug; ?>" class="text-decoration-none text-dark">
                            <div class="card h-100 shadow-sm border-0">
                                <img src="<?= $coverImage; ?>" class="card-img-top" alt="<?= $coverAlt; ?>"
                                    title="<?= $coverTitle; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $coverTitle; ?></h5>
                                    <p class="card-text">
                                        <?= mb_strimwidth($coverDesc, 0, 160, '...'); ?>
                                    </p>
                                </div>
                                <div class="card-footer bg-white border-0">
                                    <small class="text-muted">Published on <?= $createdAt; ?></small>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>



    <!-- =================================================== -->
    <?php include("../common/footer.php"); ?>
</body>

</html>