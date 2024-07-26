<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $s1 = rand(1, 100);
    $s2 = rand(1, 100);
    echo "<b>Bulunan Sayılar:</b><br>";
    echo "Sayı 1=$s1<br> Sayı 2=$s2<br>";
    echo "<a href='yaz1.php? sayi1=$s1&sayi2=$s2'> bu linkten tıklayarak sayıları gönderebilirsiniz</a>";
?>
</body>
</html>