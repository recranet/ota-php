<?php

namespace Recranet\OTA\Type\OTAHotelBookingRuleNotifRQ\OTAHotelBookingRuleNotifRQAType\RuleMessagesAType;

/**
 * Class representing RuleMessageAType
 */
class RuleMessageAType
{
    /**
     * Information on what the BookingRule Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @var \Recranet\OTA\Type\StatusApplicationControlType $statusApplicationControl
     */
    private $statusApplicationControl = null;

    /**
     * Container for the collection of Booking Rules which apply for the information indicated in the StatusApplicationControl element.
     *
     * @var \Recranet\OTA\Type\BookingRulesType\BookingRuleAType[] $bookingRules
     */
    private $bookingRules = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify each BookingRuleMessage, for tracing of transactions.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as statusApplicationControl
     *
     * Information on what the BookingRule Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @return \Recranet\OTA\Type\StatusApplicationControlType
     */
    public function getStatusApplicationControl()
    {
        return $this->statusApplicationControl;
    }

    /**
     * Sets a new statusApplicationControl
     *
     * Information on what the BookingRule Message applies to (i.e. the combination of inventory and rate codes) and the period of application.
     *
     * @param \Recranet\OTA\Type\StatusApplicationControlType $statusApplicationControl
     * @return self
     */
    public function setStatusApplicationControl(?\Recranet\OTA\Type\StatusApplicationControlType $statusApplicationControl = null)
    {
        $this->statusApplicationControl = $statusApplicationControl;
        return $this;
    }

    /**
     * Adds as bookingRule
     *
     * Container for the collection of Booking Rules which apply for the information indicated in the StatusApplicationControl element.
     *
     * @return self
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType $bookingRule
     */
    public function addToBookingRules(\Recranet\OTA\Type\BookingRulesType\BookingRuleAType $bookingRule)
    {
        $this->bookingRules[] = $bookingRule;
        return $this;
    }

    /**
     * isset bookingRules
     *
     * Container for the collection of Booking Rules which apply for the information indicated in the StatusApplicationControl element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingRules($index)
    {
        return isset($this->bookingRules[$index]);
    }

    /**
     * unset bookingRules
     *
     * Container for the collection of Booking Rules which apply for the information indicated in the StatusApplicationControl element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingRules($index)
    {
        unset($this->bookingRules[$index]);
    }

    /**
     * Gets as bookingRules
     *
     * Container for the collection of Booking Rules which apply for the information indicated in the StatusApplicationControl element.
     *
     * @return \Recranet\OTA\Type\BookingRulesType\BookingRuleAType[]
     */
    public function getBookingRules()
    {
        return $this->bookingRules;
    }

    /**
     * Sets a new bookingRules
     *
     * Container for the collection of Booking Rules which apply for the information indicated in the StatusApplicationControl element.
     *
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType[] $bookingRules
     * @return self
     */
    public function setBookingRules(array $bookingRules = null)
    {
        $this->bookingRules = $bookingRules;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each BookingRuleMessage, for tracing of transactions.
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
     * The unique identifier element allows the trading partners to uniquely identify each BookingRuleMessage, for tracing of transactions.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\Type\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }
}

