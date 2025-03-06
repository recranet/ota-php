<?php

namespace Recranet\OTA\Type;

/**
 * Class representing SpecialRequestType
 *
 * A collection of SpecialRequest objects. The collection of all special requests associated with any part of the reservation (the reservation in its entirety, one or more guests, or one or more room stays). Which special requests belong to which part is determined by each object's SpecialRequestRPHs collection.
 * XSD Type: SpecialRequestType
 */
class SpecialRequestType
{
    /**
     * The SpecialRequest object indicates special requests for a particular guest, service or reservation. Each of these may be independent of any that are tied to the profile (see Profile Synchronization standard).
     *
     * @var \Recranet\OTA\Type\SpecialRequestType\SpecialRequestAType[] $specialRequest
     */
    private $specialRequest = [
        
    ];

    /**
     * Adds as specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular guest, service or reservation. Each of these may be independent of any that are tied to the profile (see Profile Synchronization standard).
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialRequestType\SpecialRequestAType $specialRequest
     */
    public function addToSpecialRequest(\Recranet\OTA\Type\SpecialRequestType\SpecialRequestAType $specialRequest)
    {
        $this->specialRequest[] = $specialRequest;
        return $this;
    }

    /**
     * isset specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular guest, service or reservation. Each of these may be independent of any that are tied to the profile (see Profile Synchronization standard).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRequest($index)
    {
        return isset($this->specialRequest[$index]);
    }

    /**
     * unset specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular guest, service or reservation. Each of these may be independent of any that are tied to the profile (see Profile Synchronization standard).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRequest($index)
    {
        unset($this->specialRequest[$index]);
    }

    /**
     * Gets as specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular guest, service or reservation. Each of these may be independent of any that are tied to the profile (see Profile Synchronization standard).
     *
     * @return \Recranet\OTA\Type\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequest()
    {
        return $this->specialRequest;
    }

    /**
     * Sets a new specialRequest
     *
     * The SpecialRequest object indicates special requests for a particular guest, service or reservation. Each of these may be independent of any that are tied to the profile (see Profile Synchronization standard).
     *
     * @param \Recranet\OTA\Type\SpecialRequestType\SpecialRequestAType[] $specialRequest
     * @return self
     */
    public function setSpecialRequest(array $specialRequest)
    {
        $this->specialRequest = $specialRequest;
        return $this;
    }
}

