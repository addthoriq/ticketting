<?php
include '../../config/koneksi.php';

// Belom login
if (!isset($_SESSION['id'])) {
    $id_rute = $_GET['rute'];
    $id_tix = $_GET['tiket'];
    $seat = $_POST['kursi'];
    $class = $_POST['kelas'];
    $harga = $_POST['harga'];

    $qry = "INSERT INTO tiket (id_tiket, id_rute, nomor_kursi, kelas, harga) VALUES ('$id_tix', '$id_rute', '$seat', '$class', '$harga')";
    mysqli_query($koneksi, $qry);
    header("Location: ../../daftar/index.php?tx=".$id_tix);
}
else { // Sudah login
    // code...
}
