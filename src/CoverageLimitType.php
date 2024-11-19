<?php

namespace Recranet\OTA;

/**
 * Class representing CoverageLimitType
 *
 * Information about the insurance coverage limits that applies to all covered travelers
 * XSD Type: CoverageLimitType
 */
class CoverageLimitType
{
    /**
     * Indicates a level of coverage for the plan benefit e.g. Silver, Gold, Platinum
     *
     * @var string $coverageLevel
     */
    private $coverageLevel = null;

    /**
     * Identifies the type of coverage or benefit requested by the covered individuals. Refer to OpenTravel Code List Coverage Type (COV).
     *
     * @var string $coverageType
     */
    private $coverageType = null;

    /**
     * Flag to indicate unlimited coverage for the specific benefit is available/requested.
     *
     * @var bool $unlimitedCoverage
     */
    private $unlimitedCoverage = null;

    /**
     * Flag to indicate coverage type is available/requested.
     *
     * @var bool $covered
     */
    private $covered = null;

    /**
     * Indicates the starting date.
     *
     * @var \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @var \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @var bool $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * The amount of out-of-pocket expense a covered individual must pay per claim.
     *
     * @var \Recranet\OTA\CoverageLimitType\DeductibleAType $deductible
     */
    private $deductible = null;

    /**
     * The maximum currency amount of available coverage for the policy.
     *
     * @var \Recranet\OTA\CoverageLimitType\PolicyLimitAType $policyLimit
     */
    private $policyLimit = null;

    /**
     * The maximum amount of available coverage for a covered individual.
     *
     * @var \Recranet\OTA\CoverageLimitType\IndividualLimitAType $individualLimit
     */
    private $individualLimit = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as coverageLevel
     *
     * Indicates a level of coverage for the plan benefit e.g. Silver, Gold, Platinum
     *
     * @return string
     */
    public function getCoverageLevel()
    {
        return $this->coverageLevel;
    }

    /**
     * Sets a new coverageLevel
     *
     * Indicates a level of coverage for the plan benefit e.g. Silver, Gold, Platinum
     *
     * @param string $coverageLevel
     * @return self
     */
    public function setCoverageLevel($coverageLevel)
    {
        $this->coverageLevel = $coverageLevel;
        return $this;
    }

    /**
     * Gets as coverageType
     *
     * Identifies the type of coverage or benefit requested by the covered individuals. Refer to OpenTravel Code List Coverage Type (COV).
     *
     * @return string
     */
    public function getCoverageType()
    {
        return $this->coverageType;
    }

    /**
     * Sets a new coverageType
     *
     * Identifies the type of coverage or benefit requested by the covered individuals. Refer to OpenTravel Code List Coverage Type (COV).
     *
     * @param string $coverageType
     * @return self
     */
    public function setCoverageType($coverageType)
    {
        $this->coverageType = $coverageType;
        return $this;
    }

    /**
     * Gets as unlimitedCoverage
     *
     * Flag to indicate unlimited coverage for the specific benefit is available/requested.
     *
     * @return bool
     */
    public function getUnlimitedCoverage()
    {
        return $this->unlimitedCoverage;
    }

    /**
     * Sets a new unlimitedCoverage
     *
     * Flag to indicate unlimited coverage for the specific benefit is available/requested.
     *
     * @param bool $unlimitedCoverage
     * @return self
     */
    public function setUnlimitedCoverage($unlimitedCoverage)
    {
        $this->unlimitedCoverage = $unlimitedCoverage;
        return $this;
    }

    /**
     * Gets as covered
     *
     * Flag to indicate coverage type is available/requested.
     *
     * @return bool
     */
    public function getCovered()
    {
        return $this->covered;
    }

    /**
     * Sets a new covered
     *
     * Flag to indicate coverage type is available/requested.
     *
     * @param bool $covered
     * @return self
     */
    public function setCovered($covered)
    {
        $this->covered = $covered;
        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;
        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;
        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return bool
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param bool $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;
        return $this;
    }

    /**
     * Gets as deductible
     *
     * The amount of out-of-pocket expense a covered individual must pay per claim.
     *
     * @return \Recranet\OTA\CoverageLimitType\DeductibleAType
     */
    public function getDeductible()
    {
        return $this->deductible;
    }

    /**
     * Sets a new deductible
     *
     * The amount of out-of-pocket expense a covered individual must pay per claim.
     *
     * @param \Recranet\OTA\CoverageLimitType\DeductibleAType $deductible
     * @return self
     */
    public function setDeductible(?\Recranet\OTA\CoverageLimitType\DeductibleAType $deductible = null)
    {
        $this->deductible = $deductible;
        return $this;
    }

    /**
     * Gets as policyLimit
     *
     * The maximum currency amount of available coverage for the policy.
     *
     * @return \Recranet\OTA\CoverageLimitType\PolicyLimitAType
     */
    public function getPolicyLimit()
    {
        return $this->policyLimit;
    }

    /**
     * Sets a new policyLimit
     *
     * The maximum currency amount of available coverage for the policy.
     *
     * @param \Recranet\OTA\CoverageLimitType\PolicyLimitAType $policyLimit
     * @return self
     */
    public function setPolicyLimit(?\Recranet\OTA\CoverageLimitType\PolicyLimitAType $policyLimit = null)
    {
        $this->policyLimit = $policyLimit;
        return $this;
    }

    /**
     * Gets as individualLimit
     *
     * The maximum amount of available coverage for a covered individual.
     *
     * @return \Recranet\OTA\CoverageLimitType\IndividualLimitAType
     */
    public function getIndividualLimit()
    {
        return $this->individualLimit;
    }

    /**
     * Sets a new individualLimit
     *
     * The maximum amount of available coverage for a covered individual.
     *
     * @param \Recranet\OTA\CoverageLimitType\IndividualLimitAType $individualLimit
     * @return self
     */
    public function setIndividualLimit(?\Recranet\OTA\CoverageLimitType\IndividualLimitAType $individualLimit = null)
    {
        $this->individualLimit = $individualLimit;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

