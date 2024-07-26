<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=7, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sayi=1;
    $toplam=$sayi;
    echo $sayi;
    while($sayi<100)
    {
        $sayi++;
        $toplam+=$sayi;
        echo "+$sayi";
    }
    echo "=$toplam";
    ?>
    
</body>
</html>