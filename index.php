<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 26/11/14
 * Time: 09:23
 */

require __DIR__.'/vendor/autoload.php';

$filterWords = array('caca', 'pute', 'salope', 'merde');

$string = "Ta mere la pute salope de merde";
echo \JB\Formator\StringFormator::noBadWords($string, $filterWords);