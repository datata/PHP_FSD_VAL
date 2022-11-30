<?php
function hacer_yogur($sabor, $tipo = "acidófilo")
{
    return "Hacer un tazón de yogur $tipo de $sabor.\n";
}

echo hacer_yogur("frambuesa"); // no funcionará comose esperaba
?>
