<?php

namespace Recranet\OTA;

/**
 * Class representing CustomerPrimaryAdditionalType
 *
 * Information on the one primary driver and, optionally, several additional drivers. This may be used to provide a frequent renter number.
 * XSD Type: CustomerPrimaryAdditionalType
 */
class CustomerPrimaryAdditionalType
{
    /**
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @var \Recranet\OTA\CustomerPrimaryAdditionalType\PrimaryAType $primary
     */
    private $primary = null;

    /**
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @var \Recranet\OTA\CustomerPrimaryAdditionalType\AdditionalAType[] $additional
     */
    private $additional = [
        
    ];

    /**
     * Gets as primary
     *
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @return \Recranet\OTA\CustomerPrimaryAdditionalType\PrimaryAType
     */
    public function getPrimary()
    {
        return $this->primary;
    }

    /**
     * Sets a new primary
     *
     * Information on the primary driver, possibly including frequent renter number.
     *
     * @param \Recranet\OTA\CustomerPrimaryAdditionalType\PrimaryAType $primary
     * @return self
     */
    public function setPrimary(\Recranet\OTA\CustomerPrimaryAdditionalType\PrimaryAType $primary)
    {
        $this->primary = $primary;
        return $this;
    }

    /**
     * Adds as additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @return self
     * @param \Recranet\OTA\CustomerPrimaryAdditionalType\AdditionalAType $additional
     */
    public function addToAdditional(\Recranet\OTA\CustomerPrimaryAdditionalType\AdditionalAType $additional)
    {
        $this->additional[] = $additional;
        return $this;
    }

    /**
     * isset additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditional($index)
    {
        return isset($this->additional[$index]);
    }

    /**
     * unset additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditional($index)
    {
        unset($this->additional[$index]);
    }

    /**
     * Gets as additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @return \Recranet\OTA\CustomerPrimaryAdditionalType\AdditionalAType[]
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * Sets a new additional
     *
     * Information on additional driver(s), possibly including frequent renter number.
     *
     * @param \Recranet\OTA\CustomerPrimaryAdditionalType\AdditionalAType[] $additional
     * @return self
     */
    public function setAdditional(array $additional = null)
    {
        $this->additional = $additional;
        return $this;
    }
}

