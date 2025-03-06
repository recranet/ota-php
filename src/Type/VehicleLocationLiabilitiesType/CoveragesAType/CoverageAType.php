<?php

namespace Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType;

/**
 * Class representing CoverageAType
 */
class CoverageAType
{
    /**
     * Used to describe the specific coverage type or waiver type. Refer to OpenTravel Code List Vehicle Coverage Type (VCT).
     *
     * @var string $type
     */
    private $type = null;

    /**
     * If true, this type of coverage must be purchased. If false, it is optional.
     *
     * @var bool $requiredInd
     */
    private $requiredInd = null;

    /**
     * General information about this specific coverage, insurance or fees.
     *
     * @var \Recranet\OTA\Type\FormattedTextType $coverageInfo
     */
    private $coverageInfo = null;

    /**
     * A collection of fees associated with this coverage, insurance or waiver. There may be multiple charges if the charge varies by vehicle type.
     *
     * @var \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[] $coverageFees
     */
    private $coverageFees = null;

    /**
     * Gets as type
     *
     * Used to describe the specific coverage type or waiver type. Refer to OpenTravel Code List Vehicle Coverage Type (VCT).
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
     * Used to describe the specific coverage type or waiver type. Refer to OpenTravel Code List Vehicle Coverage Type (VCT).
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
     * Gets as requiredInd
     *
     * If true, this type of coverage must be purchased. If false, it is optional.
     *
     * @return bool
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * If true, this type of coverage must be purchased. If false, it is optional.
     *
     * @param bool $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;
        return $this;
    }

    /**
     * Gets as coverageInfo
     *
     * General information about this specific coverage, insurance or fees.
     *
     * @return \Recranet\OTA\Type\FormattedTextType
     */
    public function getCoverageInfo()
    {
        return $this->coverageInfo;
    }

    /**
     * Sets a new coverageInfo
     *
     * General information about this specific coverage, insurance or fees.
     *
     * @param \Recranet\OTA\Type\FormattedTextType $coverageInfo
     * @return self
     */
    public function setCoverageInfo(?\Recranet\OTA\Type\FormattedTextType $coverageInfo = null)
    {
        $this->coverageInfo = $coverageInfo;
        return $this;
    }

    /**
     * Adds as coverageFee
     *
     * A collection of fees associated with this coverage, insurance or waiver. There may be multiple charges if the charge varies by vehicle type.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee
     */
    public function addToCoverageFees(\Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee)
    {
        $this->coverageFees[] = $coverageFee;
        return $this;
    }

    /**
     * isset coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There may be multiple charges if the charge varies by vehicle type.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCoverageFees($index)
    {
        return isset($this->coverageFees[$index]);
    }

    /**
     * unset coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There may be multiple charges if the charge varies by vehicle type.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCoverageFees($index)
    {
        unset($this->coverageFees[$index]);
    }

    /**
     * Gets as coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There may be multiple charges if the charge varies by vehicle type.
     *
     * @return \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     */
    public function getCoverageFees()
    {
        return $this->coverageFees;
    }

    /**
     * Sets a new coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There may be multiple charges if the charge varies by vehicle type.
     *
     * @param \Recranet\OTA\Type\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[] $coverageFees
     * @return self
     */
    public function setCoverageFees(array $coverageFees = null)
    {
        $this->coverageFees = $coverageFees;
        return $this;
    }
}

