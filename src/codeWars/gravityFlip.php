<?php

function flip(string $dir, array $arr): array {
    if ($dir === 'R') {
        // Ordenar los cubos de menor a mayor (por defecto es de izquierda a derecha)
        sort($arr);
    } elseif ($dir === 'L') {
        // Ordenar los cubos de menor a mayor y luego invertir el array
        sort($arr);
        $arr = array_reverse($arr);
    }
    return $arr;
}

// Ejemplos de uso
echo "Ejemplo 1: 'R', [3, 2, 1, 2] -> ";
print_r(flip('R', [3, 2, 1, 2])); // Salida esperada: [1, 2, 2, 3]
echo "Ejemplo 2: 'L', [1, 4, 5, 3, 5] -> ";
print_r(flip('L', [1, 4, 5, 3, 5])); // Salida esperada: [5, 5, 4, 3, 1]
?>
