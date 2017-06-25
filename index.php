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
    <h1>Войдите</h1>
    <p>Пользователь:
        <?php
        if(isset($_SESSION['user']->{'login'})){
            echo $_SESSION['user']->{'login'};
            echo '<br> <a href="profile.php">Перейти в профиль</a> <br>';
            if(isset($_SESSION['user']->{'role'}) && $_SESSION['user']->{'role'} == 1){
                echo '<br> <a href="admins_page.php">Перейти на страницу администратора</a> <br>';
            }
        }else{
            echo 'Не выполнен вход';
        }
        ?>
    </p>

    <form method="POST" action="handler.php">
        <label>Логин:</label>
        <input type="text" name="login">

        <label>Пароль:</label>
        <input type="password" name="password">

        <button type="submit">Отправить</button>
    </form>

    <a href="destroy-session.php">Выйти</a>

</body>

</html>