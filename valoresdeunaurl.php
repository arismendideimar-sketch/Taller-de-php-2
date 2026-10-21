<?php

function obtenerValoresURL(string $url): array
{
    $valores = [];
    $pos = strpos($url, '?');

    if ($pos !== false) {
        $queryString = substr($url, $pos + 1);
        $pares = explode('&', $queryString);

        foreach ($pares as $par) {
            $division = explode('=', $par);
            if (isset($division[1])) {
                $valores[] = $division[1];
            } else {
                $valores[] = "";
            }
        }
    }
    return $valores;
}

$urlEjemplo = "https://ejemplourl.com?year=2023&challenge=0";
$resultadoURL = obtenerValoresURL($urlEjemplo);
print_r($resultadoURL);
