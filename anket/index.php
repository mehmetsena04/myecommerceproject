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
    if ($kayitsayisi>0) {
        
 ?>
    <form action="oyver.php" method="post">


        <table width="300" align="center" border="0" cellspacing="0">

            <tr height="30">
                <td colspan="2">
                    <?php echo $kayit["soru"];?>
                </td>
            </tr>
            <tr height="30">
                <td width="25"><input type="radio" name="cevap" value="1"></td>
                <td width="275"> <?php echo $kayit["cevap1"];?></td>
            </tr>
            <tr height="30">
                <td width="25"><input type="radio" name="cevap" value="2"></td>
                <td width="275"> <?php echo $kayit["cevap2"];?></td>
            </tr>
            <tr height="30">
                <td width="25"><input type="radio" name="cevap" value="3"></td>
                <td width="275"> <?php echo $kayit["cevap3"];?></td>
            </tr>
            <tr height="30">
                <td colspan="2"><input type="submit" value="Oyumu gönder"></td>

            </tr>
            <tr height="30">
                <td align="right" colspan="2"><a href="sonuclar.php"> Anket sonuçlarını göster</a></td>

            </tr>
        </table>
    </form>




    <?php 
   }
    else{
        ?>
    Kayit bulunmuyor.
    <?php

    }
    ;
   ?>



</body>


</html>
<?php $VeritabaniBaglanti=null;?>