<?php

namespace Recranet\OTA;

/**
 * Class representing ServiceRPHsType
 *
 * A collection of unsigned integers that reference the RPH (Reference Place holder) attribute in the Service object. The ServiceRPH attribute in the Service object is an indexing attribute that identifies the services attached to a specific guest or to the reservation.
 * XSD Type: ServiceRPHsType
 */
class ServiceRPHsType
{
    /**
     * This is a reference placeholder used as an index for a service to be associated with this stay
     *
     * @var \Recranet\OTA\ServiceRPHsType\ServiceRPHAType[] $serviceRPH
     */
    private $serviceRPH = [
        
    ];

    /**
     * Adds as serviceRPH
     *
     * This is a reference placeholder used as an index for a service to be associated with this stay
     *
     * @return self
     * @param \Recranet\OTA\ServiceRPHsType\ServiceRPHAType $serviceRPH
     */
    public function addToServiceRPH(\Recranet\OTA\ServiceRPHsType\ServiceRPHAType $serviceRPH)
    {
        $this->serviceRPH[] = $serviceRPH;
        return $this;
    }

    /**
     * isset serviceRPH
     *
     * This is a reference placeholder used as an index for a service to be associated with this stay
     *
     * @param int|string $index
     * @return bool
     */
    public function issetServiceRPH($index)
    {
        return isset($this->serviceRPH[$index]);
    }

    /**
     * unset serviceRPH
     *
     * This is a reference placeholder used as an index for a service to be associated with this stay
     *
     * @param int|string $index
     * @return void
     */
    public function unsetServiceRPH($index)
    {
        unset($this->serviceRPH[$index]);
    }

    /**
     * Gets as serviceRPH
     *
     * This is a reference placeholder used as an index for a service to be associated with this stay
     *
     * @return \Recranet\OTA\ServiceRPHsType\ServiceRPHAType[]
     */
    public function getServiceRPH()
    {
        return $this->serviceRPH;
    }

    /**
     * Sets a new serviceRPH
     *
     * This is a reference placeholder used as an index for a service to be associated with this stay
     *
     * @param \Recranet\OTA\ServiceRPHsType\ServiceRPHAType[] $serviceRPH
     * @return self
     */
    public function setServiceRPH(array $serviceRPH)
    {
        $this->serviceRPH = $serviceRPH;
        return $this;
    }
}

