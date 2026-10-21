<form action="" method="post">
        <label for="texto">Texto a Traducir</label>
        <input required type="text" name="texto" placeholder="Escribe algo...">
        <input type="submit" value="Traducir a Leet" name="enviar_ej2">
    </form>
    <?php
    if (isset($_POST['enviar_ej2'])) {
        $texto = $_POST['texto'];
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
            $resultado .= isset($leetMap[$caracter]) ? $leetMap[$caracter] : $caracter;
        }
        echo "<br>El texto traducido es: <strong>$resultado</strong>";
    }