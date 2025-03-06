<?php

namespace Recranet\OTA\Type\BookingRulesType;

/**
 * Class representing BookingRuleAType
 */
class BookingRuleAType
{
    /**
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * Used to define the quantity for an associated element or attribute.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Identifies the location of the code table.
     *
     * @var string $uRI
     */
    private $uRI = null;

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
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @var \DateInterval $maxAdvancedBookingOffset
     */
    private $maxAdvancedBookingOffset = null;

    /**
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @var \DateInterval $minAdvancedBookingOffset
     */
    private $minAdvancedBookingOffset = null;

    /**
     * Number of days prior to arrival date at which a guarantee is required.
     *
     * @var \DateInterval $forceGuaranteeOffset
     */
    private $forceGuaranteeOffset = null;

    /**
     * Number of days prior to arrival date for which a deposit is no longer accepted (because of a too short time delay between reservation and guest arrival).
     *
     * @var \DateInterval $depositWaiverOffset
     */
    private $depositWaiverOffset = null;

    /**
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @var int $minTotalOccupancy
     */
    private $minTotalOccupancy = null;

    /**
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @var int $maxTotalOccupancy
     */
    private $maxTotalOccupancy = null;

    /**
     * The fixed time that the booking restriction goes into effect to cancel the non-guaranteed reservation. Either this attribute or the DropTimeOffset element may be used.
     *
     * @var \DateTime $absoluteDropTime
     */
    private $absoluteDropTime = null;

    /**
     * Indicates whether this rate plan can be booked by those not in the viewership collection. If this attribute is False (0), then the viewerships collection lists those who have view-only or bookable status for this rate plan. If this attribute is True (1), then the viewerships collection lists those who have view-only or not-viewable status for this rate plan.
     *
     * @var bool $generallyBookable
     */
    private $generallyBookable = null;

    /**
     * Indicates whether the price for this rate plan can be viewed, or whether the guest must contact another entity to obtain price information.
     * Valid values: 0 = (No) Price Not Viewable, 1 = (Yes) Price Viewable.
     *
     * @var bool $priceViewable
     */
    private $priceViewable = null;

    /**
     * Boolean value indicating whether a specific rate plan must be qualified prior to inclusion in availability response messages.
     *
     * @var bool $qualifiedRateYN
     */
    private $qualifiedRateYN = null;

    /**
     * An address is required to complete the booking.
     *
     * @var bool $addressRequired
     */
    private $addressRequired = null;

    /**
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @var \DateTime $absoluteCutoff
     */
    private $absoluteCutoff = null;

    /**
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @var \DateInterval $offsetDuration
     */
    private $offsetDuration = null;

    /**
     * This indicates how the offset period is applied for the release back to general inventory of unbooked rooms in the inventory block .
     *
     * @var string $offsetCalculationMode
     */
    private $offsetCalculationMode = null;

    /**
     * The maximum number of times a rate may be booked contiguously within a reservation (often used with packages).
     *
     * @var int $maxContiguousBookings
     */
    private $maxContiguousBookings = null;

    /**
     * A collection of accepted guarantees.
     *
     * @var \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[] $acceptableGuarantees
     */
    private $acceptableGuarantees = null;

    /**
     * A collection of required payments that are part of the booking restriction.
     *
     * @var \Recranet\OTA\Type\CancelPenaltiesType $cancelPenalties
     */
    private $cancelPenalties = null;

    /**
     * A collection of required payments that are part of the booking restriction.
     *
     * @var \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $requiredPaymts
     */
    private $requiredPaymts = null;

    /**
     * A collection of lengths of stay.
     *
     * @var \Recranet\OTA\Type\LengthsOfStayType $lengthsOfStay
     */
    private $lengthsOfStay = null;

    /**
     * A collection of Day Of Week restrictions.
     *
     * @var \Recranet\OTA\Type\DOWRestrictionsType $dOWRestrictions
     */
    private $dOWRestrictions = null;

    /**
     * Availability status assigned to the room rate combination for this booking rule.
     *
     * @var \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\RestrictionStatusAType $restrictionStatus
     */
    private $restrictionStatus = null;

    /**
     * A collection of Viewships.
     *
     * @var \Recranet\OTA\Type\ViewershipsType\ViewershipAType[] $viewerships
     */
    private $viewerships = null;

    /**
     * A collection of Additional rules.
     *
     * @var \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[] $addtionalRules
     */
    private $addtionalRules = null;

