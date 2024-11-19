<?php

namespace Recranet\OTA;

/**
 * Class representing AmountType
 *
 * Base charge and additional charges related to a room that includes such things as additional guest amounts, cancel fees, etc. Also includes Discount percentages, total amount, and the rate description.
 * XSD Type: AmountType
 */
class AmountType
{
    /**
     * Indicates the starting date.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @var string $ageQualifyingCode
     */
    private $ageQualifyingCode = null;

    /**
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @var int $minAge
     */
    private $minAge = null;

    /**
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @var int $maxAge
     */
    private $maxAge = null;

    /**
     * TimeUnit : Qualifier for Age.
     *
     * @var string $ageTimeUnit
     */
    private $ageTimeUnit = null;

    /**
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @var string $ageBucket
     */
    private $ageBucket = null;

    /**
     * @var bool $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * @var int $numberOfUnits
     */
    private $numberOfUnits = null;

    /**
     * Indicates the time unit for the rate.
     *
     * @var string $rateTimeUnit
     */
    private $rateTimeUnit = null;

    /**
     * Indicates the number of rate time units such as "3 Days".
     *
     * @var int $unitMultiplier
     */
    private $unitMultiplier = null;

    /**
     * Indicates the minimum number of guests at this rate.
     *
     * @var int $minGuestApplicable
     */
    private $minGuestApplicable = null;

    /**
     * Indicates the maximum number of guests at this rate.
     *
     * @var int $maxGuestApplicable
     */
    private $maxGuestApplicable = null;

    /**
     * Indicates the minimum length of stay.
     *
     * @var int $minLOS
     */
    private $minLOS = null;

    /**
     * Indicates the maximum length of stay.
     *
     * @var int $maxLOS
     */
    private $maxLOS = null;

    /**
     * Day of week guest is required to stay over in order to be eligible for this rate.
     *
     * @var string $stayOverDate
     */
    private $stayOverDate = null;

    /**
     * When true, indicates the amounts are provided in an alternate currency. When false, indicates the amounts are provided in the primary currency. This may be used to indicate that the currency provided is different from the requested or stored currency.
     *
     * @var bool $alternateCurrencyInd
     */
    private $alternateCurrencyInd = null;

    /**
     * The type of the amount being charged, e.g. per night. Refer to OpenTravel Code List Charge Type Code (CHG).
     *
     * @var string $chargeType
     */
    private $chargeType = null;

    /**
     * A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     *
     * @var string $quoteID
     */
    private $quoteID = null;

    /**
     * The base amount charged for the accommodation or service per unit of time (ex: Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included in the base amount. Note that any additional charges should itemized in the other elements.
     *
     * @var \Recranet\OTA\TotalType $base
     */
    private $base = null;

    /**
     * A collection of charges that apply to for additional occupants, guests or service users (over and above the rate's MaxGuest Applicable).
     *
     * @var \Recranet\OTA\AmountType\AdditionalGuestAmountsAType $additionalGuestAmounts
     */
    private $additionalGuestAmounts = null;

    /**
     * A collection of Fees.
     *
     * @var \Recranet\OTA\FeeType[] $fees
     */
    private $fees = null;

    /**
     * A collection of Cancellation Policies.
     *
     * @var \Recranet\OTA\CancelPenaltiesType $cancelPolicies
     */
    private $cancelPolicies = null;

    /**
     * A collection of Payment Policies.
     *
     * @var \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[] $paymentPolicies
     */
    private $paymentPolicies = null;

    /**
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @var \Recranet\OTA\AmountType\DiscountAType[] $discount
     */
    private $discount = [
        
    ];

    /**
     * The total amount charged for this rate including additional occupant amounts and fees.
     *
     * @var \Recranet\OTA\TotalType $total
     */
    private $total = null;

    /**
     * Description of the rate associated with the various monetary amounts and policies.
     *
     * @var \Recranet\OTA\ParagraphType $rateDescription
     */
    private $rateDescription = null;

