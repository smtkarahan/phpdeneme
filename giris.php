<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("username","smtkarahan01");
    define("password","135790.Sa");
 
if($_POST["k_adi"]==username and $_POST["sifre"]==password)
   echo "Giriş izni verildi. Hoşgeldiniz.";
else{
   echo "Kullanıcı adını yada şifreyi yanlış girdiniz. Tekrar deneyiniz!<br>";
   echo "<a href='index1.php'>Geri</a>";
}
    ?>
</body>
</html>