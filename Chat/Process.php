<?php

ini_set('display_errors', 1);
require 'User.php';

if (isset($_POST['getUsers']) && $_SERVER['REQUEST_METHOD'] == 'POST') {

    $user = new User();
    echo json_encode($user->getUsers());
    exit();
}
