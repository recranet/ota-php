<?php

namespace Recranet\OTA\Type\HotelInfoType;

/**
 * Class representing RelativePositionsAType
 */
class RelativePositionsAType
{
    /**
     * Where the hotel is in relation to/from a location.
     *
     * @var \Recranet\OTA\Type\RelativePositionType[] $relativePosition
     */
    private $relativePosition = [
        
    ];

    /**
     * Adds as relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @return self
     * @param \Recranet\OTA\Type\RelativePositionType $relativePosition
     */
    public function addToRelativePosition(\Recranet\OTA\Type\RelativePositionType $relativePosition)
    {
        $this->relativePosition[] = $relativePosition;
        return $this;
    }

    /**
     * isset relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRelativePosition($index)
    {
        return isset($this->relativePosition[$index]);
    }

    /**
     * unset relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRelativePosition($index)
    {
        unset($this->relativePosition[$index]);
    }

    /**
     * Gets as relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @return \Recranet\OTA\Type\RelativePositionType[]
     */
    public function getRelativePosition()
    {
        return $this->relativePosition;
    }

    /**
     * Sets a new relativePosition
     *
     * Where the hotel is in relation to/from a location.
     *
     * @param \Recranet\OTA\Type\RelativePositionType[] $relativePosition
     * @return self
     */
    public function setRelativePosition(array $relativePosition)
    {
        $this->relativePosition = $relativePosition;
        return $this;
    }
}

