<?php

namespace Recranet\OTA\CodeListFeeType\QualifiersAType;

/**
 * Class representing ChargeUnitAType
 */
class ChargeUnitAType
{
    /**
     * Specific charge unit.
     * Example: PerPerson
     *
     * @var \Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\UnitAType $unit
     */
    private $unit = null;

    /**
     * Charge frequency.
     * Example: Daily
     * Note: This is the timeframe used to apply the charge.
     *
     * @var \Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\FrequencyAType $frequency
     */
    private $frequency = null;

    /**
     * Gets as unit
     *
     * Specific charge unit.
     * Example: PerPerson
     *
     * @return \Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\UnitAType
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * Specific charge unit.
     * Example: PerPerson
     *
     * @param \Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\UnitAType $unit
     * @return self
     */
    public function setUnit(?\Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\UnitAType $unit = null)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as frequency
     *
     * Charge frequency.
     * Example: Daily
     * Note: This is the timeframe used to apply the charge.
     *
     * @return \Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\FrequencyAType
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets a new frequency
     *
     * Charge frequency.
     * Example: Daily
     * Note: This is the timeframe used to apply the charge.
     *
     * @param \Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\FrequencyAType $frequency
     * @return self
     */
    public function setFrequency(?\Recranet\OTA\CodeListFeeType\QualifiersAType\ChargeUnitAType\FrequencyAType $frequency = null)
    {
        $this->frequency = $frequency;
        return $this;
    }
}
