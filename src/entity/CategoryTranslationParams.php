<?php

namespace Yekern\AlibabaOpen\entity;

class CategoryTranslationParams extends BaseEntityParams
{

    private $language;

    private $categoryId;

    public function __construct($categoryId,$language = 'zh')
    {
        $this->categoryId = $categoryId;

        $this->language = $language;
    }


    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}