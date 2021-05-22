<?php
$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="kisiselwebsiteprojesi";


$db=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);

if(!$db)
{
die("Veritabanı bağlantı işlemi başarısız".mysqli_connect_error());


}


?>
