<?php

require_once 'users-local.php';

if (isset($_POST['login']) && isset($_POST['password'])) {
    if(array_key_exists($_POST['login'], $users_local)){
        if ($users_local[$_POST['login']]['password'] == $_POST['password']){
            $_SESSION['user'] = new user((object)$users_local[$_POST['login']]);
            header('Location: index.php');
        } else {
            echo 'Неверный пароль';
        }
    } else {
        $file_array_of_users = user::getUsers();
        if(array_key_exists($_POST['login'], $file_array_of_users)){
            $user = checkAuth::userAuth($file_array_of_users[$_POST['login']]->{'login'},
                $file_array_of_users[$_POST['login']]->{'password'});
            if($user != null){
                unset($_SESSION['user']);
                $_SESSION['user'] = $user;
                header('Location: index.php');
            } else {
                echo 'Invalid credentials <br>';
                echo 'file do not opened <br>';
            }
        } else {
            echo 'login not found'.'<br>';
        }
    }

} else {
    header('Location: index.php');
}
