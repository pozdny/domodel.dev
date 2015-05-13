<?php
/**
 * Created by PhpStorm.
 * User: Valentina
 * Date: 13.05.2015
 * Time: 19:21
 */

namespace app\components;

class MyFunc
{
    /**
     * @param array $arr
     * @return array
     */
    public static function arrayFilter($arr){
        return array_filter($arr);
    }

}