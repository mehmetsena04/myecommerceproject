<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="500" valign="top" border="0" cellpadding="0" cellspacing="0">
            <form action="index.php?SK=10" method="post">
                <table>
                    <tr height="40">
                        <td style="color:#FF9900">
                            <h2> Havale bildirim Formu</h2>
                        </td>
                    </tr>
                    <tr height="30">
                        <td valign="top" style="color:#FF9900">
                            <h2> Tamamlanmış olan ödemelerinizi aşağıdaki formdan iletiniz. </h2>
                        </td>
                    </tr>

                    <tr height="30">
                        <td valign="bottom" style="color:#FF9900">
                            İsim Soyisim (*)
                        </td>
                    </tr>
                    <tr height="30">
                        <td valign="top" style="color:#FF9900">
                            <input ass="ialan" type="text" name="isimSoyisim">

                        </td>
                    </tr>

                    <tr height="30">
                        <td valign="bottom" style="color:#FF9900">
                            Email Adresi(*)
                        </td>
                    </tr>

                    <tr height="30">
                        <td valign="top" style="color:#FF9900">
                            <input ass="ialan" type="email" name="Emailadresi">
                        </td>
                    </tr>

                    <tr height="30">
                        <td valign="bottom" style="color:#FF9900">
                            Telefon numarası (*)
                        </td>
                    </tr>

                    <tr height="30">
                        <td valign="top" style="color:#FF9900">
                            <input ass="ialan" type="text" name="telefonNumarasi" maxlength="11">

                        </td>
                    </tr>
                    <tr height="30">
                        <td valign="bottom" style="color:#FF9900">
                            Ödeme Yapılan Banka (*)
                        </td>
                    </tr>

                    <tr height="30">
                        <td ass="ialan" valign="top" style="color:#FF9900">
                            <select name="BankaSecim" class="selectalanlari">
                                <?php
                                $BankalarSorgusu = $VeritabaniBaglantisi->prepare("SELECT * FROM bankahesaplarimiz ORDER BY Bankaadi ASC");
                                $BankalarSorgusu->execute();
                                $BankaSayisi = $BankalarSorgusu->rowCount();
                                $BankaKayitlari = $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
                                foreach ($BankaKayitlari as $bankaKayit) {
                                    ?>

                                <option value="<?php echo $bankaKayit["id"] ?>">
                                    <?php echo $bankaKayit["BankaAdi"] ?>
                                </option>
                                <?php } ?>
                            </select>

                        </td>
                    </tr>
                    <tr height="30">
                        <td valign="top" style="color:#FF9900">
                            Açıklama
                        </td>
                    </tr>
                    <tr height="30">
                        <td cass="ialan" valign="bottom" style="color:#FF9900">
                            <textarea name="aciklama"></textarea>
                        </td>
                    </tr>
                    <tr height="30">
                        <td align="left" style="color:#FF9900">
                            <input class="ialan" style="background-color:chartreuse;color:saddlebrown;cursor:pointer"
                                type="submit" value="Bildirim Gönder">
                        </td>
                    </tr>

                </table>
            </form>
        </td>
        <td>&nbsp;</td>
        <td width="565" align="center" border="0" cellpadding="0" cellspacing="0">
            <table>
                <tr height="40">
                    <td colspan="2" style="color:#FF9900">
                        <h2> İşleyiş</h2>
                    </td>
                </tr>
                <tr height="30">
                    <td colspan="2" style="color:#FF9900">
                        <h2 valign="top"> Havale/EFT kontrolü </h2>
                    </td>
                </tr>


                <tr height="30">
                    <td align="left">
                        <img width="30" valign="bottom" style="margin:20px;border:0px"
                            src="Resimler/diger/Banka20x20.png">
                    </td>
                    <td align="left" valign="bottom"><b>HAVALE/EFT işlemi</b></td>
                </tr>
                <tr height="30">

                    <td align="left" valign="top" colspan="2">Müşteri tarafından ilk önce ödeme işlemleri
                        gerçekleştirilmektedir.</td>
                </tr>


                <tr height="30">
                    <td align="left">
                        <img width="30" valign="bottom" style="margin:20px;border:0px"
                            src="Resimler/diger/DokumanKirmiziKalemli20x20.png">
                    </td>
                    <td align="left" valign="bottom"><b>Bildirim işlemi işlemi</b></td>
                </tr>
                <tr height="30">

                    <td align="left" valign="top" colspan="2">Ödeme işleminizi tamamladıktan sonra havale bildirim
                        sayfasından bildirim formu online olarak gönderirlir....</td>
                </tr>

            </table>
    <tr height="30">
        <td align="left">
            <img width="30" valign="bottom" style="margin:20px;border:0px" src="Resimler/diger/CarklarSiyah20x20.png">
        </td>
        <td align="left" valign="bottom"><b>Kontroller</b></td>
    </tr>
    <tr height="30">

        <td align="left" valign="top" colspan="2">Havale bildirim formu tarafımıza ulaştığında ilgili departman
            tarafından gerekli kontroller yapılır.</td>
    </tr>
    <tr height="30">
        <td align="left">
            <img width="30" valign="bottom" style="margin:20px;border:0px" src="Resimler/diger/AdamSiyah20x20.png">
        </td>
        <td align="left" valign="bottom"><b>Onay/Red</b></td>
    </tr>
    <tr height="30">

        <td align="left" valign="top" colspan="2">Havale bildirim formu geçerli ise yönetici ilgili onayı verir..</td>
    </tr>
    <tr height="30">
        <td align="left">
            <img width="30" valign="bottom" style="margin:20px;border:0px" src="Resimler/diger/SaatEsnetikGri20x20.png">
        </td>
        <td align="left" valign="bottom"><b>Sipariş hazırlama/Teslimat</b></td>
    </tr>
    <tr height="30">

        <td align="left" valign="top" colspan="2">onaylanan siparişler en kısa sürede tarafınıza ulaştırılır.</td>
    </tr>

    </td>
    </tr>
</table>