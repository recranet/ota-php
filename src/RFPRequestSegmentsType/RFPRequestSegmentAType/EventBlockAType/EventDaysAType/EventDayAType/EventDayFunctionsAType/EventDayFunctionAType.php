<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType;

/**
 * Class representing EventDayFunctionAType
 */
class EventDayFunctionAType
{
    /**
     * The name of the event.
     *
     * @var string $eventName
     */
    private $eventName = null;

    /**
     * Indicates the type of event being requested (e.g. breakfast meeting or reception). Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @var string $eventType
     */
    private $eventType = null;

    /**
     * The time the event is scheduled to begin.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time the event is scheduled to finish.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * This is the numeric value associated with the measurement.
     *
     * @var float $unitOfMeasureQuantity
     */
    private $unitOfMeasureQuantity = null;

    /**
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @var string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @var string $unitOfMeasureCode
     */
    private $unitOfMeasureCode = null;

    /**
     * The number of people attending this event.
     *
     * @var int $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * Indicates the arrangement of the meeting space (e.g. conference or banquet style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @var string $roomSetup
     */
    private $roomSetup = null;

    /**
     * Indicates a room is held on a 24-hour basis (i.e., ensures a room set-up is not disturbed).
     *
     * @var bool $twentyFourHourHold
     */
    private $twentyFourHourHold = null;

    /**
     * A collection of audio visual needs for the event. APEX added
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType[] $audioVisualReqs
     */
    private $audioVisualReqs = null;

    /**
     * @var \Recranet\OTA\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Gets as eventName
     *
     * The name of the event.
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Sets a new eventName
     *
     * The name of the event.
     *
     * @param string $eventName
     * @return self
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        return $this;
    }

    /**
     * Gets as eventType
     *
     * Indicates the type of event being requested (e.g. breakfast meeting or reception). Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets a new eventType
     *
     * Indicates the type of event being requested (e.g. breakfast meeting or reception). Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @param string $eventType
     * @return self
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The time the event is scheduled to begin.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The time the event is scheduled to begin.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }

    /**
     * Gets as endTime
     *
     * The time the event is scheduled to finish.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The time the event is scheduled to finish.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    /**
     * Gets as unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @return float
     */
    public function getUnitOfMeasureQuantity()
    {
        return $this->unitOfMeasureQuantity;
    }

    /**
     * Sets a new unitOfMeasureQuantity
     *
     * This is the numeric value associated with the measurement.
     *
     * @param float $unitOfMeasureQuantity
     * @return self
     */
    public function setUnitOfMeasureQuantity($unitOfMeasureQuantity)
    {
        $this->unitOfMeasureQuantity = $unitOfMeasureQuantity;
        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the standard unit of measure name (e.g., it could be generic such as metric or imperial or specific such as inches, feet, yards, miles, millimeters, centimeters, meters, kilometers- according to usage).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets as unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @return string
     */
    public function getUnitOfMeasureCode()
    {
        return $this->unitOfMeasureCode;
    }

    /**
     * Sets a new unitOfMeasureCode
     *
     * The unit of measure in a code format (e.g., inches, pixels, centimeters). Refer to OpenTravel Code List Unit of Measure Code (UOM).
     *
     * @param string $unitOfMeasureCode
     * @return self
     */
    public function setUnitOfMeasureCode($unitOfMeasureCode)
    {
        $this->unitOfMeasureCode = $unitOfMeasureCode;
        return $this;
    }

    /**
     * Gets as attendeeQuantity
     *
     * The number of people attending this event.
     *
     * @return int
     */
    public function getAttendeeQuantity()
    {
        return $this->attendeeQuantity;
    }

    /**
     * Sets a new attendeeQuantity
     *
     * The number of people attending this event.
     *
     * @param int $attendeeQuantity
     * @return self
     */
    public function setAttendeeQuantity($attendeeQuantity)
    {
        $this->attendeeQuantity = $attendeeQuantity;
        return $this;
    }

    /**
     * Gets as roomSetup
     *
     * Indicates the arrangement of the meeting space (e.g. conference or banquet style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @return string
     */
    public function getRoomSetup()
    {
        return $this->roomSetup;
    }

    /**
     * Sets a new roomSetup
     *
     * Indicates the arrangement of the meeting space (e.g. conference or banquet style). Refer to OpenTravel Code List Meeting Room Format Code (MRF).
     *
     * @param string $roomSetup
     * @return self
     */
    public function setRoomSetup($roomSetup)
    {
        $this->roomSetup = $roomSetup;
        return $this;
    }

    /**
     * Gets as twentyFourHourHold
     *
     * Indicates a room is held on a 24-hour basis (i.e., ensures a room set-up is not disturbed).
     *
     * @return bool
     */
    public function getTwentyFourHourHold()
    {
        return $this->twentyFourHourHold;
    }

    /**
     * Sets a new twentyFourHourHold
     *
     * Indicates a room is held on a 24-hour basis (i.e., ensures a room set-up is not disturbed).
     *
     * @param bool $twentyFourHourHold
     * @return self
     */
    public function setTwentyFourHourHold($twentyFourHourHold)
    {
        $this->twentyFourHourHold = $twentyFourHourHold;
        return $this;
    }

    /**
     * Adds as audioVisualReq
     *
     * A collection of audio visual needs for the event. APEX added
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType $audioVisualReq
     */
    public function addToAudioVisualReqs(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType $audioVisualReq)
    {
        $this->audioVisualReqs[] = $audioVisualReq;
        return $this;
    }

    /**
     * isset audioVisualReqs
     *
     * A collection of audio visual needs for the event. APEX added
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAudioVisualReqs($index)
    {
        return isset($this->audioVisualReqs[$index]);
    }

    /**
     * unset audioVisualReqs
     *
     * A collection of audio visual needs for the event. APEX added
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAudioVisualReqs($index)
    {
        unset($this->audioVisualReqs[$index]);
    }

    /**
     * Gets as audioVisualReqs
     *
     * A collection of audio visual needs for the event. APEX added
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType[]
     */
    public function getAudioVisualReqs()
    {
        return $this->audioVisualReqs;
    }

    /**
     * Sets a new audioVisualReqs
     *
     * A collection of audio visual needs for the event. APEX added
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType[] $audioVisualReqs
     * @return self
     */
    public function setAudioVisualReqs(array $audioVisualReqs = null)
    {
        $this->audioVisualReqs = $audioVisualReqs;
        return $this;
    }

    /**
     * Gets as comments
     *
     * @return \Recranet\OTA\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param \Recranet\OTA\ParagraphType $comments
     * @return self
     */
    public function setComments(?\Recranet\OTA\ParagraphType $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

