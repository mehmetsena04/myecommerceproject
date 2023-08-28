<?php require_once("baglan.php");
$GelenIdDegeri = Filtrele($_GET["id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guncelle</title>
</head>

<body>
    <?php
    function AcilirListecinMenuYaz($GuncellenecekMenuUstId, $MenuustIDdegeri = 0, $boslukDegeri = 0)
    {
        global $VeritabaniBaglanti;
        $menusorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM menuler WHERE ustid=? ");
        $menusorgusu->execute([$MenuustIDdegeri]);
        $menukayitsayisi = $menusorgusu->rowCount();
        $menusorgusukayitlari = $menusorgusu->fetchAll(PDO::FETCH_ASSOC);
        if ($menukayitsayisi > 0) {
            foreach ($menusorgusukayitlari as $kayit) {
                $menuid = $kayit["id"];
                $MenuustIDdegeri = $kayit["ustid"];
                $menuAdi = $kayit["menuadi"];
                if ($GuncellenecekMenuUstId == $menuid) {
                    echo "<option value='" . $menuid . "' selected='selected'>" . str_repeat("&nbsp;", $boslukDegeri) . $menuAdi . "</option>";

                } else {
                    echo "<option value='" . $menuid . "'>" . str_repeat("&nbsp;", $boslukDegeri) . $menuAdi . "</option>";
                }
                AcilirListecinMenuYaz($GuncellenecekMenuUstId, $menuid, $boslukDegeri + 5);
            }
        }
    }
    $menusorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM menuler WHERE id=? LIMIT 1");
    $menusorgusu->execute([$GelenIdDegeri]);
    $menusorgusuSayisi->$menusorgusu->rowCount();
    $menusorgusukayitlari = $menusorgusu->fetchAll(PDO::FETCH_ASSOC);
    ?>
    Menu Güncelleme formu
    <form action="guncellesonuc.php?id=<?php echo $menusorgusukayitlari["id"]; ?>" method=" post">
        Üst Menü <select name="UstMenuSecimi?>
            <option value=" 0" <?php if ($menusorgusukayitlari["ustid"] == 0) {
                ; ?>selected=" selected" <?php }
            ; ?>>Anamenü yap</option>
            <?php AcilirMenuicinMenuYaz(); ?>
        </select>
        <br>
        <br>
        Menü Adı: <input type="text" name="menuadi" value="<?php echo $menusorgusukayitlari["menuadi"] ?>"><br>
        <input type="submit" value="Menü Güncelle"><br>
    </form>
    <br>
    <br>
    <br>
    <br>
</body>

</html>
<?php $VeritabaniBaglanti = null; ?>