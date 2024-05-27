<?php

namespace Yekern\AlibabaOpen\entity;

class CategoryAttributeParams extends BaseEntityParams
{

    private $webSite = '1688';

    private $categoryID;

    public function __construct($categoryId)
    {
        $this->categoryID = $categoryId;

    }


    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}