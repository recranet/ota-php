<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RailAvailQueryType
 *
 * Defines criteria for a rail availability query.
 * XSD Type: RailAvailQueryType
 */
class RailAvailQueryType
{
    /**
     * A collection of information about the locations for which availability is to be checked. It may be repeated to query availability of each individual train in multiple train segments for a specified route.
     *
     * @var \Recranet\OTA\Type\RailAvailScheduleQueryType[] $availBaseQueryCriteria
     */
    private $availBaseQueryCriteria = [
        
    ];

    /**
     * Specify passenger type/category.
     *
     * @var \Recranet\OTA\Type\RailPassengerCategoryType[] $passengerType
     */
    private $passengerType = [
        
    ];

    /**
     * Indicates the date and time search criteria for the return journey.
     *
     * @var \Recranet\OTA\Type\TravelDateTimeType $returnInfo
     */
    private $returnInfo = null;

    /**
     * Specifies the preferences for the availability request.
     *
     * @var \Recranet\OTA\Type\RailAvailPrefsType $railPrefs
     */
    private $railPrefs = null;

    /**
     * Adds as availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be checked. It may be repeated to query availability of each individual train in multiple train segments for a specified route.
     *
     * @return self
     * @param \Recranet\OTA\Type\RailAvailScheduleQueryType $availBaseQueryCriteria
     */
    public function addToAvailBaseQueryCriteria(\Recranet\OTA\Type\RailAvailScheduleQueryType $availBaseQueryCriteria)
    {
        $this->availBaseQueryCriteria[] = $availBaseQueryCriteria;
        return $this;
    }

    /**
     * isset availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be checked. It may be repeated to query availability of each individual train in multiple train segments for a specified route.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAvailBaseQueryCriteria($index)
    {
        return isset($this->availBaseQueryCriteria[$index]);
    }

    /**
     * unset availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be checked. It may be repeated to query availability of each individual train in multiple train segments for a specified route.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAvailBaseQueryCriteria($index)
    {
        unset($this->availBaseQueryCriteria[$index]);
    }

    /**
     * Gets as availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be checked. It may be repeated to query availability of each individual train in multiple train segments for a specified route.
     *
     * @return \Recranet\OTA\Type\RailAvailScheduleQueryType[]
     */
    public function getAvailBaseQueryCriteria()
    {
        return $this->availBaseQueryCriteria;
    }

    /**
     * Sets a new availBaseQueryCriteria
     *
     * A collection of information about the locations for which availability is to be checked. It may be repeated to query availability of each individual train in multiple train segments for a specified route.
     *
     * @param \Recranet\OTA\Type\RailAvailScheduleQueryType[] $availBaseQueryCriteria
     * @return self
     */
    public function setAvailBaseQueryCriteria(array $availBaseQueryCriteria)
    {
        $this->availBaseQueryCriteria = $availBaseQueryCriteria;
        return $this;
    }

    /**
     * Adds as passengerType
     *
     * Specify passenger type/category.
     *
     * @return self
     * @param \Recranet\OTA\Type\RailPassengerCategoryType $passengerType
     */
    public function addToPassengerType(\Recranet\OTA\Type\RailPassengerCategoryType $passengerType)
    {
        $this->passengerType[] = $passengerType;
        return $this;
    }

    /**
     * isset passengerType
     *
     * Specify passenger type/category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerType($index)
    {
        return isset($this->passengerType[$index]);
    }

    /**
     * unset passengerType
     *
     * Specify passenger type/category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerType($index)
    {
        unset($this->passengerType[$index]);
    }

    /**
     * Gets as passengerType
     *
     * Specify passenger type/category.
     *
     * @return \Recranet\OTA\Type\RailPassengerCategoryType[]
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }

    /**
     * Sets a new passengerType
     *
     * Specify passenger type/category.
     *
     * @param \Recranet\OTA\Type\RailPassengerCategoryType[] $passengerType
     * @return self
     */
    public function setPassengerType(array $passengerType = null)
    {
        $this->passengerType = $passengerType;
        return $this;
    }

    /**
     * Gets as returnInfo
     *
     * Indicates the date and time search criteria for the return journey.
     *
     * @return \Recranet\OTA\Type\TravelDateTimeType
     */
    public function getReturnInfo()
    {
        return $this->returnInfo;
    }

    /**
     * Sets a new returnInfo
     *
     * Indicates the date and time search criteria for the return journey.
     *
     * @param \Recranet\OTA\Type\TravelDateTimeType $returnInfo
     * @return self
     */
    public function setReturnInfo(?\Recranet\OTA\Type\TravelDateTimeType $returnInfo = null)
    {
        $this->returnInfo = $returnInfo;
        return $this;
    }

    /**
     * Gets as railPrefs
     *
     * Specifies the preferences for the availability request.
     *
     * @return \Recranet\OTA\Type\RailAvailPrefsType
     */
    public function getRailPrefs()
    {
        return $this->railPrefs;
    }

    /**
     * Sets a new railPrefs
     *
     * Specifies the preferences for the availability request.
     *
     * @param \Recranet\OTA\Type\RailAvailPrefsType $railPrefs
     * @return self
     */
    public function setRailPrefs(?\Recranet\OTA\Type\RailAvailPrefsType $railPrefs = null)
    {
        $this->railPrefs = $railPrefs;
        return $this;
    }
}