    /**
     * General description of booking rule.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * The unique identifier element allows the trading partners to uniquely identify each Booking Rule, for transaction tracability.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The charges that may apply to an early or late checkout.
     *
     * @var \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\CheckoutChargeAType[] $checkoutCharge
     */
    private $checkoutCharge = [
        
    ];

    /**
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Used to define the quantity for an associated element or attribute.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as uRI
     *
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI()
    {
        return $this->uRI;
    }

    /**
     * Sets a new uRI
     *
     * Identifies the location of the code table.
     *
     * @param string $uRI
     * @return self
     */
    public function setURI($uRI)
    {
        $this->uRI = $uRI;
        return $this;
    }

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
     * Gets as maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @return \DateInterval
     */
    public function getMaxAdvancedBookingOffset()
    {
        return $this->maxAdvancedBookingOffset;
    }

    /**
     * Sets a new maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this rate plan may be booked.
     *
     * @param \DateInterval $maxAdvancedBookingOffset
     * @return self
     */
    public function setMaxAdvancedBookingOffset(\DateInterval $maxAdvancedBookingOffset)
    {
        $this->maxAdvancedBookingOffset = $maxAdvancedBookingOffset;
        return $this;
    }

    /**
     * Gets as minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @return \DateInterval
     */
    public function getMinAdvancedBookingOffset()
    {
        return $this->minAdvancedBookingOffset;
    }

    /**
     * Sets a new minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this rate plan may be booked.
     *
     * @param \DateInterval $minAdvancedBookingOffset
     * @return self
     */
    public function setMinAdvancedBookingOffset(\DateInterval $minAdvancedBookingOffset)
    {
        $this->minAdvancedBookingOffset = $minAdvancedBookingOffset;
        return $this;
    }

    /**
     * Gets as forceGuaranteeOffset
     *
     * Number of days prior to arrival date at which a guarantee is required.
     *
     * @return \DateInterval
     */
    public function getForceGuaranteeOffset()
    {
        return $this->forceGuaranteeOffset;
    }

    /**
     * Sets a new forceGuaranteeOffset
     *
     * Number of days prior to arrival date at which a guarantee is required.
     *
     * @param \DateInterval $forceGuaranteeOffset
     * @return self
     */
    public function setForceGuaranteeOffset(\DateInterval $forceGuaranteeOffset)
    {
        $this->forceGuaranteeOffset = $forceGuaranteeOffset;
        return $this;
    }

    /**
     * Gets as depositWaiverOffset
     *
     * Number of days prior to arrival date for which a deposit is no longer accepted (because of a too short time delay between reservation and guest arrival).
     *
     * @return \DateInterval
     */
    public function getDepositWaiverOffset()
    {
        return $this->depositWaiverOffset;
    }

    /**
     * Sets a new depositWaiverOffset
     *
     * Number of days prior to arrival date for which a deposit is no longer accepted (because of a too short time delay between reservation and guest arrival).
     *
     * @param \DateInterval $depositWaiverOffset
     * @return self
     */
    public function setDepositWaiverOffset(\DateInterval $depositWaiverOffset)
    {
        $this->depositWaiverOffset = $depositWaiverOffset;
        return $this;
    }

    /**
     * Gets as minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @return int
     */
    public function getMinTotalOccupancy()
    {
        return $this->minTotalOccupancy;
    }

    /**
     * Sets a new minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @param int $minTotalOccupancy
     * @return self
     */
    public function setMinTotalOccupancy($minTotalOccupancy)
    {
        $this->minTotalOccupancy = $minTotalOccupancy;
        return $this;
    }

    /**
     * Gets as maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @return int
     */
    public function getMaxTotalOccupancy()
    {
        return $this->maxTotalOccupancy;
    }

    /**
     * Sets a new maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @param int $maxTotalOccupancy
     * @return self
     */
    public function setMaxTotalOccupancy($maxTotalOccupancy)
    {
        $this->maxTotalOccupancy = $maxTotalOccupancy;
        return $this;
    }

    /**
     * Gets as absoluteDropTime
     *
     * The fixed time that the booking restriction goes into effect to cancel the non-guaranteed reservation. Either this attribute or the DropTimeOffset element may be used.
     *
     * @return \DateTime
     */
    public function getAbsoluteDropTime()
    {
        return $this->absoluteDropTime;
    }

