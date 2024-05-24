<?php

namespace Yekern\AlibabaOpen\entity;

class OfferDetailParams extends BaseEntityParams
{

    private $offerDetailParam;


    public function __construct($offerId, $country = 'en')
    {
        $this->offerDetailParam = [
            'offerId' => $offerId,
            'country' => $country,
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