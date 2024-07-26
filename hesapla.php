<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$s1=$_POST["sayi1"];
$s2=$_POST["sayi2"];
$islem=$_POST["islem"];

if($islem=="+")
   $sonuc=$s1+$s2;
elseif($islem=="-")
   $sonuc=$s1-$s2;
elseif($islem=="*")
   $sonuc=$s1*$s2;
else
   $sonuc=$s1/$s2;
 
echo "İşlemin Sonucu:<br>$s1$islem$s2=$sonuc";
?>
</body>
</html>
