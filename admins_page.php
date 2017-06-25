<?php
require_once 'common.php';
?>

<html>

<head>
    <meta charset="utf-8">
    <title>ДЗ3 Недилько</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <h2 class="correct">Добро пожаловать на страницу администратора!</h2>

        <p>Сейчас вы можете:</p>
        <a href="profile.php">Перейти на страницу с личной информацией</a>
        <br>
        <a href="text.php">Перейти на страницу с текстом, который могут видеть только авторизованные пользователи</a>
        <br>
        <a href="profile_edit.php">Перейти на страницу редактирования личной информации</a>
        <br>
        <a href="create_user.php">Создать нового пользователя</a>
        <br>
        <a href="destroy-session.php">Выйти</a>
</body>

</html>