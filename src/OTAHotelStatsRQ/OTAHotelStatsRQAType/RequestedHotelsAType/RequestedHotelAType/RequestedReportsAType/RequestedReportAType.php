<?php

namespace Recranet\OTA\OTAHotelStatsRQ\OTAHotelStatsRQAType\RequestedHotelsAType\RequestedHotelAType\RequestedReportsAType;

/**
 * Class representing RequestedReportAType
 */
class RequestedReportAType
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
     * Hotel fiscal date for statistics.
     *
     * @var \DateTime $fiscalDate
     */
    private $fiscalDate = null;

    /**
     * Identifies the type of statistics collected. Each ReportCode corresponds to a set of category summaries based upon a predetermined agreement.
     *
     * @var string $reportCode
     */
    private $reportCode = null;

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
     * Gets as fiscalDate
     *
     * Hotel fiscal date for statistics.
     *
     * @return \DateTime
     */
    public function getFiscalDate()
    {
        return $this->fiscalDate;
    }

    /**
     * Sets a new fiscalDate
     *
     * Hotel fiscal date for statistics.
     *
     * @param \DateTime $fiscalDate
     * @return self
     */
    public function setFiscalDate(\DateTime $fiscalDate)
    {
        $this->fiscalDate = $fiscalDate;
        return $this;
    }

    /**
     * Gets as reportCode
     *
     * Identifies the type of statistics collected. Each ReportCode corresponds to a set of category summaries based upon a predetermined agreement.
     *
     * @return string
     */
    public function getReportCode()
    {
        return $this->reportCode;
    }

    /**
     * Sets a new reportCode
     *
     * Identifies the type of statistics collected. Each ReportCode corresponds to a set of category summaries based upon a predetermined agreement.
     *
     * @param string $reportCode
     * @return self
     */
    public function setReportCode($reportCode)
    {
        $this->reportCode = $reportCode;
        return $this;
    }
}

