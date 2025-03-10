<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleAdditionalDriverRequirementsType
 *
 * The Vehicle Additional Driver Requirements Type is used to define information about additional drivers that are in place with regard to the renting of a vehicle. These are requirement that typically must be met by the renter before a rental may commence.
 * XSD Type: VehicleAdditionalDriverRequirementsType
 */
class VehicleAdditionalDriverRequirementsType
{
    /**
     * Collection of descriptions about the different requirements related to additional drivers.
     *
     * @var \Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType $addlDriverInfos
     */
    private $addlDriverInfos = null;

    /**
     * Gets as addlDriverInfos
     *
     * Collection of descriptions about the different requirements related to additional drivers.
     *
     * @return \Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType
     */
    public function getAddlDriverInfos()
    {
        return $this->addlDriverInfos;
    }

    /**
     * Sets a new addlDriverInfos
     *
     * Collection of descriptions about the different requirements related to additional drivers.
     *
     * @param \Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType $addlDriverInfos
     * @return self
     */
    public function setAddlDriverInfos(?\Recranet\OTA\Type\VehicleAdditionalDriverRequirementsType\AddlDriverInfosAType $addlDriverInfos = null)
    {
        $this->addlDriverInfos = $addlDriverInfos;
        return $this;
    }
}

