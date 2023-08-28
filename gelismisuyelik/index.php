<?php require_once("baglan.php");
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gelismis Uyelik</title>
</head>
<table width="1000" height="500" align="center" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td colspan="5" heigth="100" bgcolor="#Cccccc">Üst alan header alanı logo menuler banner..</td>
    </tr>
    <tr>
        <td colspan="5" heigth="20">&nbsp;</td>
    </tr>
    <tr>
        <td width="200" heigth="400" bgcolor="#CCCCCC" valign="top"> <a href="index.php"></a>Anasayfa</td>
        <td width="10" heigth="400">&nbsp;</td>
        <td width="480" heigth="400">&nbsp; IÇERİK ALANI MAİN ALANI</td>
        <td width="10" heigth="400">&nbsp;</td>
        <td width="300" heigth="400" valign="top">
            <?php if (isset($_SESSION["kullanicioturumu"])) {
                ; ?>
            <table width="300" border="0" cellspacing="0" cellpadding="0">
                <tr>

                    <td colspan="3" height="30" bgcolor="#990000" style="color: #FFFFFF;"> Üyelik alanı</td>
                </tr>
                <tr>
                    <td height="30" width="100">&nbsp; Kullanıcı adı</td>
                    <td height="30" width="10">:</td>
                    <td height="30" width="190"><input type="text" style="width:98%" name="kullaniciadi"></td>
                </tr>
                <tr>
                    <td height="30" width="100">&nbsp; Şifre</td>
                    <td height="30" width="10">:</td>
                    <td height="30" width="190"><input type="password" style="width:98%" name="sifre"></td>
                </tr>
                <tr>
                    <td height="30" width="100">&nbsp; Email</td>
                    <td height="30" width="10">:</td>
                    <td height="30" width="190"><input type="email" style="width:98%" name="email"></td>
                </tr>
                <tr>
                    <td height="30" width="100">&nbsp; </td>
                    <td height="30" width="10">&nbsp;</td>
                    <td height="30" width="190" align="right"><input type="submit" value="Giriş Yap"></td>
                </tr>
                <tr>
                    <td colspan="3" height="30" align="right"> <a href="uyeol.php">Yeni Üye ol</a> </td>
                </tr>
            </table>
            <?php } else {
                ; ?>

            <form action="uyegiris.php" method="post">

                <table width="300" border="0" cellspacing="0" cellpadding="0">
                    <tr>

                        <td height="15" bgcolor="#990000" style="color: #FFFFFF;">&nbsp;Yeni Üyelik alanı</td>
                    </tr>
                    <tr>
                        <td height="15" align="left">&nbsp; Merhaba
                            <?php echo $uyeadisoyadi; ?>
                        </td>
                    </tr>

                    <tr>
                        <td height="15" align="right"><a href="cikis.php"></a>Çıkış yap</td>
                    </tr>

                </table>


            </form>

            <?php } ?>
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
<?php $VeritabaniBaglanti = null; ?>