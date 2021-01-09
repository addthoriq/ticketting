<header class="marjin">
    <h3 class="txt-center">Sistem Penjualan Tiket Pesawat</h3>
    <?php
        $url = $_SERVER['PHP_SELF'];
        $explode = explode("/", $url);
        if ($explode[2]=="index.php") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link active"><a href="index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="laporan/index.php">Laporan</a></li>
                <li class="jstfy-link"><a href="pegawai/index.php">Pegawai</a></li>
                <li class="jstfy-link"><a href="pelanggan/index.php">Pelanggan</a></li>
                <li class="jstfy-link"><a href="pemesanan/index.php">Pemesanan</a></li>
                <li class="jstfy-link"><a href="rute/index.php">Rute</a></li>
                <li class="jstfy-link"><a href="tiket/index.php">Tiket</a></li>
                <li class="jstfy-link"><a href="transaksi/index.php">Transaksi</a></li>
            </ul>
    <?php
        } elseif ($explode[2]=="laporan") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link active"><a href="index.php">Laporan</a></li>
                <li class="jstfy-link"><a href="../pegawai/index.php">Pegawai</a></li>
                <li class="jstfy-link"><a href="../pelanggan/index.php">Pelanggan</a></li>
                <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                <li class="jstfy-link"><a href="../rute/index.php">Rute</a></li>
                <li class="jstfy-link"><a href="../tiket/index.php">Tiket</a></li>
                <li class="jstfy-link"><a href="../transaksi/index.php">Transaksi</a></li>
            </ul>
    <?php
        } elseif ($explode[2]=="pegawai") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="../laporan/index.php">Laporan</a></li>
                <li class="jstfy-link active"><a href="index.php">Pegawai</a></li>
                <li class="jstfy-link"><a href="../pelanggan/index.php">Pelanggan</a></li>
                <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                <li class="jstfy-link"><a href="../rute/index.php">Rute</a></li>
                <li class="jstfy-link"><a href="../tiket/index.php">Tiket</a></li>
                <li class="jstfy-link"><a href="../transaksi/index.php">Transaksi</a></li>
            </ul>
    <?php
        } elseif ($explode[2]=="pelanggan") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="../laporan/index.php">Laporan</a></li>
                <li class="jstfy-link"><a href="../pegawai/index.php">Pegawai</a></li>
                <li class="jstfy-link active"><a href="index.php">Pelanggan</a></li>
                <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                <li class="jstfy-link"><a href="../rute/index.php">Rute</a></li>
                <li class="jstfy-link"><a href="../tiket/index.php">Tiket</a></li>
                <li class="jstfy-link"><a href="../transaksi/index.php">Transaksi</a></li>
            </ul>
    <?php
        } elseif ($explode[2]=="pemesanan") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="../laporan/index.php">Laporan</a></li>
                <li class="jstfy-link"><a href="../pegawai/index.php">Pegawai</a></li>
                <li class="jstfy-link"><a href="../pelanggan/index.php">Pelanggan</a></li>
                <li class="jstfy-link active"><a href="index.php">Pemesanan</a></li>
                <li class="jstfy-link"><a href="../rute/index.php">Rute</a></li>
                <li class="jstfy-link"><a href="../tiket/index.php">Tiket</a></li>
                <li class="jstfy-link"><a href="../transaksi/index.php">Transaksi</a></li>
            </ul>
    <?php
        } elseif ($explode[2]=="rute") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="../laporan/index.php">Laporan</a></li>
                <li class="jstfy-link"><a href="../pegawai/index.php">Pegawai</a></li>
                <li class="jstfy-link"><a href="../pelanggan/index.php">Pelanggan</a></li>
                <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                <li class="jstfy-link active"><a href="index.php">Rute</a></li>
                <li class="jstfy-link"><a href="../tiket/index.php">Tiket</a></li>
                <li class="jstfy-link"><a href="../transaksi/index.php">Transaksi</a></li>
            </ul>
    <?php
        } elseif ($explode[2]=="tiket") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="../laporan/index.php">Laporan</a></li>
                <li class="jstfy-link"><a href="../pegawai/index.php">Pegawai</a></li>
                <li class="jstfy-link"><a href="../pelanggan/index.php">Pelanggan</a></li>
                <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                <li class="jstfy-link"><a href="../rute/index.php">Rute</a></li>
                <li class="jstfy-link active"><a href="index.php">Tiket</a></li>
                <li class="jstfy-link"><a href="../transaksi/index.php">Transaksi</a></li>
            </ul>
    <?php
        } elseif ($explode[2]=="transaksi") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="../laporan/index.php">Laporan</a></li>
                <li class="jstfy-link"><a href="../pegawai/index.php">Pegawai</a></li>
                <li class="jstfy-link"><a href="../pelanggan/index.php">Pelanggan</a></li>
                <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                <li class="jstfy-link"><a href="../rute/index.php">Rute</a></li>
                <li class="jstfy-link"><a href="../tiket/index.php">Tiket</a></li>
                <li class="jstfy-link active"><a href="index.php">Transaksi</a></li>
            </ul>
    <?php
        }
    ?>
</header>
