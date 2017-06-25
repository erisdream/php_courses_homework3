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
    <h2 class="correct">Добро пожаловать, уважаемый
        <?php echo $_SESSION['user']->{'login'} ?>!</h2>
    <br>
    <p>Ваш логин:
        <?php echo $_SESSION['user']->{'login'}?>.</p>
    <p>Ваше имя:
        <?php echo (isset($_POST['name']) ? $_SESSION['user']->{'name'} = $_POST['name'] : 'пока что не указано.' ) ?>
    </p>
    <p>Ваш возраст:
        <?php echo (isset($_POST['age']) ? $_SESSION['age'] = $_POST['age'] : 'пока что не указана.' ) ?>
    </p>
    <?php
      if ($_SESSION['user']->{'role'} == 1) {
        echo '<p>Ваша статус на сайте: администратор.</p>';
      } else {
          echo '<p>Ваша статус на сайте: обычный пользователь.</p>';
      }
      
    ?>

        <p>Сейчас вы можете:</p>
        <a href="text.php">Перейти на страницу с текстом, который могут видеть только авторизованные пользователи</a>
        <br>
        <a href="profile_edit.php">Перейти на страницу редактирования личной информации</a>
        <br>
        <a href="destroy-session.php">Выйти</a>
</body>

</html>