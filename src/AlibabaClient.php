<?php

namespace Yekern\AlibabaOpen;

use Yekern\AlibabaOpen\core\ContainerBase;
use Yekern\AlibabaOpen\provider\CategoryProvider;
use Yekern\AlibabaOpen\provider\ProductProvider;
use Yekern\AlibabaOpen\provider\StoreProvider;

/**
 * Class Application
 * @property \Yekern\AlibabaOpen\functions\product\Product product
 * @property \Yekern\AlibabaOpen\functions\order\Order order
 * @property \Yekern\AlibabaOpen\functions\order\Logistics logistics
 * @property \Yekern\AlibabaOpen\functions\order\Refund refund
 */
class AlibabaClient extends ContainerBase
{
    /**
     * AlibabaClient constructor.
     * @param array $params 应用级参数
     */
    public function __construct($params = array())
    {
        parent::__construct($params);
    }

    /**
     * 服务提供者
     * @var array
     */
    protected $provider = [
        StoreProvider::class,
        ProductProvider::class,
        CategoryProvider::class,
        //...其他服务提供者
    ];
}
