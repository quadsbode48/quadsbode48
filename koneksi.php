<?php
$servername = "localhost";
$database = "quads";
$username = "root";
$password = "shohibatul17";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("koneksi gagal : " . mysqli_connect_error());
} else {
    echo "koneksi berhasil";
}