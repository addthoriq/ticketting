<?php
session_start();
if (!isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Daftar Pelanggan</title>
        <link rel="stylesheet" href="../gaya.css">
    </head>
    <body>
        <?php
            include '../config/header.php';
            include '../config/db/middleware.php';
        ?>
        <div class="form-center">
            <form action="../config/proses_daftar.php" method="post">
                <p>Nama Pelanggan</p>
                <input required type="text" name="nama" value="<?= isset($nama[1])?str_replace("+", " ", $nama[1]):'' ?>">
                <p>Nomor Telepon</p>
                <input required type="number" name="telefon" value="<?= isset($telp[1])?str_replace("+", " ", $telp[1]):'' ?>">
                <p>Email</p>
                <input required type="email" name="email" value="<?= isset($email[1])?str_replace("+", " ", $email[1]):'' ?>">
                <p>Username</p>
                <input required type="text" name="username" value="<?= isset($usr[1])?str_replace("+", " ", $usr[1]):'' ?>">
                <p>Password</p>
                <input required type="password" name="pass">
                <button required type="submit" class="zenter btn-kirim">Daftar</button>
            </form>
        </div>
    </body>
</html>
<?php
}else {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Daftar Pelanggan</title>
        <link rel="stylesheet" href="../gaya.css">
    </head>
    <body>
        <?php
            include '../config/header.php';
            include '../config/db/middleware.php';
        ?>
        <div class="form-center">
            <p>Anda sudah login. Silahkan <a href="../index.php" class="text-decoration:none; color: #000;">ke Beranda</a></p>
        </div>
    </body>
</html>

<?php
}
?>
