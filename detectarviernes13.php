<?php

function verificarViernes13(int $mes, int $anio): bool
{
    $fechaStr = "$anio-" . str_pad($mes, 2, "0", STR_PAD_LEFT) . "-13";
    $diaSemana = date('l', strtotime($fechaStr));

    if ($diaSemana === 'Friday') {
        echo "El mes $mes del ano $anio Si tiene un viernes 13.\n";
        return true;
    } else {
        echo "El mes $mes del ano $anio NO tiene un viernes 13.\n";
        return false;
    }
}

verificarViernes13(10, 2023);
verificarViernes13(12, 2026);
