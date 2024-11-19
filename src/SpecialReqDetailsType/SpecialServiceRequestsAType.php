<?php

namespace Recranet\OTA\SpecialReqDetailsType;

/**
 * Class representing SpecialServiceRequestsAType
 */
class SpecialServiceRequestsAType
{
    /**
     * Special Service Requests (SSR) for this booking.
     *
     * @var \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[] $specialServiceRequest
     */
    private $specialServiceRequest = [
        
    ];

    /**
     * Adds as specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType $specialServiceRequest
     */
    public function addToSpecialServiceRequest(\Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType $specialServiceRequest)
    {
        $this->specialServiceRequest[] = $specialServiceRequest;
        return $this;
    }

    /**
     * isset specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialServiceRequest($index)
    {
        return isset($this->specialServiceRequest[$index]);
    }

    /**
     * unset specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialServiceRequest($index)
    {
        unset($this->specialServiceRequest[$index]);
    }

    /**
     * Gets as specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @return \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     */
    public function getSpecialServiceRequest()
    {
        return $this->specialServiceRequest;
    }

    /**
     * Sets a new specialServiceRequest
     *
     * Special Service Requests (SSR) for this booking.
     *
     * @param \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[] $specialServiceRequest
     * @return self
     */
    public function setSpecialServiceRequest(array $specialServiceRequest)
    {
        $this->specialServiceRequest = $specialServiceRequest;
        return $this;
    }
}

