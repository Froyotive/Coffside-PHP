<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap">

    <title>Coffside Web</title>
</head>

<body>
    <?php include "layout/navbar.php"; ?>

    <!-- Search Bar -->
    <section class="header-main border-bottom bg-white">
        <!-- ... (your existing search bar code) ... -->
    </section>

    <!-- Promo -->
    <div class="container" id="promo">
        <?php
        // Database connection code (make sure to replace with your actual database credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "coffside-php";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch promo items
        $promoItemsSql = "SELECT * FROM promo_items";
        $promoItemsResult = $conn->query($promoItemsSql);
        ?>
        <h2 class="promo-heading mt-4">Special Promos</h2>

        <div class="row" style="margin-top: 30px;">
            <?php while ($promoItem = $promoItemsResult->fetch_assoc()) { ?>
            <div class="col-md-4 py-0 py-md-0">
                <div class="card border-0">
                    <img src="<?php echo $promoItem['image_path']; ?>" alt="">
                    <div class="card-body">
                        <h3 class="promo-title"><?php echo $promoItem['promo_title']; ?></h3>
                        <p class="promo-description"><?php echo $promoItem['promo_description']; ?></p>
                        <h5 class="promo-price">Potongan Diskon : <?php echo $promoItem['discount_amount']; ?>
                            <span></span>%
                        </h5>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php
        // Close the database connection
        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <?php include "layout/footer.php"; ?>

</body>

</html>