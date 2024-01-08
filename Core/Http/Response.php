<?php

namespace Core\Http;

class Response
{
    public function get(int $code): void
    {
        http_response_code($code);
    }

}