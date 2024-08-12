<?php

function toCamelCase($str) {
    // Divide el string en un array usando tanto guion bajo como guion como separadores
    $parts = preg_split('/[-_]/', $str);

    // Verifica si la primera palabra está en minúsculas
    if (isset($parts[0]) && ctype_lower($parts[0][0])) {
        // Cambia la primera letra de la primera palabra a minúscula
        $parts[0] = lcfirst($parts[0]);
    }

    // Itera sobre cada parte a partir de la segunda y las capitaliza
    for ($i = 1; $i < count($parts); $i++) {
        $parts[$i] = ucfirst($parts[$i]);
    }

    // Une las partes en un solo string
    $camelCaseStr = implode('', $parts);

    return $camelCaseStr;
}

?>
