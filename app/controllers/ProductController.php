<?php



namespace app\controllers;

/**
 * Description of ProductController
 *
 * @author NightPheonix
 */
class ProductController extends AppController 
{
    public function viewAction() 
    {
        $alias= $this->route['alias'];
        $product= \R::findOne('product', 'alias=? AND status="1"', [$alias]);
        if(!$product)
        {
            throw new \Exception('Данный товар не найден!', 404);
        }
        $this->setMeta($product->title, $product->description, $product->keywords);
        $this->setData(compact('product'));
    }
}
