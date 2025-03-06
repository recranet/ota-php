<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\SitesAType\SiteAType;

/**
 * Class representing ContactInfosAType
 */
class ContactInfosAType
{
    /**
     * This is who recieves the requested information.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contactInfo
     */
    private $contactInfo = [
        
    ];

    /**
     * Adds as contactInfo
     *
     * This is who recieves the requested information.
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
     * This is who recieves the requested information.
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
     * This is who recieves the requested information.
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
     * This is who recieves the requested information.
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
     * This is who recieves the requested information.
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

