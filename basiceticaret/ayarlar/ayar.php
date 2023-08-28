<?php
try {
    $VeritabaniBaglantisi = new PDO("mysql:host=localhost;dbname=basiceticaret;charset=UTF8", "root", "");


} catch (PDOException $Hata) {
    // // echo $Hata->getMessage();
    die();
}

$AyarlarSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi = $AyarlarSorgusu->rowCount();
$Ayarkaydi = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);
if ($AyarSayisi > 0) {

    $SiteName = $Ayarkaydi["SiteAdi"];
    $SiteTitle = $Ayarkaydi["SiteTitle"];
    $SiteDescription = $Ayarkaydi["SiteDescription"];
    $SiteKeywords = $Ayarkaydi["SiteKeywords"];
    $SiteCopyrightText = $Ayarkaydi["SiteCopyrightMetni"];
    $SiteLogo = $Ayarkaydi["SiteLogosu"];
    $SiteEmailAdres = $Ayarkaydi["SiteEmailAdresi"];
    $SiteEmailHostAdresi = $Ayarkaydi["SiteEmailHostAdresi"];
    $SiteEmailSifresi = $Ayarkaydi["SiteEmailSifresi"];
    $SosyalLinkFacebook = $Ayarkaydi["SosyalLinkFacebook"];
    $SosyalLinkTwitter = $Ayarkaydi["SosyalLinkTwitter"];
    $SosyalLinkLinkedin = $Ayarkaydi["SosyalLinkLinkedin"];
    $SosyalLinkInstagram = $Ayarkaydi["SosyalLinkInstagram"];
    $SosyalLinkPinterest = $Ayarkaydi["SosyalLinkPinterest"];


} else {

    die();
}


?>
<?php

$MetinlerSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinkaydiSayisi = $MetinlerSorgusu->rowCount();
$Metinkayitlari = $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);

if ($MetinkaydiSayisi > 0) {
    $HakkimizdaMetni = $Metinkayitlari["HakkimizdaMetni"];
    $UyelimSozlesmesiMetni = $Metinkayitlari["UyelikSozlesmesiMetni"];
    $KullanimKosullariMetni = $Metinkayitlari["KullanimKosullariMetni"];
    $GizlilikSozlesmesiMetni = $Metinkayitlari["GizlilikSozlesmesiMetni"];
    $MesafeliSatisSozlesmesiMetni = $Metinkayitlari["MesafeliSatisSozlesmesiMetni"];
    $TeslimatMetni = $Metinkayitlari["TeslimatMetni"];
    $IptalIadeDegisimMetni = $Metinkayitlari["IptalIadeDegisimMetni"];



} else {

    die();
}
?>