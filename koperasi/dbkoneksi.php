<?php
// konfigurasi database
$host = "localhost";
$dbname = "dbkoperasi";
$username = "root";
$password = "";

// buat koneksi PDO
// menggunakan try catch

try {
    // buat objek koneksi pdo yang didalamnya ada parameter host dll
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // set atribut mengatur mode kesalahan
// echo "database berhasil terhubung";
} catch (PDOException $e) {
    echo "database tidak terhubung : " .$e->getMessage();

}
?>