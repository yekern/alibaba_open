<?php

namespace Yekern\AlibabaOpen\functions\category;

use Yekern\AlibabaOpen\core\BaseClient;
use Yekern\AlibabaOpen\entity\CategoryAttributeParams;
use Yekern\AlibabaOpen\entity\CategoryTranslationParams;

class Category extends BaseClient
{

    /**
     * 根据类目ID查询多语言类目
     * @param CategoryTranslationParams $category_translation_params
     * @return $this
     */
    public function categoryTranslationById(CategoryTranslationParams $category_translation_params)
    {
        $this->app->params = $category_translation_params->build();
        $this->url_info    = 'com.alibaba.fenxiao.crossborder:category.translation.getById-1';
        return $this;
    }


    public function categoryAttributeById(CategoryAttributeParams $category_attribute_params)
    {
        $this->app->params = $category_attribute_params->build();
        $this->url_info    = 'com.alibaba.product:alibaba.category.attribute.get-1';
        return $this;
    }

}