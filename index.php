<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 26/11/14
 * Time: 09:23
 */

require __DIR__.'/vendor/autoload.php';

$string = "If length is given and is negative, then that many characters will be omitted from the end of string (after the start position has been calculated when a start is negative). If start denotes the position of this truncation or beyond, false will be returned.";
echo \JB\Formator\StringFormator::getResume($string);