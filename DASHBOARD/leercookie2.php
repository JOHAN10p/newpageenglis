<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LE-EN ➢ COOKIES</title>
    <link rel="shortcut icon" href="../imagenes/reino-unido.png" >
</head>
<body>
<?php 


if (isset($_COOKIE['prueba'])) {
    
    echo $_COOKIE['prueba'];
}else{

echo "La cookie no existe";

}



?>


    
</body>
</html>