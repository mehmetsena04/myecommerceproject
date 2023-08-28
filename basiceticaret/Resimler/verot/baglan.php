<?php
try {
    $VeritabaniBaglanti = new PDO("mysql:host=localhost;dbname=gelismisuyelik;charset=UTF8", "root", "");

} catch (PDOException $Hata) {
    echo $Hata->getMessage();
    die();
}
function Filtrele($deger)
{
    $bir = trim($deger);
    $iki = strip_tags($bir);
    $uc = htmlspecialchars($iki, ENT_QUOTES);
    return $uc;

}
// $ipadresi = $_SERVER["REMOTE_ADDR"];
$zamandamgaSi = time();
$uyeadisoyadi= "";
// $oykullanmaSiniri = 86400;
// $ZamaniGeriAl = $zamandamgaSi - $oykullanmaSiniri;

if (isset($_SESSION["kullanicioturumu"])) {

    $uyesorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM uyeler WHERE kullaniciadi=?");
    $uyesorgusu->execute([$_SESSION["kullanicioturumu"]]);
    $uyesayisi = $uyesorgusu->rowCount();
    $uyekaydi = $uyesorgusu->fetch(PDO::FETCH_ASSOC);
    if ($uyesayisi > 0) {
        echo $uyeadisoyadi= $uyekaydi["adisoyadi"];

    } else {

        echo "";
    }

}
?>