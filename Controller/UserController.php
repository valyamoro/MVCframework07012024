<?php

namespace app\Controller;

use app\Core\Controller;

class UserController extends Controller
{
    public function add(array $data): string
    {
        return 'user add ' . "{$data['user']['id']}, {$data['user']['data']}";
    }

    public function edit(int $id): string
    {
        return 'user edit id: ' . $id;
    }

}
