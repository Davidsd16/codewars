<?php
function twice_as_old($dad_years_old, $son_years_old) {
    // La diferencia de edades
    $age_difference = $dad_years_old - $son_years_old;
    
    // Calcular cuántos años faltan o han pasado para que el padre tenga el doble de edad que el hijo
    $years_until_twice_as_old = abs($age_difference - $son_years_old);

    return $years_until_twice_as_old;
}

// Ejemplos de uso:
echo twice_as_old(40, 20); // Debería devolver 0 porque el padre es exactamente el doble de viejo que el hijo
echo "\n";
echo twice_as_old(50, 20); // Debería devolver 10 porque hace 10 años el padre tenía el doble de la edad del hijo
echo "\n";
echo twice_as_old(30, 10); // Debería devolver 10 porque dentro de 10 años el padre tendrá el doble de la edad del hijo
echo "\n";
?>
