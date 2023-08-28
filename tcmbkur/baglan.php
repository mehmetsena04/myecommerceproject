<?php
try {
    $VeritabaniBaglanti = new PDO("mysql:host=localhost;dbname=tcmb;charset=UTF8", "root", "");

    //code...
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
$ZamanDamgasi = time();
?>