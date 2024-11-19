<?php

namespace Recranet\OTA\TravelerInfoSummaryType\PriceRequestInformationAType;

/**
 * Class representing FareRestrictionPrefAType
 */
class FareRestrictionPrefAType
{
    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Identifies the type of fare restriction, such as None, Advance Purchase and Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @var string $fareRestriction
     */
    private $fareRestriction = null;

    /**
     * A date that is associated to the fare restriction.
     *
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as fareRestriction
     *
     * Identifies the type of fare restriction, such as None, Advance Purchase and Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @return string
     */
    public function getFareRestriction()
    {
        return $this->fareRestriction;
    }

    /**
     * Sets a new fareRestriction
     *
     * Identifies the type of fare restriction, such as None, Advance Purchase and Change Penalties. Refer to OpenTravel Code List Fare Restriction (FAR).
     *
     * @param string $fareRestriction
     * @return self
     */
    public function setFareRestriction($fareRestriction)
    {
        $this->fareRestriction = $fareRestriction;
        return $this;
    }

    /**
     * Gets as date
     *
     * A date that is associated to the fare restriction.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * A date that is associated to the fare restriction.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }
}

