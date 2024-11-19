<?php

namespace Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType;

/**
 * Class representing RequestedReportsAType
 */
class RequestedReportsAType
{
    /**
     * Identifies a report being requested.
     *
     * @var \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType[] $requestedReport
     */
    private $requestedReport = [
        
    ];

    /**
     * Adds as requestedReport
     *
     * Identifies a report being requested.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType $requestedReport
     */
    public function addToRequestedReport(\Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType $requestedReport)
    {
        $this->requestedReport[] = $requestedReport;
        return $this;
    }

    /**
     * isset requestedReport
     *
     * Identifies a report being requested.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequestedReport($index)
    {
        return isset($this->requestedReport[$index]);
    }

    /**
     * unset requestedReport
     *
     * Identifies a report being requested.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequestedReport($index)
    {
        unset($this->requestedReport[$index]);
    }

    /**
     * Gets as requestedReport
     *
     * Identifies a report being requested.
     *
     * @return \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType[]
     */
    public function getRequestedReport()
    {
        return $this->requestedReport;
    }

    /**
     * Sets a new requestedReport
     *
     * Identifies a report being requested.
     *
     * @param \Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType\RequestedReportAType[] $requestedReport
     * @return self
     */
    public function setRequestedReport(array $requestedReport)
    {
        $this->requestedReport = $requestedReport;
        return $this;
    }
}

