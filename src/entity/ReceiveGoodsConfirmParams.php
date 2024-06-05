<?php

namespace Yekern\AlibabaOpen\entity;

class ReceiveGoodsConfirmParams extends BaseEntityParams
{

    /**
     * 订单ID
     * @var $orderId
     */
    private $orderId;

    /**
     * 子订单ID
     * @var $orderEntryIds
     */
    private $orderEntryIds;

    /**
     * @param $orderId
     * @param $orderEntryIds
     */
    public function __construct($orderId, $orderEntryIds)
    {
        $this->orderId = $orderId;
        $this->orderEntryIds = $orderEntryIds;
    }


    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}