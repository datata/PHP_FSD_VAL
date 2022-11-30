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

include './db.php';
include './header.php';

foreach ($platos as $key => $plato) {
    echo "<ol>";
    // echo $plato;
    echo "<h1>" . $plato['title'] . "</h1>";
    echo "<li> Numero de comensales: " . $plato['comensals'] . "</li>";
    echo "<li> Tipo de plato: " . $plato['type'] . "</li>";
    echo "</ol>";
}

?>

    
</body>
</html>