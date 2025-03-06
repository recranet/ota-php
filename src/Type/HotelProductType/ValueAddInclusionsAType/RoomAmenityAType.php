<?php

namespace Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType;

/**
 * Class representing RoomAmenityAType
 */
class RoomAmenityAType
{
    /**
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @var string $roomAmenityCode
     */
    private $roomAmenityCode = null;

    /**
     * May be used to give further detail on the code.
     *
     * @var string $codeDetail
     */
    private $codeDetail = null;

    /**
     * The maximum number provided subject to guests in the room.
     *
     * @var int $maxNumberProvided
     */
    private $maxNumberProvided = null;

    /**
     * Descriptive information for the room amentiy.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as roomAmenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @return string
     */
    public function getRoomAmenityCode()
    {
        return $this->roomAmenityCode;
    }

    /**
     * Sets a new roomAmenityCode
     *
     * Refer to OpenTravel Code List Room Amenity Type (RMA).
     *
     * @param string $roomAmenityCode
     * @return self
     */
    public function setRoomAmenityCode($roomAmenityCode)
    {
        $this->roomAmenityCode = $roomAmenityCode;
        return $this;
    }

    /**
     * Gets as codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @return string
     */
    public function getCodeDetail()
    {
        return $this->codeDetail;
    }

    /**
     * Sets a new codeDetail
     *
     * May be used to give further detail on the code.
     *
     * @param string $codeDetail
     * @return self
     */
    public function setCodeDetail($codeDetail)
    {
        $this->codeDetail = $codeDetail;
        return $this;
    }

    /**
     * Gets as maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @return int
     */
    public function getMaxNumberProvided()
    {
        return $this->maxNumberProvided;
    }

    /**
     * Sets a new maxNumberProvided
     *
     * The maximum number provided subject to guests in the room.
     *
     * @param int $maxNumberProvided
     * @return self
     */
    public function setMaxNumberProvided($maxNumberProvided)
    {
        $this->maxNumberProvided = $maxNumberProvided;
        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information for the room amentiy.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information for the room amentiy.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

