<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType;

/**
 * Class representing StayDaysAType
 */
class StayDaysAType
{
    /**
     * This is used to identify the first day of the week based on the start date provided in the Date element.
     *
     * @var string $firstStayDayOfWeek
     */
    private $firstStayDayOfWeek = null;

    /**
     * A particular stay day.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType[] $stayDay
     */
    private $stayDay = [
        
    ];

    /**
     * Gets as firstStayDayOfWeek
     *
     * This is used to identify the first day of the week based on the start date provided in the Date element.
     *
     * @return string
     */
    public function getFirstStayDayOfWeek()
    {
        return $this->firstStayDayOfWeek;
    }

    /**
     * Sets a new firstStayDayOfWeek
     *
     * This is used to identify the first day of the week based on the start date provided in the Date element.
     *
     * @param string $firstStayDayOfWeek
     * @return self
     */
    public function setFirstStayDayOfWeek($firstStayDayOfWeek)
    {
        $this->firstStayDayOfWeek = $firstStayDayOfWeek;
        return $this;
    }

    /**
     * Adds as stayDay
     *
     * A particular stay day.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType $stayDay
     */
    public function addToStayDay(\Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType $stayDay)
    {
        $this->stayDay[] = $stayDay;
        return $this;
    }

    /**
     * isset stayDay
     *
     * A particular stay day.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetStayDay($index)
    {
        return isset($this->stayDay[$index]);
    }

    /**
     * unset stayDay
     *
     * A particular stay day.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetStayDay($index)
    {
        unset($this->stayDay[$index]);
    }

    /**
     * Gets as stayDay
     *
     * A particular stay day.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType[]
     */
    public function getStayDay()
    {
        return $this->stayDay;
    }

    /**
     * Sets a new stayDay
     *
     * A particular stay day.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType\RoomBlocksAType\RoomBlockAType\StayDaysAType\StayDayAType[] $stayDay
     * @return self
     */
    public function setStayDay(array $stayDay)
    {
        $this->stayDay = $stayDay;
        return $this;
    }
}

