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
    <h1>О проекте Synthadry</h1>
    <h2>Идея</h2>
    <p>
        Synthadry — это экспериментальная ролевая игра от первого лица, объединяющая киберпанк, славянское фэнтези
        и элементы нелинейного повествования. Она создаётся как ответ на нехватку самобытных отечественных RPG,
        способных заинтересовать игроков как в России, так и за её пределами.
    </p>
    <p>
        В проекте акцент сделан на атмосферу и необычный визуальный стиль. Здесь футуристические технологии соседствуют
        с древними мифами, а динамичные бои переплетаются с глубокими сюжетными линиями. Мы стремимся показать, что
        даже небольшая команда способна создать мир, в котором хочется задержаться.
    </p>

    <h2>Особенности</h2>
    <?php
    $features = [
        "Разнообразные локации: мегаполисы, леса, подземелья",
        "Система ближнего боя с уникальными приёмами",
        "Развитие героя через сюжетные выборы",
        "Атмосфера, сочетающая киберпанк и фэнтези"
    ];
    echo "<ul>";
    foreach($features as $f){ echo "<li>$f</li>"; }
    echo "</ul>";
    ?>

    <img src="images/hero-banner.png" alt="Баннер проекта">
</main>

<footer>
    <p>Сформировано <?php echo date('d.m.Y в H:i:s'); ?></p>
</footer>
</body>
</html>
