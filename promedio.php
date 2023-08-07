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


    function calcularPromedio($numeros)
    {
        $total = count($numeros);
        if ($total === 0) {
            return 0;
        }

        $suma = array_sum($numeros);
        return $suma / $total;
    }

    $datos = [85, 90, 78, 95, 87];
    $promedio = calcularPromedio($datos);

    echo '<div class="result">';
    echo '<p>Los datos son: <span class="label">' . implode(', ', $datos) . '</span></p>';
    echo '<p>El promedio de los datos es: <span class="label">' . $promedio . '</span></p>';
    echo '</div>';

    ?>

</body>

</html>