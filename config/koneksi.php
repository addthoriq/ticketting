<?php

$server = "localhost";
$user = "root";
$pass = "123";
$db = "ticketting";

$koneksi = mysqli_connect($server, $user, $pass, $db);

if (!$koneksi) {
    die("CONNECTION failed".mysqli_connect_error());
}
