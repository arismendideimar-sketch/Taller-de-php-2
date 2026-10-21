<form action="" method="post">
        <input type="submit" value="Ejecutar Fizz-Buzz" name="enviar_ej1">
    </form>
    <?php
    if (isset($_POST['enviar_ej1'])) {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "fizz-buzz<br>";
            } elseif ($i % 3 == 0) {
                echo "fizz<br>";
            } elseif ($i % 5 == 0) {
                echo "buzz<br>";
            } else {
                echo "$i<br>";
            }
        }
    }
    