<?php require_once("baglan.php") ?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sınırsız kategori</title>
</head>

<body>
    <?php
    function AcilirListecinMenuYaz($MenuustIDdegeri = 0, $boslukDegeri = 0)
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
                echo "<option value='" . $menuid . "'>" . str_repeat("&nbsp;", $boslukDegeri) . $menuAdi . "</option>";
                AcilirListecinMenuYaz($menuid, $boslukDegeri + 5);
            }
        }
    }

    function MenuYaz($MenuustIDdegeri = 0, $Boslukdegeri = 0)
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
                echo str_repeat("&nbsp;", $Boslukdegeri);
                echo $menuAdi . "<a href='guncelle.php?id=" . $menuid . "'>Guncelle</a><a href='sil.php?id=" . $menuid . "'>Sil</a><br>";
                MenuYaz($menuid, $Boslukdegeri + 10);
            }
        }
    }

    ?>
    <!-- Yeni Menu Listeleme formu -->
    <form action="ekle.php?=<?php echo $menusorgusukayitlari["menuadi"] ?>"" method=" post">
        Üst Menü <select name="UstMenuSecimi">
            <option value="0" <?php if ($menusorgusukayitlari["ustid"] == 0) { ?> selected="selected" <?php }
            ; ?>>Anasayfa</option>
            <?php AcilirListecinMenuYaz(); ?>
        </select>
        Menü Adı: <input type="text" name="menuadi" value="<?php echo $menusorgusukayitlari["menuadi"] ?>">
        <input type="submit" value="Menü Ekle"><br>

    </form>
    <br>
    <br>
    <br>

</body>

</html>
<?php

MenuYaz();

$VeritabaniBaglanti = null; ?>