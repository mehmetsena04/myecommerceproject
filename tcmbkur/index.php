<?php
require_once("baglan.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr {

            height: 40px;
        }
    </style>
</head>

<body>



    <?php


    $link = "https://www.tcmb.gov.tr/kurlar/today.xml";
    $icerik = simplexml_load_file($link);
    // echo "<pre>",
    //     print_r($icerik);
    // echo "</pre>";
    
    $ZamanDamgasi = time();
    $usdbirim = $icerik->Currency[0]->Unit;
    $usdadi = $icerik->Currency[0]->Isim;
    $usdKisaadi = $icerik->Currency[0]["CurrencyCode"];
    $usdalis = $icerik->Currency[0]->ForexBuying;
    $usdsatis = $icerik->Currency[0]->ForexSelling;
    $usdeffektifalis = $icerik->Currency[0]->BanknoteBuying;
    $usdeffektifsatis = $icerik->Currency[0]->BanknoteSelling;

    $usdGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $usdGuncelle->execute([$usdadi, $usdbirim, $usdalis, $usdsatis, $usdeffektifalis, $usdeffektifsatis, $ZamanDamgasi, $usdKisaadi]);
    $usdGuncellenenkayitsayisi = $usdGuncelle->rowCount();

    if ($usdGuncellenenkayitsayisi < 1) {
        echo $usdadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $audbirim = $icerik->Currency[1]->Unit;
    $audadi = $icerik->Currency[1]->Isim;
    $audKisaadi = $icerik->Currency[1]["CurrencyCode"];
    $audalis = $icerik->Currency[1]->ForexBuying;
    $audsatis = $icerik->Currency[1]->ForexSelling;
    $audeffektifalis = $icerik->Currency[1]->BanknoteBuying;
    $audeffektifsatis = $icerik->Currency[1]->BanknoteSelling;

    $AUDGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $AUDGuncelle->execute([$audadi, $audbirim, $audalis, $audsatis, $audeffektifalis, $audeffektifsatis, $ZamanDamgasi, $audKisaadi]);
    $usdGuncellenenkayitsayisi = $AUDGuncelle->rowCount();

    if ($usdGuncellenenkayitsayisi < 1) {
        echo $audKisaadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $DKKbirim = $icerik->Currency[2]->Unit;
    $DKKadi = $icerik->Currency[2]->Isim;
    $DKKKisaadi = $icerik->Currency[2]["CurrencyCode"];
    $DKKalis = $icerik->Currency[2]->ForexBuying;
    $DKKsatis = $icerik->Currency[2]->ForexSelling;
    $DKKeffektifalis = $icerik->Currency[2]->BanknoteBuying;
    $DKKeffektifsatis = $icerik->Currency[2]->BanknoteSelling;

    $DKKGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $DKKGuncelle->execute([$DKKadi, $DKKbirim, $DKKalis, $DKKsatis, $DKKeffektifalis, $DKKeffektifsatis, $ZamanDamgasi, $DKKKisaadi]);
    $DKKGuncellenenkayitsayisi = $DKKGuncelle->rowCount();

    if ($usdGuncellenenkayitsayisi < 1) {
        echo $DKKKisaadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $EURbirim = $icerik->Currency[3]->Unit;
    $EURadi = $icerik->Currency[3]->Isim;
    $EURKisaadi = $icerik->Currency[3]["CurrencyCode"];
    $EURalis = $icerik->Currency[3]->ForexBuying;
    $EURsatis = $icerik->Currency[3]->ForexSelling;
    $EUReffektifalis = $icerik->Currency[3]->BanknoteBuying;
    $EUReffektifsatis = $icerik->Currency[3]->BanknoteSelling;

    $EURGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $EURGuncelle->execute([$EURadi, $EURbirim, $EURalis, $EURsatis, $EUReffektifalis, $EUReffektifsatis, $ZamanDamgasi, $EURKisaadi]);
    $EURGuncellenenkayitsayisi = $EURGuncelle->rowCount();

    if ($usdGuncellenenkayitsayisi < 1) {
        echo $EURadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $GBPbirim = $icerik->Currency[4]->Unit;
    $GBPadi = $icerik->Currency[4]->Isim;
    $GBPKisaadi = $icerik->Currency[4]["CurrencyCode"];
    $GBPalis = $icerik->Currency[4]->ForexBuying;
    $GBPsatis = $icerik->Currency[4]->ForexSelling;
    $GBPeffektifalis = $icerik->Currency[4]->BanknoteBuying;
    $GBPeffektifsatis = $icerik->Currency[4]->BanknoteSelling;

    $GBPGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $GBPGuncelle->execute([$GBPadi, $GBPbirim, $GBPalis, $GBPsatis, $GBPeffektifalis, $GBPeffektifsatis, $ZamanDamgasi, $GBPKisaadi]);
    $GBPGuncellenenkayitsayisi = $GBPGuncelle->rowCount();

    if ($GBPGuncellenenkayitsayisi < 1) {
        echo $GBPadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $CHFbirim = $icerik->Currency[5]->Unit;
    $CHFadi = $icerik->Currency[5]->Isim;
    $CHFKisaadi = $icerik->Currency[5]["CurrencyCode"];
    $CHFalis = $icerik->Currency[5]->ForexBuying;
    $CHFsatis = $icerik->Currency[5]->ForexSelling;
    $CHFeffektifalis = $icerik->Currency[5]->BanknoteBuying;
    $CHFeffektifsatis = $icerik->Currency[5]->BanknoteSelling;

    $CHFGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $CHFGuncelle->execute([$CHFadi, $CHFbirim, $CHFalis, $CHFsatis, $CHFeffektifalis, $CHFeffektifsatis, $ZamanDamgasi, $CHFKisaadi]);
    $CHFGuncellenenkayitsayisi = $CHFGuncelle->rowCount();

    if ($usdGuncellenenkayitsayisi < 1) {
        echo $CHFadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $SEKbirim = $icerik->Currency[6]->Unit;
    $SEKadi = $icerik->Currency[6]->Isim;
    $SEKKisaadi = $icerik->Currency[6]["CurrencyCode"];
    $SEKalis = $icerik->Currency[6]->ForexBuying;
    $SEKsatis = $icerik->Currency[6]->ForexSelling;
    $SEKeffektifalis = $icerik->Currency[6]->BanknoteBuying;
    $SEKeffektifsatis = $icerik->Currency[6]->BanknoteSelling;
    $SEKGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $SEKGuncelle->execute([$SEKadi, $SEKbirim, $SEKalis, $SEKsatis, $SEKeffektifalis, $SEKeffektifsatis, $ZamanDamgasi, $SEKKisaadi]);
    $SEKGuncellenenkayitsayisi = $SEKGuncelle->rowCount();

    if ($usdGuncellenenkayitsayisi < 1) {
        echo $SEKadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $CADbirim = $icerik->Currency[7]->Unit;
    $CADadi = $icerik->Currency[7]->Isim;
    $CADKisadi = $icerik->Currency[7]["CurrencyCode"];
    $CADalis = $icerik->Currency[7]->ForexBuying;
    $CADsatis = $icerik->Currency[7]->ForexSelling;
    $CADeffektifalis = $icerik->Currency[7]->BanknoteBuying;
    $CADeffektifsatis = $icerik->Currency[7]->BanknoteSelling;

    $CADGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $CADGuncelle->execute([$CADadi, $CADbirim, $CADalis, $CADsatis, $CADeffektifalis, $CADeffektifsatis, $ZamanDamgasi, $CADKisadi]);
    $CADGuncellenenkayitsayisi = $CADGuncelle->rowCount();

    if ($CADGuncellenenkayitsayisi < 1) {
        echo $CADGuncellenenkayitsayisi . " guncellenmesinde HATA oluştu";
        die();
    }

    $KWDbirim = $icerik->Currency[8]->Unit;
    $KWDadi = $icerik->Currency[8]->Isim;
    $KWDKisadi = $icerik->Currency[8]["CurrencyCode"];
    $KWDalis = $icerik->Currency[8]->ForexBuying;
    $KWDsatis = $icerik->Currency[8]->ForexSelling;
    $KWDeffektifalis = $icerik->Currency[8]->BanknoteBuying;
    $KWDeffektifsatis = $icerik->Currency[8]->BanknoteSelling;
    $KWDGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $KWDGuncelle->execute([$KWDadi, $KWDbirim, $KWDalis, $KWDsatis, $KWDeffektifalis, $KWDeffektifsatis, $ZamanDamgasi, $KWDKisadi]);
    $KWDGuncellenenkayitsayisi = $KWDGuncelle->rowCount();

    if ($KWDGuncellenenkayitsayisi < 1) {
        echo $KWDGuncellenenkayitsayisi . " guncellenmesinde HATA oluştu";
        die();
    }

    $NOKbirim = $icerik->Currency[9]->Unit;
    $NOKadi = $icerik->Currency[9]->Isim;
    $NOKKisadi = $icerik->Currency[9]["CurrencyCode"];
    $NOKalis = $icerik->Currency[9]->ForexBuying;
    $NOKsatis = $icerik->Currency[9]->ForexSelling;
    $NOKeffektifalis = $icerik->Currency[9]->BanknoteBuying;
    $NOKeffektifsatis = $icerik->Currency[9]->BanknoteSelling;
    $NOKGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $NOKGuncelle->execute([$NOKadi, $NOKbirim, $NOKalis, $NOKsatis, $NOKeffektifalis, $NOKeffektifsatis, $ZamanDamgasi, $NOKKisadi]);
    $NOKGuncellenenkayitsayisi = $NOKGuncelle->rowCount();

    if ($NOKGuncellenenkayitsayisi < 1) {
        echo $NOKKisadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $SARbirim = $icerik->Currency[10]->Unit;
    $SARadi = $icerik->Currency[10]->Isim;
    $SARKisadi = $icerik->Currency[10]["CurrencyCode"];
    $SARalis = $icerik->Currency[10]->ForexBuying;
    $SARsatis = $icerik->Currency[10]->ForexSelling;
    $SAReffektifalis = $icerik->Currency[10]->BanknoteBuying;
    $SAReffektifsatis = $icerik->Currency[10]->BanknoteSelling;
    $SARGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $SARGuncelle->execute([$SARadi, $SARbirim, $SARalis, $SARsatis, $SAReffektifalis, $SAReffektifsatis, $ZamanDamgasi, $SARKisadi]);
    $SARGuncellenenkayitsayisi = $SARGuncelle->rowCount();

    if ($SARGuncellenenkayitsayisi < 1) {
        echo $SARadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $JPYbirim = $icerik->Currency[11]->Unit;
    $JPYadi = $icerik->Currency[11]->Isim;
    $JPYKisadi = $icerik->Currency[11]["CurrencyCode"];
    $JPYalis = $icerik->Currency[11]->ForexBuying;
    $JPYsatis = $icerik->Currency[11]->ForexSelling;
    $JPYeffektifalis = $icerik->Currency[11]->BanknoteBuying;
    $JPYeffektifsatis = $icerik->Currency[11]->BanknoteSelling;


    $JPYGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $JPYGuncelle->execute([$JPYadi, $JPYbirim, $JPYalis, $JPYsatis, $JPYeffektifalis, $JPYeffektifsatis, $ZamanDamgasi, $JPYKisadi]);
    $JPYGuncellenenkayitsayisi = $JPYGuncelle->rowCount();

    if ($JPYGuncellenenkayitsayisi < 1) {
        echo $JPYadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $BGNbirim = $icerik->Currency[12]->Unit;
    $BGNadi = $icerik->Currency[12]->Isim;
    $BGNKisadi = $icerik->Currency[12]["CurrencyCode"];
    $BGNalis = $icerik->Currency[12]->ForexBuying;
    $BGNsatis = $icerik->Currency[12]->ForexSelling;
    $BGNeffektifalis = $icerik->Currency[12]->BanknoteBuying;
    $BGNeffektifsatis = $icerik->Currency[12]->BanknoteSelling;
    $BGNGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $BGNGuncelle->execute([$BGNadi, $BGNbirim, $BGNalis, $BGNsatis, $BGNeffektifalis, $BGNeffektifsatis, $ZamanDamgasi, $BGNKisadi]);
    $BGNGuncellenenkayitsayisi = $BGNGuncelle->rowCount();

    if ($BGNGuncellenenkayitsayisi < 1) {
        echo $BGNKisadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $RONbirim = $icerik->Currency[13]->Unit;
    $RONadi = $icerik->Currency[13]->Isim;
    $RONKisadi = $icerik->Currency[13]["CurrencyCode"];
    $RONalis = $icerik->Currency[13]->ForexBuying;
    $RONsatis = $icerik->Currency[13]->ForexSelling;
    $RONeffektifalis = $icerik->Currency[13]->BanknoteBuying;
    $RONeffektifsatis = $icerik->Currency[13]->BanknoteSelling;
    $RONGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $RONGuncelle->execute([$RONadi, $RONbirim, $RONalis, $RONsatis, $RONeffektifalis, $RONeffektifsatis, $ZamanDamgasi, $RONKisadi]);
    $RONGuncellenenkayitsayisi = $RONGuncelle->rowCount();

    if ($RONGuncellenenkayitsayisi < 1) {
        echo $RONadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $RUBbirim = $icerik->Currency[14]->Unit;
    $RUBadi = $icerik->Currency[14]->Isim;
    $RUBKisadi = $icerik->Currency[14]["CurrencyCode"];
    $RUBalis = $icerik->Currency[14]->ForexBuying;
    $RUBsatis = $icerik->Currency[14]->ForexSelling;
    $RUBeffektifalis = $icerik->Currency[14]->BanknoteBuying;
    $RUBeffektifsatis = $icerik->Currency[14]->BanknoteSelling;

    $RUBGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $RUBGuncelle->execute([$RUBadi, $EURbirim, $RUBalis, $RUBsatis, $RUBeffektifalis, $RUBeffektifsatis, $ZamanDamgasi, $RUBKisadi]);
    $RUBGuncellenenkayitsayisi = $RUBGuncelle->rowCount();

    if ($RUBGuncellenenkayitsayisi < 1) {
        echo $RUBGuncellenenkayitsayisi . " guncellenmesinde HATA oluştu";
        die();
    }

    $IRRbirim = $icerik->Currency[15]->Unit;
    $IRRadi = $icerik->Currency[15]->Isim;
    $IRRKisadi = $icerik->Currency[15]["CurrencyCode"];
    $IRRalis = $icerik->Currency[15]->ForexBuying;
    $IRRsatis = $icerik->Currency[15]->ForexSelling;
    $IRReffektifalis = $icerik->Currency[15]->BanknoteBuying;
    $IRReffektifsatis = $icerik->Currency[15]->BanknoteSelling;
    $IRRGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $IRRGuncelle->execute([$IRRadi, $IRRbirim, $IRRalis, $IRRsatis, $IRReffektifalis, $IRReffektifsatis, $ZamanDamgasi, $IRRKisadi]);
    $IRRGuncellenenkayitsayisi = $IRRGuncelle->rowCount();

    if ($IRRGuncellenenkayitsayisi < 1) {
        echo $IRRadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $CNYbirim = $icerik->Currency[16]->Unit;
    $CNYadi = $icerik->Currency[16]->Isim;
    $CNYKisadi = $icerik->Currency[16]["CurrencyCode"];
    $CNYalis = $icerik->Currency[16]->ForexBuying;
    $CNYsatis = $icerik->Currency[16]->ForexSelling;
    $CNYeffektifalis = $icerik->Currency[16]->BanknoteBuying;
    $CNYeffektifsatis = $icerik->Currency[16]->BanknoteSelling;
    $CNYGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $CNYGuncelle->execute([$CNYadi, $CNYbirim, $CNYalis, $CNYsatis, $CNYeffektifalis, $CNYeffektifsatis, $ZamanDamgasi, $CNYKisadi]);
    $CNYGuncellenenkayitsayisi = $CNYGuncelle->rowCount();

    if ($CNYGuncellenenkayitsayisi < 1) {
        echo $CNYadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $PKRbirim = $icerik->Currency[17]->Unit;
    $PKRadi = $icerik->Currency[17]->Isim;
    $PKRKisadi = $icerik->Currency[17]["CurrencyCode"];
    $PKRalis = $icerik->Currency[17]->ForexBuying;
    $PKRsatis = $icerik->Currency[17]->ForexSelling;
    $PKReffektifalis = $icerik->Currency[17]->BanknoteBuying;
    $PKReffektifsatis = $icerik->Currency[17]->BanknoteSelling;
    $PKRGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $PKRGuncelle->execute([$PKRadi, $PKRbirim, $PKRalis, $PKRsatis, $PKReffektifalis, $PKReffektifsatis, $ZamanDamgasi, $PKRKisadi]);
    $pkrGuncellenenkayitsayisi = $PKRGuncelle->rowCount();

    if ($pkrGuncellenenkayitsayisi < 1) {
        echo $PKRadi . " guncellenmesinde HATA oluştu";
        die();
    }

    $QARbirim = $icerik->Currency[18]->Unit;
    $QARadi = $icerik->Currency[18]->Isim;
    $QARKisadi = $icerik->Currency[18]["CurrencyCode"];
    $QARalis = $icerik->Currency[18]->ForexBuying;
    $QARsatis = $icerik->Currency[18]->ForexSelling;
    $QAReffektifalis = $icerik->Currency[18]->BanknoteBuying;
    $QAReffektifsatis = $icerik->Currency[18]->BanknoteSelling;
    $QARGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $QARGuncelle->execute([$QARadi, $QARbirim, $QARalis, $QARsatis, $QAReffektifalis, $QAReffektifsatis, $ZamanDamgasi, $QARKisadi]);
    $QARGuncellenenkayitsayisi = $QARGuncelle->rowCount();

    if ($QARGuncellenenkayitsayisi < 1) {
        echo $QARadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $KRWbirim = $icerik->Currency[19]->Unit;
    $KRWadi = $icerik->Currency[19]->Isim;
    $KRWKisadi = $icerik->Currency[19]["CurrencyCode"];
    $KRWalis = $icerik->Currency[19]->ForexBuying;
    $KRWsatis = $icerik->Currency[19]->ForexSelling;
    $KRWeffektifalis = $icerik->Currency[19]->BanknoteBuying;
    $KRWeffektifsatis = $icerik->Currency[19]->BanknoteSelling;
    $KRWGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $KRWGuncelle->execute([$KRWadi, $KRWbirim, $KRWalis, $KRWsatis, $KRWeffektifalis, $KRWeffektifsatis, $ZamanDamgasi, $KRWKisadi]);
    $KRWGuncellenenkayitsayisi = $KRWGuncelle->rowCount();

    if ($KRWGuncellenenkayitsayisi < 1) {
        echo $KRWadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $AZNbirim = $icerik->Currency[20]->Unit;
    $AZNadi = $icerik->Currency[20]->Isim;
    $AZNKisadi = $icerik->Currency[20]["CurrencyCode"];
    $AZNalis = $icerik->Currency[20]->ForexBuying;
    $AZNsatis = $icerik->Currency[20]->ForexSelling;
    $AZNeffektifalis = $icerik->Currency[20]->BanknoteBuying;
    $AZNeffektifsatis = $icerik->Currency[20]->BanknoteSelling;

    $AZNGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $AZNGuncelle->execute([$AZNadi, $AZNbirim, $AZNalis, $AZNsatis, $AZNeffektifalis, $AZNeffektifsatis, $ZamanDamgasi, $AZNKisadi]);
    $AZNGuncellenenkayitsayisi = $AZNGuncelle->rowCount();

    if ($usdGuncellenenkayitsayisi < 1) {
        echo $AZNadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $AEDbirim = $icerik->Currency[21]->Unit;
    $AEDadi = $icerik->Currency[21]->Isim;
    $AEDKisadi = $icerik->Currency[21]["CurrencyCode"];
    $AEDalis = $icerik->Currency[21]->ForexBuying;
    $AEDsatis = $icerik->Currency[21]->ForexSelling;
    $AEDeffektifalis = $icerik->Currency[21]->BanknoteBuying;
    $AEDeffektifsatis = $icerik->Currency[21]->BanknoteSelling;

    $AEDGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $AEDGuncelle->execute([$AEDadi, $AEDbirim, $AEDalis, $AEDsatis, $AEDeffektifalis, $AEDeffektifsatis, $ZamanDamgasi, $AEDKisadi]);
    $AEDGuncellenenkayitsayisi = $DKKGuncelle->rowCount();

    if ($AEDGuncellenenkayitsayisi < 1) {
        echo $AEDadi . " guncellenmesinde HATA oluştu";
        die();
    }
    $XDRbirim = $icerik->Currency[22]->Unit;
    $XDRadi = $icerik->Currency[22]->Isim;
    $XDRKisaadi = $icerik->Currency[22]["CurrencyCode"];
    $XDRalis = $icerik->Currency[22]->ForexBuying;
    $XDRsatis = $icerik->Currency[22]->ForexSelling;
    $XDReffektifalis = $icerik->Currency[22]->BanknoteBuying;
    $XDReffektifsatis = $icerik->Currency[22]->BanknoteSelling;

    $XDRGuncelle = $VeritabaniBaglanti->prepare("UPDATE dovizkurlari SET adi=?, birim=?, alis=?, satis=?, effektifalis=?, effektifsatis=?,updatetime=? WHERE kodu=?");
    $XDRGuncelle->execute([$XDRadi, $XDRbirim, $XDRalis, $XDRsatis, $XDReffektifalis, $XDReffektifsatis, $ZamanDamgasi, $XDRKisaadi]);
    $XDRGuncellenenkayitsayisi = $XDRGuncelle->rowCount();

    if ($XDRGuncellenenkayitsayisi < 1) {
        echo $XDRadi;
        die();
    }




    ?>
    <table align="center" width="1000" cellspacing="0" cellpading="0">
        <tr height="30" bgcolor="#CCCCCC">
            <th align="left">ADI </th>
            <th align="left">BİRİMİ </th>
            <th align="left">KISA ADI </th>
            <th align="left">ALIŞ FİYATI </th>
            <th align="left">SATIŞFİYATI </th>
            <th align="left">EFFEKTİF ALIŞ FİYATI </th>
            <th align="left">EFFEKTİF SATIŞ FİYATI </th>
        </tr>
        <tr>
            <td width="150">
                <?php echo $usdadi ?>
            </td>
            <td width="50">
                <?php echo $usdbirim ?>
            </td>
            <td width="50">
                <?php echo $usdKisaadi ?>
            </td>
            <td width="150">
                <?php echo $usdalis ?>
            </td>
            <td width="150">
                <?php echo $usdsatis ?>
            </td>
            <td width="150">
                <?php echo $usdeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $usdeffektifsatis ?>
            </td>

        </tr>
        <tr>
            <td width="150">
                <?php echo $audadi ?>
            </td>
            <td width="50">
                <?php echo $audbirim ?>
            </td>
            <td width="50">
                <?php echo $audKisaadi ?>
            </td>
            <td width="150">
                <?php echo $audalis ?>
            </td>
            <td width="150">
                <?php echo $audsatis ?>
            </td>
            <td width="150">
                <?php echo $audeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $audeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $DKKadi ?>
            </td>
            <td width="50">
                <?php echo $DKKbirim ?>
            </td>
            <td width="50">
                <?php echo $DKKKisaadi ?>
            </td>
            <td width="150">
                <?php echo $DKKalis ?>
            </td>
            <td width="150">
                <?php echo $DKKsatis ?>
            </td>
            <td width="150">
                <?php echo $DKKeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $DKKeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $EURadi ?>
            </td>
            <td width="50">
                <?php echo $EURbirim ?>
            </td>
            <td width="50">
                <?php echo $EURKisaadi ?>
            </td>
            <td width="150">
                <?php echo $EURalis ?>
            </td>
            <td width="150">
                <?php echo $EURsatis ?>
            </td>
            <td width="150">
                <?php echo $EUReffektifalis ?>
            </td>
            <td width="150">
                <?php echo $EUReffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $GBPadi ?>
            </td>
            <td width="50">
                <?php echo $GBPbirim ?>
            </td>
            <td width="50">
                <?php echo $GBPKisaadi ?>
            </td>
            <td width="150">
                <?php echo $GBPalis ?>
            </td>
            <td width="150">
                <?php echo $GBPsatis ?>
            </td>
            <td width="150">
                <?php echo $GBPeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $GBPeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $CHFadi ?>
            </td>
            <td width="50">
                <?php echo $CHFbirim ?>
            </td>
            <td width="50">
                <?php echo $CHFKisaadi ?>
            </td>
            <td width="150">
                <?php echo $CHFalis ?>
            </td>
            <td width="150">
                <?php echo $CHFsatis ?>
            </td>
            <td width="150">
                <?php echo $CHFeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $CHFeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $SEKadi ?>
            </td>
            <td width="50">
                <?php echo $SEKbirim ?>
            </td>
            <td width="50">
                <?php echo $SEKKisaadi ?>
            </td>
            <td width="150">
                <?php echo $SEKalis ?>
            </td>
            <td width="150">
                <?php echo $SEKsatis ?>
            </td>
            <td width="150">
                <?php echo $SEKeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $SEKeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $CADadi ?>
            </td>
            <td width="50">
                <?php echo $CADbirim ?>
            </td>
            <td width="50">
                <?php echo $CADKisadi ?>
            </td>
            <td width="150">
                <?php echo $CADalis ?>
            </td>
            <td width="150">
                <?php echo $CADsatis ?>
            </td>
            <td width="150">
                <?php echo $CADeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $CADeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $KWDadi ?>
            </td>
            <td width="50">
                <?php echo $KWDbirim ?>
            </td>
            <td width="50">
                <?php echo $KRWKisadi ?>
            </td>
            <td width="150">
                <?php echo $KWDalis ?>
            </td>
            <td width="150">
                <?php echo $KWDsatis ?>
            </td>
            <td width="150">
                <?php echo $KWDeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $KWDeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $NOKadi ?>
            </td>
            <td width="50">
                <?php echo $NOKbirim ?>
            </td>
            <td width="50">
                <?php echo $NOKKisadi ?>
            </td>
            <td width="150">
                <?php echo $NOKalis ?>
            </td>
            <td width="150">
                <?php echo $NOKsatis ?>
            </td>
            <td width="150">
                <?php echo $NOKeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $NOKeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $SARadi ?>
            </td>
            <td width="50">
                <?php echo $SARbirim ?>
            </td>
            <td width="50">
                <?php echo $SARKisadi ?>
            </td>
            <td width="150">
                <?php echo $SARalis ?>
            </td>
            <td width="150">
                <?php echo $SARsatis ?>
            </td>
            <td width="150">
                <?php echo $SAReffektifalis ?>
            </td>
            <td width="150">
                <?php echo $SAReffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $JPYadi ?>
            </td>
            <td width="50">
                <?php echo $JPYbirim ?>
            </td>
            <td width="50">
                <?php echo $JPYKisadi ?>
            </td>
            <td width="150">
                <?php echo $JPYalis ?>
            </td>
            <td width="150">
                <?php echo $JPYsatis ?>
            </td>
            <td width="150">
                <?php echo $JPYeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $JPYeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $BGNadi ?>
            </td>
            <td width="50">
                <?php echo $BGNbirim ?>
            </td>
            <td width="50">
                <?php echo $BGNKisadi ?>
            </td>
            <td width="150">
                <?php echo $BGNalis ?>
            </td>
            <td width="150">
                <?php echo $BGNsatis ?>
            </td>
            <td width="150">
                <?php echo $BGNeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $BGNeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $RONadi ?>
            </td>
            <td width="50">
                <?php echo $RONbirim ?>
            </td>
            <td width="50">
                <?php echo $RONKisadi ?>
            </td>
            <td width="150">
                <?php echo $RONalis ?>
            </td>
            <td width="150">
                <?php echo $RONsatis ?>
            </td>
            <td width="150">
                <?php echo $RONeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $RONeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $RUBadi ?>
            </td>
            <td width="50">
                <?php echo $RUBbirim ?>
            </td>
            <td width="50">
                <?php echo $RUBKisadi ?>
            </td>
            <td width="150">
                <?php echo $RUBalis ?>
            </td>
            <td width="150">
                <?php echo $RUBsatis ?>
            </td>
            <td width="150">
                <?php echo $RUBeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $RUBeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $IRRadi ?>
            </td>
            <td width="50">
                <?php echo $IRRbirim ?>
            </td>
            <td width="50">
                <?php echo $IRRKisadi ?>
            </td>
            <td width="150">
                <?php echo $IRRalis ?>
            </td>
            <td width="150">
                <?php echo $IRRsatis ?>
            </td>
            <td width="150">
                <?php echo $IRReffektifalis ?>
            </td>
            <td width="150">
                <?php echo $IRReffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $CNYadi ?>
            </td>
            <td width="50">
                <?php echo $CNYbirim ?>
            </td>
            <td width="50">
                <?php echo $CNYKisadi ?>
            </td>
            <td width="150">
                <?php echo $CNYalis ?>
            </td>
            <td width="150">
                <?php echo $CNYsatis ?>
            </td>
            <td width="150">
                <?php echo $CNYeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $CNYeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $PKRadi ?>
            </td>
            <td width="50">
                <?php echo $PKRbirim ?>
            </td>
            <td width="50">
                <?php echo $PKRKisadi ?>
            </td>
            <td width="150">
                <?php echo $PKRalis ?>
            </td>
            <td width="150">
                <?php echo $PKRsatis ?>
            </td>
            <td width="150">
                <?php echo $PKReffektifalis ?>
            </td>
            <td width="150">
                <?php echo $PKReffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $QARadi ?>
            </td>
            <td width="50">
                <?php echo $QARbirim ?>
            </td>
            <td width="50">
                <?php echo $QARKisadi ?>
            </td>
            <td width="150">
                <?php echo $QARalis ?>
            </td>
            <td width="150">
                <?php echo $QARsatis ?>
            </td>
            <td width="150">
                <?php echo $QAReffektifalis ?>
            </td>
            <td width="150">
                <?php echo $QAReffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $KRWadi ?>
            </td>
            <td width="50">
                <?php echo $KRWbirim ?>
            </td>
            <td width="50">
                <?php echo $KRWKisadi ?>
            </td>
            <td width="150">
                <?php echo $KRWalis ?>
            </td>
            <td width="150">
                <?php echo $KRWsatis ?>
            </td>
            <td width="150">
                <?php echo $KWDeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $KWDeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $AZNadi ?>
            </td>
            <td width="50">
                <?php echo $AZNbirim ?>
            </td>
            <td width="50">
                <?php echo $AZNKisadi ?>
            </td>
            <td width="150">
                <?php echo $AZNalis ?>
            </td>
            <td width="150">
                <?php echo $AZNsatis ?>
            </td>
            <td width="150">
                <?php echo $AZNeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $AZNeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $AEDadi ?>
            </td>
            <td width="50">
                <?php echo $AEDbirim ?>
            </td>
            <td width="50">
                <?php echo $AEDKisadi ?>
            </td>
            <td width="150">
                <?php echo $AEDalis ?>
            </td>
            <td width="150">
                <?php echo $AEDsatis ?>
            </td>
            <td width="150">
                <?php echo $AEDeffektifalis ?>
            </td>
            <td width="150">
                <?php echo $AEDeffektifsatis ?>
            </td>
        </tr>
        <tr>
            <td width="150">
                <?php echo $XDRadi ?>
            </td>
            <td width="50">
                <?php echo $XDRbirim ?>
            </td>
            <td width="50">
                <?php echo $XDRKisaadi ?>
            </td>
            <td width="150">
                <?php echo $XDRalis ?>
            </td>
            <td width="150">
                <?php echo $XDRsatis ?>
            </td>
            <td width="150">
                <?php echo $XDReffektifalis ?>
            </td>
            <td width="150">
                <?php echo $XDReffektifsatis ?>
            </td>
        </tr>


    </table>







</body>

</html>