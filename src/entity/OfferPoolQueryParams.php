<?php

namespace Yekern\AlibabaOpen\entity;

class OfferPoolQueryParams extends BaseEntityParams
{


    private $offerPoolQueryParam;

    /**
     * @throws \Exception
     */
    public function __construct($offerPoolId, $pageNo, $pageSize, $taskId)
    {

        if ($pageSize > 500) {
            throw new \Exception('pageSize不能大于500');
        }

        $this->offerPoolQueryParam = [
            'offerPoolId' => $offerPoolId,
            'pageNo'      => $pageNo,
            'pageSize'    => $pageSize,
            'taskId'      => $taskId
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