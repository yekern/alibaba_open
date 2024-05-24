<?php

namespace Yekern\AlibabaOpen\entity;

class OfferPoolQueryParams extends BaseEntityParams
{


    protected $offerPoolId;

    protected $pageNo;

    protected $pageSize;

    public function __construct($offerPoolId, $pageNo, $pageSize)
    {
        $this->offerPoolId = $offerPoolId;
        $this->pageNo = $pageNo;
        $this->pageSize = $pageSize;
    }


    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}