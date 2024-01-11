<?php

namespace Pingen\Support\DataTransferObject;

class Str
{
    /**
     * @param string $string
     * @param mixed $searches
     * @return bool
     */
    public static function contains(string $string, $searches): bool
    {
        $searches = (array) $searches;

        foreach ($searches as $search) {
            if (str_contains($string, $search)) {
                return true;
            }
        }

        return false;
    }
}
