<?php

namespace Yekern\AlibabaOpen\provider;

use Yekern\AlibabaOpen\core\Container;
use Yekern\AlibabaOpen\functions\category\Category;
use Yekern\AlibabaOpen\interfaces\Provider;

class CategoryProvider implements Provider
{

    public function serviceProvider(Container $container)
    {
        $container['category']   = function ($container) {
            return new Category($container);
        };
    }
}