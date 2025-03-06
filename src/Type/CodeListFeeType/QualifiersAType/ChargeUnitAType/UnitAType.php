<?php

namespace Recranet\OTA\Type\CodeListFeeType\QualifiersAType\ChargeUnitAType;

/**
 * Class representing UnitAType
 */
class UnitAType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Exempt quantity.
     * Example: 2
     * Note: This is the number of units permitted before charges are applied.
     *
     * @var int $exemptQty
     */
    private $exemptQty = null;

    /**
     * Maximum units.
     * Example: 7
     * Note: This is the maximum number of charge units for which the charge will be applied.
     *
     * @var int $maximumQty
     */
    private $maximumQty = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as exemptQty
     *
     * Exempt quantity.
     * Example: 2
     * Note: This is the number of units permitted before charges are applied.
     *
     * @return int
     */
    public function getExemptQty()
    {
        return $this->exemptQty;
    }

    /**
     * Sets a new exemptQty
     *
     * Exempt quantity.
     * Example: 2
     * Note: This is the number of units permitted before charges are applied.
     *
     * @param int $exemptQty
     * @return self
     */
    public function setExemptQty($exemptQty)
    {
        $this->exemptQty = $exemptQty;
        return $this;
    }

    /**
     * Gets as maximumQty
     *
     * Maximum units.
     * Example: 7
     * Note: This is the maximum number of charge units for which the charge will be applied.
     *
     * @return int
     */
    public function getMaximumQty()
    {
        return $this->maximumQty;
    }

    /**
     * Sets a new maximumQty
     *
     * Maximum units.
     * Example: 7
     * Note: This is the maximum number of charge units for which the charge will be applied.
     *
     * @param int $maximumQty
     * @return self
     */
    public function setMaximumQty($maximumQty)
    {
        $this->maximumQty = $maximumQty;
        return $this;
    }
}

