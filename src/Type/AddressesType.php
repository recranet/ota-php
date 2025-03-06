<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AddressesType
 *
 * The HotelAddress class defines the addresses at this hotel facility.
 * XSD Type: AddressesType
 */
class AddressesType
{
    /**
     * @var \Recranet\OTA\Type\AddressesType\AddressAType[] $address
     */
    private $address = [
        
    ];

    /**
     * Adds as address
     *
     * @return self
     * @param \Recranet\OTA\Type\AddressesType\AddressAType $address
     */
    public function addToAddress(\Recranet\OTA\Type\AddressesType\AddressAType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return \Recranet\OTA\Type\AddressesType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param \Recranet\OTA\Type\AddressesType\AddressAType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }
}

