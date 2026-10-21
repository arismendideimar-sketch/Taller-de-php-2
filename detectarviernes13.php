<form action="" method="post">
        <label for="mes">Mes (1-12)</label>
        <input required type="number" name="mes" min="1" max="12" value="10" style="width: 50px;">
        <label for="anio">Año</label>
        <input required type="number" name="anio" value="2023" style="width: 70px;">
        <input type="submit" value="Verificar" name="enviar_ej5">
    </form>
    <?php
    if (isset($_POST['enviar_ej5'])) {
        $mes = intval($_POST['mes']);
        $anio = intval($_POST['anio']);
        $fechaStr = "$anio-" . str_pad($mes, 2, "0", STR_PAD_LEFT) . "-13";
        $diaSemana = date('l', strtotime($fechaStr));
        
        if ($diaSemana === 'Friday') {
            echo "<br>El mes $mes del año $anio <strong>SÍ</strong> tiene un viernes 13.";
        } else {
            echo "<br>El mes $mes del año $anio <strong>NO</strong> tiene un viernes 13.";
        }
    }