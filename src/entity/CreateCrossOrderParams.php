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
     * 发票信息
     * @var $invoiceParam
     */
    private $invoiceParam;

    /**
     * 店铺优惠ID，通过“创建订单前预览数据接口”获得。为空默认使用默认优惠
     * @var $shopPromotionId
     */
    private $shopPromotionId;

    /**
     * 是否匿名下单
     * @var $anonymousBuyer
     */
    private $anonymousBuyer;

    /**
     * 回流订单下游平台 淘宝-thyny，天猫-tm，淘特-taote，阿里巴巴C2M-c2m，京东-jingdong，拼多多-pinduoduo，微信-weixin，跨境-kuajing，快手-kuaishou，有赞-youzan，抖音-douyin，寺库-siku，美团团好货-meituan，小红书-xiaohongshu，当当-dangdang，苏宁-suning，大V店-davdian，行云-xingyun，蜜芽-miya，菠萝派商城-boluo，快团团-kuaituantuan，其他-other
     * @var $fenxiaoChannel
     */
    private $fenxiaoChannel;

    /**
     * 库存模式，JIT（jit模式）或 NORMAL（仓发模式）,目前只提供给AE使用
     * @var $inventoryMode
     */
    private $inventoryMode;

    /**
     * 上门揽收,目前AE供货可用，其他场景暂不开通.y或n,默认为n
     * @var $pickupService
     */
    private $pickupService;

    /**
     * 上门揽仓库code
     * @var $warehouseCode
     */
    private $warehouseCode;

    /**
     * 预选的支付渠道，用作财务订单分流。订单信息查询接口返回：result.exAttributes.preSelectPayChannel ，该值是创建订单接口时传入的预选的支付渠道标记。
     * @var $preSelectPayChannel
     */
    private $preSelectPayChannel;

    /**
     * 是否小额采购，目前AE供货可用，取值y/n，默认为n
     * @var $smallProcurement
     */
    private $smallProcurement;

    /**
     * 使用红包：y使用，n不使用。默认使用红包
     * @var $useRedEnvelope
     */
    private $useRedEnvelope;

    /**
     * 是否转运订单，取值y/n，默认为n
     * @var $dropshipping
     */
    private $dropshipping;

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
     * @param mixed $invoiceParam
     */
    public function setInvoiceParam($invoiceParam): void
    {
        $this->invoiceParam = $invoiceParam;
    }

    /**
     * @param mixed $shopPromotionId
     */
    public function setShopPromotionId($shopPromotionId): void
    {
        $this->shopPromotionId = $shopPromotionId;
    }

    /**
     * @param mixed $anonymousBuyer
     */
    public function setAnonymousBuyer($anonymousBuyer): void
    {
        $this->anonymousBuyer = $anonymousBuyer;
    }

    /**
     * @param mixed $fenxiaoChannel
     */
    public function setFenxiaoChannel($fenxiaoChannel): void
    {
        $this->fenxiaoChannel = $fenxiaoChannel;
    }

    /**
     * @param mixed $inventoryMode
     */
    public function setInventoryMode($inventoryMode): void
    {
        $this->inventoryMode = $inventoryMode;
    }

    /**
     * @param mixed $pickupService
     */
    public function setPickupService($pickupService): void
    {
        $this->pickupService = $pickupService;
    }

    /**
     * @param mixed $warehouseCode
     */
    public function setWarehouseCode($warehouseCode): void
    {
        $this->warehouseCode = $warehouseCode;
    }

    /**
     * @param mixed $preSelectPayChannel
     */
    public function setPreSelectPayChannel($preSelectPayChannel): void
    {
        $this->preSelectPayChannel = $preSelectPayChannel;
    }

    /**
     * @param mixed $smallProcurement
     */
    public function setSmallProcurement($smallProcurement): void
    {
        $this->smallProcurement = $smallProcurement;
    }

    /**
     * @param mixed $useRedEnvelope
     */
    public function setUseRedEnvelope($useRedEnvelope): void
    {
        $this->useRedEnvelope = $useRedEnvelope;
    }

    /**
     * @param mixed $dropshipping
     */
    public function setDropshipping($dropshipping): void
    {
        $this->dropshipping = $dropshipping;
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