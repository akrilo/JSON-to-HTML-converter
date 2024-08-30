<?php

namespace App\Infrastructure;

class JsonParser
{
    public static function parse(string $json): array
    {
        return json_decode($json, true);
    }
}
