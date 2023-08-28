<?php require_once("baglan.php");
if(isset($_SESSION["kullanicioturumu"]))
{
    header("Location:index.php");
    exit();
} else {

    ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelismis Uyelik</title>
</head>

<form action="uyeolsonuc.php.php" method="post">

    <table width="300" border="0" cellspacing="0" cellpadding="0">
        <tr>

            <td colspan="3" height="30" width="100" bgcolor="#990000" style="color:#FFFFFF">&nbsp;Yeni Üyelik
                Kayıt alanı
            </td>

        </tr>
        <tr>

            <td height="30" width="100" style="width: 98%;">&nbsp;Kullanıcı adı</td>
            <td height="30" width="10" style="width: 98%;">&nbsp;:</td>
            <td height="30" width="190" style="width: 98%;">&nbsp;<input type="text" name="kullaniciadi"></td>
        </tr>
        <tr>
            <td height="30" width="100" style="width: 98%;">&nbsp;Şifre</td>
            <td height="30" width="10" style="width: 98%;">&nbsp;:</td>
            <td height="30" width="190" style="width: 98%;">&nbsp;<input type="password" name="sifre"></td>
        </tr>
        <tr>

            <td height="30" width="100" style="width: 98%;">&nbsp;Adı-Soyası</td>
            <td height="30" width="10" style="width: 98%;">&nbsp;:</td>
            <td height="30" width="190" style="width: 98%;">&nbsp;<input type="text" name="adisoyadi"></td>
        </tr>
        <tr>
            <td height="30" width="100" style="width: 98%;">&nbsp;Email Adresi</td>
            <td height="30" width="10" style="width: 98%;">&nbsp;:</td>
            <td height="30" width="190" style="width: 98%;">&nbsp;<input type="email" name="emailadresi"></td>
        </tr>
        <tr>
            <td height="30" width="100" style="width: 98%;">&nbsp;</td>
            <td height="30" width="10" style="width: 98%;">&nbsp;:</td>
            <td height="30" width="190" style="width: 98%;">&nbsp;<input type="submit" value="Kayıt Ol"></td>
        </tr>
    </table>


</form>


</td>

</tr>
<tr>
    <td colspan="5" heigth="20">&nbsp;</td>
</tr>
<tr>
    <td bgcolor="#CCCCCCCC" colspan="5" heigth="100">FOOTER ALANI</td>
</tr>
</table>

<body>

</body>

</html>
<?php } $VeritabaniBaglanti = null; ?>