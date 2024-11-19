<?php

namespace Recranet\OTA\BookFlightSegmentType;

/**
 * Class representing BookingClassAvailsAType
 */
class BookingClassAvailsAType
{
    /**
     * Marketing name as defined by an airline for the first, business or economy cabin.
     *
     * @var string $cabinType
     */
    private $cabinType = null;

    /**
     * Booking codes available to be sold for a particular flight segment.
     *
     * @var \Recranet\OTA\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType[] $bookingClassAvail
     */
    private $bookingClassAvail = [
        
    ];

    /**
     * Gets as cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy cabin.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Marketing name as defined by an airline for the first, business or economy cabin.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;
        return $this;
    }

    /**
     * Adds as bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @return self
     * @param \Recranet\OTA\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType $bookingClassAvail
     */
    public function addToBookingClassAvail(\Recranet\OTA\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType $bookingClassAvail)
    {
        $this->bookingClassAvail[] = $bookingClassAvail;
        return $this;
    }

    /**
     * isset bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingClassAvail($index)
    {
        return isset($this->bookingClassAvail[$index]);
    }

    /**
     * unset bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingClassAvail($index)
    {
        unset($this->bookingClassAvail[$index]);
    }

    /**
     * Gets as bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @return \Recranet\OTA\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType[]
     */
    public function getBookingClassAvail()
    {
        return $this->bookingClassAvail;
    }

    /**
     * Sets a new bookingClassAvail
     *
     * Booking codes available to be sold for a particular flight segment.
     *
     * @param \Recranet\OTA\BookFlightSegmentType\BookingClassAvailsAType\BookingClassAvailAType[] $bookingClassAvail
     * @return self
     */
    public function setBookingClassAvail(array $bookingClassAvail)
    {
        $this->bookingClassAvail = $bookingClassAvail;
        return $this;
    }
}

