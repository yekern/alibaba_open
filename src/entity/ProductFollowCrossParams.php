<?php


namespace Yekern\AlibabaOpen\entity;


class ProductFollowCrossParams extends BaseEntityParams
{

    private $offerId;

    /**
     * ProductFollowParams constructor.
     * @param $productId
     */
    public function __construct($offer_id)
    {
        $this->offerId = $offer_id;
    }

    /**
     * @inheritDoc
     */
    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }

}