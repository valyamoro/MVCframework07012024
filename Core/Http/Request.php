<?php

namespace app\Core\Http;

class Request
{
    public function getMethod(): string
    {
        return $_SERVER['REQUEST_URI'];
    }
}