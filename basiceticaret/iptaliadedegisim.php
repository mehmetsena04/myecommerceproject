<?php
require_once("ayarlar/ayar.php");
require_once("ayarlar/sitesayfalari.php");

?>

<table width="1065" heigtht="55" bgcolor="#FFCC99" height="80" align="center" cellspacing="0" border="0"
    cellpadding="0">
    <tr height="30">
        <td class="bold" style="border-bottom:dashed 2px #CFDBAA ">
            <h3>İptal&iade&eğişim</h3>
        </td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>

        <td>&nbsp;İptal iade ve değişim ile ilgili bilgileri içeren metine buradan ulaşabilirsiniz.</td>

        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>
            <?php echo DonusumleriGeridondur($IptalIadeDegisimMetni); ?>
        </td>
</table>