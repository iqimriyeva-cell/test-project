<?php
echo"salam, dunya!";
print"<br>salam, dunya!(print ile)";

echo"server tarixi ve saati:".date("Y-m-d H:i:s");
$a=10;
$b=20;
$cem=$a+$b;
echo"cem:$cem";
$a=15;
$b=10;
if($a>$b){
    echo"Boyukdur";
}else{
    echo"Kicikdir";}

}
$yas=16;
if($yas>=18){
echo "Yetkin";          y
}else{
    echo"Usaq";
}
$gun=3;
switch ($gun){
case1:echo"Bazar ertesi"; break;
case2:echo"Cersenbe axsami"; break;
case3:echo"cersenbe"; break;
case4:echo"Cume axsami";break;
case5:echo"Cume";break;
case6:echo"Senbe";break;
case7:echo"Bazar";break;
default:echo"Yalnis gun";

}

for($i=1;$i<=10;$i++){
    echo$i."<br>";

}
$i=1
$cem=0
while($i<=10){
    $cem +=$i;
    $i++;
}
echo"cem:$cem";

$meyveler=["alma","armud","banan"];
foreach($meyveler as$meyve){
    echo$meyve."<br>";
}
?>
$reqemler=[4,12,7,21,3];
echo"en boyuk:".max($reqemler."<br>")";
echo"en kicik:".min($reqemler);
?>
<!--form.html-->
<form action="form.php"method="post">
    Ad:<input type="submit" value="Gonder">
</form>
<!--form.php-->
<?php
$ad=$_POST['ad'];
echo"salam,$ad!";
?>

<!--url:sayfa.php?ad=<Elvin-->
<?php
$ad=$_GET['ad'];
echo"salam,$ad!";
?>

$ip=$_SERVER['REMOTE_ADDR'];
echo"sizin ip adresiniz:$ip";
?>

<!--calc.html-->$_COOKIE
<form method="post"action="calc.php">
    Eded1:<input type="number" name="a"><br>
    Eded2:<input type="number" name="b"><br>
<input type="submit"value="Hesabla">
</form>

<!--calc.php-->$_COOKIE
<?php
$a=$_POST['a'];
$b=$_POST['b'];
echo"Netice:".($a+$b);
?>

function hasil($a,$b){
    return$a*$b;
}
echo hasil(3,5);
?>
function cutyoxla($ed){
    if($ed%2==0){
        return"Cutdur";
    }else[
        return"Tekdir";]
}

}
echo cutyoxla(7);
?>
function enBoyuk($arr){
    return max($arr);
}
echo enBoyuk([4,9,2,17,6]);
?>

$soz="Salamlar";
$boyuk=strtoupper($soz);
$uzunluq=strlen($soz);
echo"Boyuk:$boyuk<br>";
echo"Uzunluq:$uzunluq";
?>

$metn="Bu bir test yazisidir.";
$file=fopen("data.txt","w");
fwrite($file,$metn);
fclose($file);

$file=fopen("data.txt","r");
$icerik=fread($file,filesize("data.txt"));
fclose($file);
echo$icerik;
?>

<!--login.html-->
<form method="post"action="login.php">
    Istifadeci adi:<input type="text" name="ad"><br>
    Sifre:<input type="password" name="sifre"><br>
    <input type="submit" value="Daxil ol">
    </form

    <!--Login.php-->
    <?php
  session_start();
  $istifadeci=$_POST['ad'];
  $sifre=$_POST['sifre'];
  
  if($sifre=="1234"){
    $_SESSION['ad']=$istifadeci;
    setcookie("giris_tarixi",date("Y-m-d H:i:s"),time3600);
    echo"Xos gelmisiniz,$istifadeci!";
    echo"<br>Giris tarixiniz:".$_COOKIE['giris_tarixi'];

  }else{
    echo"Sifre yalnisdir!;
  }
    ?>
$metn="MEN ISTEYIREM";
$kicikMetn=mb_strtolower($metn,'UTF-8);
$uzunluq=mb_strlen($kicikMetn,'UTF-8);
echo"Kicik herflerle:".$kicikMetn."<br>";
echo"Uzunluq:".$uzunluq;
?>


$meyveler=array("Alma",Armud","Banan","Heyva");
foreach($meyveler as$meyve){
echo $meyve."<br>";
  }
?>
