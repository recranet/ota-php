<?php

namespace Recranet\OTA\HotelProductType\RoomTypesAType\RoomTypeAType\RoomTypeRefsAType;

/**
 * Class representing RoomTypeRefAType
 */
class RoomTypeRefAType
{
    /**
     * A code that uniquely identifies a room type.
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the RoomTypeCode.
     *
     * @var string $roomTypeCodeContext
     */
    private $roomTypeCodeContext = null;

    /**
     * Description information related to the room type.
     *
     * @var \Recranet\OTA\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as roomTypeCode
     *
     * A code that uniquely identifies a room type.
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
     * A code that uniquely identifies a room type.
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
     * Gets as roomTypeCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the RoomTypeCode.
     *
     * @return string
     */
    public function getRoomTypeCodeContext()
    {
        return $this->roomTypeCodeContext;
    }

    /**
     * Sets a new roomTypeCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the RoomTypeCode.
     *
     * @param string $roomTypeCodeContext
     * @return self
     */
    public function setRoomTypeCodeContext($roomTypeCodeContext)
    {
        $this->roomTypeCodeContext = $roomTypeCodeContext;
        return $this;
    }

    /**
     * Gets as description
     *
     * Description information related to the room type.
     *
     * @return \Recranet\OTA\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Description information related to the room type.
     *
     * @param \Recranet\OTA\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

