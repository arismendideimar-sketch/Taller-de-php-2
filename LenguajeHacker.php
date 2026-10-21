<?php

function convertirALeet(string $texto): string
{
    $leetMap = [
        'a' => '4',
        'b' => 'I3',
        'c' => '[',
        'd' => ')',
        'e' => '3',
        'f' => '|=',
        'g' => '&',
        'h' => '#',
        'i' => '1',
        'j' => ',_|',
        'k' => '>|',
        'l' => '7',
        'm' => '(v)',
        'n' => '^/',
        'o' => '0',
        'p' => '|*',
        'q' => '0_',
        'r' => 'I2',
        's' => '5',
        't' => '7',
        'u' => '|_|',
        'v' => '\/',
        'w' => '\/\/',
        'x' => '><',
        'y' => 'j',
        'z' => '2',
        ' ' => ' '
    ];

    $textoMinuscula = strtolower($texto);
    $resultado = "";

    for ($i = 0; $i < strlen($textoMinuscula); $i++) {
        $caracter = $textoMinuscula[$i];
        if (isset($leetMap[$caracter])) {
            $resultado .= $leetMap[$caracter];
        } else {
            $resultado .= $caracter;
        }
    }
    return $resultado;
}

echo convertirALeet("Hola mundo programador");
