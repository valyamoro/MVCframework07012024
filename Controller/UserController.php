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

}
