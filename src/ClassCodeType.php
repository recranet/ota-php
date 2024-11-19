<?php

namespace Recranet\OTA;

/**
 * Class representing ClassCodeType
 *
 * Defines a specific code representing the availability of one specific class of service. Such class of service may represent First class, reserved seats, sleeper accommodations, etc.
 * XSD Type: ClassCodeType
 */
class ClassCodeType
{
    /**
     * Use a value from the specified OpenTravel Code List or a string up to 8 characters in length that has been agreed upon by Trading Partners.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * Identifies the source authority for the code.
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * The quantity for the specified code.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Gets as code
     *
     * Use a value from the specified OpenTravel Code List or a string up to 8 characters in length that has been agreed upon by Trading Partners.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Use a value from the specified OpenTravel Code List or a string up to 8 characters in length that has been agreed upon by Trading Partners.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The quantity for the specified code.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The quantity for the specified code.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
}

