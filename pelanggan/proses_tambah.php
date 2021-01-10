<?php
include '../koneksi.php';

$sql = "SELECT MAX(id_pelanggan) FROM pelanggan";
$rsl = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($rsl);
$max = ++$row["MAX(id_pelanggan)"]; // output: 2
$str = strval($max);

$x = "SELECT * FROM pelanggan WHERE id_pelanggan = '$max'";
$y = mysqli_query($koneksi, $x);
$z = mysqli_fetch_assoc($y);

$nama = $_POST['nama'];
$telefon = intval($_POST['telefon']);
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['pass'];

$e = "SELECT * FROM pelanggan WHERE email = '$email'";
$k = mysqli_query($koneksi, $e);
$h = mysqli_fetch_assoc($k);

$u = "SELECT * FROM pelanggan WHERE username = '$username'";
$g = mysqli_query($koneksi, $u);
$l = mysqli_fetch_assoc($g);

if (empty($z)) {
    if (empty($h) && empty($l)) {
        if (strlen($telefon) <= 10) {
            $query = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, nomor_telfon, email, username, password) VALUES ('$str', '$nama', $telefon, '$email', '$username', '$password')";
            mysqli_query($koneksi, $query);
            header('location: index.php');
        }else {
            $arr = array('nama' => $nama, 'telp' => $telefon, 'email' => $email, 'usr' => $username, 'pass' => $pass);
            $jsn = json_encode($arr);
            header("Location:tambah.php?msg&nama=".urlencode($nama)."&telp=".urlencode($telefon)."&email=".urlencode($email)."&username=".urlencode($username));
        }
    }else {
        $arr = array('nama' => $nama, 'telp' => $telefon, 'email' => $email, 'usr' => $username, 'pass' => $pass);
        $jsn = json_encode($arr);
        header("Location:tambah.php?dbl&nama=".urlencode($nama)."&telp=".urlencode($telefon)."&email=".urlencode($email)."&username=".urlencode($username));
    }
}else {
    die("Mohon Maaf data sudah ada");
}
