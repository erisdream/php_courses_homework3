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
    <h2 class="correct">Добро пожаловать на страницу редактирования личной информации, уважаемый
        <?php echo $_SESSION['login']?>!</h2>
    <br>

    <form method="POST" action="profile.php">
        <label>Введите ваше имя:</label>
        <input type="text" name="name">

        <label>Введите ваш возраст:</label>
        <input type="text" name="age">

        <button type="submit">Сохранить</button>
    </form>

<?php
    $_SESSION['user']->{'name'} = $_POST['name'];
    $_SESSION['user']->{'age'} = $_POST['age'];
?>

    <br>
    <p>Сейчас вы можете:</p>
    <a href="text.php">Перейти на страницу с текстом, который могут видеть только авторизованные пользователи</a>
    <br>
    <a href="profile.php">Перейти на страницу c личной информацией</a>
    <br>
    <a href="destroy-session.php">Выйти</a>
</body>

</html>