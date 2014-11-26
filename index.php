<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 26/11/14
 * Time: 09:23
 */

require __DIR__.'/vendor/autoload.php';


$string = "nique ta soeur espece d'enfoiré jte baise moi";
echo \JB\Formator\StringFormator::noBadWords($string);