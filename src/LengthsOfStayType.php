<?php

namespace Recranet\OTA;

/**
 * Class representing LengthsOfStayType
 *
 * A collection of LengthOfStay.
 * XSD Type: LengthsOfStayType
 */
class LengthsOfStayType
{
    /**
     * True indicates that LOS is based on arrival date. False indicates that LOS is based on stay date.
     *
     * @var bool $arrivalDateBased
     */
    private $arrivalDateBased = null;

    /**
     * The number of elements in a fixed pattern length of stay (FPLOS) array.
     *
     * @var int $fixedPatternLength
     */
    private $fixedPatternLength = null;

    /**
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @var \Recranet\OTA\LengthsOfStayType\LengthOfStayAType[] $lengthOfStay
     */
    private $lengthOfStay = [
        
    ];

    /**
     * Gets as arrivalDateBased
     *
     * True indicates that LOS is based on arrival date. False indicates that LOS is based on stay date.
     *
     * @return bool
     */
    public function getArrivalDateBased()
    {
        return $this->arrivalDateBased;
    }

    /**
     * Sets a new arrivalDateBased
     *
     * True indicates that LOS is based on arrival date. False indicates that LOS is based on stay date.
     *
     * @param bool $arrivalDateBased
     * @return self
     */
    public function setArrivalDateBased($arrivalDateBased)
    {
        $this->arrivalDateBased = $arrivalDateBased;
        return $this;
    }

    /**
     * Gets as fixedPatternLength
     *
     * The number of elements in a fixed pattern length of stay (FPLOS) array.
     *
     * @return int
     */
    public function getFixedPatternLength()
    {
        return $this->fixedPatternLength;
    }

    /**
     * Sets a new fixedPatternLength
     *
     * The number of elements in a fixed pattern length of stay (FPLOS) array.
     *
     * @param int $fixedPatternLength
     * @return self
     */
    public function setFixedPatternLength($fixedPatternLength)
    {
        $this->fixedPatternLength = $fixedPatternLength;
        return $this;
    }

    /**
     * Adds as lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return self
     * @param \Recranet\OTA\LengthsOfStayType\LengthOfStayAType $lengthOfStay
     */
    public function addToLengthOfStay(\Recranet\OTA\LengthsOfStayType\LengthOfStayAType $lengthOfStay)
    {
        $this->lengthOfStay[] = $lengthOfStay;
        return $this;
    }

    /**
     * isset lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLengthOfStay($index)
    {
        return isset($this->lengthOfStay[$index]);
    }

    /**
     * unset lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLengthOfStay($index)
    {
        unset($this->lengthOfStay[$index]);
    }

    /**
     * Gets as lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @return \Recranet\OTA\LengthsOfStayType\LengthOfStayAType[]
     */
    public function getLengthOfStay()
    {
        return $this->lengthOfStay;
    }

    /**
     * Sets a new lengthOfStay
     *
     * A collection of patterns defining allowable lengths of stay (LOS).
     *
     * @param \Recranet\OTA\LengthsOfStayType\LengthOfStayAType[] $lengthOfStay
     * @return self
     */
    public function setLengthOfStay(array $lengthOfStay = null)
    {
        $this->lengthOfStay = $lengthOfStay;
        return $this;
    }
}

