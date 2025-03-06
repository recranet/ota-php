<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing AdditionalInfosAType
 */
class AdditionalInfosAType
{
    /**
     * A request for additional information and the required delivery method.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfo
     */
    private $additionalInfo = [
        
    ];

    /**
     * Adds as additionalInfo
     *
     * A request for additional information and the required delivery method.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo
     */
    public function addToAdditionalInfo(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType $additionalInfo)
    {
        $this->additionalInfo[] = $additionalInfo;
        return $this;
    }

    /**
     * isset additionalInfo
     *
     * A request for additional information and the required delivery method.
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
     * A request for additional information and the required delivery method.
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
     * A request for additional information and the required delivery method.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[]
     */
    public function getAdditionalInfo()
    {
        return $this->additionalInfo;
    }

    /**
     * Sets a new additionalInfo
     *
     * A request for additional information and the required delivery method.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\AdditionalInfosAType\AdditionalInfoAType[] $additionalInfo
     * @return self
     */
    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
        return $this;
    }
}

