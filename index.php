<?php
/**
 * Created by PhpStorm.
 * User: игорь
 * Date: 26.08.2019
 * Time: 17:06
 */

$patterns = scandir(getcwd());
?>
<html>
<head>
    <style>
        body {
            background-color: #343434;
            overflow-x: hidden
        }

        .main {
            text-align: center;
        }

        .el {
            background-color: #6b6b6b;
        }

        p {
            font-size: 20px;
            color: #fefefe;
        }

        .footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .footer > a {
            color: #ffffff;
            font-size: 14px;
            display: block;
            line-height: 30px;
        }
    </style>
</head>
<body>
<div class="main">
    <?php
    foreach ($patterns as $pattern) {
        if (strpos($pattern, '.') === false) {
            echo "<div class='el'><a  href='" . $pattern . "/index.php' ><p>" . $pattern . "</p></a></div>";
        }
    }
    ?>
    <div class="footer">
        <a href="https://tproger.ru/translations/design-patterns-simple-words-1/">Порождающие шаблоны</a>
        <a href="https://tproger.ru/translations/design-patterns-simple-words-2/">Структурные шаблоны</a>
        <a href="https://tproger.ru/translations/design-patterns-simple-words-3/">Поведенческие шаблоны</a>
    </div>
</div>
</body>
</html>