<?php

$ipadresi = $_SERVER["REMOTE_ADDR"];
$zamandamgaSi = time();
$TarihSaat = date("d.m.Y H:i:s", $zamandamgaSi);

function Guvenlik($deger)
{
    $bir = trim($deger);
    $iki = strip_tags($bir);
    $uc = htmlspecialchars($iki, ENT_QUOTES);
    return $uc;

}
function DonusumleriGeridondur($deger)
{

    $Geridondur = htmlspecialchars_decode($deger, ENT_QUOTES);

    return $Geridondur;

}
function SadeceRakamKalsin($deger)
{
    $islem = preg_replace("/[^0-9]/", "", $deger);

    return $islem;

}
function TumBosluklariSil($deger)
{
    $islem = preg_replace("/\s|&nbsp;/", "", $deger);

    return $islem;

}
function IbanBicimlendir($deger)
{
    $BoslukSil = trim($deger);
    $TumBosluklariSil = TumBosluklariSil($BoslukSil);
    $BirinciBlok = substr($TumBosluklariSil, 0, 4);
    $IkinciBlok = substr($TumBosluklariSil, 4, 4);
    $UcuncuBlok = substr($TumBosluklariSil, 8, 4);
    $DorduncuBlok = substr($TumBosluklariSil, 12, 4);
    $BesinciBlok = substr($TumBosluklariSil, 16, 4);
    $AltinciBlok = substr($TumBosluklariSil, 20, 4);
    $YedinciBlok = substr($TumBosluklariSil, 24, 2);
    $sonuc = $BirinciBlok . " " . $IkinciBlok . " " . $UcuncuBlok . " " . $DorduncuBlok . " " . $BesinciBlok . " " . $AltinciBlok . " " . $YedinciBlok;
    return $sonuc;
}


function SayiliİcerikleriFiltrele($deger)
{
    $bir = trim($deger);
    $iki = strip_tags($bir);
    $uc = htmlspecialchars($iki, ENT_QUOTES);
    $Temizle = SadeceRakamKalsin($uc);
    return $Temizle;

}

$uyeadisoyadi = "";
$oykullanmaSiniri = 86400;
$ZamaniGeriAl = $zamandamgaSi - $oykullanmaSiniri;
?>