<?php

function generarGradas($num_pisos)
{
    echo "<table border='1'>";
    $total = 1; 
    for ($nivel = 1; $nivel <= $num_pisos; $nivel++) {
        echo "<tr>";
        for ($grada = 1; $grada <= $nivel; $grada++) {
            $numero = rand(1, 9); 
            echo "<td>$numero</td>";
            $total *= $numero; 
        }
        echo "</tr>";
    }
    echo "</table>";
    return $total; 
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Escaleras</title>
</head>

<style>
    body {
        text-align: center;
        background-image: url(./imagenes/fondo2.jpg);
        color: white;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .escalera {
        font-size: 30px;
        text-align: center;
        border: solid;
        background-color: antiquewhite;
        color: black;
    }
</style>

<body>
    <div class="container">
        <h1>Generador de Escalera</h1><br>
        <form method="post" action="">
            <label for="pisos">Ingrese el número de pisos (1-8):</label><br><br><br>
            <input type="number" id="pisos" name="pisos" min="1" max="8" required><br><br>
            <label for="operacion">Seleccione la operación:</label><br>
            <select name="operacion" id="operacion">
                <option value="sumar">Sumar Números</option>
                <option value="multiplicar">Multiplicar Números</option>
            </select><br><br>
            <input type="submit" value="Crear Escalera">
        </form>
        <br><br><br>

        <div class="escalera">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numPisos = $_POST["pisos"];
                $total = generarGradas($numPisos);
                $operacion = $_POST["operacion"];

                if ($operacion == "sumar") {
                    echo "<p>La suma de todos los números es: $total</p>";
                }

                if ($operacion == "multiplicar") {
                    echo "<p>El resultado de la multiplicación de todos los números es: $total</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>










