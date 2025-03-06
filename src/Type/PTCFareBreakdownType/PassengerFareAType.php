<?php

namespace Recranet\OTA\Type\PTCFareBreakdownType;

use Recranet\OTA\Type\FareType;

/**
 * Class representing PassengerFareAType
 */
class PassengerFareAType extends FareType
{
    /**
     * Specifies the usage of the passenger fare structure.
     *
     * @var string $usage
     */
    private $usage = null;

    /**
     * The ticket fee information for this passsenger type code.
     *
     * @var \Recranet\OTA\Type\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType $ticketFeeDetail
     */
    private $ticketFeeDetail = null;

    /**
     * Gets as usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Sets a new usage
     *
     * Specifies the usage of the passenger fare structure.
     *
     * @param string $usage
     * @return self
     */
    public function setUsage($usage)
    {
        $this->usage = $usage;
        return $this;
    }

    /**
     * Gets as ticketFeeDetail
     *
     * The ticket fee information for this passsenger type code.
     *
     * @return \Recranet\OTA\Type\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType
     */
    public function getTicketFeeDetail()
    {
        return $this->ticketFeeDetail;
    }

    /**
     * Sets a new ticketFeeDetail
     *
     * The ticket fee information for this passsenger type code.
     *
     * @param \Recranet\OTA\Type\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType $ticketFeeDetail
     * @return self
     */
    public function setTicketFeeDetail(?\Recranet\OTA\Type\PTCFareBreakdownType\PassengerFareAType\TicketFeeDetailAType $ticketFeeDetail = null)
    {
        $this->ticketFeeDetail = $ticketFeeDetail;
        return $this;
    }
}

