<?php

namespace Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType;

/**
 * Class representing SetupDetailsAType
 */
class SetupDetailsAType
{
    /**
     * A setup requirement for the function.
     *
     * @var \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType[] $setupDetail
     */
    private $setupDetail = [
        
    ];

    /**
     * Adds as setupDetail
     *
     * A setup requirement for the function.
     *
     * @return self
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType $setupDetail
     */
    public function addToSetupDetail(\Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType $setupDetail)
    {
        $this->setupDetail[] = $setupDetail;
        return $this;
    }

    /**
     * isset setupDetail
     *
     * A setup requirement for the function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSetupDetail($index)
    {
        return isset($this->setupDetail[$index]);
    }

    /**
     * unset setupDetail
     *
     * A setup requirement for the function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSetupDetail($index)
    {
        unset($this->setupDetail[$index]);
    }

    /**
     * Gets as setupDetail
     *
     * A setup requirement for the function.
     *
     * @return \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType[]
     */
    public function getSetupDetail()
    {
        return $this->setupDetail;
    }

    /**
     * Sets a new setupDetail
     *
     * A setup requirement for the function.
     *
     * @param \Recranet\OTA\Type\EventType\EventAType\SitesAType\SiteAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\RoomSetupAType\SetupDetailsAType\SetupDetailAType[] $setupDetail
     * @return self
     */
    public function setSetupDetail(array $setupDetail)
    {
        $this->setupDetail = $setupDetail;
        return $this;
    }
}

