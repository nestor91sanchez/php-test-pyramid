<?php

class PyramidNumber
{

    const PYRAMID_LEVELS = 10;

    private $startValue;

    /**
     * Constructor para inicializar variable startValue
     *
     * @param int $startValue el valor de entrada de la pirámide.
     */
    public function __construct(int $startValue)
    {
        $this->startValue = $startValue;
    }

    /**
     * Función para generar la pirámide de números.
     *
     * @return void
     */
    function generate()
    {
        // Ancho máximo de la pirámide (estp sirve para calcular los espacios en blanco y mostrar la piramide visualmente)
        $maxWidth = ($this->startValue + self::PYRAMID_LEVELS + 2) * 2 - 1;

        for ($i = 1; $i <= self::PYRAMID_LEVELS; $i++) {
            $line = '';

            // Añade los números en orden descendente desde hasta el valor de entrada
            for ($j = $i - 1; $j >= 0; $j--) {
                $line .= ($this->startValue + ($this->startValue * $j));
            }

            // Añade los números en orden ascendente desde el valor de entrada hasta el nivel actual
            for ($j = 1; $j < $i; $j++) {
                $line .= ($this->startValue + ($this->startValue * $j));
            }

            // Calcula los espacios en blanco para centrar cada línea de la piramide y se vea visualmente como una piramide
            // Usamos max(0, ...) para asegurar que $spaces no sea negativo
            $spaces = max(0, ($maxWidth - strlen($line)) / 2);

            // Imprime la línea de la piramide
            // Usamos ceil(...) para redondear y convertir en entero los valores de los espacios.
            echo str_repeat(' ', ceil($spaces)) . $line . str_repeat(' ', ceil($spaces)) . PHP_EOL;

        }
    }

}


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
    echo "Run: php index.php <numero_positivo>" . PHP_EOL;
}