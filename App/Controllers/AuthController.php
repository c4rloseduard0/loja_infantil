<?php

    namespace App\Controllers;

    use App\ViewAction;
    use App\Models\Usuario;

    class AuthController extends ViewAction
    {
        public function login()
        {
            $user = new Usuario();
            $user->__set("username", $_POST['username']);
            $user->__set("password", md5($_POST['password']));
            $user->autenticar();
            // echo "<pre>";
            // var_dump($user);
            // echo "</pre>";
        }
    }
