<?php

namespace Converter;

class Converter
{
    public function convertString(string $input): ?array
    {
        $output = json_decode($input, true);
        return $output;
    }
}
