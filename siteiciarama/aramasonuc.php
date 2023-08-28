<?php require_once("baglan.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arasonuc</title>
</head>

<body>
    <form action="aramasonuc.php" method="post">


        <table width="500" align="center" border="0" cellspacing="0">


            <tr height="30">
                <td width="25"><input type="text" name="kelime" style="color:red"></td>

            </tr>
            <tr height="30">
                <td width="25"><input type="submit" value="Ara" style="height: 30;color: red;"></td>

            </tr>
            <tr>&nbsp;</tr>
            <tr>
                <td>

                    <?php

                    if (isset($_POST["kelime"])) {

                        $gelenKelime = Filtrele($_POST["kelime"]);
                    } else {

                        $gelenKelime = "";
                    }
                    if ($gelenKelime != "") {

                        $Sorgu = $VeritabaniBaglanti->prepare("SELECT * FROM esyalar where ad LIKE '%$gelenKelime%' ");
                        $Sorgu->execute();
                        //  $kayitSaySi = $Sorgu->rowCount();
                        $kayitlar = $Sorgu->fetchAll(PDO::FETCH_ASSOC);
                        echo "Bulunan kayıtlar <br/>";
                        foreach ($kayitlar as $kayit) {

                            echo $kayit["ad"] . "<br/>";
                        }

                    }

                    ?>

                </td>
            </tr>
        </table>
    </form>

</body>

</html>
<?php
$VeritabaniBaglanti = null;
?>