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
    function compare($num1, $num2) {
        if (abs($num1) === 100 && abs($num2) === 100) {
            echo "Да";
        } else {
            echo "Нет";
        }
    }

    $number3 = 100;
    $number4 = -100;
    echo "Числа $number3 и $number4 имеют разницу 100? ";
    compare($number3, $number4);
    ?>

    <h2>Задание 3.</h2>
    <?php
    function checkSize($num1, $num2) {
        if (abs($num1) <= 20 && abs($num2) <= 20) {
            echo "Да";
        } else {
            echo "Нет";
        }
    }

    $number5 = 15;
    $number6 = -18;
    echo "Числа $number5 и $number6 имеют разницу не более 20? ";
    checkSize($number5, $number6);
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