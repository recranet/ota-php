<?php

namespace Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType;

use Recranet\OTA\Type\DateTimeSpanType;

/**
 * Class representing BlackoutDateAType
 */
class BlackoutDateAType extends DateTimeSpanType
{
    /**
     * A descriptive name that identifies the reason for the blackout, e.g : 2012 Olympic Games.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * A description of the Blackout Date, which may be multilingual.
     *
     * @var \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType $description
     */
    private $description = null;

    /**
     * Gets as name
     *
     * A descriptive name that identifies the reason for the blackout, e.g : 2012 Olympic Games.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * A descriptive name that identifies the reason for the blackout, e.g : 2012 Olympic Games.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as description
     *
     * A description of the Blackout Date, which may be multilingual.
     *
     * @return \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * A description of the Blackout Date, which may be multilingual.
     *
     * @param \Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType $description
     * @return self
     */
    public function setDescription(\Recranet\OTA\Type\HotelInfoType\BlackoutDatesAType\BlackoutDateAType\DescriptionAType $description)
    {
        $this->description = $description;
        return $this;
    }
}

