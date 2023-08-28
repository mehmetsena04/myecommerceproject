<?php
try {
    $VeritabaniBaglanti = new PDO("mysql:host=localhost;dbname=bannerdatabase;charset=UTF8","root","");
    //code...
} catch (PDOException $Hata) {
    echo $Hata->getMessage();
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $reklamSorgu=$VeritabaniBaglanti->prepare("SELECT * FROM bannerlar order by gosterimsayisi ASC LIMIT 1");

    $reklamSorgu->execute();
   $kayit = $reklamSorgu->fetch(PDO::FETCH_ASSOC);
    $reklamSayi = $reklamSorgu->rowCount();
        
 ?>
    <table width="1000" align="center" border="0" cellspacing="0">

        <tr height="150">
            <td align="center">
                <img src="dosyalar/<?php echo $kayit["bannerdosyasi"];?>" border="0">
            </td>
        </tr>
    </table>
</body>

</html>
<?php 

    $reklamguncelle=$VeritabaniBaglanti->prepare("UPDATE bannerlar 
    SET gosterimsayisi=gosterimsayisi+1
  WHERE id=?  LIMIT 1");
$reklamguncelle->execute([$kayit["id"]]);

$VeritabaniBaglanti=null;
?>