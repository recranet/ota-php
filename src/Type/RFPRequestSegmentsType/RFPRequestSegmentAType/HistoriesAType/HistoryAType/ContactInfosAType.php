<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType;

/**
 * Class representing ContactInfosAType
 */
class ContactInfosAType
{
    /**
     * This is the previous contact for the past event. This information would be useful to make follow-up requests of information.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contactInfo
     */
    private $contactInfo = [
        
    ];

    /**
     * Adds as contactInfo
     *
     * This is the previous contact for the past event. This information would be useful to make follow-up requests of information.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contactInfo
     */
    public function addToContactInfo(\Recranet\OTA\Type\ContactPersonType $contactInfo)
    {
        $this->contactInfo[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfo
     *
     * This is the previous contact for the past event. This information would be useful to make follow-up requests of information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactInfo($index)
    {
        return isset($this->contactInfo[$index]);
    }

    /**
     * unset contactInfo
     *
     * This is the previous contact for the past event. This information would be useful to make follow-up requests of information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactInfo($index)
    {
        unset($this->contactInfo[$index]);
    }

    /**
     * Gets as contactInfo
     *
     * This is the previous contact for the past event. This information would be useful to make follow-up requests of information.
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * This is the previous contact for the past event. This information would be useful to make follow-up requests of information.
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contactInfo
     * @return self
     */
    public function setContactInfo(array $contactInfo)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
}

