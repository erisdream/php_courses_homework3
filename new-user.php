<?php
require_once 'common.php';

    if($_SESSION['user']->{'role'} == 1) {
        if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['age']) && isset($_POST['role'])) {
            $new_user_file = 'users/'.$_POST['login'].'.txt';
            file_put_contents($new_user_file, '{'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($new_user_file, '"login": "'.$_POST['login'].'",'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($new_user_file, '"password": "'.$_POST['password'].'",'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($new_user_file, '"name": "'.$_POST['name'].'",'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($new_user_file, '"age": "'.$_POST['age'].'",'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($new_user_file, '"role": "'.$_POST['role'].'"'.PHP_EOL, FILE_APPEND | LOCK_EX);
            file_put_contents($new_user_file, '}'.PHP_EOL, FILE_APPEND | LOCK_EX);
            header('Location: admins_page.php');
        } else {
            echo 'Заполните все поля';
        }
    }
