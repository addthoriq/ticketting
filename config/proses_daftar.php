<?php
include 'koneksi.php';
include 'db/sql.php';

if (empty($z)) {
    // Untuk mencari apakah Email atau Username dipake
    if (!empty($h)) {
        header("Location: ../daftar/index.php?errem&nama=".urlencode($nama)."&telp=".urlencode($telefon)."&email=".urlencode($email)."&username=".urlencode($username));
    }elseif (!empty($l)) {
        header("Location: ../daftar/index.php?errus&nama=".urlencode($nama)."&telp=".urlencode($telefon)."&email=".urlencode($email)."&username=".urlencode($username));
    } else {
        if (strlen($telefon) <= 10) {
            if (isset($_GET['tx'])) {
                $query = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, nomor_telfon, email, username, password) VALUES ('$str', '$nama', $telefon, '$email', '$username', '$password')";
                mysqli_query($koneksi, $query);
                header("location: proses_login.php?tx=".$_GET['tx']."&username=".urlencode($username));
            }else {
                $query = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, nomor_telfon, email, username, password) VALUES ('$str', '$nama', $telefon, '$email', '$username', '$password')";
                mysqli_query($koneksi, $query);
                header("location: proses_login.php?username=".urlencode($username));
            }
        }else {
            header("Location: ../daftar/index.php?msg&nama=".urlencode($nama)."&telp=".urlencode($telefon)."&email=".urlencode($email)."&username=".urlencode($username));
        }
    }
}else {
    die("Mohon Maaf data sudah ada");
}
