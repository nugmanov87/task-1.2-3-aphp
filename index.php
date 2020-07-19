<?php
declare(strict_types=1);


function autoLoad($className)
{
    require_once __DIR__ . '/classes/' . str_replace('\\', '/', $className) . '.php';
}

spl_autoload_register("autoLoad");

$student1 = new \Students\Student('Иван', 'Петров', 'Программирование', 'Основы PHP');
$student2 = new \Students\Student('Сергей', 'Лавров', 'Иностранные языки', 'Английский язык');
$car1 = new \Cars\Car('Volga', 'Красный',  5000);
$car2 = new \Cars\Car('Ferrari', 'Зеленый',  55000);
$tv1 = new \Television\Tv('Novex NVX-65U321MSY', '65"', 34990);
$tv2 = new \Television\Tv('Samsung UE65TU7170U', '65"', 69900);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>task 1.2-3</title>
</head>
<body>
<section>
    <h2>Студенты</h2>
    <table>
        <tbody>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Факультет</th>
            <th>Курс</th>
        </tr>
        <?php
        $student2->changeCourse('Французский язык');
        echo $student1->showInfo();
        echo $student2->showInfo();
        ?>
        </tbody>
    </table>
</section>
<section>
    <h2>Машины</h2>
    <table>
        <tbody>
        <tr>
            <th>Марка</th>
            <th>Цвет</th>
            <th>Цена €</th>
        </tr>
        <?php
        $car1->changeColor('Белый');
        echo $car1->showInfo();
        echo $car2->showInfo();
        ?>
        </tbody>
    </table>
</section>
<section>
    <h2>Телевизоры</h2>
    <table>
        <tbody>
        <tr>
            <th>Марка</th>
            <th>Диагональ</th>
            <th>Цена ₽</th>
        </tr>
        <?php
        $tv1->changePrice(17000);
        echo $tv1->showInfo();
        echo $tv2->showInfo();
        ?>
        </tbody>
    </table>
</section>
</body>
</html>