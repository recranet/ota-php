<?php

namespace Recranet\OTA\Type\PTCFareBreakdownType;

/**
 * Class representing FareBasisCodesAType
 */
class FareBasisCodesAType
{
    /**
     * Fare basis code for the price for this PTC
     *
     * @var \Recranet\OTA\Type\FareBasisCodeType[] $fareBasisCode
     */
    private $fareBasisCode = [
        
    ];

    /**
     * Adds as fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @return self
     * @param \Recranet\OTA\Type\FareBasisCodeType $fareBasisCode
     */
    public function addToFareBasisCode(\Recranet\OTA\Type\FareBasisCodeType $fareBasisCode)
    {
        $this->fareBasisCode[] = $fareBasisCode;
        return $this;
    }

    /**
     * isset fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFareBasisCode($index)
    {
        return isset($this->fareBasisCode[$index]);
    }

    /**
     * unset fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFareBasisCode($index)
    {
        unset($this->fareBasisCode[$index]);
    }

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @return \Recranet\OTA\Type\FareBasisCodeType[]
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code for the price for this PTC
     *
     * @param \Recranet\OTA\Type\FareBasisCodeType[] $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(array $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;
        return $this;
    }
}

