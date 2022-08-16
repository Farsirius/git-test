<?php

namespace app\controllers;

use app\models\AppModel;
use app\widgets\currency\Currency;
use scifishop\base\Controller;
use scifishop\App;

class AppController extends Controller
{
    public function __construct($route) 
    {
        parent::__construct($route);
        new AppModel();
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency', Currency::getCurrency(App::$app->getProperty('currencies')));
        //App::$app->setProperty('cats', self::cacheCategory());
    }
    
    public static function cacheCategory() 
    {
        $cache= \scifishop\Cache::instance();
        $cats=$cache->getCache('cats');
        if (!$cats)
        {
            $cats= \R::getAssoc("SELECT * FROM category");
            $cache->setCache('cats', $cats);
        }
        return $cats;
    }
}