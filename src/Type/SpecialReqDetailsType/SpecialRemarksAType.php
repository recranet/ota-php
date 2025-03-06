<?php

namespace Recranet\OTA\Type\SpecialReqDetailsType;

/**
 * Class representing SpecialRemarksAType
 */
class SpecialRemarksAType
{
    /**
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @var \Recranet\OTA\Type\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[] $specialRemark
     */
    private $specialRemark = [
        
    ];

    /**
     * Adds as specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark
     */
    public function addToSpecialRemark(\Recranet\OTA\Type\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark)
    {
        $this->specialRemark[] = $specialRemark;
        return $this;
    }

    /**
     * isset specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRemark($index)
    {
        return isset($this->specialRemark[$index]);
    }

    /**
     * unset specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRemark($index)
    {
        unset($this->specialRemark[$index]);
    }

    /**
     * Gets as specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @return \Recranet\OTA\Type\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     */
    public function getSpecialRemark()
    {
        return $this->specialRemark;
    }

    /**
     * Sets a new specialRemark
     *
     * Itinerary Remarks, Invoice Remarks, etc.
     *
     * @param \Recranet\OTA\Type\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[] $specialRemark
     * @return self
     */
    public function setSpecialRemark(array $specialRemark)
    {
        $this->specialRemark = $specialRemark;
        return $this;
    }
}

