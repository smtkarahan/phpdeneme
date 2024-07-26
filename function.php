<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sayitopla($ilk, $son){
        $toplam=0;
        for($i=$ilk; $i<=$son; $i++)
        {
            $toplam=$toplam+$i;
        }
        return($toplam);
    }
    $num1=100; $num2=500;
    $sonuc=sayitopla($num1,$num2);
    echo "$num1-$num2 arası toplam=$sonuc";
    ?>
</body>
</html>