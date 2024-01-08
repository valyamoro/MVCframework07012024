<?php

namespace app\Core;

class Controller
{
    public function index(): string
    {
        return \substr(\get_class($this), 15) . ' index';
    }

}
