<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CodeListFeeType
 *
 * Fees associated with a code item.
 * XSD Type: CodeListFeeType
 */
class CodeListFeeType
{
    /**
     * Mandatory fee indicator.
     * Example: true
     * Implementer: If true, the fee is mandatory.
     *
     * @var bool $mandatoryInd
     */
    private $mandatoryInd = null;

    /**
     * Taxes included in fee indicator.
     * Example: true
     * Implementer: If true, taxes have been included in the fee amount.
     *
     * @var bool $taxInclusiveInd
     */
    private $taxInclusiveInd = null;

    /**
     * Fee taxable indicator.
     * Example: true
     * Implementer: If true, the fee is subject to tax.
     *
     * @var bool $taxableInd
     */
    private $taxableInd = null;

    /**
     * Amount determination method.
     * Example: Inclusive
     * Note: This is used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
     *
     * @var string $determinationMethod
     */
    private $determinationMethod = null;

    /**
     * Fee ID.
     * Example: 1
     * Implementer: This is a unique ID for this set of fee information that may be referenced as an associated fee for schedule information.
     *
     * @var string $feeRPH
     */
    private $feeRPH = null;

    /**
     * Fee amount or percentage.
     *
     * @var \Recranet\OTA\Type\CodeListFeeType\AmountAType $amount
     */
    private $amount = null;

    /**
     * Fee type.
     *
     * @var \Recranet\OTA\Type\ListFeeTaxType $type
     */
    private $type = null;

    /**
     * Fee description.
     * Implementer: The associated language identifier for this descriptive information is specified in the @Language attribute.
     *
     * @var string[] $description
     */
    private $description = [
        
    ];

    /**
     * Fee qualifier(s).
     *
     * @var \Recranet\OTA\Type\CodeListFeeType\QualifiersAType $qualifiers
     */
    private $qualifiers = null;

    /**
     * Fee taxes.
     *
     * @var \Recranet\OTA\Type\CodeListFeeType\TaxesAType[] $taxes
     */
    private $taxes = [
        
    ];

    /**
     * Gets as mandatoryInd
     *
     * Mandatory fee indicator.
     * Example: true
     * Implementer: If true, the fee is mandatory.
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
     * Mandatory fee indicator.
     * Example: true
     * Implementer: If true, the fee is mandatory.
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
     * Gets as taxInclusiveInd
     *
     * Taxes included in fee indicator.
     * Example: true
     * Implementer: If true, taxes have been included in the fee amount.
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
     * Taxes included in fee indicator.
     * Example: true
     * Implementer: If true, taxes have been included in the fee amount.
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
     * Gets as taxableInd
     *
     * Fee taxable indicator.
     * Example: true
     * Implementer: If true, the fee is subject to tax.
     *
     * @return bool
     */
    public function getTaxableInd()
    {
        return $this->taxableInd;
    }

    /**
     * Sets a new taxableInd
     *
     * Fee taxable indicator.
     * Example: true
     * Implementer: If true, the fee is subject to tax.
     *
     * @param bool $taxableInd
     * @return self
     */
    public function setTaxableInd($taxableInd)
    {
        $this->taxableInd = $taxableInd;
        return $this;
    }

    /**
     * Gets as determinationMethod
     *
     * Amount determination method.
     * Example: Inclusive
     * Note: This is used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
     *
     * @return string
     */
    public function getDeterminationMethod()
    {
        return $this->determinationMethod;
    }

    /**
     * Sets a new determinationMethod
     *
     * Amount determination method.
     * Example: Inclusive
     * Note: This is used to indicate if the amount is inclusive or exclusive of other charges, such as taxes, or is cumulative (amounts have been added to each other).
     *
     * @param string $determinationMethod
     * @return self
     */
    public function setDeterminationMethod($determinationMethod)
    {
        $this->determinationMethod = $determinationMethod;
        return $this;
    }

    /**
     * Gets as feeRPH
     *
     * Fee ID.
     * Example: 1
     * Implementer: This is a unique ID for this set of fee information that may be referenced as an associated fee for schedule information.
     *
     * @return string
     */
    public function getFeeRPH()
    {
        return $this->feeRPH;
    }

    /**
     * Sets a new feeRPH
     *
     * Fee ID.
     * Example: 1
     * Implementer: This is a unique ID for this set of fee information that may be referenced as an associated fee for schedule information.
     *
     * @param string $feeRPH
     * @return self
     */
    public function setFeeRPH($feeRPH)
    {
        $this->feeRPH = $feeRPH;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Fee amount or percentage.
     *
     * @return \Recranet\OTA\Type\CodeListFeeType\AmountAType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Fee amount or percentage.
     *
     * @param \Recranet\OTA\Type\CodeListFeeType\AmountAType $amount
     * @return self
     */
    public function setAmount(?\Recranet\OTA\Type\CodeListFeeType\AmountAType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as type
     *
     * Fee type.
     *
     * @return \Recranet\OTA\Type\ListFeeTaxType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Fee type.
     *
     * @param \Recranet\OTA\Type\ListFeeTaxType $type
     * @return self
     */
    public function setType(?\Recranet\OTA\Type\ListFeeTaxType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as description
     *
     * Fee description.
     * Implementer: The associated language identifier for this descriptive information is specified in the @Language attribute.
     *
     * @return self
     * @param string $description
     */
    public function addToDescription($description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Fee description.
     * Implementer: The associated language identifier for this descriptive information is specified in the @Language attribute.
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
     * Fee description.
     * Implementer: The associated language identifier for this descriptive information is specified in the @Language attribute.
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
     * Fee description.
     * Implementer: The associated language identifier for this descriptive information is specified in the @Language attribute.
     *
     * @return string[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Fee description.
     * Implementer: The associated language identifier for this descriptive information is specified in the @Language attribute.
     *
     * @param string[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as qualifiers
     *
     * Fee qualifier(s).
     *
     * @return \Recranet\OTA\Type\CodeListFeeType\QualifiersAType
     */
    public function getQualifiers()
    {
        return $this->qualifiers;
    }

    /**
     * Sets a new qualifiers
     *
     * Fee qualifier(s).
     *
     * @param \Recranet\OTA\Type\CodeListFeeType\QualifiersAType $qualifiers
     * @return self
     */
    public function setQualifiers(?\Recranet\OTA\Type\CodeListFeeType\QualifiersAType $qualifiers = null)
    {
        $this->qualifiers = $qualifiers;
        return $this;
    }

    /**
     * Adds as taxes
     *
     * Fee taxes.
     *
     * @return self
     * @param \Recranet\OTA\Type\CodeListFeeType\TaxesAType $taxes
     */
    public function addToTaxes(\Recranet\OTA\Type\CodeListFeeType\TaxesAType $taxes)
    {
        $this->taxes[] = $taxes;
        return $this;
    }

    /**
     * isset taxes
     *
     * Fee taxes.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * Fee taxes.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * Fee taxes.
     *
     * @return \Recranet\OTA\Type\CodeListFeeType\TaxesAType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Fee taxes.
     *
     * @param \Recranet\OTA\Type\CodeListFeeType\TaxesAType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }
}

