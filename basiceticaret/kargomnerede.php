<?php
require_once("ayarlar/ayar.php");
require_once("ayarlar/sitesayfalari.php");
?>
<form action="index.php?SK=15" method="post">
    <table width="1065" align="center" cellspacing="0" border="0" cellpadding="0">
        <tr height="100" bgcolor="#FF9900">
            <td align="left"> &nbsp;KARGOM NEREDE?</td>
        </tr>
        <tr height="50">
            <td align="left"> &nbsp;Sipariş gönderilerimizi buradan takip edebirilirsiniz.?</td>
        </tr>
        <tr height="50">
            <td align="center"> &nbsp;<img src="Resimler/diger/Kargocu.png" alt="" srcset=""></td>
        </tr>
        <tr height="50">
            <td align="center"> Kargo Takip No:<br></td>
        </tr>
        <tr>
            <td align="center"> &nbsp;

                <input type="text" name="KargoTakipNo">

            </td>
        </tr>
        <tr>
            <td align="center"> &nbsp;

                <input type="submit" name="Kargo durumunu göster">

            </td>
        </tr>
        <tr>
            <td align="center"> &nbsp;Yukarıdaki alana lütfen Kargo takip nonuzu giriniz.</td>
        </tr>
    </table>
</form>