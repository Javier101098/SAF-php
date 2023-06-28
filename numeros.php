<?php
$entrada = readline("Ingrese la lista de números enteros separados por comas: ");

// convierte la entrada en un arreglo de números enteros
$numeros = explode(",", $entrada);

// Arreglo para almacenar los números pares y los que no son múltiplos de 4
$pares = array();

foreach ($numeros as $numero) {
    // Convertir el número a entero
    $numero = intval($numero);
  
    // Verificar si el número es par o impar
    if ($numero % 2 == 0) {
        // Descartar los múltiplos de 4
        if ($numero % 4 != 0) {
            // Agregar el número al arreglo de pares
            $pares[] = $numero;
        }
    }
}
echo "Números pares que no son múltiplos de 4: ";
print_r($pares);
?>
