<?php

namespace Recranet\OTA\Type\RailPrefType;

/**
 * Class representing OSIPrefAType
 */
class OSIPrefAType
{
    /**
     * A proprietary code used between systems to identify an Other Service Information (OSI) item.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * One or more travelers to whom this request applies
     *
     * @var \Recranet\OTA\Type\RailPrefType\OSIPrefAType\TravelerRefNumberAType[] $travelerRefNumber
     */
    private $travelerRefNumber = [
        
    ];

    /**
     * The operators to which the OSI applies
     *
     * @var \Recranet\OTA\Type\CompanyNameType $operator
     */
    private $operator = null;

    /**
     * The OSI text.
     *
     * @var string $text
     */
    private $text = null;

    /**
     * Gets as code
     *
     * A proprietary code used between systems to identify an Other Service Information (OSI) item.
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
     * A proprietary code used between systems to identify an Other Service Information (OSI) item.
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
     * Adds as travelerRefNumber
     *
     * One or more travelers to whom this request applies
     *
     * @return self
     * @param \Recranet\OTA\Type\RailPrefType\OSIPrefAType\TravelerRefNumberAType $travelerRefNumber
     */
    public function addToTravelerRefNumber(\Recranet\OTA\Type\RailPrefType\OSIPrefAType\TravelerRefNumberAType $travelerRefNumber)
    {
        $this->travelerRefNumber[] = $travelerRefNumber;
        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * One or more travelers to whom this request applies
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelerRefNumber($index)
    {
        return isset($this->travelerRefNumber[$index]);
    }

    /**
     * unset travelerRefNumber
     *
     * One or more travelers to whom this request applies
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelerRefNumber($index)
    {
        unset($this->travelerRefNumber[$index]);
    }

    /**
     * Gets as travelerRefNumber
     *
     * One or more travelers to whom this request applies
     *
     * @return \Recranet\OTA\Type\RailPrefType\OSIPrefAType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * One or more travelers to whom this request applies
     *
     * @param \Recranet\OTA\Type\RailPrefType\OSIPrefAType\TravelerRefNumberAType[] $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber = null)
    {
        $this->travelerRefNumber = $travelerRefNumber;
        return $this;
    }

    /**
     * Gets as operator
     *
     * The operators to which the OSI applies
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets a new operator
     *
     * The operators to which the OSI applies
     *
     * @param \Recranet\OTA\Type\CompanyNameType $operator
     * @return self
     */
    public function setOperator(\Recranet\OTA\Type\CompanyNameType $operator)
    {
        $this->operator = $operator;
        return $this;
    }

    /**
     * Gets as text
     *
     * The OSI text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The OSI text.
     *
     * @param string $text
     * @return self
     */
    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }
}

