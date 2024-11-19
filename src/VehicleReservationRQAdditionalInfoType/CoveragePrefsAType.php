<?php

namespace Recranet\OTA\VehicleReservationRQAdditionalInfoType;

/**
 * Class representing CoveragePrefsAType
 */
class CoveragePrefsAType
{
    /**
     * Specific preference for a type of coverage.
     *
     * @var \Recranet\OTA\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePref
     */
    private $coveragePref = [
        
    ];

    /**
     * Adds as coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @return self
     * @param \Recranet\OTA\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref
     */
    public function addToCoveragePref(\Recranet\OTA\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref)
    {
        $this->coveragePref[] = $coveragePref;
        return $this;
    }

    /**
     * isset coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoveragePref($index)
    {
        return isset($this->coveragePref[$index]);
    }

    /**
     * unset coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoveragePref($index)
    {
        unset($this->coveragePref[$index]);
    }

    /**
     * Gets as coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @return \Recranet\OTA\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     */
    public function getCoveragePref()
    {
        return $this->coveragePref;
    }

    /**
     * Sets a new coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @param \Recranet\OTA\VehicleReservationRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[] $coveragePref
     * @return self
     */
    public function setCoveragePref(array $coveragePref)
    {
        $this->coveragePref = $coveragePref;
        return $this;
    }
}
