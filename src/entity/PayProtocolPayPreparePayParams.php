<?php

namespace Yekern\AlibabaOpen\entity;

class PayProtocolPayPreparePayParams extends BaseEntityParams
{


    private $tradeWithholdPreparePayParam;

    /**
     * @param $tradeWithholdPreparePayParam
     */
    public function __construct($tradeWithholdPreparePayParam)
    {
        $this->tradeWithholdPreparePayParam = $tradeWithholdPreparePayParam;
    }


    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}