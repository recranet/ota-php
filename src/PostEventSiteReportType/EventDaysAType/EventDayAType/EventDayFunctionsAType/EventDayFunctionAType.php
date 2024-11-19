<?php

namespace Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType;

/**
 * Class representing EventDayFunctionAType
 */
class EventDayFunctionAType
{
    /**
     * The name of the function.
     *
     * @var string $functionName
     */
    private $functionName = null;

    /**
     * The type of function being requested (e.g. breakfast meeting or reception). Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @var string $functionType
     */
    private $functionType = null;

    /**
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool) for the function.
     *
     * @var string $locationName
     */
    private $locationName = null;

    /**
     * The ID of the room where the function is taking place.
     *
     * @var string $locationID
     */
    private $locationID = null;

    /**
     * When true, a location is held on a 24-hour basis (e.g., ensures a set-up is not disturbed).
     *
     * @var bool $twentyFourHourHoldInd
     */
    private $twentyFourHourHoldInd = null;

    /**
     * The time the function is scheduled to begin.
     *
     * @var \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The time the function is scheduled to finish.
     *
     * @var \DateTime $endTime
     */
    private $endTime = null;

    /**
     * The number of people attending this function.
     *
     * @var int $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * The number of keys required for this function space.
     *
     * @var int $requiredKeyQuantity
     */
    private $requiredKeyQuantity = null;

    /**
     * When true, indicates the room lock needs to be rekeyed.
     *
     * @var bool $reKeyIndicator
     */
    private $reKeyIndicator = null;

    /**
     * When true, indicates the function was posted (e.g., on a reader board).
     *
     * @var bool $postIndicator
     */
    private $postIndicator = null;

    /**
     * An identifier for this function.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * When true, indicates this function was an exhibition.
     *
     * @var bool $exhibitionIndicator
     */
    private $exhibitionIndicator = null;

    /**
     * A collection of contacts associated with the function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType[] $contacts
     */
    private $contacts = null;

    /**
     * A collection of audio visual needs for a function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType $audioVisuals
     */
    private $audioVisuals = null;

    /**
     * The room setup for the function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType $roomSetup
     */
    private $roomSetup = null;

    /**
     * The start and end times for a session or show within a function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType[] $sessionTimes
     */
    private $sessionTimes = [
        
    ];

    /**
     * A collection of food and beverage details for a function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType $foodAndBeverages
     */
    private $foodAndBeverages = null;

    /**
     * A collection of services.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[] $services
     */
    private $services = null;

    /**
     * A collection of charges related to this function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[] $functionCharges
     */
    private $functionCharges = null;

    /**
     * A collection of comments associated to the function.
     *
     * @var \Recranet\OTA\ParagraphType[] $comments
     */
    private $comments = null;

    /**
     * Gets as functionName
     *
     * The name of the function.
     *
     * @return string
     */
    public function getFunctionName()
    {
        return $this->functionName;
    }

    /**
     * Sets a new functionName
     *
     * The name of the function.
     *
     * @param string $functionName
     * @return self
     */
    public function setFunctionName($functionName)
    {
        $this->functionName = $functionName;
        return $this;
    }

    /**
     * Gets as functionType
     *
     * The type of function being requested (e.g. breakfast meeting or reception). Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @return string
     */
    public function getFunctionType()
    {
        return $this->functionType;
    }

    /**
     * Sets a new functionType
     *
     * The type of function being requested (e.g. breakfast meeting or reception). Refer to OpenTravel Code table Event Charge (EVT).
     *
     * @param string $functionType
     * @return self
     */
    public function setFunctionType($functionType)
    {
        $this->functionType = $functionType;
        return $this;
    }

    /**
     * Gets as locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool) for the function.
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets a new locationName
     *
     * Identifies a location (e.g. individual hotel room, hotel lobby, exterior, pool) for the function.
     *
     * @param string $locationName
     * @return self
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;
        return $this;
    }

    /**
     * Gets as locationID
     *
     * The ID of the room where the function is taking place.
     *
     * @return string
     */
    public function getLocationID()
    {
        return $this->locationID;
    }

