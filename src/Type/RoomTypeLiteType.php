<?php

namespace Recranet\OTA\Type;

/**
 * Class representing RoomTypeLiteType
 *
 * Summary version of the RoomTypeType, initially created for the Travel Itinerary Message set.
 * XSD Type: RoomTypeLiteType
 */
class RoomTypeLiteType
{
    /**
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * @var int $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * @var \Recranet\OTA\Type\ParagraphType $roomDescription
     */
    private $roomDescription = null;

    /**
     * @var \Recranet\OTA\Type\RoomAmenityPrefType[] $amenity
     */
    private $amenity = [
        
    ];

    /**
     * Gets as roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specfic system room type code, ex: A1K, A1Q etc.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;
        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * @param int $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * Gets as roomDescription
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getRoomDescription()
    {
        return $this->roomDescription;
    }

    /**
     * Sets a new roomDescription
     *
     * @param \Recranet\OTA\Type\ParagraphType $roomDescription
     * @return self
     */
    public function setRoomDescription(?\Recranet\OTA\Type\ParagraphType $roomDescription = null)
    {
        $this->roomDescription = $roomDescription;
        return $this;
    }

    /**
     * Adds as amenity
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomAmenityPrefType $amenity
     */
    public function addToAmenity(\Recranet\OTA\Type\RoomAmenityPrefType $amenity)
    {
        $this->amenity[] = $amenity;
        return $this;
    }

    /**
     * isset amenity
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * @return \Recranet\OTA\Type\RoomAmenityPrefType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * @param \Recranet\OTA\Type\RoomAmenityPrefType[] $amenity
     * @return self
     */
    public function setAmenity(array $amenity = null)
    {
        $this->amenity = $amenity;
        return $this;
    }
}

