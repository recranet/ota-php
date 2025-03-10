<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing FunctionChargesAType
 */
class FunctionChargesAType
{
    /**
     * A summary of a specific charge associated with a function (i.e., total audiovisual charges for the function).
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[] $functionCharge
     */
    private $functionCharge = [
        
    ];

    /**
     * Adds as functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total audiovisual charges for the function).
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType $functionCharge
     */
    public function addToFunctionCharge(\Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType $functionCharge)
    {
        $this->functionCharge[] = $functionCharge;
        return $this;
    }

    /**
     * isset functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total audiovisual charges for the function).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFunctionCharge($index)
    {
        return isset($this->functionCharge[$index]);
    }

    /**
     * unset functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total audiovisual charges for the function).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFunctionCharge($index)
    {
        unset($this->functionCharge[$index]);
    }

    /**
     * Gets as functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total audiovisual charges for the function).
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[]
     */
    public function getFunctionCharge()
    {
        return $this->functionCharge;
    }

    /**
     * Sets a new functionCharge
     *
     * A summary of a specific charge associated with a function (i.e., total audiovisual charges for the function).
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\FunctionChargesAType\FunctionChargeAType[] $functionCharge
     * @return self
     */
    public function setFunctionCharge(array $functionCharge)
    {
        $this->functionCharge = $functionCharge;
        return $this;
    }
}

