<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function hesapla($not1,  $not2, $not3 )
    {
        $sonuc=($not1 + $not2 + $not3)/3;
        if($sonuc>84 && $sonuc<=100) $harf='A';
        elseif ($sonuc>=70 && $sonuc<=84) $harf='B';
        elseif ($sonuc>=55 && $sonuc<=69) $harf='C';
        elseif ($sonuc>=45 && $sonuc<=54) $harf='D';
        elseif ($sonuc>=0 && $sonuc<=44) $harf='E';
        return($harf);
    }
    $n1=20; $n2=50; $n3=40;
    $sonucnot=hesapla($n1,$n2,$n3);
    echo "$n1-$n2-$n3 Harf notu =$sonucnot";
    ?>
</body>
</html>