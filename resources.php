<?php
$title = "Саввин Владислав Александрович 241-362 ЛР 3";
$current = basename($_SERVER['PHP_SELF']);
$link1 = "index.php";
$name1 = "О проекте";
$link2 = "journal.php";
$name2 = "Журнал";
$link3 = "resources.php";
$name3 = "Ресурсы";
?>
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
            <a href="<?php echo $link1; ?>" class="<?php echo $current==$link1?'selected_menu':''; ?>"><?php echo $name1; ?></a>
            <a href="<?php echo $link2; ?>" class="<?php echo $current==$link2?'selected_menu':''; ?>"><?php echo $name2; ?></a>
            <a href="<?php echo $link3; ?>" class="<?php echo $current==$link3?'selected_menu':''; ?>"><?php echo $name3; ?></a>
        </nav>
    </div>
</header>

<main class="container">
    <h1>Ресурсы проекта</h1>
    <h2>Галерея</h2>
    <img src="images/about1.png" alt="Кадр 1">
    <img src="images/about2.png" alt="Кадр 2">

    <h2>Динамическая фотография</h2>
    <?php
    $img = (date('s') % 2 === 0) ? 'images/about3.png' : 'images/hero-banner.png';
    echo '<img src="'.$img.'" alt="Меняющаяся фотография">';
    ?>

    <h2>Полезные ссылки</h2>
    <?php
    $links = [
        ["Itch.io", "https://braddeast.itch.io/synthadry"],
        ["GitHub", "https://github.com/Jesass351/Synthadry"],
        ["VK", "https://vk.com/synthadry"],
        ["YouTube", "https://www.youtube.com/@synthadry3022"]
    ];
    echo "<ul>";
    foreach($links as $l){
        echo "<li><a href=\"{$l[1]}\" target=\"_blank\">{$l[0]}</a></li>";
    }
    echo "</ul>";
    ?>
</main>

<footer>
    <p>Сформировано <?php echo date('d.m.Y в H:i:s'); ?></p>
</footer>
</body>
</html>
