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


    function mcd($a, $b)
    {
        while ($b !== 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return abs($a);
    }


    function mcm($a, $b)
    {
        return ($a * $b) / mcd($a, $b);
    }


    function mcm_multiple(...$numbers)
    {
        if (count($numbers) < 2) {
            return null;
        }

        $mcm_result = $numbers[0];
        foreach ($numbers as $number) {
            $mcm_result = mcm($mcm_result, $number);
        }

        return $mcm_result;
    }

    $numbers = [12, 18, 24];
    $result = mcm_multiple(...$numbers);
    echo '<div class="result">';
    echo '<p>El mínimo común múltiplo de ' . implode(', ', $numbers) . ' es: <span class="label">' . $result . '</span></p>';
    echo '</div>';

    $num1 = 24;
    $num2 = 36;

    $resultado = mcd($num1, $num2);
    echo '<div class="result">';
    echo '<p>El máximo común divisor de ' . $num1 . ' y ' . $num2 . ' es: <span class="label">' . $resultado . '</span></p>';
    echo '</div>';

    ?>

</body>

</html>