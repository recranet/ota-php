<?php

namespace Recranet\OTA;

/**
 * Class representing OffLocationServiceCoreType
 *
 * The OffLocationServiceCoreType complex type defines the core data that is used to describe an off-location service.
 * XSD Type: OffLocationServiceCoreType
 */
class OffLocationServiceCoreType
{
    /**
     * @var string $type
     */
    private $type = null;

    /**
     * The address for vehicle delivery or collection, or for customer pickup or drop-off.
     *
     * @var \Recranet\OTA\OffLocationServiceCoreType\AddressAType $address
     */
    private $address = null;

    /**
     * Gets as type
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
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as address
     *
     * The address for vehicle delivery or collection, or for customer pickup or drop-off.
     *
     * @return \Recranet\OTA\OffLocationServiceCoreType\AddressAType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The address for vehicle delivery or collection, or for customer pickup or drop-off.
     *
     * @param \Recranet\OTA\OffLocationServiceCoreType\AddressAType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\OffLocationServiceCoreType\AddressAType $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

