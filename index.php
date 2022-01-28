<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require("./clases/Productos.php");
    $Producto1=new Productos(100,"camisa",5,7.99);
    $Producto1->setPrecio(7.95);
    echo $Producto1->total();
    ?>
</body>
</html>
