<?php

namespace echolib;

class EchoClass
{
    public static function printNow()
    {
        echo "printNow function \n";
    }

    public static function toBool(int $value)
    {
       if($value == 1) return true;
       return false;
    }
}
