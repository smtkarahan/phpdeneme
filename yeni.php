<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function ortalama($not1,$not2){
   return ($not1+$not2)/2;
}
 
$y1=64;
$y2=88;
echo "<b>Not1</b>=$y1 <b>Not2</b>=$y2 <b>Ortalama</b>=",ortalama($y1,$y2);
?>
</body>
</html>