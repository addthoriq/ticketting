<?php
session_start();
include 'koneksi.php';

// Proses login dari halaman Pemesanan
if (isset($_GET['tx']) && isset($_GET['username'])) {
    $usr = $_GET['username'];
    $tx = $_GET['tx'];
    $query = "SELECT * FROM pelanggan WHERE username = '$usr'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['id'] = $row['id_pelanggan'];
    $_SESSION['nama'] = $row['nama_pelanggan'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['telpon'] = $row['nomor_telfon'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];

    header("Location: ../pemesanan/index.php?tx=".$tx);

// Proses Login dari halaman Register
}elseif (isset($_GET['username'])) {
    $usr = $_GET['username'];
    $query = "SELECT * FROM pelanggan WHERE username = '$usr'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['id'] = $row['id_pelanggan'];
    $_SESSION['nama'] = $row['nama_pelanggan'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['telpon'] = $row['nomor_telfon'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];

    header('Location: ../index.php');

// Proses Login dari halaman Login
}else {
    $usr = $_POST['username'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM pelanggan WHERE email = '$usr' OR username = '$usr'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if (!empty($usr) && !empty($pass)) {
        if ($usr != $row['email'] && $usr != $row['username']) {
            header("Location: ../login/index.php?wrgem&username=".urlencode($usr));
        }elseif ($pass != $row['password']) {
            header("Location: ../login/index.php?wrgpas&username=".urlencode($usr));
        }else {
            $_SESSION['id'] = $row['id_pelanggan'];
            $_SESSION['nama'] = $row['nama_pelanggan'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['telpon'] = $row['nomor_telfon'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];

            header('Location: ../index.php');
        }
    }else {
        header("Location: ../login/index.php?null&username=".urlencode($usr));
    }

}
