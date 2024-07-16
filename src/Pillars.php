<?php

function pillars($numberOfPillars, $dist, $width)
{
    if ($numberOfPillars < 2) {
        return 0; // No hay distancia si hay menos de 2 pilares
    }
    
    $distCm = $dist * 100; // Convertir distancia a centímetros
    $totalDistance = ($numberOfPillars - 1) * $distCm + ($numberOfPillars - 2) * $width;
    
    return $totalDistance;
}

echo pillars(4, 15, 30);

?>
