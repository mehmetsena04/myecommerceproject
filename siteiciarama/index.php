<?php require_once ("baglan.php")  ;?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <form action="aramasonuc.php" method="post">


        <table width="500" align="center" border="0" cellspacing="0">


            <tr height="30">
                <td width="25"><input type="text" name="kelime" style="color:red"></td>

            </tr>
            <tr height="30">
                <td width="25"><input type="submit" name="kelime" value="Ara" style="height: 30;color: red;"></td>

            </tr>

        </table>
    </form>
</body>

</html>
<?php
$VeritabaniBaglanti = null;
?>