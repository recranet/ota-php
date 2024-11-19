<?php

namespace Recranet\OTA\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType;

/**
 * Class representing CoverageFeesAType
 */
class CoverageFeesAType
{
    /**
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @var \Recranet\OTA\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[] $coverageFee
     */
    private $coverageFee = [
        
    ];

    /**
     * Adds as coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee
     */
    public function addToCoverageFee(\Recranet\OTA\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee)
    {
        $this->coverageFee[] = $coverageFee;
        return $this;
    }

    /**
     * isset coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverageFee($index)
    {
        return isset($this->coverageFee[$index]);
    }

    /**
     * unset coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverageFee($index)
    {
        unset($this->coverageFee[$index]);
    }

    /**
     * Gets as coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @return \Recranet\OTA\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     */
    public function getCoverageFee()
    {
        return $this->coverageFee;
    }

    /**
     * Sets a new coverageFee
     *
     * Provides information on one specific charge for this coverage, insurance or waiver.
     *
     * @param \Recranet\OTA\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[] $coverageFee
     * @return self
     */
    public function setCoverageFee(array $coverageFee)
    {
        $this->coverageFee = $coverageFee;
        return $this;
    }
}

