<?php

namespace Recranet\OTA\Type\CodeListFeeType;

/**
 * Class representing QualifiersAType
 */
class QualifiersAType
{
    /**
     * Fee starting date/ time.
     * Example: 2013-01-13
     *
     * @var \DateTime $effectiveDateTime
     */
    private $effectiveDateTime = null;

    /**
     * Fee ending date/ time.
     * Example: 2013-01-16
     *
     * @var \DateTime $expireDateTime
     */
    private $expireDateTime = null;

    /**
     * Maximum age of applicability.
     * Example: 62
     *
     * @var int $maxAge
     */
    private $maxAge = null;

    /**
     * Minimum age of applicability.
     * Example: 21
     *
     * @var int $minAge
     */
    private $minAge = null;

    /**
     * Charge unit information.
     *
     * @var \Recranet\OTA\Type\CodeListFeeType\QualifiersAType\ChargeUnitAType $chargeUnit
     */
    private $chargeUnit = null;

    /**
     * Gets as effectiveDateTime
     *
     * Fee starting date/ time.
     * Example: 2013-01-13
     *
     * @return \DateTime
     */
    public function getEffectiveDateTime()
    {
        return $this->effectiveDateTime;
    }

    /**
     * Sets a new effectiveDateTime
     *
     * Fee starting date/ time.
     * Example: 2013-01-13
     *
     * @param \DateTime $effectiveDateTime
     * @return self
     */
    public function setEffectiveDateTime(\DateTime $effectiveDateTime)
    {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * Gets as expireDateTime
     *
     * Fee ending date/ time.
     * Example: 2013-01-16
     *
     * @return \DateTime
     */
    public function getExpireDateTime()
    {
        return $this->expireDateTime;
    }

    /**
     * Sets a new expireDateTime
     *
     * Fee ending date/ time.
     * Example: 2013-01-16
     *
     * @param \DateTime $expireDateTime
     * @return self
     */
    public function setExpireDateTime(\DateTime $expireDateTime)
    {
        $this->expireDateTime = $expireDateTime;
        return $this;
    }

    /**
     * Gets as maxAge
     *
     * Maximum age of applicability.
     * Example: 62
     *
     * @return int
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Sets a new maxAge
     *
     * Maximum age of applicability.
     * Example: 62
     *
     * @param int $maxAge
     * @return self
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;
        return $this;
    }

    /**
     * Gets as minAge
     *
     * Minimum age of applicability.
     * Example: 21
     *
     * @return int
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Sets a new minAge
     *
     * Minimum age of applicability.
     * Example: 21
     *
     * @param int $minAge
     * @return self
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;
        return $this;
    }

    /**
     * Gets as chargeUnit
     *
     * Charge unit information.
     *
     * @return \Recranet\OTA\Type\CodeListFeeType\QualifiersAType\ChargeUnitAType
     */
    public function getChargeUnit()
    {
        return $this->chargeUnit;
    }

    /**
     * Sets a new chargeUnit
     *
     * Charge unit information.
     *
     * @param \Recranet\OTA\Type\CodeListFeeType\QualifiersAType\ChargeUnitAType $chargeUnit
     * @return self
     */
    public function setChargeUnit(?\Recranet\OTA\Type\CodeListFeeType\QualifiersAType\ChargeUnitAType $chargeUnit = null)
    {
        $this->chargeUnit = $chargeUnit;
        return $this;
    }
}

