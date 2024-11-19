<?php

namespace Recranet\OTA;

/**
 * Class representing RailAmenityType
 *
 * Defines preferred rail amenities, including an amenity code, quantity and/or an associated preference level.
 * XSD Type: RailAmenityType
 */
class RailAmenityType
{
    /**
     * Describes a specific amenity along with the preference for that amenity. Preference may reflect inclusion or exclusion.
     *
     * @var \Recranet\OTA\RailAmenityType\RailAmenityAType[] $railAmenity
     */
    private $railAmenity = [
        
    ];

    /**
     * Adds as railAmenity
     *
     * Describes a specific amenity along with the preference for that amenity. Preference may reflect inclusion or exclusion.
     *
     * @return self
     * @param \Recranet\OTA\RailAmenityType\RailAmenityAType $railAmenity
     */
    public function addToRailAmenity(\Recranet\OTA\RailAmenityType\RailAmenityAType $railAmenity)
    {
        $this->railAmenity[] = $railAmenity;
        return $this;
    }

    /**
     * isset railAmenity
     *
     * Describes a specific amenity along with the preference for that amenity. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRailAmenity($index)
    {
        return isset($this->railAmenity[$index]);
    }

    /**
     * unset railAmenity
     *
     * Describes a specific amenity along with the preference for that amenity. Preference may reflect inclusion or exclusion.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRailAmenity($index)
    {
        unset($this->railAmenity[$index]);
    }

    /**
     * Gets as railAmenity
     *
     * Describes a specific amenity along with the preference for that amenity. Preference may reflect inclusion or exclusion.
     *
     * @return \Recranet\OTA\RailAmenityType\RailAmenityAType[]
     */
    public function getRailAmenity()
    {
        return $this->railAmenity;
    }

    /**
     * Sets a new railAmenity
     *
     * Describes a specific amenity along with the preference for that amenity. Preference may reflect inclusion or exclusion.
     *
     * @param \Recranet\OTA\RailAmenityType\RailAmenityAType[] $railAmenity
     * @return self
     */
    public function setRailAmenity(array $railAmenity)
    {
        $this->railAmenity = $railAmenity;
        return $this;
    }
}

