<?php

namespace Recranet\OTA\Type;

/**
 * Class representing FareBasisCodeType
 *
 * Fare basis code for the price for this PTC
 * XSD Type: FareBasisCodeType
 */
class FareBasisCodeType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * A reference to the flight segment associated with this fare basis code.
     *
     * @var string $flightSegmentRPH
     */
    private $flightSegmentRPH = null;

    /**
     * The date before which the fare basis code is not valid.
     *
     * @var \DateTime $notValidBefore
     */
    private $notValidBefore = null;

    /**
     * The date after which the fare basis code is not valid.
     *
     * @var \DateTime $notValidAfter
     */
    private $notValidAfter = null;

    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

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
     * Gets as flightSegmentRPH
     *
     * A reference to the flight segment associated with this fare basis code.
     *
     * @return string
     */
    public function getFlightSegmentRPH()
    {
        return $this->flightSegmentRPH;
    }

    /**
     * Sets a new flightSegmentRPH
     *
     * A reference to the flight segment associated with this fare basis code.
     *
     * @param string $flightSegmentRPH
     * @return self
     */
    public function setFlightSegmentRPH($flightSegmentRPH)
    {
        $this->flightSegmentRPH = $flightSegmentRPH;
        return $this;
    }

    /**
     * Gets as notValidBefore
     *
     * The date before which the fare basis code is not valid.
     *
     * @return \DateTime
     */
    public function getNotValidBefore()
    {
        return $this->notValidBefore;
    }

    /**
     * Sets a new notValidBefore
     *
     * The date before which the fare basis code is not valid.
     *
     * @param \DateTime $notValidBefore
     * @return self
     */
    public function setNotValidBefore(\DateTime $notValidBefore)
    {
        $this->notValidBefore = $notValidBefore;
        return $this;
    }

    /**
     * Gets as notValidAfter
     *
     * The date after which the fare basis code is not valid.
     *
     * @return \DateTime
     */
    public function getNotValidAfter()
    {
        return $this->notValidAfter;
    }

    /**
     * Sets a new notValidAfter
     *
     * The date after which the fare basis code is not valid.
     *
     * @param \DateTime $notValidAfter
     * @return self
     */
    public function setNotValidAfter(\DateTime $notValidAfter)
    {
        $this->notValidAfter = $notValidAfter;
        return $this;
    }

    /**
     * Gets as operation
     *
     * Indicates the required modification to the element.
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Indicates the required modification to the element.
     *
     * @param string $operation
     * @return self
     */
    public function setOperation($operation)
    {
        $this->operation = $operation;
        return $this;
    }
}

