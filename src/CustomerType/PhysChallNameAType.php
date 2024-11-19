<?php

namespace Recranet\OTA\CustomerType;

/**
 * Class representing PhysChallNameAType
 */
class PhysChallNameAType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * When true, indicates the customer is physically challenged.
     *
     * @var bool $physChallInd
     */
    private $physChallInd = null;

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
     * Gets as physChallInd
     *
     * When true, indicates the customer is physically challenged.
     *
     * @return bool
     */
    public function getPhysChallInd()
    {
        return $this->physChallInd;
    }

    /**
     * Sets a new physChallInd
     *
     * When true, indicates the customer is physically challenged.
     *
     * @param bool $physChallInd
     * @return self
     */
    public function setPhysChallInd($physChallInd)
    {
        $this->physChallInd = $physChallInd;
        return $this;
    }
}

