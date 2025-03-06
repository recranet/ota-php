<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RestaurantsType
 *
 * Provides detailed information regarding restaurants.
 * XSD Type: RestaurantsType
 */
class RestaurantsType
{
    /**
     * Identifies the total number of food and beverage outlets for a property.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Details of a specific restaurant such as type of restaurant, directions, schedules, etc.
     *
     * @var \Recranet\OTA\Type\RestaurantsType\RestaurantAType[] $restaurant
     */
    private $restaurant = [
        
    ];

    /**
     * Collection of type of restaurant offered.
     *
     * @var \Recranet\OTA\Type\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType[] $srvcInfoCodes
     */
    private $srvcInfoCodes = null;

    /**
     * Gets as quantity
     *
     * Identifies the total number of food and beverage outlets for a property.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Identifies the total number of food and beverage outlets for a property.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Adds as restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions, schedules, etc.
     *
     * @return self
     * @param \Recranet\OTA\Type\RestaurantsType\RestaurantAType $restaurant
     */
    public function addToRestaurant(\Recranet\OTA\Type\RestaurantsType\RestaurantAType $restaurant)
    {
        $this->restaurant[] = $restaurant;
        return $this;
    }

    /**
     * isset restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions, schedules, etc.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestaurant($index)
    {
        return isset($this->restaurant[$index]);
    }

    /**
     * unset restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions, schedules, etc.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestaurant($index)
    {
        unset($this->restaurant[$index]);
    }

    /**
     * Gets as restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions, schedules, etc.
     *
     * @return \Recranet\OTA\Type\RestaurantsType\RestaurantAType[]
     */
    public function getRestaurant()
    {
        return $this->restaurant;
    }

    /**
     * Sets a new restaurant
     *
     * Details of a specific restaurant such as type of restaurant, directions, schedules, etc.
     *
     * @param \Recranet\OTA\Type\RestaurantsType\RestaurantAType[] $restaurant
     * @return self
     */
    public function setRestaurant(array $restaurant = null)
    {
        $this->restaurant = $restaurant;
        return $this;
    }

    /**
     * Adds as srvcInfoCode
     *
     * Collection of type of restaurant offered.
     *
     * @return self
     * @param \Recranet\OTA\Type\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode
     */
    public function addToSrvcInfoCodes(\Recranet\OTA\Type\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode)
    {
        $this->srvcInfoCodes[] = $srvcInfoCode;
        return $this;
    }

    /**
     * isset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSrvcInfoCodes($index)
    {
        return isset($this->srvcInfoCodes[$index]);
    }

    /**
     * unset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSrvcInfoCodes($index)
    {
        unset($this->srvcInfoCodes[$index]);
    }

    /**
     * Gets as srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @return \Recranet\OTA\Type\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     */
    public function getSrvcInfoCodes()
    {
        return $this->srvcInfoCodes;
    }

    /**
     * Sets a new srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param \Recranet\OTA\Type\RestaurantsType\SrvcInfoCodesAType\SrvcInfoCodeAType[] $srvcInfoCodes
     * @return self
     */
    public function setSrvcInfoCodes(array $srvcInfoCodes = null)
    {
        $this->srvcInfoCodes = $srvcInfoCodes;
        return $this;
    }
}

