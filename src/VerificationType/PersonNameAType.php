<?php

namespace Recranet\OTA\VerificationType;

use Recranet\OTA\PersonNameType;

/**
 * Class representing PersonNameAType
 */
class PersonNameAType extends PersonNameType
{
    /**
     * When true the full name is not provided.
     *
     * @var bool $partialName
     */
    private $partialName = null;

    /**
     * Gets as partialName
     *
     * When true the full name is not provided.
     *
     * @return bool
     */
    public function getPartialName()
    {
        return $this->partialName;
    }

    /**
     * Sets a new partialName
     *
     * When true the full name is not provided.
     *
     * @param bool $partialName
     * @return self
     */
    public function setPartialName($partialName)
    {
        $this->partialName = $partialName;
        return $this;
    }
}

