<?php

namespace Recranet\OTA\Type\RateUploadType\AdditionalGuestAmountsAType;

/**
 * Class representing AdditionalGuestAmountAType
 */
class AdditionalGuestAmountAType
{
    /**
     * Indicates whether taxes are included when figuring the additional occupant amounts.
     *
     * @var bool $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     *
     * @var int $maxAdditionalGuests
     */
    private $maxAdditionalGuests = null;

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
     * Used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to OpenTravel Code List Fee Tax Type (FTT).
     *
     * @var string $code
     */
    private $code = null;

    /**
     * A monetary amount.
     *
     * @var float $amount
     */
    private $amount = null;

    /**
     * Currency code.
     * Implementer: This is an ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Decimal places for currency code.
     * Implementer: This is an ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
     *
     * @var int $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent must be a zero value).
     *
     * @var float $percent
     */
    private $percent = null;

    /**
     * @var \Recranet\OTA\Type\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Text description of the AdditionalGuestAmount in a given language.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $addlGuestAmtDescription
     */
    private $addlGuestAmtDescription = [
        
    ];

    /**
     * Gets as taxInclusive
     *
     * Indicates whether taxes are included when figuring the additional occupant amounts.
     *
     * @return bool
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * Indicates whether taxes are included when figuring the additional occupant amounts.
     *
     * @param bool $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;
        return $this;
    }

    /**
     * Gets as maxAdditionalGuests
     *
     * Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     *
     * @return int
     */
    public function getMaxAdditionalGuests()
    {
        return $this->maxAdditionalGuests;
    }

    /**
     * Sets a new maxAdditionalGuests
     *
     * Increase the base rate by the additional occupant amount for each additional occupant of the same age group up to this maximum number of occupants of this age group.
     *
     * @param int $maxAdditionalGuests
     * @return self
     */
    public function setMaxAdditionalGuests($maxAdditionalGuests)
    {
        $this->maxAdditionalGuests = $maxAdditionalGuests;
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
     * Gets as type
     *
     * Used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
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
     * Used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
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
     * Gets as code
     *
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to OpenTravel Code List Fee Tax Type (FTT).
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
     * Code identifying the fee (e.g.,agency fee, municipality fee). Refer to OpenTravel Code List Fee Tax Type (FTT).
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
     * Gets as amount
     *
     * A monetary amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * A monetary amount.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * Currency code.
     * Implementer: This is an ISO 4217 (3) alpha character code that specifies a monetary unit.
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
     * Currency code.
     * Implementer: This is an ISO 4217 (3) alpha character code that specifies a monetary unit.
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
     * Decimal places for currency code.
     * Implementer: This is an ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
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
     * Decimal places for currency code.
     * Implementer: This is an ISO 4217 standard "minor unit" for the number of decimal places for a particular currency.
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
     * Gets as percent
     *
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent must be a zero value).
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * Fee percentage; if zero, assume use of the Amount attribute (Amount or Percent must be a zero value).
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Gets as taxes
     *
     * @return \Recranet\OTA\Type\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * @param \Recranet\OTA\Type\TaxesType $taxes
     * @return self
     */
    public function setTaxes(?\Recranet\OTA\Type\TaxesType $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Adds as addlGuestAmtDescription
     *
     * Text description of the AdditionalGuestAmount in a given language.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $addlGuestAmtDescription
     */
    public function addToAddlGuestAmtDescription(\Recranet\OTA\Type\ParagraphType $addlGuestAmtDescription)
    {
        $this->addlGuestAmtDescription[] = $addlGuestAmtDescription;
        return $this;
    }

    /**
     * isset addlGuestAmtDescription
     *
     * Text description of the AdditionalGuestAmount in a given language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddlGuestAmtDescription($index)
    {
        return isset($this->addlGuestAmtDescription[$index]);
    }

    /**
     * unset addlGuestAmtDescription
     *
     * Text description of the AdditionalGuestAmount in a given language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddlGuestAmtDescription($index)
    {
        unset($this->addlGuestAmtDescription[$index]);
    }

    /**
     * Gets as addlGuestAmtDescription
     *
     * Text description of the AdditionalGuestAmount in a given language.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getAddlGuestAmtDescription()
    {
        return $this->addlGuestAmtDescription;
    }

    /**
     * Sets a new addlGuestAmtDescription
     *
     * Text description of the AdditionalGuestAmount in a given language.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $addlGuestAmtDescription
     * @return self
     */
    public function setAddlGuestAmtDescription(array $addlGuestAmtDescription = null)
    {
        $this->addlGuestAmtDescription = $addlGuestAmtDescription;
        return $this;
    }
}

