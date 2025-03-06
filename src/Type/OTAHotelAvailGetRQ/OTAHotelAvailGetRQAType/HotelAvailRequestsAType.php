<?php

namespace Recranet\OTA\Type\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType;

/**
 * Class representing HotelAvailRequestsAType
 */
class HotelAvailRequestsAType
{
    /**
     * Provides the criteria to specify availability details to return.The critiera can include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @var \Recranet\OTA\Type\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType[] $hotelAvailRequest
     */
    private $hotelAvailRequest = [
        
    ];

    /**
     * Adds as hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType $hotelAvailRequest
     */
    public function addToHotelAvailRequest(\Recranet\OTA\Type\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType $hotelAvailRequest)
    {
        $this->hotelAvailRequest[] = $hotelAvailRequest;
        return $this;
    }

    /**
     * isset hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelAvailRequest($index)
    {
        return isset($this->hotelAvailRequest[$index]);
    }

    /**
     * unset hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelAvailRequest($index)
    {
        unset($this->hotelAvailRequest[$index]);
    }

    /**
     * Gets as hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @return \Recranet\OTA\Type\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType[]
     */
    public function getHotelAvailRequest()
    {
        return $this->hotelAvailRequest;
    }

    /**
     * Sets a new hotelAvailRequest
     *
     * Provides the criteria to specify availability details to return.The critiera can include date ranges, room and products, rate plans, hurdle rate, etc.
     *
     * @param \Recranet\OTA\Type\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType[] $hotelAvailRequest
     * @return self
     */
    public function setHotelAvailRequest(array $hotelAvailRequest)
    {
        $this->hotelAvailRequest = $hotelAvailRequest;
        return $this;
    }
}

