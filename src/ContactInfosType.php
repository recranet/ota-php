<?php

namespace Recranet\OTA;

/**
 * Class representing ContactInfosType
 *
 * A collection of ContactInfo elements that provides detailed contact information.
 * XSD Type: ContactInfosType
 */
class ContactInfosType
{
    /**
     * Used to define specific contact information such as phone and address.
     *
     * @var \Recranet\OTA\ContactInfoRootType[] $contactInfo
     */
    private $contactInfo = [
        
    ];

    /**
     * Adds as contactInfo
     *
     * Used to define specific contact information such as phone and address.
     *
     * @return self
     * @param \Recranet\OTA\ContactInfoRootType $contactInfo
     */
    public function addToContactInfo(\Recranet\OTA\ContactInfoRootType $contactInfo)
    {
        $this->contactInfo[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfo
     *
     * Used to define specific contact information such as phone and address.
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
     * Used to define specific contact information such as phone and address.
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
     * Used to define specific contact information such as phone and address.
     *
     * @return \Recranet\OTA\ContactInfoRootType[]
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Used to define specific contact information such as phone and address.
     *
     * @param \Recranet\OTA\ContactInfoRootType[] $contactInfo
     * @return self
     */
    public function setContactInfo(array $contactInfo = null)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
}

