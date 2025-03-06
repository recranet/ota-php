<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OtherServiceInfoType
 *
 * Other Service Information (OSI) for relevant airlines
 * XSD Type: OtherServiceInfoType
 */
class OtherServiceInfoType
{
    /**
     * A proprietary code used between systems to identify an Other Service Information (OSI) item.
     *
     * @var string $code
     */
    private $code = null;

    /**
     * One or more travelers to whom this request applies.
     *
     * @var \Recranet\OTA\Type\OtherServiceInfoType\TravelerRefNumberAType[] $travelerRefNumber
     */
    private $travelerRefNumber = [
        
    ];

    /**
     * The airline to which the OSI applies. When applicable to all airlines or an unknown airline use Code="YY".
     *
     * @var \Recranet\OTA\Type\CompanyNameType $airline
     */
    private $airline = null;

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
     * One or more travelers to whom this request applies.
     *
     * @return self
     * @param \Recranet\OTA\Type\OtherServiceInfoType\TravelerRefNumberAType $travelerRefNumber
     */
    public function addToTravelerRefNumber(\Recranet\OTA\Type\OtherServiceInfoType\TravelerRefNumberAType $travelerRefNumber)
    {
        $this->travelerRefNumber[] = $travelerRefNumber;
        return $this;
    }

    /**
     * isset travelerRefNumber
     *
     * One or more travelers to whom this request applies.
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
     * One or more travelers to whom this request applies.
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
     * One or more travelers to whom this request applies.
     *
     * @return \Recranet\OTA\Type\OtherServiceInfoType\TravelerRefNumberAType[]
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * One or more travelers to whom this request applies.
     *
     * @param \Recranet\OTA\Type\OtherServiceInfoType\TravelerRefNumberAType[] $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(array $travelerRefNumber = null)
    {
        $this->travelerRefNumber = $travelerRefNumber;
        return $this;
    }

    /**
     * Gets as airline
     *
     * The airline to which the OSI applies. When applicable to all airlines or an unknown airline use Code="YY".
     *
     * @return \Recranet\OTA\Type\CompanyNameType
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * Sets a new airline
     *
     * The airline to which the OSI applies. When applicable to all airlines or an unknown airline use Code="YY".
     *
     * @param \Recranet\OTA\Type\CompanyNameType $airline
     * @return self
     */
    public function setAirline(\Recranet\OTA\Type\CompanyNameType $airline)
    {
        $this->airline = $airline;
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

