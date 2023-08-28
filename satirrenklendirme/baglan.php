<?php
try {
    $VeritabaniBaglanti = new PDO("mysql:host=localhost;dbname=satirdatabase;charset=UTF8", "root", "");

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
$ipadresi = $_SERVER["REMOTE_ADDR"];
$zamandamgaSi = time();
$oykullanmaSiniri = 86400;
$ZamaniGeriAl = $zamandamgaSi - $oykullanmaSiniri;

?>