<?php

namespace Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType;

/**
 * Class representing DescriptionsAType
 */
class DescriptionsAType
{
    /**
     * Desription information related to the room type.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Adds as description
     *
     * Desription information related to the room type.
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
     * Desription information related to the room type.
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
     * Desription information related to the room type.
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
     * Desription information related to the room type.
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
     * Desription information related to the room type.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }
}

