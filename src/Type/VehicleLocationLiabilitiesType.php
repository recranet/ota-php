<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleLocationLiabilitiesType
 *
 * The Vehicle Location Liabilities Type is used to define information on the financial liabilities assumed by the renter when renting from this facility, along with optional coverage to reduce the financial liabilities.
 * XSD Type: VehicleLocationLiabilitiesType
 */
class VehicleLocationLiabilitiesType
{
    /**
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @var \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[] $coverages
     */
    private $coverages = null;

    /**
     * General information about the fiancial liabilities associated with the rental of a vehicle from the associated rental facility.
     *
     * @var \Recranet\OTA\Type\FormattedTextType $info
     */
    private $info = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as coverage
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType $coverage
     */
    public function addToCoverages(\Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType $coverage)
    {
        $this->coverages[] = $coverage;
        return $this;
    }

    /**
     * isset coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverages($index)
    {
        return isset($this->coverages[$index]);
    }

    /**
     * unset coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverages($index)
    {
        unset($this->coverages[$index]);
    }

    /**
     * Gets as coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @return \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[]
     */
    public function getCoverages()
    {
        return $this->coverages;
    }

    /**
     * Sets a new coverages
     *
     * A collection of coverage, insurance and waiver liability descriptions.
     *
     * @param \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType[] $coverages
     * @return self
     */
    public function setCoverages(array $coverages = null)
    {
        $this->coverages = $coverages;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the fiancial liabilities associated with the rental of a vehicle from the associated rental facility.
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
     * General information about the fiancial liabilities associated with the rental of a vehicle from the associated rental facility.
     *
     * @param \Recranet\OTA\Type\FormattedTextType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\Type\FormattedTextType $info = null)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

