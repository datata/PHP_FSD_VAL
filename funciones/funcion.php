<?php

function suma($arg1)
{
    $result = $arg1[0] + $arg1[1];

    return $result;
}

echo suma([3,4]);

?>

<?php
function añadir_algo(&$cadena)
{
    $cadena .= 'y algo más.';
}

$cad = 'Esto es una cadena, ';
añadir_algo($cad);
echo $cad; // imprime 'Esto es una cadena, y algo más.'
?>