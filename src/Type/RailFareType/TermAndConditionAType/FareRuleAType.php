<?php

namespace Recranet\OTA\Type\RailFareType\TermAndConditionAType;

/**
 * Class representing FareRuleAType
 */
class FareRuleAType
{
    /**
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
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
     * Gets as code
     *
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
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
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
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
}

