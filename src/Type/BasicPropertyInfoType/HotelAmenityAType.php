<?php

namespace Recranet\OTA\Type\BasicPropertyInfoType;

/**
 * Class representing HotelAmenityAType
 */
class HotelAmenityAType
{
    /**
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code List Hotel Amenity Code (HAC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }
}

