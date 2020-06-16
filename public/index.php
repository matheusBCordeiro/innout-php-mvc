<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'User', 'email' => 'user@email.com']);
echo $user->get('id', 'name', 'email');

foreach (User::get([], 'name') as $user) {
    echo $user->$name;
    echo '<br>'
}