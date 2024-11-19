<?php

namespace Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType;

/**
 * Class representing AdditionalInfosAType
 */
class AdditionalInfosAType
{
    /**
     * Details regarding the additional information and its delivery method.
     *
     * @var \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfo
     */
    private $additionalInfo = [
        
    ];

    /**
     * Adds as additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @return self
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
     */
    public function addToAdditionalInfo(\Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo)
    {
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalInfo($index)
    {
        return isset($this->additionalInfo[$index]);
    }

    /**
     * unset additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalInfo($index)
    {
        unset($this->additionalInfo[$index]);
    }

    /**
     * Gets as additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @return \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * Details regarding the additional information and its delivery method.
     *
     * @param \Recranet\OTA\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType\SitesAType\SiteAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}

