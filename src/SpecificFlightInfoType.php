<?php

namespace Recranet\OTA;

/**
 * Class representing SpecificFlightInfoType
 *
 * Specify actual airline, flight number, or booking class
 * XSD Type: SpecificFlightInfoType
 */
class SpecificFlightInfoType
{
    /**
     * Specific flight number to request availability for. Requires that Airline is also supplied.
     *
     * @var string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Specify airline to request availability for.
     *
     * @var \Recranet\OTA\CompanyNameType $airline
     */
    private $airline = null;

    /**
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @var \Recranet\OTA\SpecificFlightInfoType\BookingClassPrefAType[] $bookingClassPref
     */
    private $bookingClassPref = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as flightNumber
     *
     * Specific flight number to request availability for. Requires that Airline is also supplied.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * Specific flight number to request availability for. Requires that Airline is also supplied.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
        return $this;
    }

    /**
     * Gets as airline
     *
     * Specify airline to request availability for.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * Specify airline to request availability for.
     *
     * @param \Recranet\OTA\CompanyNameType $airline
     * @return self
     */
    public function setAirline(?\Recranet\OTA\CompanyNameType $airline = null)
    {
        $this->airline = $airline;
        return $this;
    }

    /**
     * Adds as bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @return self
     * @param \Recranet\OTA\SpecificFlightInfoType\BookingClassPrefAType $bookingClassPref
     */
    public function addToBookingClassPref(\Recranet\OTA\SpecificFlightInfoType\BookingClassPrefAType $bookingClassPref)
    {
        $this->bookingClassPref[] = $bookingClassPref;
        return $this;
    }

    /**
     * isset bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingClassPref($index)
    {
        return isset($this->bookingClassPref[$index]);
    }

    /**
     * unset bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingClassPref($index)
    {
        unset($this->bookingClassPref[$index]);
    }

    /**
     * Gets as bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @return \Recranet\OTA\SpecificFlightInfoType\BookingClassPrefAType[]
     */
    public function getBookingClassPref()
    {
        return $this->bookingClassPref;
    }

    /**
     * Sets a new bookingClassPref
     *
     * Specifies specific booking classes to include and/or exclude in the response.
     *
     * @param \Recranet\OTA\SpecificFlightInfoType\BookingClassPrefAType[] $bookingClassPref
     * @return self
     */
    public function setBookingClassPref(array $bookingClassPref = null)
    {
        $this->bookingClassPref = $bookingClassPref;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

