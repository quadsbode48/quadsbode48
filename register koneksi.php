<?php
require 'koneksi.php';
$id = $_POST["id"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (id, email, username, password)
            VALUES ('$id', '$email', '$username', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Locantion: login.html");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($sconn);
}