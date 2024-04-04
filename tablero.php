<!DOCTYPE html>
<html>
<head>
    <title>Tablero de Damas Chinas</title>
    <style>
        body{
            background-image: url(./imagenes/fondo1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .titulo{
            text-align: center;
            color: white;
            margin-top: 50px;
            font-family:Georgia, 'Times New Roman', Times, serif;
        }
        table {
            border-collapse: collapse;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
            text-align: center;
            font-size: 24px;
        }
        .white {
            background-color: white;
        }
        .black {
            background-color: black;
            color: white;
        }
        .tablero{
          margin-left: 390px;
          margin-top: 70px;
          border: solid;
          border-color: grey;
          border-width: 8px;
        }
        .ficha-roja {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: red;
            margin: 5px; 
        }
        .ficha-azul {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: blue;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1 class="titulo">JUEGO DE DAMAS CHINAS</h1>
    <table class="tablero">
        <?php
            $tamanio = 8;
            $posiciones_iniciales = array(
                array(0, 1), array(0, 3), array(0, 5), array(0,7),
                array(1, 0), array(1, 2), array(1, 4),array(1,6), 
                array(2, 1), array(2, 3), array(2, 5),array(2,7),
                array(3, 0), array(3, 2), array(3, 4),array(3, 6), 
                array(4, 1), array(4, 3), array(4, 5),array(4, 7),  
                array(5, 0), array(5, 2), array(5, 4),array(5, 6),
            );
            for ($i = 0; $i < $tamanio; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $tamanio; $j++) {
                    if (($i + $j) % 2 == 0) {
                        $color = "white";
                    } else {
                        $color = "black";
                    }
                    $es_posicion_inicial = false;
                    foreach ($posiciones_iniciales as $posicion) {
                        if ($posicion[0] == $i && $posicion[1] == $j) {
                            if ($i < 3) {
                                echo "<td class='$color'><div class='ficha-roja'></div></td>";
                            } else {
                                echo "<td class='$color'><div class='ficha-azul'></div></td>";
                            }
                            $es_posicion_inicial = true;
                            break;
                        }
                    }
                    if (!$es_posicion_inicial) {
                        echo "<td class='$color'></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>

