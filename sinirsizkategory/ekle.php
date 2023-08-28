<?php require_once("baglan.php");

$GelenUstMenuSecimi = Filtrele($_POST["UstMenuSecimi"]);
$GelenUstMenuAdi = Filtrele($_POST["menuadi"]);

if (isset($GelenUstMenuSecimi) and isset($GelenUstMenuAdi)) {
    $ekle = $VeritabaniBaglanti->prepare("INSERT INTO menuler values (ustid,menuid) values (?,?)");
    $ekle->execute([$GelenUstMenuSecimi, $GelenUstMenuAdi]);
    $menukayitsayisi = $ekle->rowCount();

    if ($menukayitsayisi > 0) {
        header("Location:index.php");
        exit();
    } else {
        echo "HATA! <br>";
        echo "İşlem sırasında bir hata oluştu lütfen daha sonra tekrar deneyiniz.<br>";
        echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a><br>";
    }
} else {

    echo "HATA! <br>";
    echo "Lütfen boş alan bırakmayınız <br>";
    echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a>";
}


$VeritabaniBaglanti = null;
?>