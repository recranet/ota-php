<?php

namespace Recranet\OTA\Type\AirSearchPrefsType;

use Recranet\OTA\Type\CompanyNamePrefType;

/**
 * Class representing VendorPrefAType
 */
class VendorPrefAType extends CompanyNamePrefType
{
    /**
     * When true, flights for other airlines in an alliance with the specified carrier code may be returned.
     *
     * @var bool $allianceAllowedInd
     */
    private $allianceAllowedInd = null;

    /**
     * When true, flights for other airlines in a loyalty program with the specified carrier code may be returned.
     *
     * @var bool $loyaltyAllowedInd
     */
    private $loyaltyAllowedInd = null;

    /**
     * When true, only award fares should be returned for this airline.
     *
     * @var bool $awardOnlyFareInd
     */
    private $awardOnlyFareInd = null;

    /**
     * Gets as allianceAllowedInd
     *
     * When true, flights for other airlines in an alliance with the specified carrier code may be returned.
     *
     * @return bool
     */
    public function getAllianceAllowedInd()
    {
        return $this->allianceAllowedInd;
    }

    /**
     * Sets a new allianceAllowedInd
     *
     * When true, flights for other airlines in an alliance with the specified carrier code may be returned.
     *
     * @param bool $allianceAllowedInd
     * @return self
     */
    public function setAllianceAllowedInd($allianceAllowedInd)
    {
        $this->allianceAllowedInd = $allianceAllowedInd;
        return $this;
    }

    /**
     * Gets as loyaltyAllowedInd
     *
     * When true, flights for other airlines in a loyalty program with the specified carrier code may be returned.
     *
     * @return bool
     */
    public function getLoyaltyAllowedInd()
    {
        return $this->loyaltyAllowedInd;
    }

    /**
     * Sets a new loyaltyAllowedInd
     *
     * When true, flights for other airlines in a loyalty program with the specified carrier code may be returned.
     *
     * @param bool $loyaltyAllowedInd
     * @return self
     */
    public function setLoyaltyAllowedInd($loyaltyAllowedInd)
    {
        $this->loyaltyAllowedInd = $loyaltyAllowedInd;
        return $this;
    }

    /**
     * Gets as awardOnlyFareInd
     *
     * When true, only award fares should be returned for this airline.
     *
     * @return bool
     */
    public function getAwardOnlyFareInd()
    {
        return $this->awardOnlyFareInd;
    }

    /**
     * Sets a new awardOnlyFareInd
     *
     * When true, only award fares should be returned for this airline.
     *
     * @param bool $awardOnlyFareInd
     * @return self
     */
    public function setAwardOnlyFareInd($awardOnlyFareInd)
    {
        $this->awardOnlyFareInd = $awardOnlyFareInd;
        return $this;
    }
}

