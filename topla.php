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
    $toplam=$s1+$s2;
    echo "Sayıların toplamı: $s1+$s2=$toplam";
?>
</body>
</html>