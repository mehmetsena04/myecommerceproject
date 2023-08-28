<?php
session_start();
if (empty($_SESSION["SiteDili"])) {
    include("diltr.php");
} else {

    if ($_SESSION["SiteDili"] == "Turkish") {
        include("diltr.php");
    } else if ($_SESSION["SiteDili"] == "English") {
        include("dilen.php");
    } else {
        include("dilfr.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table width="1000" cellspacing="0" align="center" border="0">
        <tr height="40">
            <td width="140">
                <?php echo ANASAYFA; ?>


            </td>
            <td width="140">

                <?php echo HAKKIMIZDA; ?>

            </td>
            <td width="140">
                <?php echo İLETİŞİM; ?>


            </td>
            <td width="140">
                <?php echo URUNLER; ?>
            </td>
            <td width="140">
                <a href="secim.php?DilSecimi=Turkish">TR</a>| <a href="secim.php?DilSecimi=English">EN</a>|<a
                    href="secim.php?DilSecimi=French">FR</a>
            </td>
        </tr>
    </table>

</body>

</html>