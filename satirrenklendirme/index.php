<?php require_once("baglan.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satiriciarama</title>
</head>

<body style>
    <br><br>
    <table width="1000" align="center" border="0" cellspacing="0">
        <td width="25" align="center">&nbsp;
            <?php echo "Bulunan Kayıtlar" . "<br />"; ?>
        </td>
        <br><br>
        <tr height=" 30" style="color:white;background-color: blue;">

            <td width="30" align="left">Ürün adı</td>
            <td width="30" align="right">Ürün fiyatı</td>

            <?php

            $Sorgu = $VeritabaniBaglanti->prepare("SELECT * FROM urunler ");
            $Sorgu->execute();
            //  $kayitSaySi = $Sorgu->rowCount();
            $kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);
            $sayi = 0;
            $birincirenk = "#15cccc";
            $ikincirenk = "#fdcdbd";
            foreach ($kayitlar as $kayit) {
                if ($sayi % 2) {
                    $arkaplanrengi = $birincirenk;
                } else {
                    $arkaplanrengi = $ikincirenk;
                }
                ?>
            <tr height="30" onmouseleave="style='background-color:<?php echo 'white'; ?>'"
                onmouseover="style='background-color:<?php echo 'yellow'; ?>'">
                <td width=" 25" align="left">&nbsp;
                    <?php echo $kayit["urunadi"] . "<br />"; ?>
                </td>
                <td width="25" align="right">
                    <?php echo $kayit["urunfiyati"] . "<br />"; ?>&nbsp;
                </td>
            </tr>
            <?php
            $sayi++;
            }
            ?>

    </table>



</body>


</html>
<?php
$VeritabaniBaglanti = null;
?>