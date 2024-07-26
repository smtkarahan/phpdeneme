<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $user_name='Nihan';
    $no=2; 
    switch ( $no ){

        case 1:
        echo("1 nolu sinif");
        break;

        case 2:
        echo("2 nolu sinif");
        break;

        default:
        echo("3 nolu sinif");

    }

    if($user_name==""){
        echo "Username girmediniz.";

    }

    elseif($user_name!="ugur"){
        echo "Yanliş username";

    }
    else{
        echo "Merhaba $user_name";
    }
    ?>
    
</body>
</html>