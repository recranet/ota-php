<?php

namespace Recranet\OTA\Type\EnvironmentalImpactType;

/**
 * Class representing CarbonFootprintAType
 */
class CarbonFootprintAType
{
    /**
     * Non-carbon impact measured indicator.
     * Example: true
     * Implementer: If true, the property measures the impact of its non-carbon emitting environmental measures.
     *
     * @var bool $nonCarbonMeasureInd
     */
    private $nonCarbonMeasureInd = null;

    /**
     * Non-carbon measurement method.
     * Implementer: This describes how the property assesses the impact of its non-carbon emitting environmental measures.
     *
     * @var string $nonCarbonMeasureDesc
     */
    private $nonCarbonMeasureDesc = null;

    /**
     * Meeting/ event carbon dioxide pound(s).
     * Example: 633
     * Implementer: This is the carbon factor of a meeting or event expressed in pounds of carbon dioxide.
     *
     * @var int $meetingEvent
     */
    private $meetingEvent = null;

    /**
     * Room night carbon dioxide pound(s).
     * Example: 33
     * Implementer: This is the carbon factor of a room per night expressed in pounds of carbon dioxide.
     *
     * @var int $roomNight
     */
    private $roomNight = null;

    /**
     * Weather-normalized carbon dioxide pound(s).
     * Example: 525
     * Implementer: This is the weather-normalized carbon footprint expressed in pounds of carbon dioxide.
     *
     * @var int $weatherNormalized
     */
    private $weatherNormalized = null;

    /**
     * Carbon unit of measure.
     * Example: Gallon(s)
     *
     * @var \Recranet\OTA\Type\ListUnitOfMeasureType $carbonUOM
     */
    private $carbonUOM = null;

    /**
     * Gets as nonCarbonMeasureInd
     *
     * Non-carbon impact measured indicator.
     * Example: true
     * Implementer: If true, the property measures the impact of its non-carbon emitting environmental measures.
     *
     * @return bool
     */
    public function getNonCarbonMeasureInd()
    {
        return $this->nonCarbonMeasureInd;
    }

    /**
     * Sets a new nonCarbonMeasureInd
     *
     * Non-carbon impact measured indicator.
     * Example: true
     * Implementer: If true, the property measures the impact of its non-carbon emitting environmental measures.
     *
     * @param bool $nonCarbonMeasureInd
     * @return self
     */
    public function setNonCarbonMeasureInd($nonCarbonMeasureInd)
    {
        $this->nonCarbonMeasureInd = $nonCarbonMeasureInd;
        return $this;
    }

    /**
     * Gets as nonCarbonMeasureDesc
     *
     * Non-carbon measurement method.
     * Implementer: This describes how the property assesses the impact of its non-carbon emitting environmental measures.
     *
     * @return string
     */
    public function getNonCarbonMeasureDesc()
    {
        return $this->nonCarbonMeasureDesc;
    }

    /**
     * Sets a new nonCarbonMeasureDesc
     *
     * Non-carbon measurement method.
     * Implementer: This describes how the property assesses the impact of its non-carbon emitting environmental measures.
     *
     * @param string $nonCarbonMeasureDesc
     * @return self
     */
    public function setNonCarbonMeasureDesc($nonCarbonMeasureDesc)
    {
        $this->nonCarbonMeasureDesc = $nonCarbonMeasureDesc;
        return $this;
    }

    /**
     * Gets as meetingEvent
     *
     * Meeting/ event carbon dioxide pound(s).
     * Example: 633
     * Implementer: This is the carbon factor of a meeting or event expressed in pounds of carbon dioxide.
     *
     * @return int
     */
    public function getMeetingEvent()
    {
        return $this->meetingEvent;
    }

    /**
     * Sets a new meetingEvent
     *
     * Meeting/ event carbon dioxide pound(s).
     * Example: 633
     * Implementer: This is the carbon factor of a meeting or event expressed in pounds of carbon dioxide.
     *
     * @param int $meetingEvent
     * @return self
     */
    public function setMeetingEvent($meetingEvent)
    {
        $this->meetingEvent = $meetingEvent;
        return $this;
    }

    /**
     * Gets as roomNight
     *
     * Room night carbon dioxide pound(s).
     * Example: 33
     * Implementer: This is the carbon factor of a room per night expressed in pounds of carbon dioxide.
     *
     * @return int
     */
    public function getRoomNight()
    {
        return $this->roomNight;
    }

    /**
     * Sets a new roomNight
     *
     * Room night carbon dioxide pound(s).
     * Example: 33
     * Implementer: This is the carbon factor of a room per night expressed in pounds of carbon dioxide.
     *
     * @param int $roomNight
     * @return self
     */
    public function setRoomNight($roomNight)
    {
        $this->roomNight = $roomNight;
        return $this;
    }

    /**
     * Gets as weatherNormalized
     *
     * Weather-normalized carbon dioxide pound(s).
     * Example: 525
     * Implementer: This is the weather-normalized carbon footprint expressed in pounds of carbon dioxide.
     *
     * @return int
     */
    public function getWeatherNormalized()
    {
        return $this->weatherNormalized;
    }

    /**
     * Sets a new weatherNormalized
     *
     * Weather-normalized carbon dioxide pound(s).
     * Example: 525
     * Implementer: This is the weather-normalized carbon footprint expressed in pounds of carbon dioxide.
     *
     * @param int $weatherNormalized
     * @return self
     */
    public function setWeatherNormalized($weatherNormalized)
    {
        $this->weatherNormalized = $weatherNormalized;
        return $this;
    }

    /**
     * Gets as carbonUOM
     *
     * Carbon unit of measure.
     * Example: Gallon(s)
     *
     * @return \Recranet\OTA\Type\ListUnitOfMeasureType
     */
    public function getCarbonUOM()
    {
        return $this->carbonUOM;
    }

    /**
     * Sets a new carbonUOM
     *
     * Carbon unit of measure.
     * Example: Gallon(s)
     *
     * @param \Recranet\OTA\Type\ListUnitOfMeasureType $carbonUOM
     * @return self
     */
    public function setCarbonUOM(?\Recranet\OTA\Type\ListUnitOfMeasureType $carbonUOM = null)
    {
        $this->carbonUOM = $carbonUOM;
        return $this;
    }
}

