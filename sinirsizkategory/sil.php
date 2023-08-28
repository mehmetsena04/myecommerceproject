<?php require_once("baglan.php");
$GelenIdDegeri = Filtrele($_POST["id"]);
$MenuHiyerarsisiniBulDizisi = array($GelenIdDegeri);
function MenuHiyerarsisiniBul($MenuIDdegeri)
{
    global $VeritabaniBaglanti;
    global $MenuHiyerarsisiniBulDizisi;
    $menusorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM menuler WHERE ustid=? ");
    $menusorgusu->execute([$MenuIDdegeri]);
    $menukayitsayisi = $menusorgusu->rowCount();
    $menusorgusukayitlari = $menusorgusu->fetchAll(PDO::FETCH_ASSOC);
    if ($menukayitsayisi > 0) {
        foreach ($menusorgusukayitlari as $kayit) {
            $menuid = $kayit["id"];
            $MenuustIDdegeri = $kayit["ustid"];
            $menuAdi = $kayit["menuadi"];
            $MenuHiyerarsisiniBulDizisi[] = $menuid;
            MenuHiyerarsisiniBul($menuid);
        }
    }
    return $MenuHiyerarsisiniBulDizisi;
}
if (isset($GelenIdDegeri)) {
    $silinecekmenuler = MenuHiyerarsisiniBul($GelenIdDegeri);
    foreach ($silinecekmenuler as $silinecekId) {
        $Sil = $VeritabaniBaglanti->prepare("DELETE FROM menuler WHERE id=? LIMIT 1");
        $Sil->execute([$silinecekId]);
        $silinensayi = $Sil->rowCount();
        if ($silinensayi < 1) {
            echo "HATA! <br>";
            echo "İşlem sırasında bir hata oluştu lütfen daha sonra tekrar deneyiniz.<br>";
            echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a><br>";
        }
    }
    header("Location:index.php");
    exit();
} else {
    echo "HATA! <br>";
    echo "Anasayfaya gitmek için lütfen buraya <a href ='index.php'>Tıklayınız</a>";
}
$VeritabaniBaglanti = null;
?>