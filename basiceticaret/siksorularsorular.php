<?php
require_once("ayarlar/ayar.php");
require_once("ayarlar/sitesayfalari.php");
?>
<form action="index.php?SK=15" method="post">
    <table width="1065" align="center" cellspacing="0" border="0" cellpadding="0">
        <tr height="100" bgcolor="#FF9900">
            <td align="left"> &nbsp;SIK SORULAN SORULAR</td>
        </tr>
        <tr height="50">
            <td align="left"> &nbsp;Aklınıza takılabilecek soruların cevaplarını burada bulunmakatadır.
                Farklı bir soru için lütfen biizmle iletişime geçiniz.</td>
        </tr>

        <tr>
            <td>
                <?php
                $sorusorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM sorular ");
                $sorusorgusu->execute();
                $sorusorgususayisi = $sorusorgusu->rowCount();
                $sorularkayitlari = $sorusorgusu->fetchAll(PDO::FETCH_ASSOC);

                foreach ($sorularkayitlari as $kayit) {
                    ?>
                    <div>

                        <div style="font-weight: bold;" id="<?php echo $kayit['id']; ?>"
                            onClick="$.SorulariGoster(<?php echo $kayit['id']; ?>)">
                            <?php echo $kayit['soru']; ?>

                        </div>

                        <div class="cevapalani" style=" display:none;">
                            <?php echo $kayit['cevap']; ?>
                        </div>

                    </div>
                <?php } ?>
            </td>


        </tr>

    </table>
</form>