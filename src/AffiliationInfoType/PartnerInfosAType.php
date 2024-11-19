<?php

namespace Recranet\OTA\AffiliationInfoType;

/**
 * Class representing PartnerInfosAType
 */
class PartnerInfosAType
{
    /**
     * Provides information on marketing and service partnerships (e.g., a theme park that offers discounts if you book this hotel). This is not a loyalty partnership.
     *
     * @var \Recranet\OTA\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[] $partnerInfo
     */
    private $partnerInfo = [
        
    ];

    /**
     * Adds as partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park that offers discounts if you book this hotel). This is not a loyalty partnership.
     *
     * @return self
     * @param \Recranet\OTA\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType $partnerInfo
     */
    public function addToPartnerInfo(\Recranet\OTA\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType $partnerInfo)
    {
        $this->partnerInfo[] = $partnerInfo;
        return $this;
    }

    /**
     * isset partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park that offers discounts if you book this hotel). This is not a loyalty partnership.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPartnerInfo($index)
    {
        return isset($this->partnerInfo[$index]);
    }

    /**
     * unset partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park that offers discounts if you book this hotel). This is not a loyalty partnership.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPartnerInfo($index)
    {
        unset($this->partnerInfo[$index]);
    }

    /**
     * Gets as partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park that offers discounts if you book this hotel). This is not a loyalty partnership.
     *
     * @return \Recranet\OTA\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[]
     */
    public function getPartnerInfo()
    {
        return $this->partnerInfo;
    }

    /**
     * Sets a new partnerInfo
     *
     * Provides information on marketing and service partnerships (e.g., a theme park that offers discounts if you book this hotel). This is not a loyalty partnership.
     *
     * @param \Recranet\OTA\AffiliationInfoType\PartnerInfosAType\PartnerInfoAType[] $partnerInfo
     * @return self
     */
    public function setPartnerInfo(array $partnerInfo)
    {
        $this->partnerInfo = $partnerInfo;
        return $this;
    }
}

