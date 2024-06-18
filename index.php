<?php

require('PyramidNumber.php');

try {

    if (!isset($argv[1]) || intval($argv[1]) <= 0) {
        // Lanza error en caso que no cumpla la entrada con el tipo de valor esperado
        throw new Exception("Error: Debes proporcionar un valor entero positivo.");
    }

    $startValue = intval($argv[1]);

    // instancia la clase con el parametro de entrada y llama al metodo para generar la piramide
    $pyramidNumber = new PyramidNumber($startValue);
    $pyramidNumber->generate();

} catch (Exception $e) {
    // Manejo de errores
    echo $e->getMessage() . PHP_EOL;
    echo "Ej: php index.php <numero_positivo>" . PHP_EOL;
}