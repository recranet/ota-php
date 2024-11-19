<?php

namespace Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType;

/**
 * Class representing RequestedInfosAType
 */
class RequestedInfosAType
{
    /**
     * When true, all response data should be sent in a single file and when false, the response for each RequestedInfoCode should be in a separate file. Typically used when the response is requested in electronic format.
     *
     * @var bool $singleFileIndicator
     */
    private $singleFileIndicator = null;

    /**
     * Used to specify what information should be returned in the response.
     *
     * @var \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType[] $requestedInfo
     */
    private $requestedInfo = [
        
    ];

    /**
     * Gets as singleFileIndicator
     *
     * When true, all response data should be sent in a single file and when false, the response for each RequestedInfoCode should be in a separate file. Typically used when the response is requested in electronic format.
     *
     * @return bool
     */
    public function getSingleFileIndicator()
    {
        return $this->singleFileIndicator;
    }

    /**
     * Sets a new singleFileIndicator
     *
     * When true, all response data should be sent in a single file and when false, the response for each RequestedInfoCode should be in a separate file. Typically used when the response is requested in electronic format.
     *
     * @param bool $singleFileIndicator
     * @return self
     */
    public function setSingleFileIndicator($singleFileIndicator)
    {
        $this->singleFileIndicator = $singleFileIndicator;
        return $this;
    }

    /**
     * Adds as requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType $requestedInfo
     */
    public function addToRequestedInfo(\Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType $requestedInfo)
    {
        $this->requestedInfo[] = $requestedInfo;
        return $this;
    }

    /**
     * isset requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedInfo($index)
    {
        return isset($this->requestedInfo[$index]);
    }

    /**
     * unset requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedInfo($index)
    {
        unset($this->requestedInfo[$index]);
    }

    /**
     * Gets as requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @return \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType[]
     */
    public function getRequestedInfo()
    {
        return $this->requestedInfo;
    }

    /**
     * Sets a new requestedInfo
     *
     * Used to specify what information should be returned in the response.
     *
     * @param \Recranet\OTA\OTAHotelRFPTransientRQ\OTAHotelRFPTransientRQAType\TransientRFPRequestSegmentsAType\RequestedInfosAType\RequestedInfoAType[] $requestedInfo
     * @return self
     */
    public function setRequestedInfo(array $requestedInfo)
    {
        $this->requestedInfo = $requestedInfo;
        return $this;
    }
}

