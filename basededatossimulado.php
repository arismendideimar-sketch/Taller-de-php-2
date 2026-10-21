<form action="" method="post">
        <input type="submit" value="Mostrar Registros" name="enviar_ej3">
    </form>
    <?php
    if (isset($_POST['enviar_ej3'])) {
        $videojuegos = [
            ["id" => 1, "nombre" => "The Witcher 3", "genero" => "RPG", "lanzamiento" => 2015, "plataforma" => "PC"],
            ["id" => 2, "nombre" => "Halo 3", "genero" => "Shooter", "lanzamiento" => 2007, "plataforma" => "Xbox"],
            ["id" => 3, "nombre" => "Minecraft", "genero" => "Sandbox", "lanzamiento" => 2011, "plataforma" => "Multi"],
            ["id" => 4, "nombre" => "God of War", "genero" => "Acción", "lanzamiento" => 2018, "plataforma" => "PlayStation"],
            ["id" => 5, "nombre" => "GTA V", "genero" => "Mundo Abierto", "lanzamiento" => 2013, "plataforma" => "Multi"]
        ];
        echo "<br><table border='1' cellpadding='5'><tr><th>ID</th><th>Nombre</th><th>Género</th><th>Año</th><th>Plataforma</th></tr>";
        foreach ($videojuegos as $juego) {
            echo "<tr><td>{$juego['id']}</td><td>{$juego['nombre']}</td><td>{$juego['genero']}</td><td>{$juego['lanzamiento']}</td><td>{$juego['plataforma']}</td></tr>";
        }
        echo "</table>";
    }