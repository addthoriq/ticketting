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
        <table border="1" class="senter" style="margin-top: 20px">
            <tr>
                <th>Nomor</th>
                <th>Maskapai</th>
                <th>Keberangkatan</th>
                <th>Kedatangan</th>
                <th>Jam Keberangkatan</th>
                <th>Harga</th>
                <th>Pemesanan</th>
            </tr>
            <?php
                include '../config/koneksi.php';
                $nomor = 1;
                $querry = "SELECT * FROM rute";
                $results = mysqli_query($koneksi, $querry);
                function rupiah($x){
                    $rupiah = "Rp".number_format($x,0,",",".").",-";
                    return $rupiah;
                }
                if (mysqli_num_rows($results)>0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo "
                            <tr>
                                <td style='text-align: center;'>".$nomor++."</td>
                                <td>".ucwords($row['maskapai'])."</td>
                                <td>".ucwords($row['asal_rute'])."</td>
                                <td>".ucwords($row['tujuan_rute'])."</td>
                                <td style='text-align: center;'>".$row['jam_berangkat']."</td>
                                <td style='text-align: center;'>".rupiah($row['harga'])."</td>
                                <td style='text-align: center;'><a href='tiket.php?rute=".$row['id_rute']."' class='btn-book'>Booking</a></td>
                            </tr>
                        ";
                    }
                }
            ?>
        </table>
    </body>
</html>
<!-- Sudah Login -->
<?php
}
else {
    // Login lewat pemesanan
    if (isset($_GET['tx'])) {
?>
<!-- HTML Here -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pemesanan Tiket Pesawat</title>
        <link rel="stylesheet" href="../gaya.css">
    </head>
    <body>
        <?php
            include '../config/koneksi.php';
            include '../config/header.php';

            $id_tx = $_GET['tx'];
            $qry = "SELECT * FROM tiket WHERE id_tiket = '$id_tx'";
            $sql = mysqli_query($koneksi, $qry);
            $row = mysqli_fetch_assoc($sql);

            var_dump($id_tx);die;

            $id_rt = $row['id_rute'];
            $qry1 = "SELECT * FROM rute WHERE id_rute = '$id_rt'";
            $sql1 = mysqli_query($koneksi,$qry1);
            $row1 = mysqli_fetch_assoc($sql1);
        ?>
        <div class="form-center" style="margin-top: 20px">
            <form action="config/proses_trx.php" method="post" class="flex-row">
                <div class="flex-row-item">
                    <label class="labelu">Maskapai</label>
                    <input class="inputto" type="text" name="maskapai" disabled value="<?= ucwords($row1['maskapai']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Jam Keberangkatan</label>
                    <input class="inputto" type="text" name="jam" disabled value="<?= ucwords($row1['jam_berangkat']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Keberangkatan</label>
                    <input class="inputto" type="text" name="berangkat" disabled value="<?= ucwords($row1['asal_rute']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kedatangan</label>
                    <input class="inputto" type="text" name="pass" disabled value="<?= ucwords($row1['tujuan_rute']) ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kursi</label>
                    <input class="inputto" type="text" name="kursi" disabled value="<?= $row['nomor_kursi'] ?>">
                </div>
                <div class="flex-row-item">
                    <label class="labelu">Kelas</label>
                    <select style="width: 50%" name="kelas" disabled>
                        <option disabled>-- Pilih Kelas --</option>
                        <option value="first class" <?php if($row['kelas']=='first class') echo 'selected="selected"' ?> >First Class</option>
                        <option value="bisnis" <?php if($row['kelas']=='bisnis') echo 'selected="selected"' ?> >Bisnis</option>
                        <option value="ekonomi" <?php if($row['kelas']=='ekonomi') echo 'selected="selected"' ?> >Ekonomi</option>
                    </select>
                    <!-- <input class="inputto" type="text" name="kelas"> -->
                </div>
                <button type="submit" class="zenter btn-kirim-book">Selanjutnya</button>
            </form>
        </div>
    </body>
</html>


<?php
    // Login tanpa pemesanan
    } else {
?>
<!-- HTML here -->
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
        <table border="1" class="senter" style="margin-top: 20px">
            <tr>
                <th>Nomor</th>
                <th>Maskapai</th>
                <th>Keberangkatan</th>
                <th>Kedatangan</th>
                <th>Jam Keberangkatan</th>
                <th>Pemesanan</th>
            </tr>
            <?php
                include '../config/koneksi.php';
                $nomor = 1;
                $querry = "SELECT * FROM rute";
                $results = mysqli_query($koneksi, $querry);
                if (mysqli_num_rows($results)>0) {
                    while ($row = mysqli_fetch_assoc($results)) {
                        echo "
                            <tr>
                                <td style='text-align: center;'>".$nomor++."</td>
                                <td>".ucwords($row['maskapai'])."</td>
                                <td>".ucwords($row['asal_rute'])."</td>
                                <td>".ucwords($row['tujuan_rute'])."</td>
                                <td style='text-align: center;'>".$row['jam_berangkat']."</td>
                                <td style='text-align: center;'><a href='tiket.php?rute=".$row['id_rute']."' class='btn-book'>Booking</a></td>
                            </tr>
                        ";
                    }
                }
            ?>
        </table>
    </body>
</html>

<?php
    }
}
?>
