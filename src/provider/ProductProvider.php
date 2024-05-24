<?php


namespace Yekern\AlibabaOpen\provider;


use Yekern\AlibabaOpen\core\Container;
use Yekern\AlibabaOpen\functions\order\Logistics;
use Yekern\AlibabaOpen\functions\product\Product;
use Yekern\AlibabaOpen\interfaces\Provider;

class ProductProvider implements Provider
{
    /**
     * @inheritDoc
     */
    public function serviceProvider(Container $container)
    {
        $container['product']   = function ($container) {
            return new Product($container);
        };
        $container['logistics'] = function ($container) {
            return new Logistics($container);
        };
    }
}