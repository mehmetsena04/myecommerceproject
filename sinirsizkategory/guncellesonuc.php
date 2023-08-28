<?php require("baglan.php");
$gelenid = Filtrele($_POST["id"]);
$gelenustmenusecimi = Filtrele($_POST["UstMenuSecimi"]);
$gelenmenuadi = Filtrele($_POST["menuadi"]);






if (isset($gelenustmenusecimi) and isset($gelenid) and isset($gelenmenuadi)) {
    $guncelle = $VeritabaniBaglanti->prepare("UPDATE menuid SET INTO menuler ustid=?,menuid=? WHERE id=? LIMIT 1");
    $guncelle->execute([$gelenustmenusecimi, $gelenid, $gelenmenuadi]);
    $guncelsayisi = $guncelle->rowCount();

    if ($guncelsayisi > 0) {
        header("Location:index.php");
        exit();
    } else {
        echo "HATA! <br>";
        echo "İşlem sırasında bir hata oluştu lütfen daha sonra tekrar deneyiniz.<br>";
        echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a><br>";
    }
} else {
    echo "HATA! <br>";
    echo " Lütfen Boş alan bırakmayınız.<br>";
    echo "Güncelleme sayfasına gitmek için lütfen buraya <a href ='guncelle.php?=" . $gelenid . "'>Tıklayınız</a><br>";

}
























$VeritabaniBaglanti = null;




?>