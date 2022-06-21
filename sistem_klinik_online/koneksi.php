<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010195";
$db = "klinik_312010195";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} else echo "Koneksi berhasil";
?>