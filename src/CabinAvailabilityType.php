<?php

namespace Recranet\OTA;

/**
 * Class representing CabinAvailabilityType
 *
 * Construct for holding cabin class information, such as seat availability or meal codes. Can be up to three of these per flight segment or air leg - First, Business and Economy.
 * XSD Type: CabinAvailabilityType
 */
class CabinAvailabilityType
{
    /**
     * A section of an aircraft identified by the service level (e.g., First, Business, Economy.)
     *
     * @var string $cabinType
     */
    private $cabinType = null;

    /**
     * The total quantity of physical seats in the cabin.
     *
     * @var int $cabinCapacity
     */
    private $cabinCapacity = null;

    /**
     * Identifies any meal and/or beverage services that are provided.
     *
     * @var \Recranet\OTA\CabinAvailabilityType\MealAType[] $meal
     */
    private $meal = [
        
    ];

    /**
     * Provides the maximum weight of checked-in bags per passenger in this cabin.
     *
     * @var \Recranet\OTA\CabinAvailabilityType\BaggageAllowanceAType $baggageAllowance
     */
    private $baggageAllowance = null;

    /**
     * Identifies any entertainment services that are provided on a per cabin basis.
     *
     * @var \Recranet\OTA\CabinAvailabilityType\EntertainmentAType[] $entertainment
     */
    private $entertainment = [
        
    ];

    /**
     * Information used by an airline employee to see the flight load and make decisions regarding non-revenue travel. This information may be used in the reservation process to determine if the flight is oversold or any additional reservations could be made on this flight segment in a specific cabin.
     *
     * @var \Recranet\OTA\CabinAvailabilityType\FlightLoadInfoAType $flightLoadInfo
     */
    private $flightLoadInfo = null;

    /**
     * Gets as cabinType
     *
     * A section of an aircraft identified by the service level (e.g., First, Business, Economy.)
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
     * A section of an aircraft identified by the service level (e.g., First, Business, Economy.)
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
     * Gets as cabinCapacity
     *
     * The total quantity of physical seats in the cabin.
     *
     * @return int
     */
    public function getCabinCapacity()
    {
        return $this->cabinCapacity;
    }

    /**
     * Sets a new cabinCapacity
     *
     * The total quantity of physical seats in the cabin.
     *
     * @param int $cabinCapacity
     * @return self
     */
    public function setCabinCapacity($cabinCapacity)
    {
        $this->cabinCapacity = $cabinCapacity;
        return $this;
    }

    /**
     * Adds as meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @return self
     * @param \Recranet\OTA\CabinAvailabilityType\MealAType $meal
     */
    public function addToMeal(\Recranet\OTA\CabinAvailabilityType\MealAType $meal)
    {
        $this->meal[] = $meal;
        return $this;
    }

    /**
     * isset meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMeal($index)
    {
        return isset($this->meal[$index]);
    }

    /**
     * unset meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMeal($index)
    {
        unset($this->meal[$index]);
    }

    /**
     * Gets as meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @return \Recranet\OTA\CabinAvailabilityType\MealAType[]
     */
    public function getMeal()
    {
        return $this->meal;
    }

    /**
     * Sets a new meal
     *
     * Identifies any meal and/or beverage services that are provided.
     *
     * @param \Recranet\OTA\CabinAvailabilityType\MealAType[] $meal
     * @return self
     */
    public function setMeal(array $meal = null)
    {
        $this->meal = $meal;
        return $this;
    }

    /**
     * Gets as baggageAllowance
     *
     * Provides the maximum weight of checked-in bags per passenger in this cabin.
     *
     * @return \Recranet\OTA\CabinAvailabilityType\BaggageAllowanceAType
     */
    public function getBaggageAllowance()
    {
        return $this->baggageAllowance;
    }

    /**
     * Sets a new baggageAllowance
     *
     * Provides the maximum weight of checked-in bags per passenger in this cabin.
     *
     * @param \Recranet\OTA\CabinAvailabilityType\BaggageAllowanceAType $baggageAllowance
     * @return self
     */
    public function setBaggageAllowance(?\Recranet\OTA\CabinAvailabilityType\BaggageAllowanceAType $baggageAllowance = null)
    {
        $this->baggageAllowance = $baggageAllowance;
        return $this;
    }

    /**
     * Adds as entertainment
     *
     * Identifies any entertainment services that are provided on a per cabin basis.
     *
     * @return self
     * @param \Recranet\OTA\CabinAvailabilityType\EntertainmentAType $entertainment
     */
    public function addToEntertainment(\Recranet\OTA\CabinAvailabilityType\EntertainmentAType $entertainment)
    {
        $this->entertainment[] = $entertainment;
        return $this;
    }

    /**
     * isset entertainment
     *
     * Identifies any entertainment services that are provided on a per cabin basis.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEntertainment($index)
    {
        return isset($this->entertainment[$index]);
    }

    /**
     * unset entertainment
     *
     * Identifies any entertainment services that are provided on a per cabin basis.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEntertainment($index)
    {
        unset($this->entertainment[$index]);
    }

    /**
     * Gets as entertainment
     *
     * Identifies any entertainment services that are provided on a per cabin basis.
     *
     * @return \Recranet\OTA\CabinAvailabilityType\EntertainmentAType[]
     */
    public function getEntertainment()
    {
        return $this->entertainment;
    }

    /**
     * Sets a new entertainment
     *
     * Identifies any entertainment services that are provided on a per cabin basis.
     *
     * @param \Recranet\OTA\CabinAvailabilityType\EntertainmentAType[] $entertainment
     * @return self
     */
    public function setEntertainment(array $entertainment = null)
    {
        $this->entertainment = $entertainment;
        return $this;
    }

    /**
     * Gets as flightLoadInfo
     *
     * Information used by an airline employee to see the flight load and make decisions regarding non-revenue travel. This information may be used in the reservation process to determine if the flight is oversold or any additional reservations could be made on this flight segment in a specific cabin.
     *
     * @return \Recranet\OTA\CabinAvailabilityType\FlightLoadInfoAType
     */
    public function getFlightLoadInfo()
    {
        return $this->flightLoadInfo;
    }

    /**
     * Sets a new flightLoadInfo
     *
     * Information used by an airline employee to see the flight load and make decisions regarding non-revenue travel. This information may be used in the reservation process to determine if the flight is oversold or any additional reservations could be made on this flight segment in a specific cabin.
     *
     * @param \Recranet\OTA\CabinAvailabilityType\FlightLoadInfoAType $flightLoadInfo
     * @return self
     */
    public function setFlightLoadInfo(?\Recranet\OTA\CabinAvailabilityType\FlightLoadInfoAType $flightLoadInfo = null)
    {
        $this->flightLoadInfo = $flightLoadInfo;
        return $this;
    }
}

