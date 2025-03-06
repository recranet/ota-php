<?php

namespace Recranet\OTA\Type\VehicleSegmentAdditionalInfoType;

/**
 * Class representing PricedCoveragesAType
 */
class PricedCoveragesAType
{
    /**
     * One specific coverage associated with this reservation.
     *
     * @var \Recranet\OTA\Type\CoveragePricedType[] $pricedCoverage
     */
    private $pricedCoverage = [
        
    ];

    /**
     * Adds as pricedCoverage
     *
     * One specific coverage associated with this reservation.
     *
     * @return self
     * @param \Recranet\OTA\Type\CoveragePricedType $pricedCoverage
     */
    public function addToPricedCoverage(\Recranet\OTA\Type\CoveragePricedType $pricedCoverage)
    {
        $this->pricedCoverage[] = $pricedCoverage;
        return $this;
    }

    /**
     * isset pricedCoverage
     *
     * One specific coverage associated with this reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPricedCoverage($index)
    {
        return isset($this->pricedCoverage[$index]);
    }

    /**
     * unset pricedCoverage
     *
     * One specific coverage associated with this reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPricedCoverage($index)
    {
        unset($this->pricedCoverage[$index]);
    }

    /**
     * Gets as pricedCoverage
     *
     * One specific coverage associated with this reservation.
     *
     * @return \Recranet\OTA\Type\CoveragePricedType[]
     */
    public function getPricedCoverage()
    {
        return $this->pricedCoverage;
    }

    /**
     * Sets a new pricedCoverage
     *
     * One specific coverage associated with this reservation.
     *
     * @param \Recranet\OTA\Type\CoveragePricedType[] $pricedCoverage
     * @return self
     */
    public function setPricedCoverage(array $pricedCoverage)
    {
        $this->pricedCoverage = $pricedCoverage;
        return $this;
    }
}

