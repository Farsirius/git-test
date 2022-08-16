<?php

namespace app\controllers;

//use app\controllers\AppController;
use scifishop\Cache;

class MainController extends AppController
{
    public function indexAction() 
    { 
        $categories=\R::find('brand', 'LIMIT 3');
        $hot_products=\R::find('product', "status='1' AND hot_product='1' LIMIT 8");
       
        $this->setMeta('Главная страница', 'Главная страница корпрорации Farsirius', 'чоткие корабли, роботы, дроны, машины');    
        $this->setData(compact('categories','hot_products')); 
    }
}