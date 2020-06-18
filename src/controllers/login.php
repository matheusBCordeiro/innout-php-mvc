<?php
loadModel('Login');
$exception = null;

if (count($_POST > 0)) {
    $login = new Login($_POST);
    try {
        $login->checkLogin();
        header("Location: day_recod.php");
    } catch (AppException $e) {
        echo $e->getMessage();
    }
}

loadView('login', $_POST + ['exception' => $exception]);
