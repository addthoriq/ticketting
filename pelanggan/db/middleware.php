<?php
if(isset($_GET['msg'])){
    $msg = "Pastikan: \r\n - Nomor tidak lebih dari 10 Digit\r\n - Nama tidak lebih dari 30 Karakter\r\n - Username tidak lebih dari 10 Karakter\r\n - Password tidak lebih dari 10 Karakter";
    echo "
    <div class='error'>
        <p>".nl2br($msg)."</p>
    </div>
    ";
}elseif (isset($_GET['dbl'])) {
    $msg = "Email atau Username telah terdaftar";
    echo "
    <div class='error'>
        <p>".nl2br($msg)."</p>
    </div>
    ";
}
$ss = $_SERVER['REQUEST_URI'];
$exp = explode("&", $ss);
$nama = explode("=", $exp[1]);
$telp = explode("=", $exp[2]);
$m = explode("=", $exp[3]);
$email = str_replace("%40", "@", $m);
$usr = explode("=", $exp[4]);

$nama1 = explode("=", $exp[2]);
$nama2 = $nama1[1];
$telp1 = explode("=", $exp[3]);
$telp2 = $telp1[1];
$m1 = explode("=", $exp[4]);
$email1 = str_replace("%40", "@", $m1);
$email2 = $email1[1];
$usr1 = explode("=", $exp[5]);
$usr2 = $usr1[1];
