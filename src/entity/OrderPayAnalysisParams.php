<?php

namespace Yekern\AlibabaOpen\entity;

class OrderPayAnalysisParams extends BaseEntityParams
{


    private $orderIds;

    private $payChannel;

    /**
     * @param $orderIds
     * @param $payChannel
     */
    public function __construct($orderIds, $payChannel)
    {
        $this->orderIds = $orderIds;
        $this->payChannel = $payChannel;
    }


    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}