<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType;

/**
 * Class representing HistoryAType
 */
class HistoryAType
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
     * The name of the previous meeting for which data is being provided.
     *
     * @var string $meetingName
     */
    private $meetingName = null;

    /**
     * The site where the previous meeting was held.
     *
     * @var string $siteName
     */
    private $siteName = null;

    /**
     * The number of people attending the previous event.
     *
     * @var int $attendeeQuantity
     */
    private $attendeeQuantity = null;

    /**
     * The number of rooms previously requested.
     *
     * @var int $roomBlockQuantity
     */
    private $roomBlockQuantity = null;

    /**
     * The number of rooms actualized by the previous event.
     *
     * @var int $roomPickupQuantity
     */
    private $roomPickupQuantity = null;

    /**
     * The monetary value expended for the previous event on rooms.
     *
     * @var float $totalGuestRoomAmount
     */
    private $totalGuestRoomAmount = null;

    /**
     * The monetary value expended for the previous event on food and beverage, etc.
     *
     * @var float $totalFoodAndBevAmount
     */
    private $totalFoodAndBevAmount = null;

    /**
     * The monetary value expended for the previous event on meeting space.
     *
     * @var float $totalMeetingRoomRentalAmount
     */
    private $totalMeetingRoomRentalAmount = null;

    /**
     * The monetary value expended for the previous event on audio visual equipment rental.
     *
     * @var float $totalAudioVisualRentalAmount
     */
    private $totalAudioVisualRentalAmount = null;

    /**
     * The monetary value expended for the previous event on all other goods and services.
     *
     * @var float $totalMiscAmount
     */
    private $totalMiscAmount = null;

    /**
     * If true, a report exists. If false, a report does not exist.
     *
     * @var bool $postEventReportExistsInd
     */
    private $postEventReportExistsInd = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * This is used to identify the previous room block and/or meeting space information.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * A collection of previous contacts (e.g. a catering manager, national sales office, management company, franchisee, etc.)
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * A collection of DaySummaries.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[] $daySummaries
     */
    private $daySummaries = null;

    /**
     * An open field to comment on the previous event.
     *
     * @var \Recranet\OTA\Type\ParagraphType $comments
     */
    private $comments = null;

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
     * Gets as meetingName
     *
     * The name of the previous meeting for which data is being provided.
     *
     * @return string
     */
    public function getMeetingName()
    {
        return $this->meetingName;
    }

    /**
     * Sets a new meetingName
     *
     * The name of the previous meeting for which data is being provided.
     *
     * @param string $meetingName
     * @return self
     */
    public function setMeetingName($meetingName)
    {
        $this->meetingName = $meetingName;
        return $this;
    }

    /**
     * Gets as siteName
     *
     * The site where the previous meeting was held.
     *
     * @return string
     */
    public function getSiteName()
    {
        return $this->siteName;
    }

    /**
     * Sets a new siteName
     *
     * The site where the previous meeting was held.
     *
     * @param string $siteName
     * @return self
     */
    public function setSiteName($siteName)
    {
        $this->siteName = $siteName;
        return $this;
    }

    /**
     * Gets as attendeeQuantity
     *
     * The number of people attending the previous event.
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
     * The number of people attending the previous event.
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
     * Gets as roomBlockQuantity
     *
     * The number of rooms previously requested.
     *
     * @return int
     */
    public function getRoomBlockQuantity()
    {
        return $this->roomBlockQuantity;
    }

    /**
     * Sets a new roomBlockQuantity
     *
     * The number of rooms previously requested.
     *
     * @param int $roomBlockQuantity
     * @return self
     */
    public function setRoomBlockQuantity($roomBlockQuantity)
    {
        $this->roomBlockQuantity = $roomBlockQuantity;
        return $this;
    }

    /**
     * Gets as roomPickupQuantity
     *
     * The number of rooms actualized by the previous event.
     *
     * @return int
     */
    public function getRoomPickupQuantity()
    {
        return $this->roomPickupQuantity;
    }

    /**
     * Sets a new roomPickupQuantity
     *
     * The number of rooms actualized by the previous event.
     *
     * @param int $roomPickupQuantity
     * @return self
     */
    public function setRoomPickupQuantity($roomPickupQuantity)
    {
        $this->roomPickupQuantity = $roomPickupQuantity;
        return $this;
    }

    /**
     * Gets as totalGuestRoomAmount
     *
     * The monetary value expended for the previous event on rooms.
     *
     * @return float
     */
    public function getTotalGuestRoomAmount()
    {
        return $this->totalGuestRoomAmount;
    }

    /**
     * Sets a new totalGuestRoomAmount
     *
     * The monetary value expended for the previous event on rooms.
     *
     * @param float $totalGuestRoomAmount
     * @return self
     */
    public function setTotalGuestRoomAmount($totalGuestRoomAmount)
    {
        $this->totalGuestRoomAmount = $totalGuestRoomAmount;
        return $this;
    }

    /**
     * Gets as totalFoodAndBevAmount
     *
     * The monetary value expended for the previous event on food and beverage, etc.
     *
     * @return float
     */
    public function getTotalFoodAndBevAmount()
    {
        return $this->totalFoodAndBevAmount;
    }

    /**
     * Sets a new totalFoodAndBevAmount
     *
     * The monetary value expended for the previous event on food and beverage, etc.
     *
     * @param float $totalFoodAndBevAmount
     * @return self
     */
    public function setTotalFoodAndBevAmount($totalFoodAndBevAmount)
    {
        $this->totalFoodAndBevAmount = $totalFoodAndBevAmount;
        return $this;
    }

    /**
     * Gets as totalMeetingRoomRentalAmount
     *
     * The monetary value expended for the previous event on meeting space.
     *
     * @return float
     */
    public function getTotalMeetingRoomRentalAmount()
    {
        return $this->totalMeetingRoomRentalAmount;
    }

    /**
     * Sets a new totalMeetingRoomRentalAmount
     *
     * The monetary value expended for the previous event on meeting space.
     *
     * @param float $totalMeetingRoomRentalAmount
     * @return self
     */
    public function setTotalMeetingRoomRentalAmount($totalMeetingRoomRentalAmount)
    {
        $this->totalMeetingRoomRentalAmount = $totalMeetingRoomRentalAmount;
        return $this;
    }

    /**
     * Gets as totalAudioVisualRentalAmount
     *
     * The monetary value expended for the previous event on audio visual equipment rental.
     *
     * @return float
     */
    public function getTotalAudioVisualRentalAmount()
    {
        return $this->totalAudioVisualRentalAmount;
    }

    /**
     * Sets a new totalAudioVisualRentalAmount
     *
     * The monetary value expended for the previous event on audio visual equipment rental.
     *
     * @param float $totalAudioVisualRentalAmount
     * @return self
     */
    public function setTotalAudioVisualRentalAmount($totalAudioVisualRentalAmount)
    {
        $this->totalAudioVisualRentalAmount = $totalAudioVisualRentalAmount;
        return $this;
    }

    /**
     * Gets as totalMiscAmount
     *
     * The monetary value expended for the previous event on all other goods and services.
     *
     * @return float
     */
    public function getTotalMiscAmount()
    {
        return $this->totalMiscAmount;
    }

    /**
     * Sets a new totalMiscAmount
     *
     * The monetary value expended for the previous event on all other goods and services.
     *
     * @param float $totalMiscAmount
     * @return self
     */
    public function setTotalMiscAmount($totalMiscAmount)
    {
        $this->totalMiscAmount = $totalMiscAmount;
        return $this;
    }

    /**
     * Gets as postEventReportExistsInd
     *
     * If true, a report exists. If false, a report does not exist.
     *
     * @return bool
     */
    public function getPostEventReportExistsInd()
    {
        return $this->postEventReportExistsInd;
    }

    /**
     * Sets a new postEventReportExistsInd
     *
     * If true, a report exists. If false, a report does not exist.
     *
     * @param bool $postEventReportExistsInd
     * @return self
     */
    public function setPostEventReportExistsInd($postEventReportExistsInd)
    {
        $this->postEventReportExistsInd = $postEventReportExistsInd;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return int
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     * Implementer: The ISO 4217 standard "minor unit" is typically used when the amount provided includes the minor unit of currency without a decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param int $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * This is used to identify the previous room block and/or meeting space information.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * This is used to identify the previous room block and/or meeting space information.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\Type\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * A collection of previous contacts (e.g. a catering manager, national sales office, management company, franchisee, etc.)
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contactInfo
     */
    public function addToContactInfos(\Recranet\OTA\Type\ContactPersonType $contactInfo)
    {
        $this->contactInfos[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfos
     *
     * A collection of previous contacts (e.g. a catering manager, national sales office, management company, franchisee, etc.)
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactInfos($index)
    {
        return isset($this->contactInfos[$index]);
    }

    /**
     * unset contactInfos
     *
     * A collection of previous contacts (e.g. a catering manager, national sales office, management company, franchisee, etc.)
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactInfos($index)
    {
        unset($this->contactInfos[$index]);
    }

    /**
     * Gets as contactInfos
     *
     * A collection of previous contacts (e.g. a catering manager, national sales office, management company, franchisee, etc.)
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * A collection of previous contacts (e.g. a catering manager, national sales office, management company, franchisee, etc.)
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contactInfos
     * @return self
     */
    public function setContactInfos(array $contactInfos = null)
    {
        $this->contactInfos = $contactInfos;
        return $this;
    }

    /**
     * Adds as daySummary
     *
     * A collection of DaySummaries.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType $daySummary
     */
    public function addToDaySummaries(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType $daySummary)
    {
        $this->daySummaries[] = $daySummary;
        return $this;
    }

    /**
     * isset daySummaries
     *
     * A collection of DaySummaries.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDaySummaries($index)
    {
        return isset($this->daySummaries[$index]);
    }

    /**
     * unset daySummaries
     *
     * A collection of DaySummaries.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDaySummaries($index)
    {
        unset($this->daySummaries[$index]);
    }

    /**
     * Gets as daySummaries
     *
     * A collection of DaySummaries.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[]
     */
    public function getDaySummaries()
    {
        return $this->daySummaries;
    }

    /**
     * Sets a new daySummaries
     *
     * A collection of DaySummaries.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\HistoriesAType\HistoryAType\DaySummariesAType\DaySummaryAType[] $daySummaries
     * @return self
     */
    public function setDaySummaries(array $daySummaries = null)
    {
        $this->daySummaries = $daySummaries;
        return $this;
    }

    /**
     * Gets as comments
     *
     * An open field to comment on the previous event.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * An open field to comment on the previous event.
     *
     * @param \Recranet\OTA\Type\ParagraphType $comments
     * @return self
     */
    public function setComments(?\Recranet\OTA\Type\ParagraphType $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

