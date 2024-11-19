<?php

namespace Recranet\OTA;

/**
 * Class representing AvailStatusMessageType
 *
 *
 * XSD Type: AvailStatusMessageType
 */
class AvailStatusMessageType
{
    /**
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = "false", the reservations system may ignore the settings passed and keep values overridden by the user. If value = "true", the reservations system must replace values overridden by the user.
     *
     * @var bool $override
     */
    private $override = null;

    /**
     * An enumerated type defining the function of the booking limit message. Values: RemoveLimit, SetLimit, AdjustLimit.
     *
     * @var string $bookingLimitMessageType
     */
    private $bookingLimitMessageType = null;

    /**
     * Number of units of inventory that can be sold.
     *
     * @var int $bookingLimit
     */
    private $bookingLimit = null;

    /**
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @var int $locatorID
     */
    private $locatorID = null;

    /**
     * Number of units down to which inventory can be sold.
     *
     * @var int $bookingThreshold
     */
    private $bookingThreshold = null;

    /**
     * Used to request or specify a gender assignment for a room. Note: Typically used by Hosteliers.
     *
     * @var string $roomGender
     */
    private $roomGender = null;

    /**
     * If TRUE, the room requires or has sharing available. Note: Typically used by Hosteliers.
     *
     * @var bool $sharedRoomInd
     */
    private $sharedRoomInd = null;

    /**
     * Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @var \Recranet\OTA\StatusApplicationControlType $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
     *
     * @var \Recranet\OTA\LengthsOfStayType $lengthsOfStay
     */
    private $lengthsOfStay = null;

    /**
     * A collection of the best rates available.
     *
     * @var \Recranet\OTA\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRates
     */
    private $bestAvailableRates = null;

    /**
     * Restriction based on the minimum rate to be considered for availability, ex. can sell weekend rate only if charging the hurdle rate or more.
     *
     * @var \Recranet\OTA\AvailStatusMessageType\HurdleRateAType $hurdleRate
     */
    private $hurdleRate = null;

    /**
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5, the maximum Delta would be 100 USD).
     *
     * @var \Recranet\OTA\AvailStatusMessageType\DeltaAType $delta
     */
    private $delta = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessage, for tracing of transactions.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Availability status assigned to the room rate combination.
     *
     * @var \Recranet\OTA\AvailStatusMessageType\RestrictionStatusAType $restrictionStatus
     */
    private $restrictionStatus = null;

    /**
     * Gets as override
     *
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = "false", the reservations system may ignore the settings passed and keep values overridden by the user. If value = "true", the reservations system must replace values overridden by the user.
     *
     * @return bool
     */
    public function getOverride()
    {
        return $this->override;
    }

    /**
     * Sets a new override
     *
     * Mechanism to allow the user to override settings at the reservation system and to allow the RMS to replace this overridden values: If value = "false", the reservations system may ignore the settings passed and keep values overridden by the user. If value = "true", the reservations system must replace values overridden by the user.
     *
     * @param bool $override
     * @return self
     */
    public function setOverride($override)
    {
        $this->override = $override;
        return $this;
    }

    /**
     * Gets as bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values: RemoveLimit, SetLimit, AdjustLimit.
     *
     * @return string
     */
    public function getBookingLimitMessageType()
    {
        return $this->bookingLimitMessageType;
    }

    /**
     * Sets a new bookingLimitMessageType
     *
     * An enumerated type defining the function of the booking limit message. Values: RemoveLimit, SetLimit, AdjustLimit.
     *
     * @param string $bookingLimitMessageType
     * @return self
     */
    public function setBookingLimitMessageType($bookingLimitMessageType)
    {
        $this->bookingLimitMessageType = $bookingLimitMessageType;
        return $this;
    }

    /**
     * Gets as bookingLimit
     *
     * Number of units of inventory that can be sold.
     *
     * @return int
     */
    public function getBookingLimit()
    {
        return $this->bookingLimit;
    }

    /**
     * Sets a new bookingLimit
     *
     * Number of units of inventory that can be sold.
     *
     * @param int $bookingLimit
     * @return self
     */
    public function setBookingLimit($bookingLimit)
    {
        $this->bookingLimit = $bookingLimit;
        return $this;
    }

    /**
     * Gets as locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @return int
     */
    public function getLocatorID()
    {
        return $this->locatorID;
    }

    /**
     * Sets a new locatorID
     *
     * Can be used to communicate back to the sender exactly which transaction may have had a problem (e.g. "Message 214 had an invalid date range").
     *
     * @param int $locatorID
     * @return self
     */
    public function setLocatorID($locatorID)
    {
        $this->locatorID = $locatorID;
        return $this;
    }

    /**
     * Gets as bookingThreshold
     *
     * Number of units down to which inventory can be sold.
     *
     * @return int
     */
    public function getBookingThreshold()
    {
        return $this->bookingThreshold;
    }

    /**
     * Sets a new bookingThreshold
     *
     * Number of units down to which inventory can be sold.
     *
     * @param int $bookingThreshold
     * @return self
     */
    public function setBookingThreshold($bookingThreshold)
    {
        $this->bookingThreshold = $bookingThreshold;
        return $this;
    }

    /**
     * Gets as roomGender
     *
     * Used to request or specify a gender assignment for a room. Note: Typically used by Hosteliers.
     *
     * @return string
     */
    public function getRoomGender()
    {
        return $this->roomGender;
    }

