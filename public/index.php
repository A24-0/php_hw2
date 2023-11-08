<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

<?php
    $n = isset($_GET['n']) ? (int)$_GET['n'] : 0; // Получение значения переменной n из URL-параметра или установка по умолчанию (0)

    // Функция для вычисления факториала числа
    function factorial($num) {
        if ($num === 0) {
            return 1;
        } else {
            return $num * factorial($num - 1);
        }
    }

    if ($n > 0) {
        // Вычисление факториала числа n
        $factorial = factorial($n);

        // Вывод фразы "Hello, World!" n раз
        for ($i = 0; $i < $n; $i++) {
            echo "Hello, World! <br>";
        }

        echo "Факториал числа $n: $factorial <br>";

        // Увеличение n в 5 раз
        $n *= 5;

        echo "Переменная n увеличена в 5 раз: $n";
    }
?>

<form>
    Введите значение переменной n: <input type="number" name="n">
    <input type="submit" value="Отправить">
</form>

</body>
</html>
