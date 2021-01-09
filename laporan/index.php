<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tiket Pesawat</title>
        <link rel="stylesheet" href="../gaya.css">
    </head>
    <body>
        <?php
            include '../header.php';
        ?>

        <div>
            <a href="tambah.php" class="btn-tambah">Tambah</a>
            <table border="1" class="senter" width="100%">
                <tr>
                    <th>Nomor</th>
                    <th>Transaksi</th>
                    <th>Pegawai</th>
                    <th>Tindakan</th>
                </tr>
                <?php
                    include '../koneksi.php';
                    $nomor = 1;
                    $querry = "SELECT
                    pegawai.nama_pegawai as nama,
                    transaksi.id_transaksi as trx,
                    laporan.id_laporan as id
                    FROM laporan
                    INNER JOIN pegawai ON pegawai.id_pegawai = laporan.id_pegawai
                    INNER JOIN transaksi ON transaksi.id_transaksi = laporan.id_transaksi";
                    $results = mysqli_query($koneksi, $querry);
                    if (mysqli_num_rows($results)>0) {
                        while ($row = mysqli_fetch_assoc($results)) {
                            echo "
                                <tr>
                                    <td>".$nomor++."</td>
                                    <td>".$row['trx']."</td>
                                    <td>".$row['nama']."</td>
                                    <td>
                                        <a class='btn-edit' href=''>Edit</a>
                                        <a class='btn-hapus' href=''>Delete</a>
                                    </td>
                                </tr>
                            ";
                        }
                    }else {
                        echo "gagal";
                    }
                ?>
            </table>
        </div>
    </body>
</html>
