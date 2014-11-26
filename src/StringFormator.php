<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 26/11/14
 * Time: 09:15
 */

namespace JB\Formator;

class StringFormator
{
    const DEFAULT_LENGTH = 120;

    public static function getResume($string, $length = self::DEFAULT_LENGTH)
    {
        $resume = substr($string, 0, $length);
        return $resume;
        echo $resume;
    }
} 