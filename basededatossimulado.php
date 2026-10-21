<?php
$videojuegos = [
    [
        "id" => 1,
        "nombre" => "The Witcher 3",
        "genero" => "RPG",
        "lanzamiento" => 2015,
        "plataforma" => "PC / Consolas"
    ],
    [
        "id" => 2,
        "nombre" => "Halo 3",
        "genero" => "Shooter",
        "lanzamiento" => 2007,
        "plataforma" => "Xbox 360"
    ],
    [
        "id" => 3,
        "nombre" => "Minecraft",
        "genero" => "Sandbox",
        "lanzamiento" => 2011,
        "plataforma" => "Multiplataforma"
    ],
    [
        "id" => 4,
        "nombre" => "God of War",
        "genero" => "Accion",
        "lanzamiento" => 2018,
        "plataforma" => "PlayStation"
    ],
    [
        "id" => 5,
        "nombre" => "GTA V",
        "genero" => "Mundo Abierto",
        "lanzamiento" => 2013,
        "plataforma" => "Multiplataforma"
    ]
];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Simulacion de Base de Datos</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: sans-serif;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2 style="text-align: center;">Listado de Videojuegos (Simulacion DB)</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Lanzamiento</th>
            <th>Plataforma</th>
        </tr>
        <?php foreach ($videojuegos as $juego): ?>
            <tr>
                <td><?php echo $juego['id']; ?></td>
                <td><?php echo $juego['nombre']; ?></td>
                <td><?php echo $juego['genero']; ?></td>
                <td><?php echo $juego['lanzamiento']; ?></td>
                <td><?php echo $juego['plataforma']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>