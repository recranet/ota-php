<?php

namespace Recranet\OTA\Type\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * @var float $amount
     */
    private $amount = null;

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}

