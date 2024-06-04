<?php

namespace Yekern\AlibabaOpen\functions\product;

use Yekern\AlibabaOpen\core\BaseClient;
use Yekern\AlibabaOpen\entity\CpsMediaProductInfoParams;
use Yekern\AlibabaOpen\entity\GetCategoryByIdParams;
use Yekern\AlibabaOpen\entity\ListCybUserGroupParams;
use Yekern\AlibabaOpen\entity\ListCybUserGroupFeedParams;
use Yekern\AlibabaOpen\entity\ListOverPricedOfferParams;
use Yekern\AlibabaOpen\entity\OfferDetailParams;
use Yekern\AlibabaOpen\entity\OfferPoolQueryParams;
use Yekern\AlibabaOpen\entity\ProductFollowCrossParams;
use Yekern\AlibabaOpen\entity\ProductFollowParams;
use Yekern\AlibabaOpen\entity\ProductUnfollowParams;
use Yekern\AlibabaOpen\entity\QueryOfferDetailActivityParams;
use Yekern\AlibabaOpen\entity\CrossProductInfoParam;

/**
 * 产品模块
 * @package Yekern\AlibabaOpen\functions\product
 */
class Product extends BaseClient
{
    /**
     * 关注商品
     * @param ProductFollowParams $productFollowParams
     * @return $this
     */
    public function productFollow(ProductFollowParams $productFollowParams)
    {
        $this->app->params = $productFollowParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.product.follow-1';
        return $this;
    }

    /**
     * 解除关注商品
     * @param ProductUnfollowParams $productUnfollowParams
     * @return $this
     */
    public function productUnfollow(ProductUnfollowParams $productUnfollowParams)
    {
        $this->app->params = $productUnfollowParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.product.unfollow.crossborder-1';
        return $this;
    }

    /**
     * 获取商品详情
     * @param CpsMediaProductInfoParams $cpsMediaProductInfoParams
     * @return $this
     */
    public function cpsMediaProductInfo(CpsMediaProductInfoParams $cpsMediaProductInfoParams)
    {
        $this->app->params = $cpsMediaProductInfoParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.cpsMedia.productInfo-1';
        return $this;
    }

    /**
     * 获取营销活动价格等活动信息
     * @param QueryOfferDetailActivityParams $queryOfferDetailActivityParams
     * @return $this
     */
    public function queryOfferDetailActivity(QueryOfferDetailActivityParams $queryOfferDetailActivityParams)
    {
        $this->app->params = $queryOfferDetailActivityParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.queryOfferDetailActivity-1';
        return $this;
    }

    /**
     * 商品列表搜索接口
     * @param ListOverPricedOfferParams $listOverPricedOfferParams
     * @return $this
     */
    public function listOverPricedOffer(ListOverPricedOfferParams $listOverPricedOfferParams)
    {
        $this->app->params = $listOverPricedOfferParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.searchCybOffers-1';
        return $this;
    }

    /**
     * 读取已选商品列表
     * @param ListCybUserGroupFeedParams $listCybUserGroupFeedParams
     * @return $this
     */
    public function listCybUserGroupFeed(ListCybUserGroupFeedParams $listCybUserGroupFeedParams)
    {
        $this->app->params = $listCybUserGroupFeedParams->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.listCybUserGroupFeed-1';
        return $this;
    }

    /**
     * 获取我的选品库列表
     * @param ListCybUserGroupParams $listCybUserGroupFeed
     * @return Product
     */
    public function listCybUserGroup(ListCybUserGroupParams $listCybUserGroupFeed)
    {
        $this->app->params = $listCybUserGroupFeed->build();
        $this->url_info    = 'com.alibaba.p4p:alibaba.cps.op.listCybUserGroup-1';
        return $this;
    }

    /**
     * 根据类目Id查询类目
     *
     * @param GetCategoryByIdParams $getCategoryByIdParams
     * @return $this
     */
    public function getCategoryById(GetCategoryByIdParams $getCategoryByIdParams)
    {
        $this->app->params = $getCategoryByIdParams->build();
        $this->url_info    = 'com.alibaba.product:alibaba.category.get-1';
        return $this;
    }


    /**
     * 跨境场景获取商品详情
     *
     * @param CrossProductInfoParam $crossProductInfoParam
     * @return $this
     * @Author HaierSpi haierspi@qq.com
     * @DateTime 2020-04-13
     */
    public function getCrossProductInfo( CrossProductInfoParam $crossProductInfoParam)
    {

        $this->app->params = $crossProductInfoParam->build();
        $this->url_info    = 'com.alibaba.product:alibaba.cross.productInfo-1';
        return $this;
    }

    /**
     * 跨境场景获取商品池
     * @param OfferPoolQueryParams $offer_pool_query_params
     * @return $this
     */
    public function getCrossProductPool(OfferPoolQueryParams $offer_pool_query_params)
    {
        $this->app->params = $offer_pool_query_params->build();
        $this->url_info = 'com.alibaba.fenxiao.crossborder:pool.product.pull-1';
        return $this;
    }

    /**
     * 跨境场景获取商品池中产品详情
     * @param OfferDetailParams $offer_detail_params
     * @return $this
     */
    public function getCrossProductDetailByPool(OfferDetailParams $offer_detail_params)
    {
        $this->app->params = $offer_detail_params->build();
        $this->url_info = 'com.alibaba.fenxiao.crossborder:product.search.queryProductDetail-1';
        return $this;
    }

    /**
     * 增加跨境关注商品
     * @param ProductFollowCrossParams $follow_cross_params
     * @return Product
     */
    public function productFollowByCross(ProductFollowCrossParams $follow_cross_params)
    {
        $this->app->params = $follow_cross_params->build();
        $this->url_info = 'com.alibaba.fenxiao.crossborder:product.kjdistribute.addRelation-1';
        return $this;
    }

}