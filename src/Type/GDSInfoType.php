<?php

namespace Recranet\OTA\Type;

/**
 * Class representing GDSInfoType
 *
 * This defines codes used by individual GDS's, which can be used to upload rate information.
 * XSD Type: GDS_InfoType
 */
class GDSInfoType
{
    /**
     * This is the 2 character master chain code that identifes a specific chain that is recognized by all GDS's.
     *
     * @var string $masterChainCode
     */
    private $masterChainCode = null;

    /**
     * The element acts as a container for GDS_Code. It is used to send item for each GDS.
     *
     * @var \Recranet\OTA\Type\GDSInfoType\GDSCodesAType $gDSCodes
     */
    private $gDSCodes = null;

    /**
     * Collection of GDS Statuses.
     *
     * @var \Recranet\OTA\Type\GDSInfoType\GDSStatusesAType\GDSStatusAType[] $gDSStatuses
     */
    private $gDSStatuses = null;

    /**
     * Gets as masterChainCode
     *
     * This is the 2 character master chain code that identifes a specific chain that is recognized by all GDS's.
     *
     * @return string
     */
    public function getMasterChainCode()
    {
        return $this->masterChainCode;
    }

    /**
     * Sets a new masterChainCode
     *
     * This is the 2 character master chain code that identifes a specific chain that is recognized by all GDS's.
     *
     * @param string $masterChainCode
     * @return self
     */
    public function setMasterChainCode($masterChainCode)
    {
        $this->masterChainCode = $masterChainCode;
        return $this;
    }

    /**
     * Gets as gDSCodes
     *
     * The element acts as a container for GDS_Code. It is used to send item for each GDS.
     *
     * @return \Recranet\OTA\Type\GDSInfoType\GDSCodesAType
     */
    public function getGDSCodes()
    {
        return $this->gDSCodes;
    }

    /**
     * Sets a new gDSCodes
     *
     * The element acts as a container for GDS_Code. It is used to send item for each GDS.
     *
     * @param \Recranet\OTA\Type\GDSInfoType\GDSCodesAType $gDSCodes
     * @return self
     */
    public function setGDSCodes(?\Recranet\OTA\Type\GDSInfoType\GDSCodesAType $gDSCodes = null)
    {
        $this->gDSCodes = $gDSCodes;
        return $this;
    }

    /**
     * Adds as gDSStatus
     *
     * Collection of GDS Statuses.
     *
     * @return self
     * @param \Recranet\OTA\Type\GDSInfoType\GDSStatusesAType\GDSStatusAType $gDSStatus
     */
    public function addToGDSStatuses(\Recranet\OTA\Type\GDSInfoType\GDSStatusesAType\GDSStatusAType $gDSStatus)
    {
        $this->gDSStatuses[] = $gDSStatus;
        return $this;
    }

    /**
     * isset gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGDSStatuses($index)
    {
        return isset($this->gDSStatuses[$index]);
    }

    /**
     * unset gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGDSStatuses($index)
    {
        unset($this->gDSStatuses[$index]);
    }

    /**
     * Gets as gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @return \Recranet\OTA\Type\GDSInfoType\GDSStatusesAType\GDSStatusAType[]
     */
    public function getGDSStatuses()
    {
        return $this->gDSStatuses;
    }

    /**
     * Sets a new gDSStatuses
     *
     * Collection of GDS Statuses.
     *
     * @param \Recranet\OTA\Type\GDSInfoType\GDSStatusesAType\GDSStatusAType[] $gDSStatuses
     * @return self
     */
    public function setGDSStatuses(array $gDSStatuses = null)
    {
        $this->gDSStatuses = $gDSStatuses;
        return $this;
    }
}

