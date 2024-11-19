<?php

namespace Recranet\OTA\HotelInfoType;

/**
 * Class representing OwnershipManagementInfosAType
 */
class OwnershipManagementInfosAType
{
    /**
     * Provides details of the ownership or management.
     *
     * @var \Recranet\OTA\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[] $ownershipManagementInfo
     */
    private $ownershipManagementInfo = [
        
    ];

    /**
     * Adds as ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @return self
     * @param \Recranet\OTA\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType $ownershipManagementInfo
     */
    public function addToOwnershipManagementInfo(\Recranet\OTA\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType $ownershipManagementInfo)
    {
        $this->ownershipManagementInfo[] = $ownershipManagementInfo;
        return $this;
    }

    /**
     * isset ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOwnershipManagementInfo($index)
    {
        return isset($this->ownershipManagementInfo[$index]);
    }

    /**
     * unset ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOwnershipManagementInfo($index)
    {
        unset($this->ownershipManagementInfo[$index]);
    }

    /**
     * Gets as ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @return \Recranet\OTA\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[]
     */
    public function getOwnershipManagementInfo()
    {
        return $this->ownershipManagementInfo;
    }

    /**
     * Sets a new ownershipManagementInfo
     *
     * Provides details of the ownership or management.
     *
     * @param \Recranet\OTA\HotelInfoType\OwnershipManagementInfosAType\OwnershipManagementInfoAType[] $ownershipManagementInfo
     * @return self
     */
    public function setOwnershipManagementInfo(array $ownershipManagementInfo)
    {
        $this->ownershipManagementInfo = $ownershipManagementInfo;
        return $this;
    }
}

