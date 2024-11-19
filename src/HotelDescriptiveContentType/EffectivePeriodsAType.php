<?php

namespace Recranet\OTA\HotelDescriptiveContentType;

/**
 * Class representing EffectivePeriodsAType
 */
class EffectivePeriodsAType
{
    /**
     * The period for which content is visible. This may be either specific times of year that repeat annually or actual dates.
     *
     * @var \Recranet\OTA\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType[] $effectivePeriod
     */
    private $effectivePeriod = [
        
    ];

    /**
     * Adds as effectivePeriod
     *
     * The period for which content is visible. This may be either specific times of year that repeat annually or actual dates.
     *
     * @return self
     * @param \Recranet\OTA\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType $effectivePeriod
     */
    public function addToEffectivePeriod(\Recranet\OTA\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType $effectivePeriod)
    {
        $this->effectivePeriod[] = $effectivePeriod;
        return $this;
    }

    /**
     * isset effectivePeriod
     *
     * The period for which content is visible. This may be either specific times of year that repeat annually or actual dates.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEffectivePeriod($index)
    {
        return isset($this->effectivePeriod[$index]);
    }

    /**
     * unset effectivePeriod
     *
     * The period for which content is visible. This may be either specific times of year that repeat annually or actual dates.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEffectivePeriod($index)
    {
        unset($this->effectivePeriod[$index]);
    }

    /**
     * Gets as effectivePeriod
     *
     * The period for which content is visible. This may be either specific times of year that repeat annually or actual dates.
     *
     * @return \Recranet\OTA\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType[]
     */
    public function getEffectivePeriod()
    {
        return $this->effectivePeriod;
    }

    /**
     * Sets a new effectivePeriod
     *
     * The period for which content is visible. This may be either specific times of year that repeat annually or actual dates.
     *
     * @param \Recranet\OTA\HotelDescriptiveContentType\EffectivePeriodsAType\EffectivePeriodAType[] $effectivePeriod
     * @return self
     */
    public function setEffectivePeriod(array $effectivePeriod)
    {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }
}

