<?php

namespace Recranet\OTA\Type\RoomStayType\RoomRatesAType\RoomRateAType\RestrictionsAType;

/**
 * Class representing RestrictionAType
 */
class RestrictionAType
{
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
     * A collection of day of week restrictions.
     *
     * @var \Recranet\OTA\Type\DOWRestrictionsType $dOWRestrictions
     */
    private $dOWRestrictions = null;

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
     * Gets as dOWRestrictions
     *
     * A collection of day of week restrictions.
     *
     * @return \Recranet\OTA\Type\DOWRestrictionsType
     */
    public function getDOWRestrictions()
    {
        return $this->dOWRestrictions;
    }

    /**
     * Sets a new dOWRestrictions
     *
     * A collection of day of week restrictions.
     *
     * @param \Recranet\OTA\Type\DOWRestrictionsType $dOWRestrictions
     * @return self
     */
    public function setDOWRestrictions(\Recranet\OTA\Type\DOWRestrictionsType $dOWRestrictions)
    {
        $this->dOWRestrictions = $dOWRestrictions;
        return $this;
    }
}

