<?php

namespace scifishop\base;

abstract class Controller
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $layout;
    public $prefix;
    public $data=[];
    public $meta=[];


    public function __construct($route) 
    {
        $this->route=$route;
        $this->controller=$route['controller'];
        $this->model=$route['controller'];
        $this->view=$route['action'];
        $this->prefix=$route['prefix'];
    }
    
    public function setData($data) 
    {
        $this->data=$data;
    }
    
    public function setMeta($title='',$desc='',$keywords='') 
    {
        $this->meta['title']=$title;
        $this->meta['desc']=$desc;
        $this->meta['keywords']=$keywords;       
    }
    
    public function getView() 
    {
        $viewObj=new View($this->route, $this->layout, $this->view, $this->layout);
        $viewObj->metaContent=$viewObj->getMeta($this->meta);
        $viewObj->render($this->data);
        
    }
}