    /**
     * Collection of additional charges.
     *
     * @var \Recranet\OTA\HotelAdditionalChargesType $additionalCharges
     */
    private $additionalCharges = null;

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;
        return $this;
    }

    /**
     * Gets as ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @return string
     */
    public function getAgeQualifyingCode()
    {
        return $this->ageQualifyingCode;
    }

    /**
     * Sets a new ageQualifyingCode
     *
     * Defines an age range or age category of a guest (e.g., under 21, over 65, teen, infant). Refer to OpenTravel Code List Age Qualifying Code (AQC).
     *
     * @param string $ageQualifyingCode
     * @return self
     */
    public function setAgeQualifyingCode($ageQualifyingCode)
    {
        $this->ageQualifyingCode = $ageQualifyingCode;
        return $this;
    }

    /**
     * Gets as minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Sets a new minAge
     *
     * MinAge: The minimum age to qualify for AgeQualifyingCode.
     *
     * @param int $minAge
     * @return self
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;
        return $this;
    }

    /**
     * Gets as maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Sets a new maxAge
     *
     * Max Age: The maximum age to qualify for AgeQualifyingCode.
     *
     * @param int $maxAge
     * @return self
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
        return $this;
    }

    /**
     * Gets as ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @return string
     */
    public function getAgeTimeUnit()
    {
        return $this->ageTimeUnit;
    }

    /**
     * Sets a new ageTimeUnit
     *
     * TimeUnit : Qualifier for Age.
     *
     * @param string $ageTimeUnit
     * @return self
     */
    public function setAgeTimeUnit($ageTimeUnit)
    {
        $this->ageTimeUnit = $ageTimeUnit;
        return $this;
    }

    /**
     * Gets as ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @return string
     */
    public function getAgeBucket()
    {
        return $this->ageBucket;
    }

    /**
     * Sets a new ageBucket
     *
     * Defines the age range category or bucket a guest can be booked into.
     *
     * @param string $ageBucket
     * @return self
     */
    public function setAgeBucket($ageBucket)
    {
        $this->ageBucket = $ageBucket;
        return $this;
    }

    /**
     * Gets as guaranteedInd
     *
     * @return bool
     */
    public function getGuaranteedInd()
    {
        return $this->guaranteedInd;
    }

    /**
     * Sets a new guaranteedInd
     *
     * @param bool $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;
        return $this;
    }

    /**
     * Gets as numberOfUnits
     *
     * @return int
     */
    public function getNumberOfUnits()
    {
        return $this->numberOfUnits;
    }

    /**
     * Sets a new numberOfUnits
     *
     * @param int $numberOfUnits
     * @return self
     */
    public function setNumberOfUnits($numberOfUnits)
    {
        $this->numberOfUnits = $numberOfUnits;
        return $this;
    }

    /**
     * Gets as rateTimeUnit
     *
     * Indicates the time unit for the rate.
     *
     * @return string
     */
    public function getRateTimeUnit()
    {
        return $this->rateTimeUnit;
    }

    /**
     * Sets a new rateTimeUnit
     *
     * Indicates the time unit for the rate.
     *
     * @param string $rateTimeUnit
     * @return self
     */
    public function setRateTimeUnit($rateTimeUnit)
    {
        $this->rateTimeUnit = $rateTimeUnit;
        return $this;
    }

    /**
     * Gets as unitMultiplier
     *
     * Indicates the number of rate time units such as "3 Days".
     *
     * @return int
     */
    public function getUnitMultiplier()
    {
        return $this->unitMultiplier;
    }

    /**
     * Sets a new unitMultiplier
     *
     * Indicates the number of rate time units such as "3 Days".
     *
     * @param int $unitMultiplier
     * @return self
     */
    public function setUnitMultiplier($unitMultiplier)
    {
        $this->unitMultiplier = $unitMultiplier;
        return $this;
    }

    /**
     * Gets as minGuestApplicable
     *
     * Indicates the minimum number of guests at this rate.
     *
     * @return int
     */
    public function getMinGuestApplicable()
    {
        return $this->minGuestApplicable;
    }

    /**
     * Sets a new minGuestApplicable
     *
     * Indicates the minimum number of guests at this rate.
     *
     * @param int $minGuestApplicable
     * @return self
     */
    public function setMinGuestApplicable($minGuestApplicable)
    {
        $this->minGuestApplicable = $minGuestApplicable;
        return $this;
    }

    /**
     * Gets as maxGuestApplicable
     *
     * Indicates the maximum number of guests at this rate.
     *
     * @return int
     */
    public function getMaxGuestApplicable()
    {
        return $this->maxGuestApplicable;
    }

    /**
     * Sets a new maxGuestApplicable
     *
     * Indicates the maximum number of guests at this rate.
     *
     * @param int $maxGuestApplicable
     * @return self
     */
    public function setMaxGuestApplicable($maxGuestApplicable)
    {
        $this->maxGuestApplicable = $maxGuestApplicable;
        return $this;
    }

    /**
     * Gets as minLOS
     *
     * Indicates the minimum length of stay.
     *
     * @return int
     */
    public function getMinLOS()
    {
        return $this->minLOS;
    }

    /**
     * Sets a new minLOS
     *
     * Indicates the minimum length of stay.
     *
     * @param int $minLOS
     * @return self
     */
    public function setMinLOS($minLOS)
    {
        $this->minLOS = $minLOS;
        return $this;
    }

    /**
     * Gets as maxLOS
     *
     * Indicates the maximum length of stay.
     *
     * @return int
     */
    public function getMaxLOS()
    {
        return $this->maxLOS;
    }

    /**
     * Sets a new maxLOS
     *
     * Indicates the maximum length of stay.
     *
     * @param int $maxLOS
     * @return self
     */
    public function setMaxLOS($maxLOS)
    {
        $this->maxLOS = $maxLOS;
        return $this;
    }

    /**
     * Gets as stayOverDate
     *
     * Day of week guest is required to stay over in order to be eligible for this rate.
     *
     * @return string
     */
    public function getStayOverDate()
    {
        return $this->stayOverDate;
    }

    /**
     * Sets a new stayOverDate
     *
     * Day of week guest is required to stay over in order to be eligible for this rate.
     *
     * @param string $stayOverDate
     * @return self
     */
    public function setStayOverDate($stayOverDate)
    {
        $this->stayOverDate = $stayOverDate;
        return $this;
    }

    /**
     * Gets as alternateCurrencyInd
     *
     * When true, indicates the amounts are provided in an alternate currency. When false, indicates the amounts are provided in the primary currency. This may be used to indicate that the currency provided is different from the requested or stored currency.
     *
     * @return bool
     */
    public function getAlternateCurrencyInd()
    {
        return $this->alternateCurrencyInd;
    }

    /**
     * Sets a new alternateCurrencyInd
     *
     * When true, indicates the amounts are provided in an alternate currency. When false, indicates the amounts are provided in the primary currency. This may be used to indicate that the currency provided is different from the requested or stored currency.
     *
     * @param bool $alternateCurrencyInd
     * @return self
     */
    public function setAlternateCurrencyInd($alternateCurrencyInd)
    {
        $this->alternateCurrencyInd = $alternateCurrencyInd;
        return $this;
    }

    /**
     * Gets as chargeType
     *
     * The type of the amount being charged, e.g. per night. Refer to OpenTravel Code List Charge Type Code (CHG).
     *
     * @return string
     */
    public function getChargeType()
    {
        return $this->chargeType;
    }

    /**
     * Sets a new chargeType
     *
     * The type of the amount being charged, e.g. per night. Refer to OpenTravel Code List Charge Type Code (CHG).
     *
     * @param string $chargeType
     * @return self
     */
    public function setChargeType($chargeType)
    {
        $this->chargeType = $chargeType;
        return $this;
    }

    /**
     * Gets as quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A reference string used to match a query, with rates, to a given time. This is useful for matching prices within a given quote period.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;
        return $this;
    }

    /**
     * Gets as base
     *
     * The base amount charged for the accommodation or service per unit of time (ex: Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included in the base amount. Note that any additional charges should itemized in the other elements.
     *
     * @return \Recranet\OTA\TotalType
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Sets a new base
     *
     * The base amount charged for the accommodation or service per unit of time (ex: Nightly, Weekly, etc). If TaxInclusive is set to True, then taxes are included in the base amount. Note that any additional charges should itemized in the other elements.
     *
     * @param \Recranet\OTA\TotalType $base
     * @return self
     */
    public function setBase(?\Recranet\OTA\TotalType $base = null)
    {
        $this->base = $base;
        return $this;
    }

    /**
     * Gets as additionalGuestAmounts
     *
     * A collection of charges that apply to for additional occupants, guests or service users (over and above the rate's MaxGuest Applicable).
     *
     * @return \Recranet\OTA\AmountType\AdditionalGuestAmountsAType
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->additionalGuestAmounts;
    }

    /**
     * Sets a new additionalGuestAmounts
     *
     * A collection of charges that apply to for additional occupants, guests or service users (over and above the rate's MaxGuest Applicable).
     *
     * @param \Recranet\OTA\AmountType\AdditionalGuestAmountsAType $additionalGuestAmounts
     * @return self
     */
    public function setAdditionalGuestAmounts(?\Recranet\OTA\AmountType\AdditionalGuestAmountsAType $additionalGuestAmounts = null)
    {
        $this->additionalGuestAmounts = $additionalGuestAmounts;
        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of Fees.
     *
     * @return self
     * @param \Recranet\OTA\FeeType $fee
     */
    public function addToFees(\Recranet\OTA\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * A collection of Fees.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of Fees.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of Fees.
     *
     * @return \Recranet\OTA\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of Fees.
     *
     * @param \Recranet\OTA\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as cancelPolicies
     *
     * A collection of Cancellation Policies.
     *
     * @return \Recranet\OTA\CancelPenaltiesType
     */
    public function getCancelPolicies()
    {
        return $this->cancelPolicies;
    }

    /**
     * Sets a new cancelPolicies
     *
     * A collection of Cancellation Policies.
     *
     * @param \Recranet\OTA\CancelPenaltiesType $cancelPolicies
     * @return self
     */
    public function setCancelPolicies(?\Recranet\OTA\CancelPenaltiesType $cancelPolicies = null)
    {
        $this->cancelPolicies = $cancelPolicies;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * A collection of Payment Policies.
     *
     * @return self
     * @param \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToPaymentPolicies(\Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->paymentPolicies[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentPolicies($index)
    {
        return isset($this->paymentPolicies[$index]);
    }

    /**
     * unset paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentPolicies($index)
    {
        unset($this->paymentPolicies[$index]);
    }

    /**
     * Gets as paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @return \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getPaymentPolicies()
    {
        return $this->paymentPolicies;
    }

    /**
     * Sets a new paymentPolicies
     *
     * A collection of Payment Policies.
     *
     * @param \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[] $paymentPolicies
     * @return self
     */
    public function setPaymentPolicies(array $paymentPolicies = null)
    {
        $this->paymentPolicies = $paymentPolicies;
        return $this;
    }

    /**
     * Adds as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return self
     * @param \Recranet\OTA\AmountType\DiscountAType $discount
     */
    public function addToDiscount(\Recranet\OTA\AmountType\DiscountAType $discount)
    {
        $this->discount[] = $discount;
        return $this;
    }

    /**
     * isset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @return \Recranet\OTA\AmountType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Discount percentage and/or Amount, code and textual reason for discount
     *
     * @param \Recranet\OTA\AmountType\DiscountAType[] $discount
     * @return self
     */
    public function setDiscount(array $discount = null)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total amount charged for this rate including additional occupant amounts and fees.
     *
     * @return \Recranet\OTA\TotalType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total amount charged for this rate including additional occupant amounts and fees.
     *
     * @param \Recranet\OTA\TotalType $total
     * @return self
     */
    public function setTotal(?\Recranet\OTA\TotalType $total = null)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as rateDescription
     *
     * Description of the rate associated with the various monetary amounts and policies.
     *
     * @return \Recranet\OTA\ParagraphType
     */
    public function getRateDescription()
    {
        return $this->rateDescription;
    }

    /**
     * Sets a new rateDescription
     *
     * Description of the rate associated with the various monetary amounts and policies.
     *
     * @param \Recranet\OTA\ParagraphType $rateDescription
     * @return self
     */
    public function setRateDescription(?\Recranet\OTA\ParagraphType $rateDescription = null)
    {
        $this->rateDescription = $rateDescription;
        return $this;
    }

    /**
     * Gets as additionalCharges
     *
     * Collection of additional charges.
     *
     * @return \Recranet\OTA\HotelAdditionalChargesType
     */
    public function getAdditionalCharges()
    {
        return $this->additionalCharges;
    }

    /**
     * Sets a new additionalCharges
     *
     * Collection of additional charges.
     *
     * @param \Recranet\OTA\HotelAdditionalChargesType $additionalCharges
     * @return self
     */
    public function setAdditionalCharges(?\Recranet\OTA\HotelAdditionalChargesType $additionalCharges = null)
    {
        $this->additionalCharges = $additionalCharges;
        return $this;
    }
}

