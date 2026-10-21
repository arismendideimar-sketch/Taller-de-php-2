<form action="" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre">
    <label for="email">Email</label>
    <input required type="email" name="email">
    <label for="password">Contraseña</label>
    <input type="password" name="password">

    <input type="submit" value="Texto de Enviar" name="enviar">
</form>
<?php
if (isset($_POST['enviar'])) {
    $name = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    // echo "El nombre registrado es: " . $name . ", su email es: " . $email . ". La contraseña es: " . $pass . ".";
}