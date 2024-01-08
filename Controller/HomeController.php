<?php

namespace app\Controller;

use app\Core\Controller;

class HomeController extends Controller
{
    public function page($page): string
    {
        return 'Home controller page ' . $page;
    }

    public function catchError(): string
    {
        return 'Error 404';
    }

}
