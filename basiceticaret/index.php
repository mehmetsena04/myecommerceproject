<?php

require_once("ayarlar/ayar.php");
require_once("ayarlar/sitesayfalari.php");
require_once("ayarlar/fonksiyonlar.php");
if (isset($_REQUEST["SK"])) {
    $SayfaKoduDegeri = SayiliİcerikleriFiltrele($_REQUEST["SK"]);
} else {

    $SayfaKoduDegeri = 0;

}


?>
<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset:utf-8">
    <meta http-equiv="Content-Language" content="tr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="8 Days">
    <link rel="icon" type="image/png" href="Resimler/Resimler/Favicon.png">
    <title>
        <?php echo DonusumleriGeridondur($SiteTitle); ?>
    </title>
    <!-- <title>///*<?= $SiteTitle ?> */Kısa yazım şekli </title> -->
    <meta name="description" content="<?php echo DonusumleriGeridondur($SiteDescription); ?>">
    <meta name="keywords" content="<?php echo DonusumleriGeridondur($SiteKeywords); ?>">
    <script type="text/javascript" src="Resimler\JQuery\jquery-3.7.0.js" language="javascript"></script>
    <script type="text/javascript" src="ayarlar/fonksiyonlar.js" language="javascript"></script>
    <link type="text/css" rel="stylesheet" href="ayarlar/stil.css">
</head>

