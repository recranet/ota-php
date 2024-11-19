<?php

namespace Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType;

/**
 * Class representing AvailabilityAType
 */
class AvailabilityAType
{
    /**
     * Used to specify an availability status at the Hotel Stay level for a property.
     *
     * @var string $status
     */
    private $status = null;

    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * Restrictions pertaining to the availability.
     *
     * @var \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType[] $restriction
     */
    private $restriction = [
        
    ];

    /**
     * Gets as status
     *
     * Used to specify an availability status at the Hotel Stay level for a property.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Used to specify an availability status at the Hotel Stay level for a property.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Adds as restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType $restriction
     */
    public function addToRestriction(\Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType $restriction)
    {
        $this->restriction[] = $restriction;
        return $this;
    }

    /**
     * isset restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestriction($index)
    {
        return isset($this->restriction[$index]);
    }

    /**
     * unset restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestriction($index)
    {
        unset($this->restriction[$index]);
    }

    /**
     * Gets as restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @return \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType[]
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Restrictions pertaining to the availability.
     *
     * @param \Recranet\OTA\OTAHotelAvailRS\OTAHotelAvailRSAType\HotelStaysAType\HotelStayAType\AvailabilityAType\RestrictionAType[] $restriction
     * @return self
     */
    public function setRestriction(array $restriction = null)
    {
        $this->restriction = $restriction;
        return $this;
    }
}

