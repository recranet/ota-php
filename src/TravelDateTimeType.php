<?php

namespace Recranet\OTA;

/**
 * Class representing TravelDateTimeType
 *
 * Date and time of trip that allows specifying a time window before and after the given date.
 * XSD Type: TravelDateTimeType
 */
class TravelDateTimeType
{
    /**
     * The departure date and optionally a time period that can be applied before and/or after the departure date.
     *
     * @var \Recranet\OTA\TimeInstantType $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * The arrival date and optionally a time period that can be applied before and/or after the arrival date.
     *
     * @var \Recranet\OTA\TimeInstantType $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * Gets as departureDateTime
     *
     * The departure date and optionally a time period that can be applied before and/or after the departure date.
     *
     * @return \Recranet\OTA\TimeInstantType
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * The departure date and optionally a time period that can be applied before and/or after the departure date.
     *
     * @param \Recranet\OTA\TimeInstantType $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(?\Recranet\OTA\TimeInstantType $departureDateTime = null)
    {
        $this->departureDateTime = $departureDateTime;
        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * The arrival date and optionally a time period that can be applied before and/or after the arrival date.
     *
     * @return \Recranet\OTA\TimeInstantType
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * The arrival date and optionally a time period that can be applied before and/or after the arrival date.
     *
     * @param \Recranet\OTA\TimeInstantType $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(?\Recranet\OTA\TimeInstantType $arrivalDateTime = null)
    {
        $this->arrivalDateTime = $arrivalDateTime;
        return $this;
    }
}

