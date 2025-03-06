<?php

namespace Recranet\OTA\Type\HotelReservationType\BillingInstructionCodeAType;

/**
 * Class representing ResGuestRPHAType
 */
class ResGuestRPHAType
{
    /**
     * A unique reference to the guest ID.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * Gets as rPH
     *
     * A unique reference to the guest ID.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique reference to the guest ID.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }
}

