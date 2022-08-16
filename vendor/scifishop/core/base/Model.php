<?php

namespace scifishop\base;

use scifishop\Db;

abstract class Model
{
    public $attributes=[];
    public $errors=[];
    public $rules=[];
    public function __construct() 
    {
        Db::instance();
    }
}