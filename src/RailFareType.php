<?php

namespace Recranet\OTA;

/**
 * Class representing RailFareType
 *
 * Rail fare and associated fare rules and terms and conditions.
 * XSD Type: RailFareType
 */
class RailFareType
{
    /**
     * A fare basis code and associated fare amount.
     *
     * @var \Recranet\OTA\RailFareType\BasicFareAType $basicFare
     */
    private $basicFare = null;

    /**
     * Terms and conditions incuding fare rules.
     *
     * @var \Recranet\OTA\RailFareType\TermAndConditionAType[] $termAndCondition
     */
    private $termAndCondition = [
        
    ];

    /**
     * Gets as basicFare
     *
     * A fare basis code and associated fare amount.
     *
     * @return \Recranet\OTA\RailFareType\BasicFareAType
     */
    public function getBasicFare()
    {
        return $this->basicFare;
    }

    /**
     * Sets a new basicFare
     *
     * A fare basis code and associated fare amount.
     *
     * @param \Recranet\OTA\RailFareType\BasicFareAType $basicFare
     * @return self
     */
    public function setBasicFare(\Recranet\OTA\RailFareType\BasicFareAType $basicFare)
    {
        $this->basicFare = $basicFare;
        return $this;
    }

    /**
     * Adds as termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @return self
     * @param \Recranet\OTA\RailFareType\TermAndConditionAType $termAndCondition
     */
    public function addToTermAndCondition(\Recranet\OTA\RailFareType\TermAndConditionAType $termAndCondition)
    {
        $this->termAndCondition[] = $termAndCondition;
        return $this;
    }

    /**
     * isset termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTermAndCondition($index)
    {
        return isset($this->termAndCondition[$index]);
    }

    /**
     * unset termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTermAndCondition($index)
    {
        unset($this->termAndCondition[$index]);
    }

    /**
     * Gets as termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @return \Recranet\OTA\RailFareType\TermAndConditionAType[]
     */
    public function getTermAndCondition()
    {
        return $this->termAndCondition;
    }

    /**
     * Sets a new termAndCondition
     *
     * Terms and conditions incuding fare rules.
     *
     * @param \Recranet\OTA\RailFareType\TermAndConditionAType[] $termAndCondition
     * @return self
     */
    public function setTermAndCondition(array $termAndCondition = null)
    {
        $this->termAndCondition = $termAndCondition;
        return $this;
    }
}
