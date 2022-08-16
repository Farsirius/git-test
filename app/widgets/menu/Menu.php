<?php

namespace app\widgets\menu;

class Menu 
{
    protected $data;
    protected $tree;
    protected $printHtml;
    protected $tpl;
    protected $container = 'ul';
    protected $containerProps = '';
    protected $table = 'category';
    protected $cache = 0;
    protected $cacheKey = 'main_menu';
    protected $attr = [];
    protected $pretend = '';
    
    public function __construct($options=[]) 
    {
        $this->tpl=__DIR__.'/menu_tpl/menu.php';
        $this->getOptions($options);
        $this->run();
    }
    
    protected function getOptions($options) 
    {
        foreach ($options as $key => $value) 
        {
            if (property_exists($this, $key))
            {
                $this->$key=$value;
            }
        }
    }
    
    protected function run() 
    {
        $cache= \scifishop\Cache::instance();
        $this->printHtml=$cache->getCache($this->cacheKey);
        if (!$this->printHtml)
        {
            $this->data= \scifishop\App::$app->getProperty('cats');
            if (!$this->data)
            {
                $this->data=\R::getAssoc("SELECT * FROM {$this->table}");  
            }
            $this->tree= $this->getTree();
            $this->printHtml= $this->getMenuHtml($this->tree);
            if($this->cache)
            {
                $cache->setCache($this->cacheKey, $this->printHtml, $this->cache);
            }
        }
        $this->output();
    }
    
    protected function output() 
    {
        echo "<{$this->container}{$this->containerProps}>";
        echo $this->printHtml;
        echo "</{$this->container}>";
    }
    
    protected function getTree() 
    {
        $tree=[];
        $data= $this->data;
        foreach ($data as $id => &$node) 
        {
            
            if (!$node['parent_id'])
            {
                $tree[$id]=&$node;
            }
            else
            {
                $data[$node['parent_id']]['childs'][$id]=&$node;
            }
        }
        return $tree;
    }
    
    protected function getMenuHtml($tree, $tab='') 
    {
        $str='';
        foreach ($tree as $id => $category) 
        {
            $str .= $this->catToTemplate($category, $tab, $id);
        }
        return $str;
    }
    
    protected function catToTemplate($category, $tab, $id) 
    {
        ob_start();
        require $this->tpl;
        return ob_get_clean();
    }
}
