<?php require_once("baglan.php");

if (isset($_POST["kullaniciadi"])) {
    $Gelenkullaniciadi = Filtrele($_POST["kullaniciadi"]);
} else {
    $Gelenkullaniciadi = "";

}
if (isset($_POST["sifre"])) {
    $GelenSifre = Filtrele($_POST["sifre"]);
} else {
    $GelenSifre = "";

}
if (isset($_POST["adisoyadi"])) {
    $GelenAdsoyad = Filtrele($_POST["adisoyadi"]);
} else {
    $GelenAdsoyad = "";

}
if (isset($_POST["emailadresi"])) {
    $GelenEmailAdresi = Filtrele($_POST["emailadresi"]);
} else {
    $GelenEmailAdresi = "";

}

$uyesorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM uyeler WHERE kullaniciadi=? OR emailadresi=?");
$uyesorgusu->execute([$Gelenkullaniciadi, $GelenEmailAdresi]);
$uyesayisi = $uyesorgusu->rowCount();
if ($uyesayisi > 0) {
    echo "Bu kayıt bilgileri ile zaten bir kullanıcı mevcut";
    echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a><br>";



} else {

    $uyeekle = $VeritabaniBaglanti->prepare("INSERT INTO uyeler (kullaniciadi,sifre,adisoyadi,emailadresi,kayittarihi) values(?,?,?,?,?)");
    $uyeekle->execute([$Gelenkullaniciadi, $GelenSifre, $GelenEmailAdresi, $GelenEmailAdresi, $zamandamgaSi]);
    $kayitsayisi = $uyeekle->rowCount();
    if ($kayitsayisi > 0) {
        echo "kaydınız yapıldı";
        echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a><br>";

    } else {
        echo "kayt yapılamadı, lütfen daha sonra tekrar deneyniz";
        echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a><br>";

    }

}
$VeritabaniBaglanti = null;
?>