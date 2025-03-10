<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AirLandProductType
 *
 * Information about a land product(s), such as lounge passes.
 * XSD Type: AirLandProductType
 */
class AirLandProductType
{
    /**
     * The start date (and optional time) that the product is valid for. This is typically used as an effective date/time for lounge passes and other merchandise.
     *
     * @var \DateTime $startDateTime
     */
    private $startDateTime = null;

    /**
     * The end date (and optional time) that the product is valid for. This is typically used for an expiration date/time on lounge passes and other merchandise.
     *
     * @var \DateTime $endDateTime
     */
    private $endDateTime = null;

    /**
     * Location code used to identify a specific airport.
     *
     * @var string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     *
     *  IATA
     *
     * @var string $codeContext
     */
    private $codeContext = null;

    /**
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @var string $terminal
     */
    private $terminal = null;

    /**
     * Arrival or departure gate (e.g., B12)
     *
     * @var string $gate
     */
    private $gate = null;

    /**
     * A unique ID for this land product that may be referenced elsewhere in this message.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * The name of the product supplier.
     *
     * @var \Recranet\OTA\Type\CompanyNameType $productSupplier
     */
    private $productSupplier = null;

    /**
     * The supplier location.
     *
     * @var \Recranet\OTA\Type\AddressType $address
     */
    private $address = null;

    /**
     * Gets as startDateTime
     *
     * The start date (and optional time) that the product is valid for. This is typically used as an effective date/time for lounge passes and other merchandise.
     *
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }

    /**
     * Sets a new startDateTime
     *
     * The start date (and optional time) that the product is valid for. This is typically used as an effective date/time for lounge passes and other merchandise.
     *
     * @param \DateTime $startDateTime
     * @return self
     */
    public function setStartDateTime(\DateTime $startDateTime)
    {
        $this->startDateTime = $startDateTime;
        return $this;
    }

    /**
     * Gets as endDateTime
     *
     * The end date (and optional time) that the product is valid for. This is typically used for an expiration date/time on lounge passes and other merchandise.
     *
     * @return \DateTime
     */
    public function getEndDateTime()
    {
        return $this->endDateTime;
    }

    /**
     * Sets a new endDateTime
     *
     * The end date (and optional time) that the product is valid for. This is typically used for an expiration date/time on lounge passes and other merchandise.
     *
     * @param \DateTime $endDateTime
     * @return self
     */
    public function setEndDateTime(\DateTime $endDateTime)
    {
        $this->endDateTime = $endDateTime;
        return $this;
    }

    /**
     * Gets as locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;
        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     *
     *  IATA
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
     * Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     *
     *  IATA
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
     * Gets as terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Sets a new terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @param string $terminal
     * @return self
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;
        return $this;
    }

    /**
     * Gets as gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @return string
     */
    public function getGate()
    {
        return $this->gate;
    }

    /**
     * Sets a new gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @param string $gate
     * @return self
     */
    public function setGate($gate)
    {
        $this->gate = $gate;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A unique ID for this land product that may be referenced elsewhere in this message.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique ID for this land product that may be referenced elsewhere in this message.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as productSupplier
     *
     * The name of the product supplier.
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getProductSupplier()
    {
        return $this->productSupplier;
    }

    /**
     * Sets a new productSupplier
     *
     * The name of the product supplier.
     *
     * @param \Recranet\OTA\Type\CompanyNameType $productSupplier
     * @return self
     */
    public function setProductSupplier(?\Recranet\OTA\Type\CompanyNameType $productSupplier = null)
    {
        $this->productSupplier = $productSupplier;
        return $this;
    }

    /**
     * Gets as address
     *
     * The supplier location.
     *
     * @return \Recranet\OTA\Type\AddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * The supplier location.
     *
     * @param \Recranet\OTA\Type\AddressType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\Type\AddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

