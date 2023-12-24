<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Menu - Coffside</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php include "layout/admin_navbar.php"; ?>

    <div class="container mt-4">
        <h2 class="mb-4">All Menu Items</h2>

        <?php
        // Database connection code (replace with your credentials)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "coffside-php";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Fetch all menu items
        $menuItemsSql = "SELECT menu_items.*, categories.category_name
                         FROM menu_items
                         JOIN categories ON menu_items.category_id = categories.category_id";
        $menuItemsResult = $conn->query($menuItemsSql);

        if ($menuItemsResult->num_rows > 0) {
            while ($menuItem = $menuItemsResult->fetch_assoc()) {
                echo '<div class="card mb-3">';
                echo '<div class="row g-0">';
                echo '<div class="col-md-4">';
                if (isset($menuItem['image_path'])) {
                    echo '<img src="' . $menuItem['image_path'] . '" alt="' . $menuItem['item_name'] . '" class="img-fluid">';
                } else {
                    echo '<img src="placeholder-image.jpg" alt="Placeholder Image" class="img-fluid">';
                }
                echo '</div>';
                echo '<div class="col-md-8">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $menuItem['item_name'] . '</h5>';
                echo '<p class="card-text">' . $menuItem['description'] . '</p>';
                echo '<p class="card-text"><strong>Category:</strong> ' . $menuItem['category_name'] . '</p>';
                echo '<p class="card-text"><strong>Price:</strong> Rp ' . $menuItem['price'] . '</p>';
                echo '<p class="card-text"><strong>Stock:</strong> ' . $menuItem['stock'] . '</p>';
                echo '<a href="edit_menu.php?item_id=' . $menuItem['item_id'] . '" class="btn btn-primary btn-sm">Edit</a>';
                echo '<a href="delete_menu.php?item_id=' . $menuItem['item_id'] . '" class="btn btn-danger btn-sm">Delete</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>No menu items found.</p>';
        }

        // Close the database connection
        $conn->close();
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>

</html>