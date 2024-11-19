<?php

namespace Recranet\OTA;

/**
 * Class representing DOWRestrictionsType
 *
 *
 * XSD Type: DOW_RestrictionsType
 */
class DOWRestrictionsType
{
    /**
     * Days of week on which this room/rate combination is available.
     *
     * @var \Recranet\OTA\DOWRestrictionsType\AvailableDaysOfWeekAType $availableDaysOfWeek
     */
    private $availableDaysOfWeek = null;

    /**
     * Days of Week on which the guest can arrive.
     *
     * @var \Recranet\OTA\DOWRestrictionsType\ArrivalDaysOfWeekAType $arrivalDaysOfWeek
     */
    private $arrivalDaysOfWeek = null;

    /**
     * Days of Week on which the guest can leave.
     *
     * @var \Recranet\OTA\DOWRestrictionsType\DepartureDaysOfWeekAType $departureDaysOfWeek
     */
    private $departureDaysOfWeek = null;

    /**
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @var \Recranet\OTA\DOWRestrictionsType\RequiredDaysOfWeekAType $requiredDaysOfWeek
     */
    private $requiredDaysOfWeek = null;

    /**
     * Gets as availableDaysOfWeek
     *
     * Days of week on which this room/rate combination is available.
     *
     * @return \Recranet\OTA\DOWRestrictionsType\AvailableDaysOfWeekAType
     */
    public function getAvailableDaysOfWeek()
    {
        return $this->availableDaysOfWeek;
    }

    /**
     * Sets a new availableDaysOfWeek
     *
     * Days of week on which this room/rate combination is available.
     *
     * @param \Recranet\OTA\DOWRestrictionsType\AvailableDaysOfWeekAType $availableDaysOfWeek
     * @return self
     */
    public function setAvailableDaysOfWeek(?\Recranet\OTA\DOWRestrictionsType\AvailableDaysOfWeekAType $availableDaysOfWeek = null)
    {
        $this->availableDaysOfWeek = $availableDaysOfWeek;
        return $this;
    }

    /**
     * Gets as arrivalDaysOfWeek
     *
     * Days of Week on which the guest can arrive.
     *
     * @return \Recranet\OTA\DOWRestrictionsType\ArrivalDaysOfWeekAType
     */
    public function getArrivalDaysOfWeek()
    {
        return $this->arrivalDaysOfWeek;
    }

    /**
     * Sets a new arrivalDaysOfWeek
     *
     * Days of Week on which the guest can arrive.
     *
     * @param \Recranet\OTA\DOWRestrictionsType\ArrivalDaysOfWeekAType $arrivalDaysOfWeek
     * @return self
     */
    public function setArrivalDaysOfWeek(?\Recranet\OTA\DOWRestrictionsType\ArrivalDaysOfWeekAType $arrivalDaysOfWeek = null)
    {
        $this->arrivalDaysOfWeek = $arrivalDaysOfWeek;
        return $this;
    }

    /**
     * Gets as departureDaysOfWeek
     *
     * Days of Week on which the guest can leave.
     *
     * @return \Recranet\OTA\DOWRestrictionsType\DepartureDaysOfWeekAType
     */
    public function getDepartureDaysOfWeek()
    {
        return $this->departureDaysOfWeek;
    }

    /**
     * Sets a new departureDaysOfWeek
     *
     * Days of Week on which the guest can leave.
     *
     * @param \Recranet\OTA\DOWRestrictionsType\DepartureDaysOfWeekAType $departureDaysOfWeek
     * @return self
     */
    public function setDepartureDaysOfWeek(?\Recranet\OTA\DOWRestrictionsType\DepartureDaysOfWeekAType $departureDaysOfWeek = null)
    {
        $this->departureDaysOfWeek = $departureDaysOfWeek;
        return $this;
    }

    /**
     * Gets as requiredDaysOfWeek
     *
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @return \Recranet\OTA\DOWRestrictionsType\RequiredDaysOfWeekAType
     */
    public function getRequiredDaysOfWeek()
    {
        return $this->requiredDaysOfWeek;
    }

    /**
     * Sets a new requiredDaysOfWeek
     *
     * Days of Week on which the guest has to stay at the hotel.
     *
     * @param \Recranet\OTA\DOWRestrictionsType\RequiredDaysOfWeekAType $requiredDaysOfWeek
     * @return self
     */
    public function setRequiredDaysOfWeek(?\Recranet\OTA\DOWRestrictionsType\RequiredDaysOfWeekAType $requiredDaysOfWeek = null)
    {
        $this->requiredDaysOfWeek = $requiredDaysOfWeek;
        return $this;
    }
}