    /**
     * Sets a new absoluteDropTime
     *
     * The fixed time that the booking restriction goes into effect to cancel the non-guaranteed reservation. Either this attribute or the DropTimeOffset element may be used.
     *
     * @param \DateTime $absoluteDropTime
     * @return self
     */
    public function setAbsoluteDropTime(\DateTime $absoluteDropTime)
    {
        $this->absoluteDropTime = $absoluteDropTime;
        return $this;
    }

    /**
     * Gets as generallyBookable
     *
     * Indicates whether this rate plan can be booked by those not in the viewership collection. If this attribute is False (0), then the viewerships collection lists those who have view-only or bookable status for this rate plan. If this attribute is True (1), then the viewerships collection lists those who have view-only or not-viewable status for this rate plan.
     *
     * @return bool
     */
    public function getGenerallyBookable()
    {
        return $this->generallyBookable;
    }

    /**
     * Sets a new generallyBookable
     *
     * Indicates whether this rate plan can be booked by those not in the viewership collection. If this attribute is False (0), then the viewerships collection lists those who have view-only or bookable status for this rate plan. If this attribute is True (1), then the viewerships collection lists those who have view-only or not-viewable status for this rate plan.
     *
     * @param bool $generallyBookable
     * @return self
     */
    public function setGenerallyBookable($generallyBookable)
    {
        $this->generallyBookable = $generallyBookable;
        return $this;
    }

    /**
     * Gets as priceViewable
     *
     * Indicates whether the price for this rate plan can be viewed, or whether the guest must contact another entity to obtain price information.
     * Valid values: 0 = (No) Price Not Viewable, 1 = (Yes) Price Viewable.
     *
     * @return bool
     */
    public function getPriceViewable()
    {
        return $this->priceViewable;
    }

    /**
     * Sets a new priceViewable
     *
     * Indicates whether the price for this rate plan can be viewed, or whether the guest must contact another entity to obtain price information.
     * Valid values: 0 = (No) Price Not Viewable, 1 = (Yes) Price Viewable.
     *
     * @param bool $priceViewable
     * @return self
     */
    public function setPriceViewable($priceViewable)
    {
        $this->priceViewable = $priceViewable;
        return $this;
    }

    /**
     * Gets as qualifiedRateYN
     *
     * Boolean value indicating whether a specific rate plan must be qualified prior to inclusion in availability response messages.
     *
     * @return bool
     */
    public function getQualifiedRateYN()
    {
        return $this->qualifiedRateYN;
    }

    /**
     * Sets a new qualifiedRateYN
     *
     * Boolean value indicating whether a specific rate plan must be qualified prior to inclusion in availability response messages.
     *
     * @param bool $qualifiedRateYN
     * @return self
     */
    public function setQualifiedRateYN($qualifiedRateYN)
    {
        $this->qualifiedRateYN = $qualifiedRateYN;
        return $this;
    }

    /**
     * Gets as addressRequired
     *
     * An address is required to complete the booking.
     *
     * @return bool
     */
    public function getAddressRequired()
    {
        return $this->addressRequired;
    }

    /**
     * Sets a new addressRequired
     *
     * An address is required to complete the booking.
     *
     * @param bool $addressRequired
     * @return self
     */
    public function setAddressRequired($addressRequired)
    {
        $this->addressRequired = $addressRequired;
        return $this;
    }

    /**
     * Gets as absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @return \DateTime
     */
    public function getAbsoluteCutoff()
    {
        return $this->absoluteCutoff;
    }

    /**
     * Sets a new absoluteCutoff
     *
     * Defines the absolute deadline. Either this or the offset attributes may be used.
     *
     * @param \DateTime $absoluteCutoff
     * @return self
     */
    public function setAbsoluteCutoff(\DateTime $absoluteCutoff)
    {
        $this->absoluteCutoff = $absoluteCutoff;
        return $this;
    }

    /**
     * Gets as offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @return \DateInterval
     */
    public function getOffsetDuration()
    {
        return $this->offsetDuration;
    }

    /**
     * Sets a new offsetDuration
     *
     * The units of time, e.g.: days, hours, etc., that apply to the deadline.
     *
     * @param \DateInterval $offsetDuration
     * @return self
     */
    public function setOffsetDuration(\DateInterval $offsetDuration)
    {
        $this->offsetDuration = $offsetDuration;
        return $this;
    }

    /**
     * Gets as offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general inventory of unbooked rooms in the inventory block .
     *
     * @return string
     */
    public function getOffsetCalculationMode()
    {
        return $this->offsetCalculationMode;
    }

