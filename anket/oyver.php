<?php require_once("baglan.php");

$gelencevap = Filtrele($_POST["cevap"]);
$kontrolSorguSu = $VeritabaniBaglanti->prepare("SELECT * FROM oykullananlar where ipadresi=? AND tarih>=?");
$kontrolSorguSu->execute([$ipadresi,$ZamaniGeriAl]);
$kontrolsayiSi = $kontrolSorguSu->rowCount();
if ($kontrolsayiSi>0)
{
    echo "Hata <br>";
      echo "Daha önce oy kullandınız <br>";
     echo "AnaSayfaya  dönmek için lütfen <a href='index.php'> tıklayınız</a><br>";
     
}
else
{
    if($gelencevap==1)
    {
        $Guncelle=$VeritabaniBaglanti->prepare("UPDATE anket SET oysayisi1=oysayisi1+1 ,toplamoysayisi=toplamoysayisi+1 ");
        $Guncelle->execute();
    }
    elseif($gelencevap==2)
    {
           $Guncelle=$VeritabaniBaglanti->prepare("UPDATE anket SET oysayisi2=oysayisi2+1 ,toplamoysayisi=toplamoysayisi+1 ");
        $Guncelle->execute();
    }
  elseif($gelencevap==3)
    {
           $Guncelle=$VeritabaniBaglanti->prepare("UPDATE anket SET oysayisi3=oysayisi3+1 ,toplamoysayisi=toplamoysayisi+1 ");
        $Guncelle->execute();
    }
    else
    {
        echo "Hata, cevap kaydı bulunmuyor";  
        echo "AnaSayfaya  dönmek için lütfen <a href='index.php'> tıklayınız</a><br>";
    }
}
$ekle=$VeritabaniBaglanti->prepare("insert into oykullananlar (ipadresi,tarih) values(?,?)");
$ekle->execute([$ipadresi, $zamandamgaSi]);
$eklSayisi=$ekle->rowCount();
if($eklSayisi>0)
{
  echo "Teşekkürler <br>";
      echo "Kullandınız oy kaydedildi <br>";
     echo "AnaSayfaya  dönmek için lütfen <a href='index.php'> tıklayınız</a><br>";
    
}
else
{
     echo "HATA <br>";
      echo "HATA OLUŞTU SONRA DENEYİNİZ <br>";
     echo "AnaSayfaya  dönmek için lütfen <a href='index.php'> tıklayınız</a><br>";
}
 $VeritabaniBaglanti=null;
?>