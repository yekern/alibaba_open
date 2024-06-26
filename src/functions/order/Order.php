<?php

namespace Yekern\AlibabaOpen\functions\order;

use Yekern\AlibabaOpen\core\BaseClient;
use Yekern\AlibabaOpen\entity\CancelTradeParams;
use Yekern\AlibabaOpen\entity\CreateCrossOrderParams;
use Yekern\AlibabaOpen\entity\CreateCrossOrderPreviewParams;
use Yekern\AlibabaOpen\entity\CreateOrder4CybMediaParams;
use Yekern\AlibabaOpen\entity\OrderDetailParams;
use Yekern\AlibabaOpen\entity\OrderListParams;
use Yekern\AlibabaOpen\entity\OrderPayAnalysisParams;
use Yekern\AlibabaOpen\entity\PayProtocolPayPreparePayParams;
use Yekern\AlibabaOpen\entity\Preview4CybMediaParams;
use Yekern\AlibabaOpen\entity\ProtocolPayParams;
use Yekern\AlibabaOpen\entity\ReceiveGoodsConfirmParams;

/**
 * 订单模块
 * @package Yekern\AlibabaOpen\functions\order
 */
class Order extends BaseClient
{
    /**
     * 订单列表
     * @param OrderListParams $orderListParams
     * @return $this
     */
    public function buyerOrderList(OrderListParams $orderListParams)
    {
        $this->app->params = $orderListParams->build();
        $this->url_info = 'com.alibaba.trade:alibaba.trade.getBuyerOrderList-1';
        return $this;
    }

    /**
     * 订单详情(买家视角)
     * @param OrderDetailParams $orderDetailParams
     * @return $this
     */
    public function buyerOrderDetail(OrderDetailParams $orderDetailParams)
    {
        $this->app->params = $orderDetailParams->build();
        $this->url_info = 'com.alibaba.trade:alibaba.trade.get.buyerView-1';
        return $this;
    }

    /**
     * 溢价模式创建订单前预览数据接口
     * @param Preview4CybMediaParams $preview4CybMediaParams
     * @return $this
     */
    public function preview4CybMedia(Preview4CybMediaParams $preview4CybMediaParams)
    {
        $this->app->params = $preview4CybMediaParams->build();
        $this->url_info = 'com.alibaba.trade:alibaba.createOrder.preview4CybMedia-1';
        return $this;
    }

    /**
     * 溢价模式订单创建接口
     * @param CreateOrder4CybMediaParams $createOrder4CybMediaParams
     * @return $this
     */
    public function createOrder4CybMedia(CreateOrder4CybMediaParams $createOrder4CybMediaParams)
    {
        $this->app->params = $createOrder4CybMediaParams->build();
        $this->url_info = 'com.alibaba.trade:alibaba.trade.createOrder4CybMedia-1';
        return $this;
    }

    /**
     * 支付宝协议代扣支付
     * @param ProtocolPayParams $protocolPayParams
     * @return $this
     */
    public function protocolPay(ProtocolPayParams $protocolPayParams)
    {
        $this->app->params = $protocolPayParams->build();
        $this->url_info = 'com.alibaba.trade:alibaba.trade.pay.protocolPay-1';
        return $this;
    }

    /**
     * 取消交易
     * @param CancelTradeParams $cancelTradeParams
     * @return $this
     */
    public function cancelTrade(CancelTradeParams $cancelTradeParams)
    {
        $this->app->params = $cancelTradeParams->build();
        $this->url_info = 'com.alibaba.trade:alibaba.trade.cancel-1';
        return $this;
    }

    /**
     * 跨境订单创建
     * @param CreateCrossOrderParams $create_cross_order_params
     * @return $this
     */
    public function createCrossOrder(CreateCrossOrderParams $create_cross_order_params)
    {
        $this->app->params = $create_cross_order_params->build();
        $this->url_info = 'com.alibaba.trade:alibaba.trade.createCrossOrder-1';
        return $this;
    }

    /**
     * 创建订单前预览数据接口
     * @param CreateCrossOrderPreviewParams $create_cross_order_preview_params
     * @return $this
     */
    public function createCrossOrderPreview(CreateCrossOrderPreviewParams $create_cross_order_preview_params)
    {
        $this->app->params = $create_cross_order_preview_params->build();
        $this->url_info = 'com.alibaba.trade:alibaba.createOrder.preview-1';
        return $this;
    }

    /**
     * 买家确认收货
     * @param ReceiveGoodsConfirmParams $confirm_params
     * @return $this
     */
    public function receiveGoodsConfirm(ReceiveGoodsConfirmParams $confirm_params)
    {
        $this->app->params = $confirm_params->build();
        $this->url_info = 'com.alibaba.trade:trade.receivegoods.confirm-1';
        return $this;
    }


    /**
     * 发起免密支付
     * @see https://open.1688.com/api/apidocdetail.htm?id=com.alibaba.trade:alibaba.trade.pay.protocolPay.preparePay-1
     * @param PayProtocolPayPreparePayParams $params
     * @return $this
     */
    public function payProtocolPayPreparePay(PayProtocolPayPreparePayParams $params)
    {
        $this->app->params = $params->build();
        $this->url_info = 'com.alibaba.trade:alibaba.trade.pay.protocolPay.preparePay-1';
        return $this;
    }

    /**
     * 交易订单支付咨询
     * @see https://open.1688.com/api/apidocdetail.htm?id=com.alibaba.trade:trade.orderpay.analysis-1
     * @param OrderPayAnalysisParams $params
     * @return $this
     */
    public function orderPayAnalysis(OrderPayAnalysisParams $params)
    {
        $this->app->params = $params->build();
        $this->url_info = 'com.alibaba.trade:trade.orderpay.analysis-1';
        return $this;
    }

    /**
     * 查询是否开通免密支付
     * @see https://open.1688.com/api/apidocdetail.htm?id=com.alibaba.trade:alibaba.trade.pay.protocolPay.isopen-1
     * @return $this
     */
    public function protocolPayIsOpen()
    {
        $this->url_info = 'com.alibaba.trade:alibaba.trade.pay.protocolPay.isopen-1';
        return $this;
    }


}
