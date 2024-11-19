<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing EventBlockAType
 */
class EventBlockAType
{
    /**
     * Specifies the type of event. Refer to OpenTravel Code table Event Type Code List.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Used to identify the market segment for the meeting. Refer to OpenTravel Code Table Inventory Block Type (IBT).
     *
     * @var string $marketSegmentCode
     */
    private $marketSegmentCode = null;

    /**
     * If true, the event is definite (i.e., the event is budgeted). If false, the event is potential (i.e., the event is not yet budgeted).
     *
     * @var bool $definiteIndicator
     */
    private $definiteIndicator = null;

    /**
     * Used to indicate the frequency of this event.
     *
     * @var string $frequency
     */
    private $frequency = null;

    /**
     * This is the expected total attendance at the event.
     *
     * @var int $expectedTotalAttendanceQuantity
     */
    private $expectedTotalAttendanceQuantity = null;

    /**
     * If true, indicates this is a first time event. If false, indicates this event has taken place previously.
     *
     * @var bool $firstTimeIndicator
     */
    private $firstTimeIndicator = null;

    /**
     * If true, future open dates exist for this event. If false, no future dates exist for this event.
     *
     * @var bool $futureOpenDatesIndicator
     */
    private $futureOpenDatesIndicator = null;

    /**
     * When true, indicates this event will include an exhibition component. When false, an exhibition will not be a part of this event.
     *
     * @var bool $exhibitionIncludedIndicator
     */
    private $exhibitionIncludedIndicator = null;

    /**
     * This is used to identify the event in the request.
     *
     * @var string $eventName
     */
    private $eventName = null;

    /**
     * Used to define requirements for function space for the event.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType $functionSpaceReq
     */
    private $functionSpaceReq = null;

    /**
     * A general indication of the planner's budget for the event.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType[] $eventBudget
     */
    private $eventBudget = [
        
    ];

    /**
     * A collection of multiple EventDays.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType $eventDays
     */
    private $eventDays = null;

    /**
     * Describes an event at which products and services are displayed, typically the primary activity of attendees is visiting exhibits on the show floor.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType[] $exhibition
     */
    private $exhibition = [
        
    ];

    /**
     * An open field to comment on the event block.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = [
        
    ];

    /**
     * Gets as type
     *
     * Specifies the type of event. Refer to OpenTravel Code table Event Type Code List.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies the type of event. Refer to OpenTravel Code table Event Type Code List.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as marketSegmentCode
     *
     * Used to identify the market segment for the meeting. Refer to OpenTravel Code Table Inventory Block Type (IBT).
     *
     * @return string
     */
    public function getMarketSegmentCode()
    {
        return $this->marketSegmentCode;
    }

    /**
     * Sets a new marketSegmentCode
     *
     * Used to identify the market segment for the meeting. Refer to OpenTravel Code Table Inventory Block Type (IBT).
     *
     * @param string $marketSegmentCode
     * @return self
     */
    public function setMarketSegmentCode($marketSegmentCode)
    {
        $this->marketSegmentCode = $marketSegmentCode;
        return $this;
    }

    /**
     * Gets as definiteIndicator
     *
     * If true, the event is definite (i.e., the event is budgeted). If false, the event is potential (i.e., the event is not yet budgeted).
     *
     * @return bool
     */
    public function getDefiniteIndicator()
    {
        return $this->definiteIndicator;
    }

    /**
     * Sets a new definiteIndicator
     *
     * If true, the event is definite (i.e., the event is budgeted). If false, the event is potential (i.e., the event is not yet budgeted).
     *
     * @param bool $definiteIndicator
     * @return self
     */
    public function setDefiniteIndicator($definiteIndicator)
    {
        $this->definiteIndicator = $definiteIndicator;
        return $this;
    }

    /**
     * Gets as frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Used to indicate the frequency of this event.
     *
     * @param string $frequency
     * @return self
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * Gets as expectedTotalAttendanceQuantity
     *
     * This is the expected total attendance at the event.
     *
     * @return int
     */
    public function getExpectedTotalAttendanceQuantity()
    {
        return $this->expectedTotalAttendanceQuantity;
    }

    /**
     * Sets a new expectedTotalAttendanceQuantity
     *
     * This is the expected total attendance at the event.
     *
     * @param int $expectedTotalAttendanceQuantity
     * @return self
     */
    public function setExpectedTotalAttendanceQuantity($expectedTotalAttendanceQuantity)
    {
        $this->expectedTotalAttendanceQuantity = $expectedTotalAttendanceQuantity;
        return $this;
    }

    /**
     * Gets as firstTimeIndicator
     *
     * If true, indicates this is a first time event. If false, indicates this event has taken place previously.
     *
     * @return bool
     */
    public function getFirstTimeIndicator()
    {
        return $this->firstTimeIndicator;
    }

    /**
     * Sets a new firstTimeIndicator
     *
     * If true, indicates this is a first time event. If false, indicates this event has taken place previously.
     *
     * @param bool $firstTimeIndicator
     * @return self
     */
    public function setFirstTimeIndicator($firstTimeIndicator)
    {
        $this->firstTimeIndicator = $firstTimeIndicator;
        return $this;
    }

