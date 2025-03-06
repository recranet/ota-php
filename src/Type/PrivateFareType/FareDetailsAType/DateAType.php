<?php

namespace Recranet\OTA\Type\PrivateFareType\FareDetailsAType;

/**
 * Class representing DateAType
 */
class DateAType
{
    /**
     * Applicable date.
     * Example: 2013-01-13
     * Note: This is the applicable date for the purpose specified in the Type element.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Fare date type.
     * Example: LastTicketing
     *
     * @var \Recranet\OTA\Type\ListAirFareDateType $type
     */
    private $type = null;

    /**
     * Gets as date
     *
     * Applicable date.
     * Example: 2013-01-13
     * Note: This is the applicable date for the purpose specified in the Type element.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Applicable date.
     * Example: 2013-01-13
     * Note: This is the applicable date for the purpose specified in the Type element.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as type
     *
     * Fare date type.
     * Example: LastTicketing
     *
     * @return \Recranet\OTA\Type\ListAirFareDateType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Fare date type.
     * Example: LastTicketing
     *
     * @param \Recranet\OTA\Type\ListAirFareDateType $type
     * @return self
     */
    public function setType(?\Recranet\OTA\Type\ListAirFareDateType $type = null)
    {
        $this->type = $type;
        return $this;
    }
}

