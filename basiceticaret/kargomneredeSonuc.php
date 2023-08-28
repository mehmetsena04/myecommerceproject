<?php
if (isset($_POST["KargoTakipNo"])) {
    $GelenKargoNo = SayiliİcerikleriFiltrele($_POST["KargoTakipNo"]);
} else {

    $GelenKargoNo = "";

}

if ($GelenKargoNo != "") {

    header("Location:https://www.btkakademi.gov.tr/");
    exit();
} else {

    header("Location:index.php?SK=14");
    exit();
}
?>