    /**
     * Sets a new roomGender
     *
     * Used to request or specify a gender assignment for a room. Note: Typically used by Hosteliers.
     *
     * @param string $roomGender
     * @return self
     */
    public function setRoomGender($roomGender)
    {
        $this->roomGender = $roomGender;
        return $this;
    }

    /**
     * Gets as sharedRoomInd
     *
     * If TRUE, the room requires or has sharing available. Note: Typically used by Hosteliers.
     *
     * @return bool
     */
    public function getSharedRoomInd()
    {
        return $this->sharedRoomInd;
    }

    /**
     * Sets a new sharedRoomInd
     *
     * If TRUE, the room requires or has sharing available. Note: Typically used by Hosteliers.
     *
     * @param bool $sharedRoomInd
     * @return self
     */
    public function setSharedRoomInd($sharedRoomInd)
    {
        $this->sharedRoomInd = $sharedRoomInd;
        return $this;
    }

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @return \Recranet\OTA\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the AvailStatus Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @param \Recranet\OTA\StatusApplicationControlType $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(?\Recranet\OTA\StatusApplicationControlType $statusApplicationControl = null)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        return $this;
    }

    /**
     * Gets as lengthsOfStay
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
     *
     * @return \Recranet\OTA\LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }

    /**
     * Sets a new lengthsOfStay
     *
     * Collection of Length of Stay elements. These LOS elements indicate what LOS restrictions are to be added or removed. Some systems include this information directly with the Availability Status as opposed to the booking restriction.
     *
     * @param \Recranet\OTA\LengthsOfStayType $lengthsOfStay
     * @return self
     */
    public function setLengthsOfStay(?\Recranet\OTA\LengthsOfStayType $lengthsOfStay = null)
    {
        $this->lengthsOfStay = $lengthsOfStay;
        return $this;
    }

    /**
     * Adds as bestAvailableRate
     *
     * A collection of the best rates available.
     *
     * @return self
     * @param \Recranet\OTA\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate
     */
    public function addToBestAvailableRates(\Recranet\OTA\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType $bestAvailableRate)
    {
        $this->bestAvailableRates[] = $bestAvailableRate;
        return $this;
    }

    /**
     * isset bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBestAvailableRates($index)
    {
        return isset($this->bestAvailableRates[$index]);
    }

    /**
     * unset bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBestAvailableRates($index)
    {
        unset($this->bestAvailableRates[$index]);
    }

    /**
     * Gets as bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @return \Recranet\OTA\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[]
     */
    public function getBestAvailableRates()
    {
        return $this->bestAvailableRates;
    }

    /**
     * Sets a new bestAvailableRates
     *
     * A collection of the best rates available.
     *
     * @param \Recranet\OTA\AvailStatusMessageType\BestAvailableRatesAType\BestAvailableRateAType[] $bestAvailableRates
     * @return self
     */
    public function setBestAvailableRates(array $bestAvailableRates = null)
    {
        $this->bestAvailableRates = $bestAvailableRates;
        return $this;
    }

    /**
     * Gets as hurdleRate
     *
     * Restriction based on the minimum rate to be considered for availability, ex. can sell weekend rate only if charging the hurdle rate or more.
     *
     * @return \Recranet\OTA\AvailStatusMessageType\HurdleRateAType
     */
    public function getHurdleRate()
    {
        return $this->hurdleRate;
    }

    /**
     * Sets a new hurdleRate
     *
     * Restriction based on the minimum rate to be considered for availability, ex. can sell weekend rate only if charging the hurdle rate or more.
     *
     * @param \Recranet\OTA\AvailStatusMessageType\HurdleRateAType $hurdleRate
     * @return self
     */
    public function setHurdleRate(?\Recranet\OTA\AvailStatusMessageType\HurdleRateAType $hurdleRate = null)
    {
        $this->hurdleRate = $hurdleRate;
        return $this;
    }

    /**
     * Gets as delta
     *
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5, the maximum Delta would be 100 USD).
     *
     * @return \Recranet\OTA\AvailStatusMessageType\DeltaAType
     */
    public function getDelta()
    {
        return $this->delta;
    }

    /**
     * Sets a new delta
     *
     * Incremental amount added to the hurdle rate (e.g. Amount= 20 USD and Ceiling=5, the maximum Delta would be 100 USD).
     *
     * @param \Recranet\OTA\AvailStatusMessageType\DeltaAType $delta
     * @return self
     */
    public function setDelta(?\Recranet\OTA\AvailStatusMessageType\DeltaAType $delta = null)
    {
        $this->delta = $delta;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessage, for tracing of transactions.
     *
     * @return \Recranet\OTA\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each AvailStatusMessage, for tracing of transactions.
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as restrictionStatus
     *
     * Availability status assigned to the room rate combination.
     *
     * @return \Recranet\OTA\AvailStatusMessageType\RestrictionStatusAType
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }

    /**
     * Sets a new restrictionStatus
     *
     * Availability status assigned to the room rate combination.
     *
     * @param \Recranet\OTA\AvailStatusMessageType\RestrictionStatusAType $restrictionStatus
     * @return self
     */
    public function setRestrictionStatus(?\Recranet\OTA\AvailStatusMessageType\RestrictionStatusAType $restrictionStatus = null)
    {
        $this->restrictionStatus = $restrictionStatus;
        return $this;
    }
}

