<?php

namespace com\pv138\easyUnion\taobao\request;

use com\pv138\easyUnion\taobao\RequestCheckUtil;

/**
 * TOP API: taobao.tbk.privilege.get request
 *
 * @author auto create
 * @since 1.0, 2017.05.24
 */
class TbkPrivilegeGetRequest
{
    /**
     * 推广位id，mm_xx_xx_xx pid三段式中的第三段
     **/
    private $adzoneId;

    /**
     * 淘客商品id
     **/
    private $itemId;

    /**
     * 营销计划链接中的me参数
     **/
    private $me;

    /**
     * 1：PC，2：无线，默认：１
     **/
    private $platform;

    /**
     * 备案的网站id, mm_xx_xx_xx pid三段式中的第二段
     **/
    private $siteId;

    /**
     * 渠道关系ID，仅适用于渠道推广场景
     * @var
     */
    private $relationId;

    private $apiParas = array();

    public function getAdzoneId()
    {
        return $this->adzoneId;
    }

    public function setAdzoneId($adzoneId)
    {
        $this->adzoneId = $adzoneId;
        $this->apiParas["adzone_id"] = $adzoneId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        $this->apiParas["item_id"] = $itemId;
    }

    public function getMe()
    {
        return $this->me;
    }

    public function setMe($me)
    {
        $this->me = $me;
        $this->apiParas["me"] = $me;
    }

    public function getPlatform()
    {
        return $this->platform;
    }

    public function setPlatform($platform)
    {
        $this->platform = $platform;
        $this->apiParas["platform"] = $platform;
    }

    public function getSiteId()
    {
        return $this->siteId;
    }

    public function setSiteId($siteId)
    {
        $this->siteId = $siteId;
        $this->apiParas["site_id"] = $siteId;
    }

    /**
     * @return mixed
     */
    public function getRelationId()
    {
        return $this->relationId;
    }

    /**
     * @param mixed $relationId
     */
    public function setRelationId($relationId): void
    {
        $this->relationId = $relationId;
        $this->apiParas["relation_id"] = $relationId;
    }


    public function getApiMethodName()
    {
        return "taobao.tbk.privilege.get";
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function check()
    {
        RequestCheckUtil::checkNotNull($this->adzoneId, "adzoneId");
        RequestCheckUtil::checkNotNull($this->itemId, "itemId");
        RequestCheckUtil::checkNotNull($this->siteId, "siteId");
    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }
}
