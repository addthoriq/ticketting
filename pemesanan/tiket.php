<?php
session_start();
// Belum Login
if (!isset($_SESSION['id'])) {
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pemesanan Tiket Pesawat</title>
        <link rel="stylesheet" href="../gaya.css">
    </head>
    <body>
        <?php
            include '../config/header.php';
        ?>
        <div class="notif">
            <p>Belum punya akun? Daftar <a href="../daftar/index.php" class="a-hrep">disini</a></p>
        </div>
        <?php
            include '../config/koneksi.php';

            $id = $_GET['rute'];
            $qry = "SELECT * FROM rute WHERE id_rute = '$id'";
            $sql = mysqli_query($koneksi,$qry);
            $row = mysqli_fetch_assoc($sql);

            $ctt = "SELECT COUNT(id_tiket) FROM tiket";
            $qqq = mysqli_query($koneksi, $ctt);
            $r = mysqli_fetch_assoc($qqq);
            $mx = ++$r["COUNT(id_tiket)"];
            $ide = strval($mx);
        ?>
        <div class="form-center" style="margin-top: 20px">
            <form action="config/proses_pesan.php?rute=<?=$id?>&tiket=<?=$ide?>" method="post" class="flex-row">
                <div class="flex-row-item">
                    <label class="labelu">Maskapai</label>
                    <input class="inputto" type="text" name="maskapai" disabled value="<?= ucwords($row['maskapai']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Jam Keberangkatan</label>
                    <input class="inputto" type="text" name="jam" disabled value="<?= ucwords($row['jam_berangkat']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Keberangkatan</label>
                    <input class="inputto" type="text" name="berangkat" disabled value="<?= ucwords($row['asal_rute']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kedatangan</label>
                    <input class="inputto" type="text" name="pass" disabled value="<?= ucwords($row['tujuan_rute']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kursi</label>
                    <input class="inputto" type="text" name="kursi">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kelas</label>
                    <select style="width: 50%" name="kelas">
                        <option disabled>-- Pilih Kelas --</option>
                        <option value="first class">First Class</option>
                        <option value="bisnis">Bisnis</option>
                        <option value="ekonomi">Ekonomi</option>
                    </select>
                    <!-- <input class="inputto" type="text" name="kelas"> -->
                </div>
                <button type="submit" class="zenter btn-kirim-book">Pesan</button>
            </form>
        </div>
    </body>
</html>
<!-- Sudah Login -->
<?php
}
// else {
?>
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pemesanan Tiket Pesawat</title>
        <link rel="stylesheet" href="gaya.css">
    </head>
    <body> -->
        <!-- <?php
            // include '../config/header.php';
        ?> -->
    <!-- </body>
</html> -->
<!-- <?php
// }
?> -->
