<?php

namespace Recranet\OTA\Type\OTAHotelPostEventRS\OTAHotelPostEventRSAType;

/**
 * Class representing EventReportsAType
 */
class EventReportsAType
{
    /**
     * Provides the actualized event information.
     *
     * @var \Recranet\OTA\Type\EventReportType[] $eventReport
     */
    private $eventReport = [
        
    ];

    /**
     * Adds as eventReport
     *
     * Provides the actualized event information.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventReportType $eventReport
     */
    public function addToEventReport(\Recranet\OTA\Type\EventReportType $eventReport)
    {
        $this->eventReport[] = $eventReport;
        return $this;
    }

    /**
     * isset eventReport
     *
     * Provides the actualized event information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventReport($index)
    {
        return isset($this->eventReport[$index]);
    }

    /**
     * unset eventReport
     *
     * Provides the actualized event information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventReport($index)
    {
        unset($this->eventReport[$index]);
    }

    /**
     * Gets as eventReport
     *
     * Provides the actualized event information.
     *
     * @return \Recranet\OTA\Type\EventReportType[]
     */
    public function getEventReport()
    {
        return $this->eventReport;
    }

    /**
     * Sets a new eventReport
     *
     * Provides the actualized event information.
     *
     * @param \Recranet\OTA\Type\EventReportType[] $eventReport
     * @return self
     */
    public function setEventReport(array $eventReport = null)
    {
        $this->eventReport = $eventReport;
        return $this;
    }
}

