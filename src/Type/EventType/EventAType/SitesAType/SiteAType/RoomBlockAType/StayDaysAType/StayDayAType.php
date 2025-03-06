<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\RoomBlockAType\StayDaysAType;

/**
 * Class representing StayDayAType
 */
class StayDayAType
{
    /**
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3). This is relative to the Start attribute in the EventInfo element.
     *
     * @var int $dayNumber
     */
    private $dayNumber = null;

    /**
     * Total number of guests for this day.
     *
     * @var int $guestQuantity
     */
    private $guestQuantity = null;

    /**
     * Total number of rooms needed for this day.
     *
     * @var int $totalNumberOfUnits
     */
    private $totalNumberOfUnits = null;

    /**
     * Gets as dayNumber
     *
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3). This is relative to the Start attribute in the EventInfo element.
     *
     * @return int
     */
    public function getDayNumber()
    {
        return $this->dayNumber;
    }

    /**
     * Sets a new dayNumber
     *
     * The number which indicates the day of the room requirements (e.g. 1, 2, 3). This is relative to the Start attribute in the EventInfo element.
     *
     * @param int $dayNumber
     * @return self
     */
    public function setDayNumber($dayNumber)
    {
        $this->dayNumber = $dayNumber;
        return $this;
    }

    /**
     * Gets as guestQuantity
     *
     * Total number of guests for this day.
     *
     * @return int
     */
    public function getGuestQuantity()
    {
        return $this->guestQuantity;
    }

    /**
     * Sets a new guestQuantity
     *
     * Total number of guests for this day.
     *
     * @param int $guestQuantity
     * @return self
     */
    public function setGuestQuantity($guestQuantity)
    {
        $this->guestQuantity = $guestQuantity;
        return $this;
    }

    /**
     * Gets as totalNumberOfUnits
     *
     * Total number of rooms needed for this day.
     *
     * @return int
     */
    public function getTotalNumberOfUnits()
    {
        return $this->totalNumberOfUnits;
    }

    /**
     * Sets a new totalNumberOfUnits
     *
     * Total number of rooms needed for this day.
     *
     * @param int $totalNumberOfUnits
     * @return self
     */
    public function setTotalNumberOfUnits($totalNumberOfUnits)
    {
        $this->totalNumberOfUnits = $totalNumberOfUnits;
        return $this;
    }
}

