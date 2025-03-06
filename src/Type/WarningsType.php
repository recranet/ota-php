<?php

namespace Recranet\OTA\Type;

/**
 * Class representing WarningsType
 *
 * Collection of warnings.
 * XSD Type: WarningsType
 */
class WarningsType
{
    /**
     * Used in conjunction with the Success element to define a business error.
     *
     * @var \Recranet\OTA\Type\WarningType[] $warning
     */
    private $warning = [
        
    ];

    /**
     * Adds as warning
     *
     * Used in conjunction with the Success element to define a business error.
     *
     * @return self
     * @param \Recranet\OTA\Type\WarningType $warning
     */
    public function addToWarning(\Recranet\OTA\Type\WarningType $warning)
    {
        $this->warning[] = $warning;
        return $this;
    }

    /**
     * isset warning
     *
     * Used in conjunction with the Success element to define a business error.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetWarning($index)
    {
        return isset($this->warning[$index]);
    }

    /**
     * unset warning
     *
     * Used in conjunction with the Success element to define a business error.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetWarning($index)
    {
        unset($this->warning[$index]);
    }

    /**
     * Gets as warning
     *
     * Used in conjunction with the Success element to define a business error.
     *
     * @return \Recranet\OTA\Type\WarningType[]
     */
    public function getWarning()
    {
        return $this->warning;
    }

    /**
     * Sets a new warning
     *
     * Used in conjunction with the Success element to define a business error.
     *
     * @param \Recranet\OTA\Type\WarningType[] $warning
     * @return self
     */
    public function setWarning(array $warning)
    {
        $this->warning = $warning;
        return $this;
    }
}

