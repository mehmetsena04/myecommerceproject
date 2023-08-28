<!-- <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


require 'Resimler/PHPMailer/src/PHPMailer.php';
require 'Resimler/PHPMailer/src/Exception.php';
require 'Resimler/PHPMailer/src/SMTP.php';

require_once("ayarlar/ayar.php");
require_once("ayarlar/fonksiyonlar.php");
if (isset($_POST["isimSoyisim"])) {
    $GelenIsimsoyisim = Guvenlik($_POST["isimSoyisim"]);
} else {

    $GelenIsimsoyisim = "";
    //basiceticaret\Resimler\PHPMailer\src\PHPMailer.php
}
if (isset($_POST["Emailadresi"])) {
    $GelenEmailAdresi = Guvenlik($_POST["Emailadresi"]);
} else {

    $GelenEmailAdresi = "";

}
if (isset($_POST["telefonNumarasi"])) {
    $GelenTelefonno = Guvenlik($_POST["telefonNumarasi"]);
} else {

    $GelenTelefonno = "";

}

if (isset($_POST["mesaj"])) {
    $GelenMesaj = Guvenlik($_POST["mesaj"]);
} else {

    $GelenMesaj = "";
}

if ($GelenEmailAdresi != "" and $GelenIsimsoyisim != "" and $GelenMesaj != "" and $GelenTelefonno != "") {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    $Mailicerik = $GelenIsimsoyisim . "<br>" . $GelenEmailAdresi . "<br>" . $GelenTelefonno . "<br>" . $GelenMesaj;
    try {
        //Server settings
        $mail->SMTPDebug = 0; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = DonusumleriGeridondur($SiteEmailHostAdresi); //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->CharSet = 'UTF-8'; //Enable SMTP authentication
        $mail->Username = DonusumleriGeridondur($SiteEmailAdres); //SMTP username
        $mail->Password = DonusumleriGeridondur($SiteEmailSifresi); //SMTP password
        $mail->SMTPSecure = "tls"; //Enable implicit TLS encryption
        $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        $mail->SMTPOptions = array(
            'ssl' => [
                'verify_peer' => false,
                'allow_self_signed' => true,
                'verify_peer_name' => false,
            ],
        );




        //Recipients
        $mail->setFrom(DonusumleriGeridondur($GelenEmailAdresi));
        $mail->addAddress(DonusumleriGeridondur($SiteEmailAdres), DonusumleriGeridondur($SiteName)); //Add a recipient
        $mail->addReplyTo($GelenEmailAdresi, $GelenIsimsoyisim);
        //   $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz'); //Add attachments
        //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); //Optional name

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = DonusumleriGeridondur($SiteName) . ' iletişim formu mesajı';
        $mail->msgHTML($Mailicerik);
        $mail->send();

        header("Locatipn:İndex.php?SK=18");
        exit();
    } catch (Exception $e) {
        header("Locatipn:İndex.php?SK=19");
        exit();

    }
} else {
    header("Locatipn:İndex.php?SK=20");
    exit();

}


?> 