    /**
     * Sets a new offsetCalculationMode
     *
     * This indicates how the offset period is applied for the release back to general inventory of unbooked rooms in the inventory block .
     *
     * @param string $offsetCalculationMode
     * @return self
     */
    public function setOffsetCalculationMode($offsetCalculationMode)
    {
        $this->offsetCalculationMode = $offsetCalculationMode;
        return $this;
    }

    /**
     * Gets as maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a reservation (often used with packages).
     *
     * @return int
     */
    public function getMaxContiguousBookings()
    {
        return $this->maxContiguousBookings;
    }

    /**
     * Sets a new maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a reservation (often used with packages).
     *
     * @param int $maxContiguousBookings
     * @return self
     */
    public function setMaxContiguousBookings($maxContiguousBookings)
    {
        $this->maxContiguousBookings = $maxContiguousBookings;
        return $this;
    }

    /**
     * Adds as acceptableGuarantee
     *
     * A collection of accepted guarantees.
     *
     * @return self
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee
     */
    public function addToAcceptableGuarantees(\Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType $acceptableGuarantee)
    {
        $this->acceptableGuarantees[] = $acceptableGuarantee;
        return $this;
    }

    /**
     * isset acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAcceptableGuarantees($index)
    {
        return isset($this->acceptableGuarantees[$index]);
    }

    /**
     * unset acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAcceptableGuarantees($index)
    {
        unset($this->acceptableGuarantees[$index]);
    }

    /**
     * Gets as acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @return \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[]
     */
    public function getAcceptableGuarantees()
    {
        return $this->acceptableGuarantees;
    }

    /**
     * Sets a new acceptableGuarantees
     *
     * A collection of accepted guarantees.
     *
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AcceptableGuaranteesAType\AcceptableGuaranteeAType[] $acceptableGuarantees
     * @return self
     */
    public function setAcceptableGuarantees(array $acceptableGuarantees = null)
    {
        $this->acceptableGuarantees = $acceptableGuarantees;
        return $this;
    }

    /**
     * Gets as cancelPenalties
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @return \Recranet\OTA\Type\CancelPenaltiesType
     */
    public function getCancelPenalties()
    {
        return $this->cancelPenalties;
    }

