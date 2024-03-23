<?php

function addUser()
{
    require_once PATH_VIEW . 'adduser.php';
}

function createUser()
{
    if (isset($_POST['addUser'])) {
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $user_pass = $_POST['pass'];

        $newUser = [
            'name' => $user_name,
            'email' => $user_email,
            'password' => $user_pass,
            'type' => 0
        ];

        insert('users', $newUser);
    }
    $listUser = listAll('users');
    debug($listUser);
}