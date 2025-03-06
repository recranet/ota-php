<?php

namespace Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType;

/**
 * Class representing RoomTypesAType
 */
class RoomTypesAType
{
    /**
     * When true, send all room types. When false, only send the room type(s) requested.
     *
     * @var bool $sendAllInd
     */
    private $sendAllInd = null;

    /**
     * Specifies the amount of content that should be returned in the response, such as the full details or just the unique reference.
     *
     * @var string $contentLevel
     */
    private $contentLevel = null;

    /**
     * An individual room type.
     *
     * @var \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType[] $roomType
     */
    private $roomType = [
        
    ];

    /**
     * Gets as sendAllInd
     *
     * When true, send all room types. When false, only send the room type(s) requested.
     *
     * @return bool
     */
    public function getSendAllInd()
    {
        return $this->sendAllInd;
    }

    /**
     * Sets a new sendAllInd
     *
     * When true, send all room types. When false, only send the room type(s) requested.
     *
     * @param bool $sendAllInd
     * @return self
     */
    public function setSendAllInd($sendAllInd)
    {
        $this->sendAllInd = $sendAllInd;
        return $this;
    }

    /**
     * Gets as contentLevel
     *
     * Specifies the amount of content that should be returned in the response, such as the full details or just the unique reference.
     *
     * @return string
     */
    public function getContentLevel()
    {
        return $this->contentLevel;
    }

    /**
     * Sets a new contentLevel
     *
     * Specifies the amount of content that should be returned in the response, such as the full details or just the unique reference.
     *
     * @param string $contentLevel
     * @return self
     */
    public function setContentLevel($contentLevel)
    {
        $this->contentLevel = $contentLevel;
        return $this;
    }

    /**
     * Adds as roomType
     *
     * An individual room type.
     *
     * @return self
     * @param \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType $roomType
     */
    public function addToRoomType(\Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType $roomType)
    {
        $this->roomType[] = $roomType;
        return $this;
    }

    /**
     * isset roomType
     *
     * An individual room type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomType($index)
    {
        return isset($this->roomType[$index]);
    }

    /**
     * unset roomType
     *
     * An individual room type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomType($index)
    {
        unset($this->roomType[$index]);
    }

    /**
     * Gets as roomType
     *
     * An individual room type.
     *
     * @return \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * Sets a new roomType
     *
     * An individual room type.
     *
     * @param \Recranet\OTA\Type\OTAHotelProductRQ\OTAHotelProductRQAType\HotelProductsAType\HotelProductAType\RoomTypesAType\RoomTypeAType[] $roomType
     * @return self
     */
    public function setRoomType(array $roomType = null)
    {
        $this->roomType = $roomType;
        return $this;
    }
}