    /**
     * Gets as futureOpenDatesIndicator
     *
     * If true, future open dates exist for this event. If false, no future dates exist for this event.
     *
     * @return bool
     */
    public function getFutureOpenDatesIndicator()
    {
        return $this->futureOpenDatesIndicator;
    }

    /**
     * Sets a new futureOpenDatesIndicator
     *
     * If true, future open dates exist for this event. If false, no future dates exist for this event.
     *
     * @param bool $futureOpenDatesIndicator
     * @return self
     */
    public function setFutureOpenDatesIndicator($futureOpenDatesIndicator)
    {
        $this->futureOpenDatesIndicator = $futureOpenDatesIndicator;
        return $this;
    }

    /**
     * Gets as exhibitionIncludedIndicator
     *
     * When true, indicates this event will include an exhibition component. When false, an exhibition will not be a part of this event.
     *
     * @return bool
     */
    public function getExhibitionIncludedIndicator()
    {
        return $this->exhibitionIncludedIndicator;
    }

    /**
     * Sets a new exhibitionIncludedIndicator
     *
     * When true, indicates this event will include an exhibition component. When false, an exhibition will not be a part of this event.
     *
     * @param bool $exhibitionIncludedIndicator
     * @return self
     */
    public function setExhibitionIncludedIndicator($exhibitionIncludedIndicator)
    {
        $this->exhibitionIncludedIndicator = $exhibitionIncludedIndicator;
        return $this;
    }

    /**
     * Gets as eventName
     *
     * This is used to identify the event in the request.
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
     * This is used to identify the event in the request.
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
     * Gets as functionSpaceReq
     *
     * Used to define requirements for function space for the event.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType
     */
    public function getFunctionSpaceReq()
    {
        return $this->functionSpaceReq;
    }

    /**
     * Sets a new functionSpaceReq
     *
     * Used to define requirements for function space for the event.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType $functionSpaceReq
     * @return self
     */
    public function setFunctionSpaceReq(?\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\FunctionSpaceReqAType $functionSpaceReq = null)
    {
        $this->functionSpaceReq = $functionSpaceReq;
        return $this;
    }

    /**
     * Adds as eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType $eventBudget
     */
    public function addToEventBudget(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType $eventBudget)
    {
        $this->eventBudget[] = $eventBudget;
        return $this;
    }

    /**
     * isset eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEventBudget($index)
    {
        return isset($this->eventBudget[$index]);
    }

    /**
     * unset eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEventBudget($index)
    {
        unset($this->eventBudget[$index]);
    }

    /**
     * Gets as eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType[]
     */
    public function getEventBudget()
    {
        return $this->eventBudget;
    }

    /**
     * Sets a new eventBudget
     *
     * A general indication of the planner's budget for the event.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventBudgetAType[] $eventBudget
     * @return self
     */
    public function setEventBudget(array $eventBudget = null)
    {
        $this->eventBudget = $eventBudget;
        return $this;
    }

    /**
     * Gets as eventDays
     *
     * A collection of multiple EventDays.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType
     */
    public function getEventDays()
    {
        return $this->eventDays;
    }

    /**
     * Sets a new eventDays
     *
     * A collection of multiple EventDays.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType $eventDays
     * @return self
     */
    public function setEventDays(?\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType $eventDays = null)
    {
        $this->eventDays = $eventDays;
        return $this;
    }

    /**
     * Adds as exhibition
     *
     * Describes an event at which products and services are displayed, typically the primary activity of attendees is visiting exhibits on the show floor.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType $exhibition
     */
    public function addToExhibition(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType $exhibition)
    {
        $this->exhibition[] = $exhibition;
        return $this;
    }

    /**
     * isset exhibition
     *
     * Describes an event at which products and services are displayed, typically the primary activity of attendees is visiting exhibits on the show floor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetExhibition($index)
    {
        return isset($this->exhibition[$index]);
    }

    /**
     * unset exhibition
     *
     * Describes an event at which products and services are displayed, typically the primary activity of attendees is visiting exhibits on the show floor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetExhibition($index)
    {
        unset($this->exhibition[$index]);
    }

    /**
     * Gets as exhibition
     *
     * Describes an event at which products and services are displayed, typically the primary activity of attendees is visiting exhibits on the show floor.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType[]
     */
    public function getExhibition()
    {
        return $this->exhibition;
    }

    /**
     * Sets a new exhibition
     *
     * Describes an event at which products and services are displayed, typically the primary activity of attendees is visiting exhibits on the show floor.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\ExhibitionAType[] $exhibition
     * @return self
     */
    public function setExhibition(array $exhibition = null)
    {
        $this->exhibition = $exhibition;
        return $this;
    }

    /**
     * Adds as comments
     *
     * An open field to comment on the event block.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comments
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comments)
    {
        $this->comments[] = $comments;
        return $this;
    }

    /**
     * isset comments
     *
     * An open field to comment on the event block.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * An open field to comment on the event block.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * An open field to comment on the event block.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * An open field to comment on the event block.
     *
     * @param \Recranet\OTA\ParagraphType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

