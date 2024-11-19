<?php

namespace Recranet\OTA;

/**
 * Class representing RailReservationType
 *
 * Defines the information used to fully describe a rail reservation.
 * XSD Type: RailReservationType
 */
class RailReservationType
{
    /**
     * The last date a reservation will be held.
     *
     * @var \DateTime $lastHoldDate
     */
    private $lastHoldDate = null;

    /**
     * A confirmation number by which this reservation can be uniquely identified.
     *
     * @var \Recranet\OTA\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Full details on the itinerary referenced by this reservation. An itinerary represents all inventory booked and associated with this specific reservation.
     *
     * @var \Recranet\OTA\RailReservationType\ItineraryAType $itinerary
     */
    private $itinerary = null;

    /**
     * Passenger information for a reservation.
     *
     * @var \Recranet\OTA\RailPassengerCategoryDetailType[] $passengerInfo
     */
    private $passengerInfo = [
        
    ];

    /**
     * A collection of payment rules associated with this rail reservation.
     *
     * @var \Recranet\OTA\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Information on the fulfillment of the ticket, that is, e.g. the party that will be issuing the ticket, or has already issued the ticket.
     *
     * @var \Recranet\OTA\CompanyNameType $fulfillment
     */
    private $fulfillment = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as lastHoldDate
     *
     * The last date a reservation will be held.
     *
     * @return \DateTime
     */
    public function getLastHoldDate()
    {
        return $this->lastHoldDate;
    }

    /**
     * Sets a new lastHoldDate
     *
     * The last date a reservation will be held.
     *
     * @param \DateTime $lastHoldDate
     * @return self
     */
    public function setLastHoldDate(\DateTime $lastHoldDate)
    {
        $this->lastHoldDate = $lastHoldDate;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * A confirmation number by which this reservation can be uniquely identified.
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
     * A confirmation number by which this reservation can be uniquely identified.
     *
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Recranet\OTA\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Gets as itinerary
     *
     * Full details on the itinerary referenced by this reservation. An itinerary represents all inventory booked and associated with this specific reservation.
     *
     * @return \Recranet\OTA\RailReservationType\ItineraryAType
     */
    public function getItinerary()
    {
        return $this->itinerary;
    }

    /**
     * Sets a new itinerary
     *
     * Full details on the itinerary referenced by this reservation. An itinerary represents all inventory booked and associated with this specific reservation.
     *
     * @param \Recranet\OTA\RailReservationType\ItineraryAType $itinerary
     * @return self
     */
    public function setItinerary(\Recranet\OTA\RailReservationType\ItineraryAType $itinerary)
    {
        $this->itinerary = $itinerary;
        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @return self
     * @param \Recranet\OTA\RailPassengerCategoryDetailType $passengerInfo
     */
    public function addToPassengerInfo(\Recranet\OTA\RailPassengerCategoryDetailType $passengerInfo)
    {
        $this->passengerInfo[] = $passengerInfo;
        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerInfo($index)
    {
        return isset($this->passengerInfo[$index]);
    }

    /**
     * unset passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerInfo($index)
    {
        unset($this->passengerInfo[$index]);
    }

    /**
     * Gets as passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @return \Recranet\OTA\RailPassengerCategoryDetailType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Passenger information for a reservation.
     *
     * @param \Recranet\OTA\RailPassengerCategoryDetailType[] $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo = null)
    {
        $this->passengerInfo = $passengerInfo;
        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @return self
     * @param \Recranet\OTA\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Recranet\OTA\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @return \Recranet\OTA\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this rail reservation.
     *
     * @param \Recranet\OTA\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules = null)
    {
        $this->paymentRules = $paymentRules;
        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * Information on the fulfillment of the ticket, that is, e.g. the party that will be issuing the ticket, or has already issued the ticket.
     *
     * @return \Recranet\OTA\CompanyNameType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * Information on the fulfillment of the ticket, that is, e.g. the party that will be issuing the ticket, or has already issued the ticket.
     *
     * @param \Recranet\OTA\CompanyNameType $fulfillment
     * @return self
     */
    public function setFulfillment(?\Recranet\OTA\CompanyNameType $fulfillment = null)
    {
        $this->fulfillment = $fulfillment;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

