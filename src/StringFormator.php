<?php
/**
 * Created by PhpStorm.
 * User: Razor
 * Date: 26/11/14
 * Time: 09:15
 */

namespace JB\Formator;

/**
 * Class StringFormator
 * @package JB\Formator
 */
class StringFormator
{
    /**
     *
     */
    const DEFAULT_LENGTH = 120;

    private static $badWords = array('caca', 'pute', 'salope', 'merde', 'enfoiré', 'enfoire', 'cul',
        'bite', 'bonnasse', 'bordel', 'enculer', 'enculé', 'branler', 'branlette', 'baiser', 'baise',
        'nique', 'niqué', 'niquer', 'bougnoul', 'couille', 'couilles', 'casse-couille', 'casse-couilles',
        'connerie', 'conneries', 'con', 'conne', 'connasse', 'conasse', 'putes', 'chié', 'chiasse', 'chattes',
        'chatte');

    /**
     * @param string $string
     * @param int $length
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function getResume($string, $length = self::DEFAULT_LENGTH)
    {
        if (false === is_string($string)) {
            throw new \Exception('$string must be a string');
        }else {
            $resume = substr($string, 0, $length);
            return $resume;
        }
    }

    public static function checkForChar($string, $char)
    {
        if (is_string($string) || is_string($char)) {
            if (strpos($string, $char)) {
                return true;
            }else {
                return false;
            }
        }else {
            throw new \Exception('$string and $char must be a string');
        }
    }
    public static function noBadWords($string)
    {
        if (is_string($string)) {
            $res = str_replace(self::$badWords, '****', $string);
            return $res;
        }else {
            throw new \Exception('$string must a string and $arrayWords must be an array');
        }
    }

    /**
     * @param $string
     * @param $maxLength
     *
     * @return string
     *
     * @throws \Exception
     */
    public static function cleanString($string, $maxLength = self::DEFAULT_LENGTH)
    {
        if (false === is_string($string) || false === is_int($maxLength)) {
            throw new \Exception('$string must be a string and $maxLength an integer');
        }else {
            $cleanString = trim($string);
            $cleanString = self::getResume($cleanString);

            return $cleanString;
        }
    }
} 