    /**
     * Sets a new locationID
     *
     * The ID of the room where the function is taking place.
     *
     * @param string $locationID
     * @return self
     */
    public function setLocationID($locationID)
    {
        $this->locationID = $locationID;
        return $this;
    }

    /**
     * Gets as twentyFourHourHoldInd
     *
     * When true, a location is held on a 24-hour basis (e.g., ensures a set-up is not disturbed).
     *
     * @return bool
     */
    public function getTwentyFourHourHoldInd()
    {
        return $this->twentyFourHourHoldInd;
    }

    /**
     * Sets a new twentyFourHourHoldInd
     *
     * When true, a location is held on a 24-hour basis (e.g., ensures a set-up is not disturbed).
     *
     * @param bool $twentyFourHourHoldInd
     * @return self
     */
    public function setTwentyFourHourHoldInd($twentyFourHourHoldInd)
    {
        $this->twentyFourHourHoldInd = $twentyFourHourHoldInd;
        return $this;
    }

    /**
     * Gets as startTime
     *
     * The time the function is scheduled to begin.
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
     * The time the function is scheduled to begin.
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
     * The time the function is scheduled to finish.
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
     * The time the function is scheduled to finish.
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
     * Gets as attendeeQuantity
     *
     * The number of people attending this function.
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
     * The number of people attending this function.
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
     * Gets as requiredKeyQuantity
     *
     * The number of keys required for this function space.
     *
     * @return int
     */
    public function getRequiredKeyQuantity()
    {
        return $this->requiredKeyQuantity;
    }

    /**
     * Sets a new requiredKeyQuantity
     *
     * The number of keys required for this function space.
     *
     * @param int $requiredKeyQuantity
     * @return self
     */
    public function setRequiredKeyQuantity($requiredKeyQuantity)
    {
        $this->requiredKeyQuantity = $requiredKeyQuantity;
        return $this;
    }

    /**
     * Gets as reKeyIndicator
     *
     * When true, indicates the room lock needs to be rekeyed.
     *
     * @return bool
     */
    public function getReKeyIndicator()
    {
        return $this->reKeyIndicator;
    }

    /**
     * Sets a new reKeyIndicator
     *
     * When true, indicates the room lock needs to be rekeyed.
     *
     * @param bool $reKeyIndicator
     * @return self
     */
    public function setReKeyIndicator($reKeyIndicator)
    {
        $this->reKeyIndicator = $reKeyIndicator;
        return $this;
    }

    /**
     * Gets as postIndicator
     *
     * When true, indicates the function was posted (e.g., on a reader board).
     *
     * @return bool
     */
    public function getPostIndicator()
    {
        return $this->postIndicator;
    }

    /**
     * Sets a new postIndicator
     *
     * When true, indicates the function was posted (e.g., on a reader board).
     *
     * @param bool $postIndicator
     * @return self
     */
    public function setPostIndicator($postIndicator)
    {
        $this->postIndicator = $postIndicator;
        return $this;
    }

    /**
     * Gets as iD
     *
     * An identifier for this function.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * An identifier for this function.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as exhibitionIndicator
     *
     * When true, indicates this function was an exhibition.
     *
     * @return bool
     */
    public function getExhibitionIndicator()
    {
        return $this->exhibitionIndicator;
    }

