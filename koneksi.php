<?php
$host = 'localhost';  
$database = 'coffside-php';  
$username = 'root';  
$password = '';  

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika berhasil terkoneksi, Anda dapat melakukan operasi database di sini

// Menutup koneksi setelah selesai