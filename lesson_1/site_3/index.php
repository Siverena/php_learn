<?php
$title = "Главная страница - страница обо мне";

$content = file_get_contents("site_3.html");
$content = str_replace("{{ title }}", $title, $content);
echo $content;