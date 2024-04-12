
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тестовый сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
$lang = 'en'; // изменяем язык для примера
const isAdmin = true;

if (isAdmin) {
    echo '<div id="admin">Привет, админ! <button>Войти в панель управления</button></div>';
    switch ($lang) {
        case 'ru':
            echo '<p>Привет, вы находитесь на сайте на русском языке</p>';
            break;
        case 'en':
            echo '<p>Hello, you are on the website in English</p>';
            break;
        case 'de':
            echo '<p>Hallo, Sie befinden sich auf der Website in deutscher Sprache</p>';
            break;
        default:
            echo '<p>Выбран неправильный язык</p>';
    }
} else {
    echo '<span id="noAccess">У вас нет прав доступа</span>';
}
?>

</body>
</html>