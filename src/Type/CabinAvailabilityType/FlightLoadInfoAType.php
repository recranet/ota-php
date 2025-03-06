<?php

namespace Recranet\OTA\Type\CabinAvailabilityType;

/**
 * Class representing FlightLoadInfoAType
 */
class FlightLoadInfoAType
{
    /**
     * The quantity of seats authorized for sale for a cabin and flight leg.
     *
     * @var int $authorizedSeatQty
     */
    private $authorizedSeatQty = null;

    /**
     * The listed quantity of standby passengers (non-revenue PAX) for a cabin and flight leg.
     *
     * @var int $nRSAStandbyPaxQty
     */
    private $nRSAStandbyPaxQty = null;

    /**
     * The quantity of booked revenue passengers (revenue PAX) for each cabin and flight leg.
     *
     * @var int $revenuePaxQty
     */
    private $revenuePaxQty = null;

    /**
     * Gets as authorizedSeatQty
     *
     * The quantity of seats authorized for sale for a cabin and flight leg.
     *
     * @return int
     */
    public function getAuthorizedSeatQty()
    {
        return $this->authorizedSeatQty;
    }

    /**
     * Sets a new authorizedSeatQty
     *
     * The quantity of seats authorized for sale for a cabin and flight leg.
     *
     * @param int $authorizedSeatQty
     * @return self
     */
    public function setAuthorizedSeatQty($authorizedSeatQty)
    {
        $this->authorizedSeatQty = $authorizedSeatQty;
        return $this;
    }

    /**
     * Gets as nRSAStandbyPaxQty
     *
     * The listed quantity of standby passengers (non-revenue PAX) for a cabin and flight leg.
     *
     * @return int
     */
    public function getNRSAStandbyPaxQty()
    {
        return $this->nRSAStandbyPaxQty;
    }

    /**
     * Sets a new nRSAStandbyPaxQty
     *
     * The listed quantity of standby passengers (non-revenue PAX) for a cabin and flight leg.
     *
     * @param int $nRSAStandbyPaxQty
     * @return self
     */
    public function setNRSAStandbyPaxQty($nRSAStandbyPaxQty)
    {
        $this->nRSAStandbyPaxQty = $nRSAStandbyPaxQty;
        return $this;
    }

    /**
     * Gets as revenuePaxQty
     *
     * The quantity of booked revenue passengers (revenue PAX) for each cabin and flight leg.
     *
     * @return int
     */
    public function getRevenuePaxQty()
    {
        return $this->revenuePaxQty;
    }

    /**
     * Sets a new revenuePaxQty
     *
     * The quantity of booked revenue passengers (revenue PAX) for each cabin and flight leg.
     *
     * @param int $revenuePaxQty
     * @return self
     */
    public function setRevenuePaxQty($revenuePaxQty)
    {
        $this->revenuePaxQty = $revenuePaxQty;
        return $this;
    }
}

