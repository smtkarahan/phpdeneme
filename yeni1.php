<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$sayi1=5;
$sayi2=3;
$bolsonuc=$sayi1/$sayi2;
$cikarsonuc=$sayi1 - $sayi2;
$modsonuc= $sayi1 % $sayi2;
$carpsonuc =$sayi1 * $sayi2;

printf("bölüm sonucu:%d".$bolsonuc."<br>");
printf("çıkarım sonucu:%d".$cikarsonuc."<br>");
printf("mod sonucu:%d".$modsonuc."<br>");
printf(“çarpim sonucu:%d".$carpsonuc."<br>");

?>

</body>
</html>