<?php

require_once(dirname(__FILE__, 2) . '/src/config/database.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'User', 'email' => 'user@email.com']);
echo $user->getSelect('id', 'name');
