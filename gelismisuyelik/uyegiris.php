<?php require_once("baglan.php");
 $Gelenkullaniciadi = Filtrele($_POST["kullaniciadi"]);
$GelenSifre = Filtrele($_POST["sifre"]);
$uyesorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? AND sifre=?");
$uyesorgusu->execute([$Gelenkullaniciadi, $GelenSifre]);
$uyesayisi = $uyesorgusu->rowCount();






if ($uyesayisi > 0) {
    $_SESSION["kullanicioturumu"] = $Gelenkullaniciadi;
    header("Location:index.php");
    exit();


} else {
    echo "HATA! <br>";
    echo "Girilen uye bulunamadı<br>";
    echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a><br>";

}
$VeritabaniBaglanti = null;
?>