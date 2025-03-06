<?php

namespace Recranet\OTA\Type;

/**
 * Class representing PhonesType
 *
 * Provides detailed phone information.
 * XSD Type: PhonesType
 */
class PhonesType
{
    /**
     * Used to pass detailed phone information.
     *
     * @var \Recranet\OTA\Type\PhonesType\PhoneAType[] $phone
     */
    private $phone = [
        
    ];

    /**
     * Adds as phone
     *
     * Used to pass detailed phone information.
     *
     * @return self
     * @param \Recranet\OTA\Type\PhonesType\PhoneAType $phone
     */
    public function addToPhone(\Recranet\OTA\Type\PhonesType\PhoneAType $phone)
    {
        $this->phone[] = $phone;
        return $this;
    }

    /**
     * isset phone
     *
     * Used to pass detailed phone information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhone($index)
    {
        return isset($this->phone[$index]);
    }

    /**
     * unset phone
     *
     * Used to pass detailed phone information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhone($index)
    {
        unset($this->phone[$index]);
    }

    /**
     * Gets as phone
     *
     * Used to pass detailed phone information.
     *
     * @return \Recranet\OTA\Type\PhonesType\PhoneAType[]
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * Used to pass detailed phone information.
     *
     * @param \Recranet\OTA\Type\PhonesType\PhoneAType[] $phone
     * @return self
     */
    public function setPhone(array $phone)
    {
        $this->phone = $phone;
        return $this;
    }
}

