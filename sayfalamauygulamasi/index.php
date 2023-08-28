<?php require_once("baglan.php"); ?>
<?php


if (isset($_REQUEST["sayfalama"])) {
    $GelenSayfalama = $_REQUEST["sayfalama"];
} else {
    $GelenSayfalama = 1;

}

$Sayfalamaicinsolvesaggosterilecekbutonsayisi = 2;
$Sayfabasinagosterilecekkayitsayisi = 5;
$toplamkayitsayisisorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM urunler ");
$toplamkayitsayisisorgusu->execute();
$toplamukayitsayisi = $toplamkayitsayisisorgusu->rowCount();
$sayfalamayabaslanacakkayitsayisi = ($GelenSayfalama * $Sayfabasinagosterilecekkayitsayisi) - $Sayfabasinagosterilecekkayitsayisi;
$bulunansayfasayisi = ceil($toplamukayitsayisi / $Sayfabasinagosterilecekkayitsayisi);






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sayfa uygulaması</title>
    <style>
    .Sayfalamaalanikapsayicisi {
        display: block;
        width: %100;
        height: auto;
        margin: 0;
        padding: 10 px 0px 10 px 0px;
        border: 0;
        outline: 0;
        text-align: center;
        text-decoration: none
    }

    .metinalankapsayicisi {
        display: block;
        width: %100;
        height: auto;
        margin: 0;
        padding: 10 px 0px 10 px 0px;
        border: 0;
        outline: 0;
        text-align: center;
        font-size: 18px;
        text-decoration: none
    }

    .numaralandirmaalanikapsayicisi {
        display: block;
        width: %100;
        height: auto;
        margin: 0;
        padding: 10 px 0px 10 px 0px;
        border: 0;
        outline: 0;
        text-align: center;
        font-size: 18px;
        text-decoration: none
    }

    .Pasif {
        display: inline-block;
        width: auto;
        height: 20px;
        margin: 0;
        padding: 0;
        padding: 5px, 7.5px;
        background-color: #FFFFFF;
        border: 0;
        outline: 0;
        border: 1PX solid #DADADA;
        color: #646464;
        font-size: 14px;
        font-weight: normal;
        font-variant: normal;
        line-height: 14px;
        text-decoration: none;
        text-align: center;

    }

    .Pasif a:link,
    a:visited,
    a:hover,
    a:active {

        text-decoration: none;
        color: 646464;
    }

    .Aktif {
        display: inline-block;
        width: auto;
        height: 20px;
        margin: 0;
        padding: 0;
        padding: 5px, 7.5px;
        background-color: #F6F6F6;
        border: 0;
        outline: 0;
        border: 1PX solid #DADADA;
        color: #FF0000;
        font-size: 14px;
        font-weight: normal;
        font-variant: normal;
        line-height: 14px;
        text-decoration: none;
        text-align: center;

    }
    </style>
</head>

<body>
    <br> <br><br> <br><br>
    <table align="center" width="800" border="0" cellpading="0" cellspacing="0">
        <tr style="background-color: brown;color:aqua" height="30">
            <td>ID </td>
            <td>Ürün adı </td>
            <td>Ürün Fiyatı </td>
            <td>Para birimi </td>
        </tr>
        <?php
        $urunsorgusu = $VeritabaniBaglanti->prepare("SELECT * FROM urunler order by id ASC LIMIT 5 ");
        $urunsorgusu->execute();
        $urunsayisi = $urunsorgusu->rowCount();
        $urunkayitlari = $urunsorgusu->fetchAll(PDO::FETCH_ASSOC);

        foreach ($urunkayitlari as $kayit) {
            echo "<tr height='30'><td width='30'> " . $kayit["id"] . "</td>" . "<td width='680'>" . $kayit["urunadi"] . "</td>." . "<td  width='70' align='right'> " . $kayit["urunfiyati"] . "</td>" . " <td width='20' align='right'>" . $kayit["parabirimi"] . "</td></tr>";

        }
        ?>

    </table>
    <div class="Sayfalamaalanikapsayicisi">
        <br><br>
        <div class="metinalankapsayicisi">
            Toplam
            <?php echo $bulunansayfasayisi; ?> sayfada,
            <?php echo $toplamukayitsayisi; ?> adet kayıt sayısı
            blunmaktadır.
        </div>
        <div class="numaralandirmaalanikapsayicisi">
            <?php
            if ($GelenSayfalama > 1) {
                echo "<span  class='Pasif'> <a href='index.php?Sayfalama=1'> <<</a></span>";
                $birgerial = $GelenSayfalama - 1;
                echo "<span  class='Pasif'> <a href='index.php?Sayfalama=" . $birgerial . "> <<</a></span>";
            }
            for ($sayfaindexdegeri = $GelenSayfalama - $Sayfalamaicinsolvesaggosterilecekbutonsayisi; $sayfaindexdegeri < $GelenSayfalama + $Sayfalamaicinsolvesaggosterilecekbutonsayisi; $sayfaindexdegeri++) {
                if (($sayfaindexdegeri > 0 and ($sayfaindexdegeri < $bulunansayfasayisi))) {
                    if ($GelenSayfalama == $sayfaindexdegeri) {
                        echo "<span> " . $sayfaindexdegeri . "  </span>";
                    } else {
                        echo "<span><a href='index.php?Sayfalama=" . $sayfaindexdegeri . "'>" . $sayfaindexdegeri . "</a></span>";
                    }
                }
            }
            if ($GelenSayfalama != $bulunansayfasayisi) {
                $birgerial = $GelenSayfalama + 1;
                echo "<span  class='Pasif'> <a href='index.php?Sayfalama=" . $birgerial . "'>> </a></span></span>";
                echo "<span  class='Pasif'> <a href='index.php?Sayfalama=" . $bulunansayfasayisi . "'>>></a></span></span>";
            }
            ?>
        </div>
    </div>

</body>

</html>
<?php $VeritabaniBaglanti = null; ?>