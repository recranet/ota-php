<?php

namespace Recranet\OTA\EnvironmentalImpactType\RecyclingAType;

/**
 * Class representing DetailsAType
 */
class DetailsAType
{
    /**
     * Products recycled.
     * Example: Paper
     *
     * @var \Recranet\OTA\ListRecycledProductsType[] $recycledProducts
     */
    private $recycledProducts = [
        
    ];

    /**
     * Recycling facility locations.
     * Example: GuestRooms
     *
     * @var \Recranet\OTA\ListRecycleFacilityLocationType[] $recyclingLocations
     */
    private $recyclingLocations = [
        
    ];

    /**
     * Adds as recycledProducts
     *
     * Products recycled.
     * Example: Paper
     *
     * @return self
     * @param \Recranet\OTA\ListRecycledProductsType $recycledProducts
     */
    public function addToRecycledProducts(\Recranet\OTA\ListRecycledProductsType $recycledProducts)
    {
        $this->recycledProducts[] = $recycledProducts;
        return $this;
    }

    /**
     * isset recycledProducts
     *
     * Products recycled.
     * Example: Paper
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecycledProducts($index)
    {
        return isset($this->recycledProducts[$index]);
    }

    /**
     * unset recycledProducts
     *
     * Products recycled.
     * Example: Paper
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecycledProducts($index)
    {
        unset($this->recycledProducts[$index]);
    }

    /**
     * Gets as recycledProducts
     *
     * Products recycled.
     * Example: Paper
     *
     * @return \Recranet\OTA\ListRecycledProductsType[]
     */
    public function getRecycledProducts()
    {
        return $this->recycledProducts;
    }

    /**
     * Sets a new recycledProducts
     *
     * Products recycled.
     * Example: Paper
     *
     * @param \Recranet\OTA\ListRecycledProductsType[] $recycledProducts
     * @return self
     */
    public function setRecycledProducts(array $recycledProducts = null)
    {
        $this->recycledProducts = $recycledProducts;
        return $this;
    }

    /**
     * Adds as recyclingLocations
     *
     * Recycling facility locations.
     * Example: GuestRooms
     *
     * @return self
     * @param \Recranet\OTA\ListRecycleFacilityLocationType $recyclingLocations
     */
    public function addToRecyclingLocations(\Recranet\OTA\ListRecycleFacilityLocationType $recyclingLocations)
    {
        $this->recyclingLocations[] = $recyclingLocations;
        return $this;
    }

    /**
     * isset recyclingLocations
     *
     * Recycling facility locations.
     * Example: GuestRooms
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecyclingLocations($index)
    {
        return isset($this->recyclingLocations[$index]);
    }

    /**
     * unset recyclingLocations
     *
     * Recycling facility locations.
     * Example: GuestRooms
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecyclingLocations($index)
    {
        unset($this->recyclingLocations[$index]);
    }

    /**
     * Gets as recyclingLocations
     *
     * Recycling facility locations.
     * Example: GuestRooms
     *
     * @return \Recranet\OTA\ListRecycleFacilityLocationType[]
     */
    public function getRecyclingLocations()
    {
        return $this->recyclingLocations;
    }

    /**
     * Sets a new recyclingLocations
     *
     * Recycling facility locations.
     * Example: GuestRooms
     *
     * @param \Recranet\OTA\ListRecycleFacilityLocationType[] $recyclingLocations
     * @return self
     */
    public function setRecyclingLocations(array $recyclingLocations = null)
    {
        $this->recyclingLocations = $recyclingLocations;
        return $this;
    }
}

