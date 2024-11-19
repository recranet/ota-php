<?php

namespace Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType;

/**
 * Class representing UtilitiesAType
 */
class UtilitiesAType
{
    /**
     * A utility requirement for this function.
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[] $utility
     */
    private $utility = [
        
    ];

    /**
     * Adds as utility
     *
     * A utility requirement for this function.
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType $utility
     */
    public function addToUtility(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType $utility)
    {
        $this->utility[] = $utility;
        return $this;
    }

    /**
     * isset utility
     *
     * A utility requirement for this function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUtility($index)
    {
        return isset($this->utility[$index]);
    }

    /**
     * unset utility
     *
     * A utility requirement for this function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUtility($index)
    {
        unset($this->utility[$index]);
    }

    /**
     * Gets as utility
     *
     * A utility requirement for this function.
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[]
     */
    public function getUtility()
    {
        return $this->utility;
    }

    /**
     * Sets a new utility
     *
     * A utility requirement for this function.
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType\UtilitiesAType\UtilityAType[] $utility
     * @return self
     */
    public function setUtility(array $utility)
    {
        $this->utility = $utility;
        return $this;
    }
}

