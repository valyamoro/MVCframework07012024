<?php

namespace app\Controller;

use app\Core\Controller;
use app\Models\User;

class UserController extends Controller
{
    public static function registry(array $data): bool
    {
        $user = new User(parent::$PDOConnection);

        $user->loadData($data);

        return $user->add();
    }

    public static function login(array $data): bool
    {
        $user = new User(parent::$PDOConnection);

        $user->loadData($data);

        $password = $user->getPasswordByEmail($user->email)['password'];

        if ($data['password'] === $password) {
            // Записать в сессию данные из бд или из $data?
            $_SESSION['user'] = [
                'email' => $user->email,
                'password' => $user->password,
            ];

            return 1;
        } else {
            return 0;
        }
    }

}
