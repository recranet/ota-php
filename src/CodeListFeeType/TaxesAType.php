<?php

namespace Recranet\OTA\CodeListFeeType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
{
    /**
     * Mandatory tax indicator.
     * Example: true
     * Implementer: If true, the tax is mandatory.
     *
     * @var bool $mandatoryInd
     */
    private $mandatoryInd = null;

    /**
     * Tax reference ID.
     *
     * @var string $taxRPH
     */
    private $taxRPH = null;

    /**
     * Tax amount or percentage information.
     *
     * @var \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType $amount
     */
    private $amount = null;

    /**
     * Tax type.
     *
     * @var \Recranet\OTA\ListFeeTaxType $type
     */
    private $type = null;

    /**
     * Tax description.
     * Implementer: The associated language identifier for this descriptive information is specified in the @Language attribute.
     *
     * @var string[] $description
     */
    private $description = [
        
    ];

    /**
     * Tax qualifier information.
     *
     * @var \Recranet\OTA\CodeListFeeType\TaxesAType\QualifiersAType $qualifiers
     */
    private $qualifiers = null;

    /**
     * Gets as mandatoryInd
     *
     * Mandatory tax indicator.
     * Example: true
     * Implementer: If true, the tax is mandatory.
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
     * Mandatory tax indicator.
     * Example: true
     * Implementer: If true, the tax is mandatory.
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
     * Gets as taxRPH
     *
     * Tax reference ID.
     *
     * @return string
     */
    public function getTaxRPH()
    {
        return $this->taxRPH;
    }

    /**
     * Sets a new taxRPH
     *
     * Tax reference ID.
     *
     * @param string $taxRPH
     * @return self
     */
    public function setTaxRPH($taxRPH)
    {
        $this->taxRPH = $taxRPH;
        return $this;
    }

    /**
     * Gets as amount
     *
     * Tax amount or percentage information.
     *
     * @return \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Tax amount or percentage information.
     *
     * @param \Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType $amount
     * @return self
     */
    public function setAmount(?\Recranet\OTA\CodeListFeeType\TaxesAType\AmountAType $amount = null)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Gets as type
     *
     * Tax type.
     *
     * @return \Recranet\OTA\ListFeeTaxType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Tax type.
     *
     * @param \Recranet\OTA\ListFeeTaxType $type
     * @return self
     */
    public function setType(?\Recranet\OTA\ListFeeTaxType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as description
     *
     * Tax description.
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
     * Tax description.
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
     * Tax description.
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
     * Tax description.
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
     * Tax description.
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
     * Tax qualifier information.
     *
     * @return \Recranet\OTA\CodeListFeeType\TaxesAType\QualifiersAType
     */
    public function getQualifiers()
    {
        return $this->qualifiers;
    }

    /**
     * Sets a new qualifiers
     *
     * Tax qualifier information.
     *
     * @param \Recranet\OTA\CodeListFeeType\TaxesAType\QualifiersAType $qualifiers
     * @return self
     */
    public function setQualifiers(?\Recranet\OTA\CodeListFeeType\TaxesAType\QualifiersAType $qualifiers = null)
    {
        $this->qualifiers = $qualifiers;
        return $this;
    }
}

