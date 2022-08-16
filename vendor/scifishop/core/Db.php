<?php

namespace scifishop;

class Db
{
    use TSingletone;
    protected function __construct() 
    {
        $db=require_once CONF.'/db_connection.php';
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if (!\R::testConnection())
        {
            throw new \Exception("Не удалось подключиться к БД", 500);
        }
        \R::freeze(true);
        if (DEBUG) 
        {
            \R::debug(true, 1);
        }
    }
}