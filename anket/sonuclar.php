<?php require_once("baglan.php");?>

<!DOCTYPE html>
<html lang="tr-TR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anket</title>
</head>

<body>
    <?php 
    $ankteSorgu=$VeritabaniBaglanti->prepare("SELECT * FROM anket LIMIT 1");

    $ankteSorgu->execute();
    $kayitsayisi = $ankteSorgu->rowCount();
    $kayit = $ankteSorgu->fetch(PDO::FETCH_ASSOC);

    $oysayisi1 = $kayit["oysayisi1"];
  $oysayisi2 = $kayit["oysayisi2"];
  $oysayisi3 = $kayit["oysayisi3"];
      $toplamoysayisi1 = $kayit["toplamoysayisi"];
$birinciyuzde=number_format(($oysayisi1/$toplamoysayisi1)*100,2,",","");
$ikinciyuzde=number_format(($oysayisi2/$toplamoysayisi1)*100,2,",","");
$ucuncuyuzde=number_format(($oysayisi3/$toplamoysayisi1)*100,2,",","");



    if ($kayitsayisi>0) {
        
 ?>

    <table width="300" align="center" border="0" cellspacing="0">

        <tr height="30">
            <td colspan="2">
                <?php echo $kayit["soru"];?>
            </td>
        </tr>
        <tr height="30">
            <td width="20">%<?php echo $birinciyuzde;?></td>
            <td width="280"> <?php echo $kayit["cevap1"];?></td>
        </tr>
        <tr height="30">
            <td width="20">%<?php echo $ikinciyuzde;?></td>
            <td width="280"> <?php echo $kayit["cevap2"];?></td>
        </tr>
        <tr height="30">
            <td width="20">%<?php echo $ucuncuyuzde;?></td>
            <td width="280"> <?php echo $kayit["cevap3"];?></td>
        </tr>

        <tr height="30">
            <td align="right" colspan="2"><a href="index.php"> Anayfaya dön</a></td>

        </tr>
    </table>





    <?php 
   }
    else{
        ?>
    header("location:index.php");
    exit();
    <?php

    }
    ;
   ?>



</body>


</html>
<?php $VeritabaniBaglanti=null;?>