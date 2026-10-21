<form action="" method="post">
        <label for="url">URL</label>
        <input required type="text" name="url" value="https://ejemplourl.com?year=2023&challenge=0" style="width: 300px;">
        <input type="submit" value="Extraer Valores" name="enviar_ej4">
    </form>
    <?php
    if (isset($_POST['enviar_ej4'])) {
        $url = $_POST['url'];
        $valores = [];
        $pos = strpos($url, '?');
        if ($pos !== false) {
            $queryString = substr($url, $pos + 1);
            $pares = explode('&', $queryString);
            foreach ($pares as $par) {
                $division = explode('=', $par);
                $valores[] = isset($division[1]) ? $division[1] : "";
            }
        }
        echo "<br>Los valores extraídos son: " . implode(', ', $valores);
    }