<?php

require_once("ayarlar/ayar.php");
require_once("ayarlar/fonksiyonlar.php");
if (isset($_POST["isimSoyisim"])) {
    $GelenIsimsoyisim = Guvenlik($_POST["isimSoyisim"]);
} else {

    $GelenIsimsoyisim = "";

}
if (isset($_POST["Emailadresi"])) {
    $GelenEmailAdresi = Guvenlik($_POST["Emailadresi"]);
} else {

    $GelenEmailAdresi = "";

}
if (isset($_POST["telefonNumarasi"])) {
    $GelenTelefonno = Guvenlik($_POST["telefonNumarasi"]);
} else {

    $GelenTelefonno = "";

}
if (isset($_POST["BankaSecim"])) {
    $GelenBankaSecimi = Guvenlik($_POST["BankaSecim"]);
} else {

    $GelenBankaSecimi = "";

}
if (isset($_POST["aciklama"])) {
    $GelenAciklama = Guvenlik($_POST["aciklama"]);
} else {

    $GelenAciklama = "";

}

echo $GelenIsimsoyisim . "||" . $GelenAciklama . "||" . $GelenEmailAdresi . "||" . $GelenBankaSecimi;
echo $GelenIsimsoyisim . "||" . $GelenAciklama . "||" . $GelenAciklama . "||" . $GelenAciklama;
if ($GelenIsimsoyisim != "" and $GelenEmailAdresi != "" and $GelenTelefonno != "" and $GelenBankaSecimi != "") {
    $HavaleBildirimiKaydet = $VeritabaniBaglantisi->prepare("INSERT INTO havalebildirimleri (BankaId,AdiSoyadi,EmailAdresi,TelefonNumarasi,Aciklama,IslemTarihi,Durum	) values (?,?,?,?,?,?,?)");
    $HavaleBildirimiKaydet->execute([$GelenAciklama, $GelenBankaSecimi, $GelenIsimsoyisim, $GelenEmailAdresi, $GelenTelefonno, $zamandamgaSi, 0]);
    $HavaleControlSayisi = $HavaleBildirimiKaydet->rowCount();
    if ($HavaleControlSayisi > 0) {
        header("Locatipn:İndex.php?SK=11");
        exit();
    } else {
        header("Locatipn:İndex.php?SK=12");
        exit();
    }


} else {
    header("Locatipn:İndex.php?SK=13");
    exit();
}

?>