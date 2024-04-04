<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Matriz</title>
    <style>
        body {
            text-align: center;
            background-color:antiquewhite;
            background-repeat: no-repeat;
            background-size: cover;
           
        }

        table {
            margin: 0 auto;
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
        }

        .primo {
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <h1>Matriz</h1><br>
    <form method="post" action="">
        <label for="filas">Ingrese el número de filas:</label><br>
        <input type="number" id="filas" name="filas" min="1" required><br><br>
        <label for="columnas">Ingrese el número de columnas:</label><br>
        <input type="number" id="columnas" name="columnas" min="1" required><br><br>
        <input type="submit" value="Crear Matriz"><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numFilas = $_POST["filas"];
        $numColumnas = $_POST["columnas"];
        echo "<h3>Matriz de $numFilas filas y $numColumnas columnas:</h3>";
        echo "<table>";
        for ($fila = 1; $fila <= $numFilas; $fila++) {
            echo "<tr>";
            for ($columna = 1; $columna <= $numColumnas; $columna++) {
                $numero_casilla = ($fila - 1) * $numColumnas + $columna;
                if (Primo($numero_casilla)) {
                    echo "<td class='primo'>$numero_casilla</td>";
                } else {
                    echo "<td>$numero_casilla</td>";
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function Primo($numero)
    {
        if ($numero <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i == 0) {
                return false;
            }
        }
        return true;
    }
    ?>
</body>

</html>
