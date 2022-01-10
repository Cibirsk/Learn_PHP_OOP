<?php

class Str
{
    public static function upper($string)    
    {
        return mb_strtoupper($string);
    }

    public function lower($string)    
    {
        return mb_strtolower($string);
    }

    public function length($string)
    {
        return mb_strlen($string);
    }
}

$str = new Str;
echo $str->upper('bob is cool ! <br> ');
echo Str::upper('mike is nervous <br>');
?>