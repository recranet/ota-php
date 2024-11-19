<?php

namespace Recranet\OTA\CodeListFeeType\TaxesAType\QualifiersAType\ChargeUnitAType;

/**
 * Class representing FrequencyAType
 */
class FrequencyAType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * Exempt quantity.
     * Example: 2
     * Note: This is the frequency exemption quantity before charges are applied.
     *
     * @var int $exemptQty
     */
    private $exemptQty = null;

    /**
     * Maximum quantity.
     * Example: 7
     * Note: This is the maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
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
     * Note: This is the frequency exemption quantity before charges are applied.
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
     * Note: This is the frequency exemption quantity before charges are applied.
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
     * Maximum quantity.
     * Example: 7
     * Note: This is the maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
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
     * Maximum quantity.
     * Example: 7
     * Note: This is the maximum number of times the charge will be applied (e.g. waive charges above 30 nights).
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