    /**
     * Sets a new cancelPenalties
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param \Recranet\OTA\Type\CancelPenaltiesType $cancelPenalties
     * @return self
     */
    public function setCancelPenalties(?\Recranet\OTA\Type\CancelPenaltiesType $cancelPenalties = null)
    {
        $this->cancelPenalties = $cancelPenalties;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @return self
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToRequiredPaymts(\Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->requiredPaymts[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRequiredPaymts($index)
    {
        return isset($this->requiredPaymts[$index]);
    }

    /**
     * unset requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRequiredPaymts($index)
    {
        unset($this->requiredPaymts[$index]);
    }

    /**
     * Gets as requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @return \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getRequiredPaymts()
    {
        return $this->requiredPaymts;
    }

    /**
     * Sets a new requiredPaymts
     *
     * A collection of required payments that are part of the booking restriction.
     *
     * @param \Recranet\OTA\Type\RequiredPaymentsType\GuaranteePaymentAType[] $requiredPaymts
     * @return self
     */
    public function setRequiredPaymts(array $requiredPaymts = null)
    {
        $this->requiredPaymts = $requiredPaymts;
        return $this;
    }

    /**
     * Gets as lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @return \Recranet\OTA\Type\LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }

    /**
     * Sets a new lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @param \Recranet\OTA\Type\LengthsOfStayType $lengthsOfStay
     * @return self
     */
    public function setLengthsOfStay(?\Recranet\OTA\Type\LengthsOfStayType $lengthsOfStay = null)
    {
        $this->lengthsOfStay = $lengthsOfStay;
        return $this;
    }

    /**
     * Gets as dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @return \Recranet\OTA\Type\DOWRestrictionsType
     */
    public function getDOWRestrictions()
    {
        return $this->dOWRestrictions;
    }

    /**
     * Sets a new dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @param \Recranet\OTA\Type\DOWRestrictionsType $dOWRestrictions
     * @return self
     */
    public function setDOWRestrictions(?\Recranet\OTA\Type\DOWRestrictionsType $dOWRestrictions = null)
    {
        $this->dOWRestrictions = $dOWRestrictions;
        return $this;
    }

    /**
     * Gets as restrictionStatus
     *
     * Availability status assigned to the room rate combination for this booking rule.
     *
     * @return \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\RestrictionStatusAType
     */
    public function getRestrictionStatus()
    {
        return $this->restrictionStatus;
    }

    /**
     * Sets a new restrictionStatus
     *
     * Availability status assigned to the room rate combination for this booking rule.
     *
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\RestrictionStatusAType $restrictionStatus
     * @return self
     */
    public function setRestrictionStatus(?\Recranet\OTA\Type\BookingRulesType\BookingRuleAType\RestrictionStatusAType $restrictionStatus = null)
    {
        $this->restrictionStatus = $restrictionStatus;
        return $this;
    }

    /**
     * Adds as viewership
     *
     * A collection of Viewships.
     *
     * @return self
     * @param \Recranet\OTA\Type\ViewershipsType\ViewershipAType $viewership
     */
    public function addToViewerships(\Recranet\OTA\Type\ViewershipsType\ViewershipAType $viewership)
    {
        $this->viewerships[] = $viewership;
        return $this;
    }

    /**
     * isset viewerships
     *
     * A collection of Viewships.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetViewerships($index)
    {
        return isset($this->viewerships[$index]);
    }

    /**
     * unset viewerships
     *
     * A collection of Viewships.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetViewerships($index)
    {
        unset($this->viewerships[$index]);
    }

    /**
     * Gets as viewerships
     *
     * A collection of Viewships.
     *
     * @return \Recranet\OTA\Type\ViewershipsType\ViewershipAType[]
     */
    public function getViewerships()
    {
        return $this->viewerships;
    }

    /**
     * Sets a new viewerships
     *
     * A collection of Viewships.
     *
     * @param \Recranet\OTA\Type\ViewershipsType\ViewershipAType[] $viewerships
     * @return self
     */
    public function setViewerships(array $viewerships = null)
    {
        $this->viewerships = $viewerships;
        return $this;
    }

    /**
     * Adds as additionalRule
     *
     * A collection of Additional rules.
     *
     * @return self
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType $additionalRule
     */
    public function addToAddtionalRules(\Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType $additionalRule)
    {
        $this->addtionalRules[] = $additionalRule;
        return $this;
    }

    /**
     * isset addtionalRules
     *
     * A collection of Additional rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddtionalRules($index)
    {
        return isset($this->addtionalRules[$index]);
    }

    /**
     * unset addtionalRules
     *
     * A collection of Additional rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddtionalRules($index)
    {
        unset($this->addtionalRules[$index]);
    }

    /**
     * Gets as addtionalRules
     *
     * A collection of Additional rules.
     *
     * @return \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[]
     */
    public function getAddtionalRules()
    {
        return $this->addtionalRules;
    }

    /**
     * Sets a new addtionalRules
     *
     * A collection of Additional rules.
     *
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\AddtionalRulesAType\AdditionalRuleAType[] $addtionalRules
     * @return self
     */
    public function setAddtionalRules(array $addtionalRules = null)
    {
        $this->addtionalRules = $addtionalRules;
        return $this;
    }

    /**
     * Adds as description
     *
     * General description of booking rule.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * General description of booking rule.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * General description of booking rule.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * General description of booking rule.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * General description of booking rule.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each Booking Rule, for transaction tracability.
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
     * The unique identifier element allows the trading partners to uniquely identify each Booking Rule, for transaction tracability.
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
     * Adds as checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @return self
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\CheckoutChargeAType $checkoutCharge
     */
    public function addToCheckoutCharge(\Recranet\OTA\Type\BookingRulesType\BookingRuleAType\CheckoutChargeAType $checkoutCharge)
    {
        $this->checkoutCharge[] = $checkoutCharge;
        return $this;
    }

    /**
     * isset checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCheckoutCharge($index)
    {
        return isset($this->checkoutCharge[$index]);
    }

    /**
     * unset checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCheckoutCharge($index)
    {
        unset($this->checkoutCharge[$index]);
    }

    /**
     * Gets as checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @return \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\CheckoutChargeAType[]
     */
    public function getCheckoutCharge()
    {
        return $this->checkoutCharge;
    }

    /**
     * Sets a new checkoutCharge
     *
     * The charges that may apply to an early or late checkout.
     *
     * @param \Recranet\OTA\Type\BookingRulesType\BookingRuleAType\CheckoutChargeAType[] $checkoutCharge
     * @return self
     */
    public function setCheckoutCharge(array $checkoutCharge = null)
    {
        $this->checkoutCharge = $checkoutCharge;
        return $this;
    }
}

