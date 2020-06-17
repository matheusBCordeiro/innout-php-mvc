<?php
loadModel('Login');
$exception = null;

if (count($_POST > 0)) {
    $login = new Login($_POST);
    try {
        $login->checkLogin();
        echo "Usuário {$user->name} logado";
    } catch (AppException $e) {
        echo $e->getMessage();
    }
}

loadView('login', $_POST + ['exception' => $exception]);
