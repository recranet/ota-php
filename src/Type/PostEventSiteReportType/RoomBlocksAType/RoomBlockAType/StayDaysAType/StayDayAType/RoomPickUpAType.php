<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType;

/**
 * Class representing RoomPickUpAType
 */
class RoomPickUpAType
{
    /**
     * Total number of rooms for this day.
     *
     * @var int $totalNumberOfUnits
     */
    private $totalNumberOfUnits = null;

    /**
     * Identifies a point in time on which this number of units was booked.
     *
     * @var string $pickUpParameter
     */
    private $pickUpParameter = null;

    /**
     * Gets as totalNumberOfUnits
     *
     * Total number of rooms for this day.
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
     * Total number of rooms for this day.
     *
     * @param int $totalNumberOfUnits
     * @return self
     */
    public function setTotalNumberOfUnits($totalNumberOfUnits)
    {
        $this->totalNumberOfUnits = $totalNumberOfUnits;
        return $this;
    }

    /**
     * Gets as pickUpParameter
     *
     * Identifies a point in time on which this number of units was booked.
     *
     * @return string
     */
    public function getPickUpParameter()
    {
        return $this->pickUpParameter;
    }

    /**
     * Sets a new pickUpParameter
     *
     * Identifies a point in time on which this number of units was booked.
     *
     * @param string $pickUpParameter
     * @return self
     */
    public function setPickUpParameter($pickUpParameter)
    {
        $this->pickUpParameter = $pickUpParameter;
        return $this;
    }
}

