<?php

namespace Recranet\OTA\Type\VehicleLocationAdditionalFeesType\TaxesAType;

/**
 * Class representing TaxAType
 */
class TaxAType
{
    /**
     * @var string $taxCode
     */
    private $taxCode = null;

    /**
     * @var float $percentage
     */
    private $percentage = null;

    /**
     * Information on this one specific tax, including a description, etc.
     *
     * @var \Recranet\OTA\Type\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as taxCode
     *
     * @return string
     */
    public function getTaxCode()
    {
        return $this->taxCode;
    }

    /**
     * Sets a new taxCode
     *
     * @param string $taxCode
     * @return self
     */
    public function setTaxCode($taxCode)
    {
        $this->taxCode = $taxCode;
        return $this;
    }

    /**
     * Gets as percentage
     *
     * @return float
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * @param float $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Gets as info
     *
     * Information on this one specific tax, including a description, etc.
     *
     * @return \Recranet\OTA\Type\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * Information on this one specific tax, including a description, etc.
     *
     * @param \Recranet\OTA\Type\FormattedTextType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\Type\FormattedTextType $info = null)
    {
        $this->info = $info;
        return $this;
    }
}

