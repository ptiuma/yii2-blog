<?php

namespace pendalf89\blog\helpers;

use Yii;

class Helper
{
    /**
     * @return array simple "yes/no" array
     */
    public static function booleanChoiceArray()
    {
        return [1 => Yii::t('yii', 'Yes'), 0 => Yii::t('yii', 'No')];
    }

    /**
     * @return array icon "yes/no" array
     */
    public static function booleanIconChoiceArray()
    {
        return [
            1 => '<span class="glyphicon glyphicon-ok text-success"></span>',
            0 => '<span class="glyphicon glyphicon-remove text-danger"></span>',
        ];
    }

    public static function strtolower($str)
    {
        return mb_strtolower($str, Yii::$app->charset);
    }

    /**
     * Truncates the string to a certain number of characters without breaking words.
     * @param string $str string
     * @param int $length max length of string
     * @param string $postfix postfix
     * @return string truncated string
     */
    public static function cutStr($str, $length=100, $postfix='...')
    {
        if ( strlen($str) < $length)
            return $str;

        $temp = substr($str, 0, $length);
        return substr($temp, 0, strrpos($temp, ' ') ) . $postfix;
    }
}