<body>
    <table width="1065" height="%100" align="center" cellspacing="0" border="0" cellpadding="0">
        <tr height="40" bgcolor="#353745">
            <td><img src="Resimler/Resimler/HeaderMesajResmi.png" border="0"></td>
        </tr>
        <tr height="110">
            <td>
                <table width="1065" height="30" align="center" cellspacing="0" border="0" cellpadding="0">
                    <tr bgcolor="#0088cc">
                        <td>&nbsp;</td>
                        <td width="20"><a href="*****"> <img src="Resimler/Resimler/KullaniciBeyaz16x16.png"
                                    style="margin-top: 5px;" border="0"></a></td>
                        <td width="70" class="mavialanmenusu"><a href="*****">Giriş Yap</a></td>
                        <td width="20"><a href="*****"> <img src="Resimler/Resimler/KullaniciEkleBeyaz16x16.png"
                                    style="margin-top: 5px;" border="0"></a></td>
                        <td width="85" class="mavialanmenusu"><a href="index.php?SK=22">Yeni Üye Ol</a></td>
                        <td width="20"><a href="*****"> <img src="Resimler/Resimler/SepetBeyaz16x16.png"
                                    style="margin-top: 5px;" border="0"></a></td>
                        <td width="103" class="mavialanmenusu"><a href="*****">Alış veriş sepeti</a></td>
                    </tr>
                </table>
                <table width="1065" height="80" align="center" cellspacing="0" border="0" cellpadding="0">
                    <tr>
                        <td width="192" border="0"><a href="index.php"> <img src="Resimler/Resimler/
                          <?php echo DonusumleriGeridondur($SiteLogo); ?>"></a>
                        </td>

                        <td>
                            <table width="873" height="30" align="center" cellspacing="0" border="0" cellpadding="0">
                                <tr>
                                    <td width="306"><a href="****"></a><a href="index.php"></a>&nbsp;</td>
                                    <td class="anamenu" width="107"> <a href="index.php?SK=0">Anasayfa</a> </td>
                                    <td class="anamenu" width="160"><a href="****">Erkek
                                            ayakkabıları</a> </td>
                                    <td class="anamenu" width="160"><a href="****">Kadın ayakkabıları</a> </td>
                                    <td class="anamenu" width="140"><a href="****">Çocuk ayakkabıları</a> </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td valing="top">
                <table width="1065" align="center" cellspacing="0" border="0" cellpadding="0">
                    <tr>
                        <td align="center">

                            <?php
                            if (!$SayfaKoduDegeri or $SayfaKoduDegeri == "" or $SayfaKoduDegeri == 0) {
                                include("ayarlar/" . $Sayfa[0]);

                            } else {
                                include($Sayfa[$SayfaKoduDegeri]);

                            }
                            ?>


                        </td>
                    </tr>
                </table>

            </td>
        </tr>

        <tr height="210">
            <td>
                <table width="1065" bgcolor="#F9F9F9" height="210" align="center" cellspacing="0" border="0"
                    cellpadding="0">
                    <tr height="30">
                        <td widt="250" class="bold" style="border-bottom:dashed 2px #CFDBAA ">Kurumsal</td>
                        <td width="22">&nbsp;</td>
                        <td width="250">Üyelik ,Hizmetler</td>
                        <td width="22">&nbsp;</td>
                        <td width="250">Sözleşmeler</td>
                        <td width="21">&nbsp;</td>
                        <td widt="250">Bizi Takip Edin</td>
                    </tr>
                    <tr height="30">
                        <td class="altalanmenusu" style="border-bottom:dashed 2px #CFDBAA"><a
                                href="index.php?SK=1">Hakkımızda</a>
                        </td>

                        <td width="">&nbsp; </td>
                        <td class="altalanmenusu">Giriş Yap</td>
                        <td width="">&nbsp;</td>
                        <td class="altalanmenusu"><a href="index.php?SK=2"> Üyelik Sözleşmesi</a> </td>
                        <td width="">&nbsp;</td>

                        <td>
                            <table height="30" width="250" align="center" cellspacing="0" border="0" cellpadding>
                                <tr>

                                    <td width="20"><a href=""></a> <img src="Resimler\Resimler\Facebook16x16.png"> </td>
                                    <td class="altalanmenusu" width="230"><a
                                            href="<?php echo DonusumleriGeridondur($SosyalLinkFacebook); ?>">Facebook</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="altalanmenusu" style="border-bottom:dashed 2px #CFDBAA "> <a
                                href="index.php?SK=8">Banka Hesaplarımız</a></td>

                        <td>&nbsp;</td>
                        <td class="altalanmenusu"><a href="index.php?SK=22">Yeni Üye Ol</a></td>
                        <td>&nbsp;</td>
                        <td class="altalanmenusu"><a href="index.php?SK=3">Kullanım Koşulları</a></td>
                        <td>&nbsp;</td>

                        <td>
                            <table width="250">
                                <tr>
                                    <td>
                                    <td width="20"><a href=""></a> <img src="Resimler\Resimler\Twitter16x16.png"> </td>
                                    <td width="230"><a
                                            href="<?php echo DonusumleriGeridondur($SosyalLinkTwitter); ?>">Twitter</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="altalanmenusu" style="border-bottom:dashed 2px #CFDBAA "><a
                                href="index.php?SK=9">Havale bildirim Formu</a></td>
                        <td>&nbsp;</td>
                        <td class="altalanmenusu"><a href="index.php?SK=21"> Sıkça sorulan sorular</a> </td>
                        <td>&nbsp;</td>
                        <td class="altalanmenusu"><a href="index.php?SK=4">Gizlilik Sözleşmesi</a></td>
                        <td>&nbsp;</td>

                        <td>
                            <table width="250" height="30" align="center" cellspacing="0" border="0" cellpadding="0">
                                <tr>
                                    <td width="20"><a href=""></a><img src="Resimler\Resimler\LinkedIn16x16.png"> </td>
                                    <td class="altalanmenusu" width="230"><a
                                            href=" <?php echo DonusumleriGeridondur($SosyalLinkLinkedin); ?>">Linkedin
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr height="30">
                        <td class="altalanmenusu" style="border-bottom:dashed 2px #CFDBAA "><a
                                href="index.php?SK=14">Kargom Nerede?</a></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td class="altalanmenusu"> <a href="index.php?SK=5"> Mesafeli satış sözleşmesi</a></td>

                        <td>&nbsp;</td>
                        <td>
                            <table width="250" height="30" align="center" cellspacing="0" border="0" cellpadding="0">
                                <td width="20"><a href=""><img src="Resimler\Resimler\Instagram16x16.png"> </a></td>
                                <td class="altalanmenusu" width="230"><a
                                        href="<?php echo DonusumleriGeridondur($SosyalLinkInstagram); ?>">Instagram</a>
                                </td>

                            </table>
                        </td>

                    </tr>

                    <tr height="30">
                        <td class="altalanmenusu" style="border-bottom:dashed 2px #CFDBAA "> <a
                                href="index.php?SK=16">İletişim</a> </td>
                        <td>&nbsp;</td>
                        <td class="altalanmenusu"> <a href="index.php?SK=6">Teslimat</a> </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <table width="250" height="30" align="center" cellspacing="0" border="0" cellpadding="0">
                                <tr>
                                    <td width="20"> <a href=""><img src="Resimler\Resimler\Pinterest16x16.png"></a>
                                    </td>
                                    <td class="altalanmenusu" width="230"><a
                                            href="<?php echo DonusumleriGeridondur($SosyalLinkPinterest); ?>">Pinterest</a>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                    <tr height="30">
                        <td class="altalanmenusu"> <a href="index.php?SK=7">İptal&İade&Değişim</a> </td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                            <table>
                                <td width="20"> <img src="Resimler\Resimler\YouTube16x16.png"> </td>
                                <td class="altalanmenusu" width="230"><a href="">Youtube</a> </td>
                            </table>
                        </td>
                    </tr>

            </td>
        </tr>



        <tr height="30">
            <td>
                <table width="1065" align="center" cellspacing="0" border="0" cellpadding="0">
                    <tr>
                        <td class="altalanmenusu">
                            <?php echo DonusumleriGeridondur($SiteCopyrightText); ?>
                        </td>
                    </tr>
                </table>
            </td>

        </tr>

        <tr height=" 30" width="1065" align="center" cellspacing="0" border="0" cellpadding="0">
            <td>
                <table>
                    <tr>
                        <td align="center" border="0"><img src="Resimler/Resimler/RapidSSL32x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\InternetteGuvenliAlisveris28x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\3DSecure14x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\BonusCard41x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\MaximumCard46x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\WorldCard48x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\CardFinans78x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\AxessCard46x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\OdemeSecimiParafCard.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\VisaCard37x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\MasterCard21x12.png">
                            <img style="margin-right: 5px" src="Resimler\Resimler\AmericanExpiress20x12.png">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>



    </table>
</body>

</html>
<?php
$VeritabaniBaglantisi = null;

?>