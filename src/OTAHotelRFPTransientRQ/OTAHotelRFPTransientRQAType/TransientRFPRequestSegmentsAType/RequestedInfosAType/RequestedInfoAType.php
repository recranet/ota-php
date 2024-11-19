<?php

namespace Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType;

/**
 * Class representing RequestedInfoAType
 */
class RequestedInfoAType
{
    /**
     * Used to identify information to be included in the response. Refer to OpenTravel Code List Requested Info Code Category (RQC) code list.
     *
     * @var string $requestedInfoCode
     */
    private $requestedInfoCode = null;

    /**
     * A collection of specific information being requested.
     *
     * @var \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[] $specificRequests
     */
    private $specificRequests = null;

    /**
     * Gets as requestedInfoCode
     *
     * Used to identify information to be included in the response. Refer to OpenTravel Code List Requested Info Code Category (RQC) code list.
     *
     * @return string
     */
    public function getRequestedInfoCode()
    {
        return $this->requestedInfoCode;
    }

    /**
     * Sets a new requestedInfoCode
     *
     * Used to identify information to be included in the response. Refer to OpenTravel Code List Requested Info Code Category (RQC) code list.
     *
     * @param string $requestedInfoCode
     * @return self
     */
    public function setRequestedInfoCode($requestedInfoCode)
    {
        $this->requestedInfoCode = $requestedInfoCode;
        return $this;
    }

    /**
     * Adds as specificRequest
     *
     * A collection of specific information being requested.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType $specificRequest
     */
    public function addToSpecificRequests(\Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType $specificRequest)
    {
        $this->specificRequests[] = $specificRequest;
        return $this;
    }

    /**
     * isset specificRequests
     *
     * A collection of specific information being requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecificRequests($index)
    {
        return isset($this->specificRequests[$index]);
    }

    /**
     * unset specificRequests
     *
     * A collection of specific information being requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecificRequests($index)
    {
        unset($this->specificRequests[$index]);
    }

    /**
     * Gets as specificRequests
     *
     * A collection of specific information being requested.
     *
     * @return \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[]
     */
    public function getSpecificRequests()
    {
        return $this->specificRequests;
    }

    /**
     * Sets a new specificRequests
     *
     * A collection of specific information being requested.
     *
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType\SpecificRequestsAType\SpecificRequestAType[] $specificRequests
     * @return self
     */
    public function setSpecificRequests(array $specificRequests = null)
    {
        $this->specificRequests = $specificRequests;
        return $this;
    }
}

