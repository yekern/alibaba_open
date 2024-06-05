<?php

namespace Yekern\AlibabaOpen\entity;

class CreateCrossOrderPreviewParams extends BaseEntityParams
{


    /**
     * 收货地址信息
     * @var $addressParam
     */
    private $addressParam;

    /**
     * 商品信息
     * @var $cargoParamList
     */
    private $cargoParamList;


    /**
     * @param $addressParam
     * @param $cargoParamList
     */
    public function __construct($addressParam, $cargoParamList)
    {
        $this->addressParam = $addressParam;
        $this->cargoParamList = $cargoParamList;
    }



    /**
     * @return array
     */
    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}