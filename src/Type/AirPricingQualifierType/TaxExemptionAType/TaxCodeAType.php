<?php

namespace Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType;

/**
 * Class representing TaxCodeAType
 */
class TaxCodeAType
{
    /**
     * The exempt tax code.
     * Select a pre-defined value from the list, or use the "Other_" value in combination with the @ExtDesignatorCode.
     *
     * @var \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType $designatorCode
     */
    private $designatorCode = null;

    /**
     * Tax type(s) associated with the designator code.
     *
     * @var string[] $taxType
     */
    private $taxType = [
        
    ];

    /**
     * Gets as designatorCode
     *
     * The exempt tax code.
     * Select a pre-defined value from the list, or use the "Other_" value in combination with the @ExtDesignatorCode.
     *
     * @return \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType
     */
    public function getDesignatorCode()
    {
        return $this->designatorCode;
    }

    /**
     * Sets a new designatorCode
     *
     * The exempt tax code.
     * Select a pre-defined value from the list, or use the "Other_" value in combination with the @ExtDesignatorCode.
     *
     * @param \Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType $designatorCode
     * @return self
     */
    public function setDesignatorCode(\Recranet\OTA\Type\AirPricingQualifierType\TaxExemptionAType\TaxCodeAType\DesignatorCodeAType $designatorCode)
    {
        $this->designatorCode = $designatorCode;
        return $this;
    }

    /**
     * Adds as taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @return self
     * @param string $taxType
     */
    public function addToTaxType($taxType)
    {
        $this->taxType[] = $taxType;
        return $this;
    }

    /**
     * isset taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxType($index)
    {
        return isset($this->taxType[$index]);
    }

    /**
     * unset taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxType($index)
    {
        unset($this->taxType[$index]);
    }

    /**
     * Gets as taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @return string[]
     */
    public function getTaxType()
    {
        return $this->taxType;
    }

    /**
     * Sets a new taxType
     *
     * Tax type(s) associated with the designator code.
     *
     * @param string[] $taxType
     * @return self
     */
    public function setTaxType(array $taxType = null)
    {
        $this->taxType = $taxType;
        return $this;
    }
}

