<header class="marjin">
    <h3 class="txt-center">Sistem Penjualan Tiket Pesawat</h3>
    <?php
        $url = $_SERVER['PHP_SELF'];
        $explode = explode("/", $url);
        if ($explode[2]=="index.php") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link active"><a href="index.php">Beranda</a></li>
                <?php
                    if (isset($_SESSION['nama_pegawai'])) {
                        ?>
                        <li class="jstfy-link"><a href="laporan/index.php">Laporan</a></li>
                        <?php
                    }else {
                        ?>
                        <li class="jstfy-link"><a href="pemesanan/index.php">Pemesanan</a></li>
                        <?php
                    }
                ?>
                <?php
                    if (isset($_SESSION['id'])) {
                ?>
                    <li class="dropdown jstfy-link">
                        <a href="#" class="dropbtn"><?= $_SESSION['nama'] ?></a>
                        <div class="dropdown-content">
                            <a href="pelanggan/index.php">Profil</a>
                            <a href="config/logout.php">Keluar</a>
                        </div>
                    </li>
                <?php
                    }else {
                ?>
                    <li class="dropdown jstfy-link">
                        <a href="#" class="dropbtn">Daftar/Masuk</a>
                        <div class="dropdown-content">
                            <a href="daftar/index.php">Daftar</a>
                            <a href="login/index.php">Masuk</a>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
    <?php
        } elseif ($explode[2]=="daftar") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>

                <li class="jstfy-link"><a href="pemesanan/index.php">Pemesanan</a></li>
                <?php
                    if (!isset($_SESSION['id'])) {
                ?>
                <li class="dropdown jstfy-link active">
                    <a href="#" class="dropbtn">Daftar/Masuk</a>
                    <div class="dropdown-content">
                        <a href="../daftar/index.php" class="active-content">Daftar</a>
                        <a href="../login/index.php">Masuk</a>
                    </div>
                </li>
                <?php
                    }else {
                ?>
                <li class="dropdown jstfy-link">
                    <a href="#" class="dropbtn"><?= $_SESSION['nama'] ?></a>
                    <div class="dropdown-content">
                        <a href="../pelanggan/index.php">Profil</a>
                        <a href="../config/logout.php">Keluar</a>
                    </div>
                </li>

                <?php
                    }
                ?>
            </ul>
    <?php
        } elseif ($explode[2]=="login") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                <?php
                    if (!isset($_SESSION['id'])) {
                ?>
                <li class="dropdown jstfy-link active">
                    <a href="#" class="dropbtn">Daftar/Masuk</a>
                    <div class="dropdown-content">
                        <a href="../daftar/index.php">Daftar</a>
                        <a href="../login/index.php" class="active-content">Masuk</a>
                    </div>
                </li>
                <?php
                    }else {
                ?>
                <li class="dropdown jstfy-link">
                    <a href="#" class="dropbtn"><?= $_SESSION['nama'] ?></a>
                    <div class="dropdown-content">
                        <a href="../pelanggan/index.php">Profil</a>
                        <a href="../config/logout.php">Keluar</a>
                    </div>
                </li>

                <?php
                    }
                ?>
            </ul>
    <?php
        } elseif ($explode[2]=="pelanggan") {
    ?>
        <ul class="jstfy">
            <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
            <li class="jstfy-link"><a href="pemesanan/index.php">Pemesanan</a></li>
            <li class="dropdown jstfy-link">
                <a href="#" class="dropbtn active"><?= $row['nama_pelanggan'] ?></a>
                <div class="dropdown-content">
                    <a href="../pelanggan/index.php" class="active-content">Profil</a>
                    <a href="../config/logout.php">Keluar</a>
                </div>
            </li>
        </ul>
    <?php
        } elseif ($explode[2]=="pemesanan") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <li class="jstfy-link active"><a href="index.php">Pemesanan</a></li>
                <?php
                    if (isset($_SESSION['id'])) {
                ?>
                    <li class="dropdown jstfy-link">
                        <a href="#" class="dropbtn"><?= $_SESSION['nama'] ?></a>
                        <div class="dropdown-content">
                            <a href="../pelanggan/index.php">Profil</a>
                            <a href="../config/logout.php">Keluar</a>
                        </div>
                    </li>
                <?php
                    }else {
                ?>
                    <li class="dropdown jstfy-link">
                        <a href="#" class="dropbtn">Daftar/Masuk</a>
                        <div class="dropdown-content">
                            <a href="../daftar/index.php">Daftar</a>
                            <a href="../login/index.php">Masuk</a>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
    <?php
        } elseif ($explode[2]=="laporan") {
    ?>
            <ul class="jstfy">
                <li class="jstfy-link"><a href="../index.php">Beranda</a></li>
                <?php
                    if (isset($_SESSION['nama_pegawai'])) {
                        ?>
                        <li class="jstfy-link active"><a href="index.php">Laporan</a></li>
                        <?php
                    }else {
                        ?>
                        <li class="jstfy-link"><a href="../pemesanan/index.php">Pemesanan</a></li>
                        <?php
                    }
                ?>
                <?php
                    if (isset($_SESSION['id'])) {
                ?>
                    <li class="dropdown jstfy-link">
                        <a href="#" class="dropbtn"><?= $_SESSION['nama'] ?></a>
                        <div class="dropdown-content">
                            <a href="../pelanggan/index.php">Profil</a>
                            <a href="../config/logout.php">Keluar</a>
                        </div>
                    </li>
                <?php
                    }else {
                ?>
                    <li class="dropdown jstfy-link">
                        <a href="#" class="dropbtn">Daftar/Masuk</a>
                        <div class="dropdown-content">
                            <a href="../daftar/index.php">Daftar</a>
                            <a href="../login/index.php">Masuk</a>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
    <?php
        }
    ?>
</header>
