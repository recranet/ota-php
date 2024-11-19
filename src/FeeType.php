<?php

namespace Recranet\OTA;

/**
 * Class representing FeeType
 *
 * Used for non-tax fees and charges (e.g. service charges) .
 * XSD Type: FeeType
 */
class FeeType
{
    /**
     * Indicates whether taxes are included when figuring the fees.
     *
     * @var bool $taxInclusiveInd
     */
    private $taxInclusiveInd = null;

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
     * When true, indicates the fee is mandatory. When false, the fee is not mandatory.
     *
     * @var bool $mandatoryInd
     */
    private $mandatoryInd = null;

    /**
     * An index code to identify an instance in a collection of like items.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @var string $chargeUnit
     */
    private $chargeUnit = null;

    /**
     * This is the timeframe used to apply the charge during the course of the reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @var string $chargeFrequency
     */
    private $chargeFrequency = null;

    /**
     * Number of units permitted before charges are applied (e.g., more than 4 persons).
     *
     * @var int $chargeUnitExempt
     */
    private $chargeUnitExempt = null;

    /**
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @var int $chargeFrequencyExempt
     */
    private $chargeFrequencyExempt = null;

    /**
     * Maximum number of Units for which the charge will be applied (e.g., waive charges above 10 rooms).
     *
     * @var int $maxChargeUnitApplies
     */
    private $maxChargeUnitApplies = null;

    /**
     * Maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
     *
     * @var int $maxChargeFrequencyApplies
     */
    private $maxChargeFrequencyApplies = null;

    /**
     * When true, indicates that the fee is subject to tax.
     *
     * @var bool $taxableIndicator
     */
    private $taxableIndicator = null;

    /**
     * Minimum age of applicability.
     *
     * @var int $minAge
     */
    private $minAge = null;

    /**
     * Maximum age of applicability.
     *
     * @var int $maxAge
     */
    private $maxAge = null;

    /**
     * Used for taxes on the associated fee.
     *
     * @var \Recranet\OTA\TaxesType $taxes
     */
    private $taxes = null;

    /**
     * Text description of the fees in a given language.
     *
     * @var \Recranet\OTA\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as taxInclusiveInd
     *
     * Indicates whether taxes are included when figuring the fees.
     *
     * @return bool
     */
    public function getTaxInclusiveInd()
    {
        return $this->taxInclusiveInd;
    }

