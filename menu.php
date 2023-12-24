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

    <!-- Menu -->
    <div class="container" id="coffee">
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

        // Fetch categories
        $categoriesSql = "SELECT * FROM categories";
        $categoriesResult = $conn->query($categoriesSql);

        while ($category = $categoriesResult->fetch_assoc()) {
            $categoryId = $category['category_id'];
            $categoryName = $category['category_name'];

            // Fetch menu items for each category
            $menuItemsSql = "SELECT menu_items.*, menu_images.image_path
                             FROM menu_items
                             JOIN menu_images ON menu_items.item_id = menu_images.item_id
                             WHERE menu_items.category_id = $categoryId";
            $menuItemsResult = $conn->query($menuItemsSql);
        ?>
        <h2 class="promo-heading mt-4"><?php echo $categoryName; ?></h2>

        <div class="row" style="margin-top: 30px;">
            <?php while ($menuItem = $menuItemsResult->fetch_assoc()) { ?>
            <div class="col-md-3 py-0 py-md-0">
                <div class="card border-0">
                    <img src="<?php echo $menuItem['image_path']; ?>" alt="">
                    <div class="card-body">
                        <h3 class="menu-coffee"><?php echo $menuItem['item_name']; ?></h3>
                        <h5 class="menu-coffee">Rp <?php echo $menuItem['price']; ?> <span></span></h5>
                        <!-- <h6 class="menu-coffee">Stock : <?php echo $menuItem['stock']; ?></h6> -->
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php
        }
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