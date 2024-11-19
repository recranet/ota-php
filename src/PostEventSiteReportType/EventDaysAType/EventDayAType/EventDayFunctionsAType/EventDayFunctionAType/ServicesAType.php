<?php

namespace Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing ServicesAType
 */
class ServicesAType
{
    /**
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @var \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[] $service
     */
    private $service = [
        
    ];

    /**
     * Adds as service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @return self
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType $service
     */
    public function addToService(\Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType $service)
    {
        $this->service[] = $service;
        return $this;
    }

    /**
     * isset service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @return \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Details regarding an additional service (e.g., security, first aid).
     *
     * @param \Recranet\OTA\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\ServicesAType\ServiceAType[] $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;
        return $this;
    }
}

