<?php
session_start();
include 'koneksi.php';

if (isset($_GET['username'])) {
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

}else {
    $usr = $_POST['username'];
    $pass = $_POST['pass'];
    $query1 = "SELECT * FROM pelanggan WHERE (email = '$usr' OR username = '$usr') AND password = '$pass'";
    $result1 = mysqli_query($koneksi, $query1);
    $row1 = mysqli_fetch_assoc($result1);

    if (!empty($usr) && !empty($pass)) {
        if ($row1) {
            $_SESSION['id'] = $row1['id_pelanggan'];
            $_SESSION['nama'] = $row1['nama_pelanggan'];
            $_SESSION['email'] = $row1['email'];
            $_SESSION['telpon'] = $row1['nomor_telfon'];
            $_SESSION['username'] = $row1['username'];
            $_SESSION['password'] = $row1['password'];

            header('Location: ../pelanggan/index.php');
        }else {
            header("Location: ../login/index.php?null&username=".urlencode($usr));
        }
    }else {
        header("Location: ../login/index.php?null&username=".urlencode($usr));
    }

}
