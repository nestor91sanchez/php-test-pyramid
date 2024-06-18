<?php

/**
 * Función para generar la pirámide de números
 *
 * @param int $startValue La altura de la pirámide.
 * @return void
 */
function generatePyramid(int $startValue)
{
    // Número de niveles de la pirámide
    $levels = 10;
    // Ancho máximo de la pirámide (estp sirve para calcular los espacios en blanco y mostrar la piramide visualmente)
    $maxWidth = ($startValue + $levels + 2) * 2 - 1;

    for ($i = 1; $i <= $levels; $i++) {
        $line = '';

        // Añade los números en orden descendente desde hasta el valor de entrada
        for ($j = $i - 1; $j >= 0; $j--) {
            $line .= ($startValue + ($startValue * $j) );
        }

        // Añade los números en orden ascendente desde el valor de entrada hasta el nivel actual
        for ($j = 1; $j < $i; $j++) {
            $line .= ($startValue + ($startValue * $j));
        }

        // Calcula los espacios en blanco para centrar cada línea de la piramide y se vea visualmente como una piramide
        // Usamos max(0, ...) para asegurar que $spaces no sea negativo
        $spaces = max(0, ($maxWidth - strlen($line)) / 2);

        // Imprime la línea de la piramide
        // Usamos ceil(...) para redondear y convertir en entero los valores de los espacios.
        echo str_repeat(' ', ceil($spaces)) . $line . str_repeat(' ', ceil($spaces)) . PHP_EOL;

    }
}

/**
 * Función para validar la valor ingresado por el usuario.
 *
 * @param array $argv array de parametros
 * @return int valor inicial ingresado por el usuario.
 * @throws Exception si la entrada no es válida.
 */
function getInput(array $argv): int
{
    if (!isset($argv[1]) || intval($argv[1]) <= 0) {
        throw new Exception("Error: Debes proporcionar un valor entero positivo.");
    }

    return intval($argv[1]);
}

// Script principal
try {
    // Obtiene y valida el valor de entrada
    $startValue = getInput($argv);

    // Genera y muestra la pirámide
    generatePyramid($startValue);
} catch (Exception $e) {
    // Manejo de errores
    echo $e->getMessage() . PHP_EOL;
    echo "Run: php index.php <numero_positivo>" . PHP_EOL;
}