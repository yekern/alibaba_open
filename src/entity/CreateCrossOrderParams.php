<?php

namespace Yekern\AlibabaOpen\entity;

class CreateCrossOrderParams extends BaseEntityParams
{

    /**
     * bigcfenxiao(跨境大客户),general（创建大市场订单），fenxiao（创建分销订单）,saleproxy流程将校验分销关系,paired(火拼下单),boutiquefenxiao(精选货源分销价下单，采购量1个使用包邮)， boutiquepifa(精选货源批发价下单，采购量大于2使用).
     * @var $flow
     */
    private $flow;

    /**
     * 买家留言
     * @var $message
     */
    private $message;

    /**
     * 收货地址信息
     * @var $addressParam
     */
    private $addressParam;

    /**
     * 商品信息
     * @var $cargoParamList
     */
    private $cargoParamList;

    /**
     * 外部订单号
     * @var $outOrderId
     */
    private $outOrderId;

    /**
     * 支付类型
     * @var $tradeType
     */
    private $tradeType;

    /**
     * @param $flow
     * @param $addressParam
     * @param $cargoParamList
     * @param $outOrderId
     */
    public function __construct($flow, $addressParam, $cargoParamList, $outOrderId)
    {
        $this->flow = $flow;
        $this->addressParam = $addressParam;
        $this->cargoParamList = $cargoParamList;
        $this->outOrderId = $outOrderId;
    }


    /**
     * 买家留言
     * @param $message
     * @return void
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * 由于不同的商品支持的交易方式不同，没有一种交易方式是全局通用的，所以当前下单可使用的交易方式必须通过下单预览接口的tradeModeNameList获取。交易方式类型说明：assureTrade（交易4.0通用担保交易），alipay（大市场通用的支付宝担保交易（目前在做切流，后续会下掉）），period（普通账期交易）, assure（大买家企业采购询报价下单时需要使用的担保交易流程）, creditBuy（诚E赊），bank（银行转账），631staged（631分阶段付款），37staged（37分阶段）；此字段不传则系统默认会选取一个可用的交易方式下单，如果开通了诚E赊默认是creditBuy（诚E赊），未开通诚E赊默认使用的方式是支付宝担宝交易。
     * @param $tradeType
     * @return void
     */
    public function setTradeType($tradeType)
    {
        $this->tradeType = $tradeType;
    }


    /**
     * @return array
     */
    public function build()
    {
        //过滤NULL
        return array_filter(get_object_vars($this), function ($val) {
            return !is_null($val);
        });
    }
}