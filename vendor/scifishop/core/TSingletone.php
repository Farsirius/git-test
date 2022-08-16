<?php

namespace scifishop;

trait TSingletone
{
private static $instance;
public static function instance()
{
    if(self::$instance===null)
    {
        $instance= self::$instance=new self;
    }
    return self::$instance;
}
}