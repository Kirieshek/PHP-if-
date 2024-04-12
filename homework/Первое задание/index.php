<!DOCTYPE html>
<html>
<head>
    <title>Домашнее задание</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Тестовое задание</h1>

    <h2>Задание 1.</h2>
    <?php
    function maxNumber($num1, $num2) {
        return max($num1, $num2);
    }

    $number1 = 37;
    $number2 = 52;
    echo "Самое большое число из $number1 и $number2: " . maxNumber($number1, $number2);
    ?>

    <h2>Задание 2.</h2>
    <?php

    $num3 = 20;
    $num4 = 120;

    echo "Числа $num3 и $num4 имеют разницу 100? ";
    if (abs($num3 - $num4) === 100 || abs($num3 - $num4) === -100) {
        echo 'Да';
    } else {
        echo 'Нет';
    }
    ?>

    <h2>Задание 3.</h2>
    <?php

    $num5 = 15;
    $num6 = -5;

    echo "Числа $num5 и $num6 имеют разницу не более 20? ";
    if (abs($num5 - $num6) <= 20) {
        echo 'Да';
    } else {
        echo 'Нет';
    }
    ?>

    <h2>Задание 4.</h2>
    <?php
    function getSeason($month) {
        switch ($month) {
            case 1:
            case 2:
            case 12:
                echo "Зима";
                break;
            case 3:
            case 4:
            case 5:
                echo "Весна";
                break;
            case 6:
            case 7:
            case 8:
                echo "Лето";
                break;
            case 9:
            case 10:
            case 11:
                echo "Осень";
                break;
            default:
                echo "Ошибка";
        }
    }

    $month = 6;
    echo "Номер месяца: $month, пора года: ";
    getSeason($month);
    ?>

</body>
</html>