    /**
     * Sets a new taxInclusiveInd
     *
     * Indicates whether taxes are included when figuring the fees.
     *
     * @param bool $taxInclusiveInd
     * @return self
     */
    public function setTaxInclusiveInd($taxInclusiveInd)
    {
        $this->taxInclusiveInd = $taxInclusiveInd;
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
     * Gets as mandatoryInd
     *
     * When true, indicates the fee is mandatory. When false, the fee is not mandatory.
     *
     * @return bool
     */
    public function getMandatoryInd()
    {
        return $this->mandatoryInd;
    }

    /**
     * Sets a new mandatoryInd
     *
     * When true, indicates the fee is mandatory. When false, the fee is not mandatory.
     *
     * @param bool $mandatoryInd
     * @return self
     */
    public function setMandatoryInd($mandatoryInd)
    {
        $this->mandatoryInd = $mandatoryInd;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * An index code to identify an instance in a collection of like items.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * An index code to identify an instance in a collection of like items.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as chargeUnit
     *
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeUnit()
    {
        return $this->chargeUnit;
    }

    /**
     * Sets a new chargeUnit
     *
     * This is the unit for which the charge applies (e.g. room, person, seat). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeUnit
     * @return self
     */
    public function setChargeUnit($chargeUnit)
    {
        $this->chargeUnit = $chargeUnit;
        return $this;
    }

    /**
     * Gets as chargeFrequency
     *
     * This is the timeframe used to apply the charge during the course of the reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @return string
     */
    public function getChargeFrequency()
    {
        return $this->chargeFrequency;
    }

    /**
     * Sets a new chargeFrequency
     *
     * This is the timeframe used to apply the charge during the course of the reservation (e.g. Daily, Weekly, Stay). Refer to OpenTravel Code List Charge Type (CHG).
     *
     * @param string $chargeFrequency
     * @return self
     */
    public function setChargeFrequency($chargeFrequency)
    {
        $this->chargeFrequency = $chargeFrequency;
        return $this;
    }

    /**
     * Gets as chargeUnitExempt
     *
     * Number of units permitted before charges are applied (e.g., more than 4 persons).
     *
     * @return int
     */
    public function getChargeUnitExempt()
    {
        return $this->chargeUnitExempt;
    }

    /**
     * Sets a new chargeUnitExempt
     *
     * Number of units permitted before charges are applied (e.g., more than 4 persons).
     *
     * @param int $chargeUnitExempt
     * @return self
     */
    public function setChargeUnitExempt($chargeUnitExempt)
    {
        $this->chargeUnitExempt = $chargeUnitExempt;
        return $this;
    }

    /**
     * Gets as chargeFrequencyExempt
     *
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @return int
     */
    public function getChargeFrequencyExempt()
    {
        return $this->chargeFrequencyExempt;
    }

    /**
     * Sets a new chargeFrequencyExempt
     *
     * ChargeFrequency exemptions before charges are applied (e.g. after 2 nights).
     *
     * @param int $chargeFrequencyExempt
     * @return self
     */
    public function setChargeFrequencyExempt($chargeFrequencyExempt)
    {
        $this->chargeFrequencyExempt = $chargeFrequencyExempt;
        return $this;
    }

    /**
     * Gets as maxChargeUnitApplies
     *
     * Maximum number of Units for which the charge will be applied (e.g., waive charges above 10 rooms).
     *
     * @return int
     */
    public function getMaxChargeUnitApplies()
    {
        return $this->maxChargeUnitApplies;
    }

    /**
     * Sets a new maxChargeUnitApplies
     *
     * Maximum number of Units for which the charge will be applied (e.g., waive charges above 10 rooms).
     *
     * @param int $maxChargeUnitApplies
     * @return self
     */
    public function setMaxChargeUnitApplies($maxChargeUnitApplies)
    {
        $this->maxChargeUnitApplies = $maxChargeUnitApplies;
        return $this;
    }

    /**
     * Gets as maxChargeFrequencyApplies
     *
     * Maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
     *
     * @return int
     */
    public function getMaxChargeFrequencyApplies()
    {
        return $this->maxChargeFrequencyApplies;
    }

    /**
     * Sets a new maxChargeFrequencyApplies
     *
     * Maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
     *
     * @param int $maxChargeFrequencyApplies
     * @return self
     */
    public function setMaxChargeFrequencyApplies($maxChargeFrequencyApplies)
    {
        $this->maxChargeFrequencyApplies = $maxChargeFrequencyApplies;
        return $this;
    }

    /**
     * Gets as taxableIndicator
     *
     * When true, indicates that the fee is subject to tax.
     *
     * @return bool
     */
    public function getTaxableIndicator()
    {
        return $this->taxableIndicator;
    }

    /**
     * Sets a new taxableIndicator
     *
     * When true, indicates that the fee is subject to tax.
     *
     * @param bool $taxableIndicator
     * @return self
     */
    public function setTaxableIndicator($taxableIndicator)
    {
        $this->taxableIndicator = $taxableIndicator;
        return $this;
    }

    /**
     * Gets as minAge
     *
     * Minimum age of applicability.
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
     * Minimum age of applicability.
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
     * Maximum age of applicability.
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
     * Maximum age of applicability.
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
     * Gets as taxes
     *
     * Used for taxes on the associated fee.
     *
     * @return \Recranet\OTA\TaxesType
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Used for taxes on the associated fee.
     *
     * @param \Recranet\OTA\TaxesType $taxes
     * @return self
     */
    public function setTaxes(?\Recranet\OTA\TaxesType $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Adds as description
     *
     * Text description of the fees in a given language.
     *
     * @return self
     * @param \Recranet\OTA\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Text description of the fees in a given language.
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
     * Text description of the fees in a given language.
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
     * Text description of the fees in a given language.
     *
     * @return \Recranet\OTA\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Text description of the fees in a given language.
     *
     * @param \Recranet\OTA\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
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

