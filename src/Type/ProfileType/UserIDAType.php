<?php

namespace Recranet\OTA\Type\ProfileType;

use Recranet\OTA\Type\UniqueIDType;

/**
 * Class representing UserIDAType
 */
class UserIDAType extends UniqueIDType
{
    /**
     * The personal identification number (password) for this user ID.
     *
     * @var string $pinNumber
     */
    private $pinNumber = null;

    /**
     * Gets as pinNumber
     *
     * The personal identification number (password) for this user ID.
     *
     * @return string
     */
    public function getPinNumber()
    {
        return $this->pinNumber;
    }

    /**
     * Sets a new pinNumber
     *
     * The personal identification number (password) for this user ID.
     *
     * @param string $pinNumber
     * @return self
     */
    public function setPinNumber($pinNumber)
    {
        $this->pinNumber = $pinNumber;
        return $this;
    }
}

