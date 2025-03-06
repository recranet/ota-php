<?php

namespace Recranet\OTA\Type\RoomRateType\FeaturesAType;

/**
 * Class representing FeatureAType
 */
class FeatureAType
{
    /**
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @var string $roomAmenity
     */
    private $roomAmenity = null;

    /**
     * Provides the quantity of the amenity in the room. When zero, the amenity is either unavailable or not allowed.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @var string $roomViewCode
     */
    private $roomViewCode = null;

    /**
     * A hotel accessibility feature. Please use a value from the OpenTravel Disability Feature Code (PHY) code list.
     *
     * @var string $accessibilityCode
     */
    private $accessibilityCode = null;

    /**
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as roomAmenity
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getRoomAmenity()
    {
        return $this->roomAmenity;
    }

    /**
     * Sets a new roomAmenity
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $roomAmenity
     * @return self
     */
    public function setRoomAmenity($roomAmenity)
    {
        $this->roomAmenity = $roomAmenity;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Provides the quantity of the amenity in the room. When zero, the amenity is either unavailable or not allowed.
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
     * Provides the quantity of the amenity in the room. When zero, the amenity is either unavailable or not allowed.
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
     * Gets as roomViewCode
     *
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @return string
     */
    public function getRoomViewCode()
    {
        return $this->roomViewCode;
    }

    /**
     * Sets a new roomViewCode
     *
     * Specifies the type of view a room has. Refer to OpenTravel Code List Room View Type (RVT).
     *
     * @param string $roomViewCode
     * @return self
     */
    public function setRoomViewCode($roomViewCode)
    {
        $this->roomViewCode = $roomViewCode;
        return $this;
    }

    /**
     * Gets as accessibilityCode
     *
     * A hotel accessibility feature. Please use a value from the OpenTravel Disability Feature Code (PHY) code list.
     *
     * @return string
     */
    public function getAccessibilityCode()
    {
        return $this->accessibilityCode;
    }

    /**
     * Sets a new accessibilityCode
     *
     * A hotel accessibility feature. Please use a value from the OpenTravel Disability Feature Code (PHY) code list.
     *
     * @param string $accessibilityCode
     * @return self
     */
    public function setAccessibilityCode($accessibilityCode)
    {
        $this->accessibilityCode = $accessibilityCode;
        return $this;
    }

    /**
     * Adds as description
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

