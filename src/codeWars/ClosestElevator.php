<?php

function elevator($left, $right, $call) {

    $distancia_left = abs($left - $call);
    $distancia_right = abs($right - $call);

    if ($distancia_left < $distancia_right) {
        return "left";
    } elseif ($distancia_right < $distancia_left) {
        return "right";
    } else {
        return "right";
    }
}

?>