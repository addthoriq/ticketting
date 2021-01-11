<?php
session_start();
// Belum Login
if (!isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tiket Pesawat</title>
        <link rel="stylesheet" href="gaya.css">
    </head>
    <body>
        <?php
            include 'config/header.php';
        ?>
        <h1>Hai kamu</h1>
    </body>
</html>
<!-- Sudah Login -->
<?php
}else {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tiket Pesawat</title>
        <link rel="stylesheet" href="gaya.css">
    </head>
    <body>
        <?php
            include 'config/header.php';
        ?>
    </body>
</html>
<?php
}
?>
