<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyAnimalType
 *
 * Animal type, weight with ontology reference.
 * XSD Type: OntologyAnimalType
 */
class OntologyAnimalType
{
    /**
     * Animal quantity.
     * Example: 1
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Service animal indicator.
     * Example: true
     * Implementer: If true, one or more travelers has a service animal.
     *
     * @var bool $serviceAnimalInd
     */
    private $serviceAnimalInd = null;

    /**
     * Animal details.
     *
     * @var \Recranet\OTA\OntologyAnimalType\DetailAType[] $detail
     */
    private $detail = [
        
    ];

    /**
     * Gets as quantity
     *
     * Animal quantity.
     * Example: 1
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Animal quantity.
     * Example: 1
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as serviceAnimalInd
     *
     * Service animal indicator.
     * Example: true
     * Implementer: If true, one or more travelers has a service animal.
     *
     * @return bool
     */
    public function getServiceAnimalInd()
    {
        return $this->serviceAnimalInd;
    }

    /**
     * Sets a new serviceAnimalInd
     *
     * Service animal indicator.
     * Example: true
     * Implementer: If true, one or more travelers has a service animal.
     *
     * @param bool $serviceAnimalInd
     * @return self
     */
    public function setServiceAnimalInd($serviceAnimalInd)
    {
        $this->serviceAnimalInd = $serviceAnimalInd;
        return $this;
    }

    /**
     * Adds as detail
     *
     * Animal details.
     *
     * @return self
     * @param \Recranet\OTA\OntologyAnimalType\DetailAType $detail
     */
    public function addToDetail(\Recranet\OTA\OntologyAnimalType\DetailAType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * Animal details.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * Animal details.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * Animal details.
     *
     * @return \Recranet\OTA\OntologyAnimalType\DetailAType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * Animal details.
     *
     * @param \Recranet\OTA\OntologyAnimalType\DetailAType[] $detail
     * @return self
     */
    public function setDetail(array $detail = null)
    {
        $this->detail = $detail;
        return $this;
    }
}

