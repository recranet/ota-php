<?php

namespace Recranet\OTA;

/**
 * Class representing AdvResTicketingType
 *
 * Container used to hold information regarding advance reservation and/or advance ticketing.
 * XSD Type: AdvResTicketingType
 */
class AdvResTicketingType
{
    /**
     * Indicator for identifying whether or not advance reservation restrictions are involved in the request or response.
     *
     * @var bool $advResInd
     */
    private $advResInd = null;

    /**
     * Indicator for identifying whether or not advance ticketing restrictions are involved in the request or response.
     *
     * @var bool $advTicketingInd
     */
    private $advTicketingInd = null;

    /**
     * The date a traveller wishes to ticket their reservation.
     *
     * @var \DateTime $requestedTicketingDate
     */
    private $requestedTicketingDate = null;

    /**
     * Specifies constraints on when advance reservations can be made.
     *
     * @var \Recranet\OTA\AdvResTicketingType\AdvReservationAType $advReservation
     */
    private $advReservation = null;

    /**
     * Specifies advance ticketing restrictions.
     *
     * @var \Recranet\OTA\AdvResTicketingType\AdvTicketingAType $advTicketing
     */
    private $advTicketing = null;

    /**
     * Gets as advResInd
     *
     * Indicator for identifying whether or not advance reservation restrictions are involved in the request or response.
     *
     * @return bool
     */
    public function getAdvResInd()
    {
        return $this->advResInd;
    }

    /**
     * Sets a new advResInd
     *
     * Indicator for identifying whether or not advance reservation restrictions are involved in the request or response.
     *
     * @param bool $advResInd
     * @return self
     */
    public function setAdvResInd($advResInd)
    {
        $this->advResInd = $advResInd;
        return $this;
    }

    /**
     * Gets as advTicketingInd
     *
     * Indicator for identifying whether or not advance ticketing restrictions are involved in the request or response.
     *
     * @return bool
     */
    public function getAdvTicketingInd()
    {
        return $this->advTicketingInd;
    }

    /**
     * Sets a new advTicketingInd
     *
     * Indicator for identifying whether or not advance ticketing restrictions are involved in the request or response.
     *
     * @param bool $advTicketingInd
     * @return self
     */
    public function setAdvTicketingInd($advTicketingInd)
    {
        $this->advTicketingInd = $advTicketingInd;
        return $this;
    }

    /**
     * Gets as requestedTicketingDate
     *
     * The date a traveller wishes to ticket their reservation.
     *
     * @return \DateTime
     */
    public function getRequestedTicketingDate()
    {
        return $this->requestedTicketingDate;
    }

    /**
     * Sets a new requestedTicketingDate
     *
     * The date a traveller wishes to ticket their reservation.
     *
     * @param \DateTime $requestedTicketingDate
     * @return self
     */
    public function setRequestedTicketingDate(\DateTime $requestedTicketingDate)
    {
        $this->requestedTicketingDate = $requestedTicketingDate;
        return $this;
    }

    /**
     * Gets as advReservation
     *
     * Specifies constraints on when advance reservations can be made.
     *
     * @return \Recranet\OTA\AdvResTicketingType\AdvReservationAType
     */
    public function getAdvReservation()
    {
        return $this->advReservation;
    }

    /**
     * Sets a new advReservation
     *
     * Specifies constraints on when advance reservations can be made.
     *
     * @param \Recranet\OTA\AdvResTicketingType\AdvReservationAType $advReservation
     * @return self
     */
    public function setAdvReservation(?\Recranet\OTA\AdvResTicketingType\AdvReservationAType $advReservation = null)
    {
        $this->advReservation = $advReservation;
        return $this;
    }

    /**
     * Gets as advTicketing
     *
     * Specifies advance ticketing restrictions.
     *
     * @return \Recranet\OTA\AdvResTicketingType\AdvTicketingAType
     */
    public function getAdvTicketing()
    {
        return $this->advTicketing;
    }

    /**
     * Sets a new advTicketing
     *
     * Specifies advance ticketing restrictions.
     *
     * @param \Recranet\OTA\AdvResTicketingType\AdvTicketingAType $advTicketing
     * @return self
     */
    public function setAdvTicketing(?\Recranet\OTA\AdvResTicketingType\AdvTicketingAType $advTicketing = null)
    {
        $this->advTicketing = $advTicketing;
        return $this;
    }
}

