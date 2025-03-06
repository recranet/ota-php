<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleAgeRequirementsType
 *
 * The Vehicle Location Requirements Type is used to define information on the age requirements that are in place with regard to the renting of a vehicle. These are requirement that typically must be met by the renter before a rental may commence.
 * XSD Type: VehicleAgeRequirementsType
 */
class VehicleAgeRequirementsType
{
    /**
     * Information associated with the age requirements of renting a vehicle.
     *
     * @var \Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType $age
     */
    private $age = null;

    /**
     * Gets as age
     *
     * Information associated with the age requirements of renting a vehicle.
     *
     * @return \Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Information associated with the age requirements of renting a vehicle.
     *
     * @param \Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType $age
     * @return self
     */
    public function setAge(?\Recranet\OTA\Type\VehicleAgeRequirementsType\AgeAType $age = null)
    {
        $this->age = $age;
        return $this;
    }
}

