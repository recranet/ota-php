<?php

namespace Recranet\OTA\Type;

/**
 * Class representing EventReportType
 *
 * Provides actualized event information.
 * XSD Type: EventReportType
 */
class EventReportType
{
    /**
     * Identifies the version of the report.
     *
     * @var float $version
     */
    private $version = null;

    /**
     * Time stamp of when this version of the report was completed.
     *
     * @var \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * This Reference Place Holder (RPH) is an index code used to identify an instance of the event report.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * A collection of sites utilized by the event.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType[] $eventSites
     */
    private $eventSites = null;

    /**
     * High-level information regarding the event.
     *
     * @var \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType $generalEventInfo
     */
    private $generalEventInfo = null;

    /**
     * Gets as version
     *
     * Identifies the version of the report.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * Identifies the version of the report.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * Time stamp of when this version of the report was completed.
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * Time stamp of when this version of the report was completed.
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * This Reference Place Holder (RPH) is an index code used to identify an instance of the event report.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * This Reference Place Holder (RPH) is an index code used to identify an instance of the event report.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Adds as eventSite
     *
     * A collection of sites utilized by the event.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType $eventSite
     */
    public function addToEventSites(\Recranet\OTA\Type\PostEventSiteReportType $eventSite)
    {
        $this->eventSites[] = $eventSite;
        return $this;
    }

    /**
     * isset eventSites
     *
     * A collection of sites utilized by the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventSites($index)
    {
        return isset($this->eventSites[$index]);
    }

    /**
     * unset eventSites
     *
     * A collection of sites utilized by the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventSites($index)
    {
        unset($this->eventSites[$index]);
    }

    /**
     * Gets as eventSites
     *
     * A collection of sites utilized by the event.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType[]
     */
    public function getEventSites()
    {
        return $this->eventSites;
    }

    /**
     * Sets a new eventSites
     *
     * A collection of sites utilized by the event.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType[] $eventSites
     * @return self
     */
    public function setEventSites(array $eventSites = null)
    {
        $this->eventSites = $eventSites;
        return $this;
    }

    /**
     * Gets as generalEventInfo
     *
     * High-level information regarding the event.
     *
     * @return \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType
     */
    public function getGeneralEventInfo()
    {
        return $this->generalEventInfo;
    }

    /**
     * Sets a new generalEventInfo
     *
     * High-level information regarding the event.
     *
     * @param \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType $generalEventInfo
     * @return self
     */
    public function setGeneralEventInfo(?\Recranet\OTA\Type\EventReportType\GeneralEventInfoAType $generalEventInfo = null)
    {
        $this->generalEventInfo = $generalEventInfo;
        return $this;
    }
}

