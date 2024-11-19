<?php

namespace Recranet\OTA\RFPTransientDetailsType;

/**
 * Class representing RFPTransientResponsesAType
 */
class RFPTransientResponsesAType
{
    /**
     * This is the Response data. The response element can repeat for each hotel that is providing a response to the RFP. Each hotel is defined in the HotelRefGroup attributes of this element.
     *
     * @var \Recranet\OTA\RFPTransientResponseType[] $rFPTransientResponse
     */
    private $rFPTransientResponse = [
        
    ];

    /**
     * Adds as rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that is providing a response to the RFP. Each hotel is defined in the HotelRefGroup attributes of this element.
     *
     * @return self
     * @param \Recranet\OTA\RFPTransientResponseType $rFPTransientResponse
     */
    public function addToRFPTransientResponse(\Recranet\OTA\RFPTransientResponseType $rFPTransientResponse)
    {
        $this->rFPTransientResponse[] = $rFPTransientResponse;
        return $this;
    }

    /**
     * isset rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that is providing a response to the RFP. Each hotel is defined in the HotelRefGroup attributes of this element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRFPTransientResponse($index)
    {
        return isset($this->rFPTransientResponse[$index]);
    }

    /**
     * unset rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that is providing a response to the RFP. Each hotel is defined in the HotelRefGroup attributes of this element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRFPTransientResponse($index)
    {
        unset($this->rFPTransientResponse[$index]);
    }

    /**
     * Gets as rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that is providing a response to the RFP. Each hotel is defined in the HotelRefGroup attributes of this element.
     *
     * @return \Recranet\OTA\RFPTransientResponseType[]
     */
    public function getRFPTransientResponse()
    {
        return $this->rFPTransientResponse;
    }

    /**
     * Sets a new rFPTransientResponse
     *
     * This is the Response data. The response element can repeat for each hotel that is providing a response to the RFP. Each hotel is defined in the HotelRefGroup attributes of this element.
     *
     * @param \Recranet\OTA\RFPTransientResponseType[] $rFPTransientResponse
     * @return self
     */
    public function setRFPTransientResponse(array $rFPTransientResponse)
    {
        $this->rFPTransientResponse = $rFPTransientResponse;
        return $this;
    }
}

