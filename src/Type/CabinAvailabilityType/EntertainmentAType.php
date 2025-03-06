<?php

namespace Recranet\OTA\Type\CabinAvailabilityType;

/**
 * Class representing EntertainmentAType
 */
class EntertainmentAType
{
    /**
     * A code used to designate an entertainment service. Refer to OpenTravel Code list Flight Service Code (FSC).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Gets as code
     *
     * A code used to designate an entertainment service. Refer to OpenTravel Code list Flight Service Code (FSC).
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
     * A code used to designate an entertainment service. Refer to OpenTravel Code list Flight Service Code (FSC).
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

