<?php
session_start();

// Database connection code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffside-php";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Login berhasil
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];

            if ($_SESSION['role'] == 'customer') {
                header("Location: customer_dashboard.php");
            } elseif ($_SESSION['role'] == 'admin') {
                header("Location: admin_dashboard.php");
            }
        } else {
            echo "Password salah";
        }
    } else {
        echo "Email tidak ditemukan";
    }
}

$conn->close();
?>