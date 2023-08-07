<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .result {
            background-color: #f2f2f2;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        .result p {
            margin: 0;
        }

        .result .label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <?php


    function calcularPorcentaje($numero, $porcentaje)
    {
        return $numero * ($porcentaje / 100);
    }

    $numero = 400;
    $porcentaje = 30;
    $resultado = calcularPorcentaje($numero, $porcentaje);

    echo '<div class="result">';
    echo '<p>El ' . $porcentaje . '% de ' . $numero . ' es: <span class="label">' . $resultado . '</span></p>';
    echo '</div>';

    ?>

</body>

</html>