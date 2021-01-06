<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Facade;


class StrTools extends Facade
{
    public static function cleanUrl($string)
    {
        $string = str_replace(' ' , '-' , $string);

        return  htmlspecialchars(preg_replace('/[^A-Za-z0-9\-]/', '', $string)); 
    }
}