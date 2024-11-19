<?php

namespace Recranet\OTA\AffiliationInfoType;

/**
 * Class representing DistribSystemsAType
 */
class DistribSystemsAType
{
    /**
     * The DistribSystem objects defining the affiliated distribution systems for a hotel.
     *
     * @var \Recranet\OTA\AffiliationInfoType\DistribSystemsAType\DistribSystemAType $distribSystem
     */
    private $distribSystem = null;

    /**
     * Gets as distribSystem
     *
     * The DistribSystem objects defining the affiliated distribution systems for a hotel.
     *
     * @return \Recranet\OTA\AffiliationInfoType\DistribSystemsAType\DistribSystemAType
     */
    public function getDistribSystem()
    {
        return $this->distribSystem;
    }

    /**
     * Sets a new distribSystem
     *
     * The DistribSystem objects defining the affiliated distribution systems for a hotel.
     *
     * @param \Recranet\OTA\AffiliationInfoType\DistribSystemsAType\DistribSystemAType $distribSystem
     * @return self
     */
    public function setDistribSystem(\Recranet\OTA\AffiliationInfoType\DistribSystemsAType\DistribSystemAType $distribSystem)
    {
        $this->distribSystem = $distribSystem;
        return $this;
    }
}

