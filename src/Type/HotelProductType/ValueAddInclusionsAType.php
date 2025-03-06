<?php

namespace Recranet\OTA\Type\HotelProductType;

/**
 * Class representing ValueAddInclusionsAType
 */
class ValueAddInclusionsAType
{
    /**
     * Used to identify hotel amentities that are included with a product.
     *
     * @var \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\HotelAmenityAType[] $hotelAmenity
     */
    private $hotelAmenity = [
        
    ];

    /**
     * Used to identify the types of meals included with a product.
     *
     * @var \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\MealPlanAType[] $mealPlan
     */
    private $mealPlan = [
        
    ];

    /**
     * Used to identify room amenities that are included with the product.
     *
     * @var \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomAmenityAType[] $roomAmenity
     */
    private $roomAmenity = [
        
    ];

    /**
     * Used to identify other value add inclusions that are included with the product.
     *
     * @var \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\OtherAType[] $other
     */
    private $other = [
        
    ];

    /**
     * Identifies the CheckIn and/or CheckOut time available for this product.
     *
     * @var \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomUseExtensionAType $roomUseExtension
     */
    private $roomUseExtension = null;

    /**
     * Adds as hotelAmenity
     *
     * Used to identify hotel amentities that are included with a product.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\HotelAmenityAType $hotelAmenity
     */
    public function addToHotelAmenity(\Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\HotelAmenityAType $hotelAmenity)
    {
        $this->hotelAmenity[] = $hotelAmenity;
        return $this;
    }

    /**
     * isset hotelAmenity
     *
     * Used to identify hotel amentities that are included with a product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelAmenity($index)
    {
        return isset($this->hotelAmenity[$index]);
    }

    /**
     * unset hotelAmenity
     *
     * Used to identify hotel amentities that are included with a product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelAmenity($index)
    {
        unset($this->hotelAmenity[$index]);
    }

    /**
     * Gets as hotelAmenity
     *
     * Used to identify hotel amentities that are included with a product.
     *
     * @return \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\HotelAmenityAType[]
     */
    public function getHotelAmenity()
    {
        return $this->hotelAmenity;
    }

    /**
     * Sets a new hotelAmenity
     *
     * Used to identify hotel amentities that are included with a product.
     *
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\HotelAmenityAType[] $hotelAmenity
     * @return self
     */
    public function setHotelAmenity(array $hotelAmenity = null)
    {
        $this->hotelAmenity = $hotelAmenity;
        return $this;
    }

    /**
     * Adds as mealPlan
     *
     * Used to identify the types of meals included with a product.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\MealPlanAType $mealPlan
     */
    public function addToMealPlan(\Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\MealPlanAType $mealPlan)
    {
        $this->mealPlan[] = $mealPlan;
        return $this;
    }

    /**
     * isset mealPlan
     *
     * Used to identify the types of meals included with a product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMealPlan($index)
    {
        return isset($this->mealPlan[$index]);
    }

    /**
     * unset mealPlan
     *
     * Used to identify the types of meals included with a product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMealPlan($index)
    {
        unset($this->mealPlan[$index]);
    }

    /**
     * Gets as mealPlan
     *
     * Used to identify the types of meals included with a product.
     *
     * @return \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\MealPlanAType[]
     */
    public function getMealPlan()
    {
        return $this->mealPlan;
    }

    /**
     * Sets a new mealPlan
     *
     * Used to identify the types of meals included with a product.
     *
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\MealPlanAType[] $mealPlan
     * @return self
     */
    public function setMealPlan(array $mealPlan = null)
    {
        $this->mealPlan = $mealPlan;
        return $this;
    }

    /**
     * Adds as roomAmenity
     *
     * Used to identify room amenities that are included with the product.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomAmenityAType $roomAmenity
     */
    public function addToRoomAmenity(\Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomAmenityAType $roomAmenity)
    {
        $this->roomAmenity[] = $roomAmenity;
        return $this;
    }

    /**
     * isset roomAmenity
     *
     * Used to identify room amenities that are included with the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomAmenity($index)
    {
        return isset($this->roomAmenity[$index]);
    }

    /**
     * unset roomAmenity
     *
     * Used to identify room amenities that are included with the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomAmenity($index)
    {
        unset($this->roomAmenity[$index]);
    }

    /**
     * Gets as roomAmenity
     *
     * Used to identify room amenities that are included with the product.
     *
     * @return \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomAmenityAType[]
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * Used to identify room amenities that are included with the product.
     *
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomAmenityAType[] $roomAmenity
     * @return self
     */
    public function setRoomAmenity(array $roomAmenity = null)
    {
        $this->roomAmenity = $roomAmenity;
        return $this;
    }

    /**
     * Adds as other
     *
     * Used to identify other value add inclusions that are included with the product.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\OtherAType $other
     */
    public function addToOther(\Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\OtherAType $other)
    {
        $this->other[] = $other;
        return $this;
    }

    /**
     * isset other
     *
     * Used to identify other value add inclusions that are included with the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOther($index)
    {
        return isset($this->other[$index]);
    }

    /**
     * unset other
     *
     * Used to identify other value add inclusions that are included with the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOther($index)
    {
        unset($this->other[$index]);
    }

    /**
     * Gets as other
     *
     * Used to identify other value add inclusions that are included with the product.
     *
     * @return \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\OtherAType[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * Used to identify other value add inclusions that are included with the product.
     *
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\OtherAType[] $other
     * @return self
     */
    public function setOther(array $other = null)
    {
        $this->other = $other;
        return $this;
    }

    /**
     * Gets as roomUseExtension
     *
     * Identifies the CheckIn and/or CheckOut time available for this product.
     *
     * @return \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomUseExtensionAType
     */
    public function getRoomUseExtension()
    {
        return $this->roomUseExtension;
    }

    /**
     * Sets a new roomUseExtension
     *
     * Identifies the CheckIn and/or CheckOut time available for this product.
     *
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomUseExtensionAType $roomUseExtension
     * @return self
     */
    public function setRoomUseExtension(?\Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType\RoomUseExtensionAType $roomUseExtension = null)
    {
        $this->roomUseExtension = $roomUseExtension;
        return $this;
    }
}

