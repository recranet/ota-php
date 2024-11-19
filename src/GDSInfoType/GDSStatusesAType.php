<?php

namespace Recranet\OTA\GDSInfoType;

/**
 * Class representing GDSStatusesAType
 */
class GDSStatusesAType
{
    /**
     * Hotel status per GDS.
     *
     * @var \Recranet\OTA\GDSInfoType\GDSStatusesAType\GDSStatusAType[] $gDSStatus
     */
    private $gDSStatus = [
        
    ];

    /**
     * Adds as gDSStatus
     *
     * Hotel status per GDS.
     *
     * @return self
     * @param \Recranet\OTA\GDSInfoType\GDSStatusesAType\GDSStatusAType $gDSStatus
     */
    public function addToGDSStatus(\Recranet\OTA\GDSInfoType\GDSStatusesAType\GDSStatusAType $gDSStatus)
    {
        $this->gDSStatus[] = $gDSStatus;
        return $this;
    }

    /**
     * isset gDSStatus
     *
     * Hotel status per GDS.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGDSStatus($index)
    {
        return isset($this->gDSStatus[$index]);
    }

    /**
     * unset gDSStatus
     *
     * Hotel status per GDS.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGDSStatus($index)
    {
        unset($this->gDSStatus[$index]);
    }

    /**
     * Gets as gDSStatus
     *
     * Hotel status per GDS.
     *
     * @return \Recranet\OTA\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     */
    public function getGDSStatus()
    {
        return $this->gDSStatus;
    }

    /**
     * Sets a new gDSStatus
     *
     * Hotel status per GDS.
     *
     * @param \Recranet\OTA\GDSInfoType\GDSStatusesAType\GDSStatusAType[] $gDSStatus
     * @return self
     */
    public function setGDSStatus(array $gDSStatus)
    {
        $this->gDSStatus = $gDSStatus;
        return $this;
    }
}

