<?php

namespace Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType;

/**
 * Class representing SpecificRequestsAType
 */
class SpecificRequestsAType
{
    /**
     * Used to request specific information within the response.
     *
     * @var \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[] $specificRequest
     */
    private $specificRequest = [
        
    ];

    /**
     * Adds as specificRequest
     *
     * Used to request specific information within the response.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType $specificRequest
     */
    public function addToSpecificRequest(\Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType $specificRequest)
    {
        $this->specificRequest[] = $specificRequest;
        return $this;
    }

    /**
     * isset specificRequest
     *
     * Used to request specific information within the response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecificRequest($index)
    {
        return isset($this->specificRequest[$index]);
    }

    /**
     * unset specificRequest
     *
     * Used to request specific information within the response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecificRequest($index)
    {
        unset($this->specificRequest[$index]);
    }

    /**
     * Gets as specificRequest
     *
     * Used to request specific information within the response.
     *
     * @return \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     */
    public function getSpecificRequest()
    {
        return $this->specificRequest;
    }

    /**
     * Sets a new specificRequest
     *
     * Used to request specific information within the response.
     *
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[] $specificRequest
     * @return self
     */
    public function setSpecificRequest(array $specificRequest)
    {
        $this->specificRequest = $specificRequest;
        return $this;
    }
}