    /**
     * Sets a new exhibitionIndicator
     *
     * When true, indicates this function was an exhibition.
     *
     * @param bool $exhibitionIndicator
     * @return self
     */
    public function setExhibitionIndicator($exhibitionIndicator)
    {
        $this->exhibitionIndicator = $exhibitionIndicator;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts associated with the function.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType $contact
     */
    public function addToContacts(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts associated with the function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts associated with the function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts associated with the function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts associated with the function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ContactsAType\ContactAType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Gets as audioVisuals
     *
     * A collection of audio visual needs for a function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType
     */
    public function getAudioVisuals()
    {
        return $this->audioVisuals;
    }

    /**
     * Sets a new audioVisuals
     *
     * A collection of audio visual needs for a function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType $audioVisuals
     * @return self
     */
    public function setAudioVisuals(?\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType $audioVisuals = null)
    {
        $this->audioVisuals = $audioVisuals;
        return $this;
    }

    /**
     * Gets as roomSetup
     *
     * The room setup for the function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType
     */
    public function getRoomSetup()
    {
        return $this->roomSetup;
    }

    /**
     * Sets a new roomSetup
     *
     * The room setup for the function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType $roomSetup
     * @return self
     */
    public function setRoomSetup(?\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType $roomSetup = null)
    {
        $this->roomSetup = $roomSetup;
        return $this;
    }

    /**
     * Adds as sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType $sessionTimes
     */
    public function addToSessionTimes(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType $sessionTimes)
    {
        $this->sessionTimes[] = $sessionTimes;
        return $this;
    }

    /**
     * isset sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSessionTimes($index)
    {
        return isset($this->sessionTimes[$index]);
    }

    /**
     * unset sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSessionTimes($index)
    {
        unset($this->sessionTimes[$index]);
    }

    /**
     * Gets as sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType[]
     */
    public function getSessionTimes()
    {
        return $this->sessionTimes;
    }

    /**
     * Sets a new sessionTimes
     *
     * The start and end times for a session or show within a function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\SessionTimesAType[] $sessionTimes
     * @return self
     */
    public function setSessionTimes(array $sessionTimes = null)
    {
        $this->sessionTimes = $sessionTimes;
        return $this;
    }

    /**
     * Gets as foodAndBeverages
     *
     * A collection of food and beverage details for a function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType
     */
    public function getFoodAndBeverages()
    {
        return $this->foodAndBeverages;
    }

    /**
     * Sets a new foodAndBeverages
     *
     * A collection of food and beverage details for a function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType $foodAndBeverages
     * @return self
     */
    public function setFoodAndBeverages(?\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FoodAndBeveragesAType $foodAndBeverages = null)
    {
        $this->foodAndBeverages = $foodAndBeverages;
        return $this;
    }

    /**
     * Adds as service
     *
     * A collection of services.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType $service
     */
    public function addToServices(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType $service)
    {
        $this->services[] = $service;
        return $this;
    }

    /**
     * isset services
     *
     * A collection of services.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServices($index)
    {
        return isset($this->services[$index]);
    }

    /**
     * unset services
     *
     * A collection of services.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServices($index)
    {
        unset($this->services[$index]);
    }

    /**
     * Gets as services
     *
     * A collection of services.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Sets a new services
     *
     * A collection of services.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[] $services
     * @return self
     */
    public function setServices(array $services = null)
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Adds as functionCharge
     *
     * A collection of charges related to this function.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType $functionCharge
     */
    public function addToFunctionCharges(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType $functionCharge)
    {
        $this->functionCharges[] = $functionCharge;
        return $this;
    }

    /**
     * isset functionCharges
     *
     * A collection of charges related to this function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFunctionCharges($index)
    {
        return isset($this->functionCharges[$index]);
    }

    /**
     * unset functionCharges
     *
     * A collection of charges related to this function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFunctionCharges($index)
    {
        unset($this->functionCharges[$index]);
    }

    /**
     * Gets as functionCharges
     *
     * A collection of charges related to this function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[]
     */
    public function getFunctionCharges()
    {
        return $this->functionCharges;
    }

    /**
     * Sets a new functionCharges
     *
     * A collection of charges related to this function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[] $functionCharges
     * @return self
     */
    public function setFunctionCharges(array $functionCharges = null)
    {
        $this->functionCharges = $functionCharges;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of comments associated to the function.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $comment
     */
    public function addToComments(\Recranet\OTA\ParagraphType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of comments associated to the function.
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
     * A collection of comments associated to the function.
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
     * A collection of comments associated to the function.
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
     * A collection of comments associated to the function.
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

