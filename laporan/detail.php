<?php
session_start();
// Belum Login
if (isset($_SESSION['id'])) {
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
        <?php
            include '../config/koneksi.php';
            include 'config/function.php';

            $id = $_GET['id'];
            $hst = getTrx($id);
            $hsp = getPemesan($hst['id_pemesanan']);
            $hsx = getTiket($hst['id_pemesanan']);
            $tgl = $hsp['tanggal'];
        ?>
        <div class="balik-duwur">
            <a class="btn-balik-duwur zenter btn-kirim-book" href="index.php">Kembali</a>
        </div>
        <div class="form-center" style="margin-top: 20px">

            <form action="" method="post" class="flex-row">
                <div class="flex-row-item">
                    <label class="labelu">Pemesan</label>
                    <input class="inputto" type="text" name="pelanggan" disabled value="<?= ucwords($hsp['nama_pelanggan']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Tanggal Pemesanan</label>
                    <input class="inputto" type="text" name="tanggal" disabled value="<?= date('d F Y', strtotime($hsp['tanggal'])) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Maskapai</label>
                    <input class="inputto" type="text" name="maskapai" disabled value="<?= ucwords($hsx['maskapai']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Jam Keberangkatan</label>
                    <input class="inputto" type="text" name="jam" disabled value="<?= ucwords($hsx['jam']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Keberangkatan</label>
                    <input class="inputto" type="text" name="berangkat" disabled value="<?= ucwords($hsx['asal']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kedatangan</label>
                    <input class="inputto" type="text" name="pass" disabled value="<?= ucwords($hsx['tujuan']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kursi</label>
                    <input class="inputto" type="text" name="kursi" disabled value="<?= ucwords($hsx['kursi']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kelas</label>
                    <select name="kelas" disabled>
                        <option disabled>-- Pilih Kelas --</option>
                        <option value="first class">First Class</option>
                        <option value="bisnis">Bisnis</option>
                        <option value="ekonomi">Ekonomi</option>
                    </select>
                    <!-- <input class="inputto" type="text" name="kelas"> -->
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Harga</label>
                    <input class="inputto" type="text" name="kursi" disabled value="<?= rupiah($hsp['harga']) ?>">
                </div>
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
