<?php
DEFINE("GENERAL", 21);
DEFINE("REDUCIDO", 10);
DEFINE("SUPERREDUCIDO", 4);
/**
 * Recibe el precio sin IVA y le suma
 * el IVA correspondiente
 */
function precioConIVA (float|int $precio, string $iva) : float {
    $precioConIVA = match($iva) {
        "GENERAL" => $precio + $precio * (GENERAL/100),
        "REDUCIDO" => $precio + $precio * (REDUCIDO/100),
        "SUPERREDUCIDO" => $precio + $precio * (SUPERREDUCIDO/100),
        "SIN IVA" => $precio
    };
    return $precioConIVA;
}
?>
