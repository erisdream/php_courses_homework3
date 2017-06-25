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
<p><?php
    if($_SESSION['user']->{'role'} == 1){
        echo "Заполните поля: <br>";
        ?>
        <form method="POST" action="new-user.php">
            <label>Логин:</label>
            <br>
            <input type="text" name="login">
            <br>
            <label>Пароль:</label>
            <br>
            <input type="text" name="password">
            <br>
            <label>Имя:</label>
            <br>
            <input type="text" name="name">
            <br>
            <label>Возраст:</label>
            <br>
            <input type="text" name="age">
            <br>
            <label>Роль:</label><br />
            <input type="text" name="role"><br /><br />

            <button type="submit">  Создать</button>
        </form>
    <?php
    }?>

<a href="destroy-session.php">Выйти</a>

</body>
</html>
