<?php

namespace Yekern\AlibabaOpen\provider;

use Yekern\AlibabaOpen\core\Container;
use Yekern\AlibabaOpen\functions\order\Order;
use Yekern\AlibabaOpen\functions\order\Refund;
use Yekern\AlibabaOpen\interfaces\Provider;

/**
 * Class StoreProvider
 * @package Yekern\AlibabaOpen\provider
 */
class StoreProvider implements Provider
{

    /**
     * 服务提供者
     * @param Container $container
     * @return mixed|void
     */
    public function serviceProvider(Container $container)
    {
        $container['order']  = function ($container) {
            return new Order($container);
        };
        $container['refund'] = function ($container) {
            return new Refund($container);
        };
    }
}
