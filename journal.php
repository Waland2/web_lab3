<?php
$title = "Саввин Владислав Александрович 241-362 ЛР 3";
$current = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="container">
        <span href="#" class="logo">SYNTHADRY</span>
        <nav>
            <a href="<?php echo 'index.php'; ?>" class="<?php echo $current=='index.php'?'selected_menu':''; ?>">О проекте</a>
            <a href="<?php echo 'journal.php'; ?>" class="<?php echo $current=='journal.php'?'selected_menu':''; ?>">Журнал</a>
            <a href="<?php echo 'resources.php'; ?>" class="<?php echo $current=='resources.php'?'selected_menu':''; ?>">Ресурсы</a>
        </nav>
    </div>
</header>

<main class="container">
    <h1>Журнал разработки</h1>
    <h2>План задач</h2>
    <table>
        <thead>
        <tr><th>Задача</th><th>Статус</th><th>Срок</th></tr>
        </thead>
        <tbody>
        <?php
        $tasks = [
            ["Прототип геймплея", "В процессе", "Сентябрь"],
            ["Арт-направление", "Готово", "Август"],
            ["AI противников", "В работе", "Октябрь"],
            ["Сюжетные квесты", "Запланировано", "Ноябрь"]
        ];
        foreach($tasks as $t){
            echo "<tr><td>{$t[0]}</td><td>{$t[1]}</td><td>{$t[2]}</td></tr>";
        }
        ?>
        </tbody>
    </table>

    <h2>Материалы разработки</h2>
    <img src="images/journal1.jpg" alt="Эскиз интерфейса">
    <img src="images/journal2.png" alt="Схема локации">

    <p>
        Журнал фиксирует каждое действие команды: от первых набросков и идей до реализации ключевых систем.
        Такой подход помогает структурировать процесс и вовремя вносить изменения. Благодаря этому разработка
        движется более последовательно и предсказуемо.
    </p>
</main>

<footer>
    <p>Сформировано <?php echo date('d.m.Y в H:i:s'); ?></p>
</footer>
</body>
</html>
