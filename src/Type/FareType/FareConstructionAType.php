<?php

namespace Recranet\OTA\Type\FareType;

/**
 * Class representing FareConstructionAType
 */
class FareConstructionAType
{
    /**
     * When true, this is structured fare calculation information.
     *
     * @var bool $formattedIndicator
     */
    private $formattedIndicator = null;

    /**
     * @var string $language
     */
    private $language = null;

    /**
     * The origin airport city code for this fare construction.
     *
     * @var string $originCityCode
     */
    private $originCityCode = null;

    /**
     * Identifies the context of the origin city code such as IATA, ARC, or internal code.
     *
     * @var string $originCodeContext
     */
    private $originCodeContext = null;

    /**
     * The destination airport city code for this fare construction.
     *
     * @var string $destinationCityCode
     */
    private $destinationCityCode = null;

    /**
     * Identifies the context of the destination city code such as IATA, ARC, or internal code.
     *
     * @var string $destinationCodeContext
     */
    private $destinationCodeContext = null;

    /**
     * Indicates the required modification to the element.
     *
     * @var string $operation
     */
    private $operation = null;

    /**
     * Gets as formattedIndicator
     *
     * When true, this is structured fare calculation information.
     *
     * @return bool
     */
    public function getFormattedIndicator()
    {
        return $this->formattedIndicator;
    }

    /**
     * Sets a new formattedIndicator
     *
     * When true, this is structured fare calculation information.
     *
     * @param bool $formattedIndicator
     * @return self
     */
    public function setFormattedIndicator($formattedIndicator)
    {
        $this->formattedIndicator = $formattedIndicator;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as originCityCode
     *
     * The origin airport city code for this fare construction.
     *
     * @return string
     */
    public function getOriginCityCode()
    {
        return $this->originCityCode;
    }

    /**
     * Sets a new originCityCode
     *
     * The origin airport city code for this fare construction.
     *
     * @param string $originCityCode
     * @return self
     */
    public function setOriginCityCode($originCityCode)
    {
        $this->originCityCode = $originCityCode;
        return $this;
    }

    /**
     * Gets as originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal code.
     *
     * @return string
     */
    public function getOriginCodeContext()
    {
        return $this->originCodeContext;
    }

    /**
     * Sets a new originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal code.
     *
     * @param string $originCodeContext
     * @return self
     */
    public function setOriginCodeContext($originCodeContext)
    {
        $this->originCodeContext = $originCodeContext;
        return $this;
    }

    /**
     * Gets as destinationCityCode
     *
     * The destination airport city code for this fare construction.
     *
     * @return string
     */
    public function getDestinationCityCode()
    {
        return $this->destinationCityCode;
    }

    /**
     * Sets a new destinationCityCode
     *
     * The destination airport city code for this fare construction.
     *
     * @param string $destinationCityCode
     * @return self
     */
    public function setDestinationCityCode($destinationCityCode)
    {
        $this->destinationCityCode = $destinationCityCode;
        return $this;
    }

    /**
     * Gets as destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or internal code.
     *
     * @return string
     */
    public function getDestinationCodeContext()
    {
        return $this->destinationCodeContext;
    }

    /**
     * Sets a new destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or internal code.
     *
     * @param string $destinationCodeContext
     * @return self
     */
    public function setDestinationCodeContext($destinationCodeContext)
    {
        $this->destinationCodeContext = $destinationCodeContext;
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

