<?php

namespace Recranet\OTA\SpecialReqDetailsType;

/**
 * Class representing OtherServiceInformationsAType
 */
class OtherServiceInformationsAType
{
    /**
     * Other Service Information (OSI) for relevant airlines.
     *
     * @var \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[] $otherServiceInformation
     */
    private $otherServiceInformation = [
        
    ];

    /**
     * Adds as otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType $otherServiceInformation
     */
    public function addToOtherServiceInformation(\Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType $otherServiceInformation)
    {
        $this->otherServiceInformation[] = $otherServiceInformation;
        return $this;
    }

    /**
     * isset otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherServiceInformation($index)
    {
        return isset($this->otherServiceInformation[$index]);
    }

    /**
     * unset otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherServiceInformation($index)
    {
        unset($this->otherServiceInformation[$index]);
    }

    /**
     * Gets as otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @return \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     */
    public function getOtherServiceInformation()
    {
        return $this->otherServiceInformation;
    }

    /**
     * Sets a new otherServiceInformation
     *
     * Other Service Information (OSI) for relevant airlines.
     *
     * @param \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[] $otherServiceInformation
     * @return self
     */
    public function setOtherServiceInformation(array $otherServiceInformation)
    {
        $this->otherServiceInformation = $otherServiceInformation;
        return $this;
    }
}

