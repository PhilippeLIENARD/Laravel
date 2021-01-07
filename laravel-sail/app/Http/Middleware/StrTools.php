<?php

namespace App\Http\Middleware;

class StrTools
{
    public static function cleanUrl($string)
    {
        $string = str_replace(' ' , '-' , $string);
        $string = htmlspecialchars(preg_replace('/[^A-Za-z0-9\-]/', '', $string));

        return filter_var($string , FILTER_SANITIZE_URL);
        
    }
}