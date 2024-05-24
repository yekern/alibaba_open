<?php

namespace Yekern\AlibabaOpen\entity;

class OfferPoolQueryParams extends BaseEntityParams
{


    private $offerPoolQueryParam;

    public function __construct($offerPoolId, $pageNo, $pageSize)
    {
        $this->offerPoolQueryParam = [
            'offerPoolId' => $offerPoolId,
            'pageNo'      => $pageNo,
            'pageSize'    => $pageSize
        ];
    }


    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}