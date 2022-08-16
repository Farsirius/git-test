<?php

namespace app\controllers;

class CurrencyController extends AppController
{
    public function changeAction() 
    {
        if (!empty($_GET['curr']))
        {
            $currency=$_GET['curr'];
        }
        else
        {
            $currency=null;
        }
        if ($currency)
        {
            $curr=\R::findOne('currency','code=?', [$currency]);
        }
        if (!empty($curr))
        {
            setcookie('currency', $currency, time() + 3600*24*7, '/');
        }
        redirect();
        
    }
}