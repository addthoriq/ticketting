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
                    <th>Nama Pelanggan</th>
                    <th>Tiket</th>
                    <th>Tanggal Pesan</th>
                    <th>Harga</th>
                    <th>Tindakan</th>
                </tr>
                <?php
                    include '../koneksi.php';
                    $nomor = 1;
                    $querry = "SELECT * FROM pemesanan";
                    $results = mysqli_query($koneksi, $querry);
                    if (mysqli_num_rows($results)>0) {
                        while ($row = mysqli_fetch_assoc($results)) {
                            echo "
                                <tr>
                                    <td>".$nomor++."</td>
                                    <td>".$row['id_pelanggan']."</td>
                                    <td>".$row['id_tiket']."</td>
                                    <td>".$row['tanggal_pesan']."</td>
                                    <td>".$row['harga']."</td>
                                    <td>
                                        <a class='btn-edit' href=''>Edit</a>
                                        <a class='btn-hapus' href=''>Delete</a>
                                    </td>
                                </tr>
                            ";
                        }
                    }
                ?>
            </table>
        </div>
    </body>
</html>