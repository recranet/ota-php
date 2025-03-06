<?php

namespace Recranet\OTA\Type;

/**
 * Class representing InvBlockRoomType
 *
 * Used to define the room types and all of their supporting data within a room block.
 * XSD Type: InvBlockRoomType
 */
class InvBlockRoomType
{
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
     * Specfic system room type code (e.g. GENR, CONC, SUIT).
     *
     * @var string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @var \Recranet\OTA\Type\InvBlockRoomType\RoomTypeAllocationsAType[] $roomTypeAllocations
     */
    private $roomTypeAllocations = [
        
    ];

    /**
     * This allows for multiple rate plans for a specific room type.
     *
     * @var \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @var \Recranet\OTA\Type\DOWRulesType[] $daysOfWeeks
     */
    private $daysOfWeeks = null;

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
     * Gets as roomTypeCode
     *
     * Specfic system room type code (e.g. GENR, CONC, SUIT).
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
     * Specfic system room type code (e.g. GENR, CONC, SUIT).
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
     * Adds as roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockRoomType\RoomTypeAllocationsAType $roomTypeAllocations
     */
    public function addToRoomTypeAllocations(\Recranet\OTA\Type\InvBlockRoomType\RoomTypeAllocationsAType $roomTypeAllocations)
    {
        $this->roomTypeAllocations[] = $roomTypeAllocations;
        return $this;
    }

    /**
     * isset roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypeAllocations($index)
    {
        return isset($this->roomTypeAllocations[$index]);
    }

    /**
     * unset roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypeAllocations($index)
    {
        unset($this->roomTypeAllocations[$index]);
    }

    /**
     * Gets as roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @return \Recranet\OTA\Type\InvBlockRoomType\RoomTypeAllocationsAType[]
     */
    public function getRoomTypeAllocations()
    {
        return $this->roomTypeAllocations;
    }

    /**
     * Sets a new roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @param \Recranet\OTA\Type\InvBlockRoomType\RoomTypeAllocationsAType[] $roomTypeAllocations
     * @return self
     */
    public function setRoomTypeAllocations(array $roomTypeAllocations = null)
    {
        $this->roomTypeAllocations = $roomTypeAllocations;
        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @return self
     * @param \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType $ratePlan
     */
    public function addToRatePlans(\Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @return \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @param \Recranet\OTA\Type\InvBlockRoomType\RatePlansAType\RatePlanAType[] $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans = null)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }

    /**
     * Adds as daysOfWeek
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @return self
     * @param \Recranet\OTA\Type\DOWRulesType $daysOfWeek
     */
    public function addToDaysOfWeeks(\Recranet\OTA\Type\DOWRulesType $daysOfWeek)
    {
        $this->daysOfWeeks[] = $daysOfWeek;
        return $this;
    }

    /**
     * isset daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDaysOfWeeks($index)
    {
        return isset($this->daysOfWeeks[$index]);
    }

    /**
     * unset daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDaysOfWeeks($index)
    {
        unset($this->daysOfWeeks[$index]);
    }

    /**
     * Gets as daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @return \Recranet\OTA\Type\DOWRulesType[]
     */
    public function getDaysOfWeeks()
    {
        return $this->daysOfWeeks;
    }

    /**
     * Sets a new daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param \Recranet\OTA\Type\DOWRulesType[] $daysOfWeeks
     * @return self
     */
    public function setDaysOfWeeks(array $daysOfWeeks = null)
    {
        $this->daysOfWeeks = $daysOfWeeks;
        return $this;
    }
}

