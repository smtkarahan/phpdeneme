<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function liste_yaz($gelendizi)
    {
        for($i=0; $i<count($gelendizi); $i++)
        echo $gelendizi[$i]. "<br>"; 
    }
    $gelendizi=array(6,8,10,7);
    liste_yaz($gelendizi);
    ?>
</body>
</html>