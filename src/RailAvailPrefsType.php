<?php

namespace Recranet\OTA;

/**
 * Class representing RailAvailPrefsType
 *
 * Defines information used to express traveler preferences when requesting rail avilability information.
 * XSD Type: RailAvailPrefsType
 */
class RailAvailPrefsType
{
    /**
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @var \Recranet\OTA\CompanyNamePrefType[] $operatorPref
     */
    private $operatorPref = [
        
    ];

    /**
     * Describes any preferences in terms of the transporation that may be used in the itinerary. For example, some journies may require that a bus be used to connect between two locations. Preference may reflect inclusion or exclusion.
     *
     * @var \Recranet\OTA\RailAvailPrefsType\TransportModesAType[] $transportModes
     */
    private $transportModes = [
        
    ];

    /**
     * Passenger preferred amenities for qualifying the availability request, such as WiFi.
     *
     * @var \Recranet\OTA\RailAmenityType\RailAmenityAType[] $railAmenities
     */
    private $railAmenities = null;

    /**
     * The class of inventory controlled services available.
     *
     * @var \Recranet\OTA\ClassCodeType[] $classCodes
     */
    private $classCodes = [
        
    ];

    /**
     * Accommodations and services offered on a train.
     *
     * @var \Recranet\OTA\AccommodationCategory $accommodationCategory
     */
    private $accommodationCategory = null;

    /**
     * Adds as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @return self
     * @param \Recranet\OTA\CompanyNamePrefType $operatorPref
     */
    public function addToOperatorPref(\Recranet\OTA\CompanyNamePrefType $operatorPref)
    {
        $this->operatorPref[] = $operatorPref;
        return $this;
    }

    /**
     * isset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOperatorPref($index)
    {
        return isset($this->operatorPref[$index]);
    }

    /**
     * unset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOperatorPref($index)
    {
        unset($this->operatorPref[$index]);
    }

    /**
     * Gets as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @return \Recranet\OTA\CompanyNamePrefType[]
     */
    public function getOperatorPref()
    {
        return $this->operatorPref;
    }

    /**
     * Sets a new operatorPref
     *
     * Describes any preferences in terms of the company operating the train service. Preference may reflect inclusion or exclusion.
     *
     * @param \Recranet\OTA\CompanyNamePrefType[] $operatorPref
     * @return self
     */
    public function setOperatorPref(array $operatorPref = null)
    {
        $this->operatorPref = $operatorPref;
        return $this;
    }

    /**
     * Adds as transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the itinerary. For example, some journies may require that a bus be used to connect between two locations. Preference may reflect inclusion or exclusion.
     *
     * @return self
     * @param \Recranet\OTA\RailAvailPrefsType\TransportModesAType $transportModes
     */
    public function addToTransportModes(\Recranet\OTA\RailAvailPrefsType\TransportModesAType $transportModes)
    {
        $this->transportModes[] = $transportModes;
        return $this;
    }

    /**
     * isset transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the itinerary. For example, some journies may require that a bus be used to connect between two locations. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportModes($index)
    {
        return isset($this->transportModes[$index]);
    }

    /**
     * unset transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the itinerary. For example, some journies may require that a bus be used to connect between two locations. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportModes($index)
    {
        unset($this->transportModes[$index]);
    }

    /**
     * Gets as transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the itinerary. For example, some journies may require that a bus be used to connect between two locations. Preference may reflect inclusion or exclusion.
     *
     * @return \Recranet\OTA\RailAvailPrefsType\TransportModesAType[]
     */
    public function getTransportModes()
    {
        return $this->transportModes;
    }

    /**
     * Sets a new transportModes
     *
     * Describes any preferences in terms of the transporation that may be used in the itinerary. For example, some journies may require that a bus be used to connect between two locations. Preference may reflect inclusion or exclusion.
     *
     * @param \Recranet\OTA\RailAvailPrefsType\TransportModesAType[] $transportModes
     * @return self
     */
    public function setTransportModes(array $transportModes = null)
    {
        $this->transportModes = $transportModes;
        return $this;
    }

    /**
     * Adds as railAmenity
     *
     * Passenger preferred amenities for qualifying the availability request, such as WiFi.
     *
     * @return self
     * @param \Recranet\OTA\RailAmenityType\RailAmenityAType $railAmenity
     */
    public function addToRailAmenities(\Recranet\OTA\RailAmenityType\RailAmenityAType $railAmenity)
    {
        $this->railAmenities[] = $railAmenity;
        return $this;
    }

    /**
     * isset railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as WiFi.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRailAmenities($index)
    {
        return isset($this->railAmenities[$index]);
    }

    /**
     * unset railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as WiFi.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRailAmenities($index)
    {
        unset($this->railAmenities[$index]);
    }

    /**
     * Gets as railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as WiFi.
     *
     * @return \Recranet\OTA\RailAmenityType\RailAmenityAType[]
     */
    public function getRailAmenities()
    {
        return $this->railAmenities;
    }

    /**
     * Sets a new railAmenities
     *
     * Passenger preferred amenities for qualifying the availability request, such as WiFi.
     *
     * @param \Recranet\OTA\RailAmenityType\RailAmenityAType[] $railAmenities
     * @return self
     */
    public function setRailAmenities(array $railAmenities = null)
    {
        $this->railAmenities = $railAmenities;
        return $this;
    }

    /**
     * Adds as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return self
     * @param \Recranet\OTA\ClassCodeType $classCodes
     */
    public function addToClassCodes(\Recranet\OTA\ClassCodeType $classCodes)
    {
        $this->classCodes[] = $classCodes;
        return $this;
    }

    /**
     * isset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetClassCodes($index)
    {
        return isset($this->classCodes[$index]);
    }

    /**
     * unset classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetClassCodes($index)
    {
        unset($this->classCodes[$index]);
    }

    /**
     * Gets as classCodes
     *
     * The class of inventory controlled services available.
     *
     * @return \Recranet\OTA\ClassCodeType[]
     */
    public function getClassCodes()
    {
        return $this->classCodes;
    }

    /**
     * Sets a new classCodes
     *
     * The class of inventory controlled services available.
     *
     * @param \Recranet\OTA\ClassCodeType[] $classCodes
     * @return self
     */
    public function setClassCodes(array $classCodes = null)
    {
        $this->classCodes = $classCodes;
        return $this;
    }

    /**
     * Gets as accommodationCategory
     *
     * Accommodations and services offered on a train.
     *
     * @return \Recranet\OTA\AccommodationCategory
     */
    public function getAccommodationCategory()
    {
        return $this->accommodationCategory;
    }

    /**
     * Sets a new accommodationCategory
     *
     * Accommodations and services offered on a train.
     *
     * @param \Recranet\OTA\AccommodationCategory $accommodationCategory
     * @return self
     */
    public function setAccommodationCategory(?\Recranet\OTA\AccommodationCategory $accommodationCategory = null)
    {
        $this->accommodationCategory = $accommodationCategory;
        return $this;
    }
}

