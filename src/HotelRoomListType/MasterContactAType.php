<?php

namespace Recranet\OTA\HotelRoomListType;

use Recranet\OTA\ContactPersonType;

/**
 * Class representing MasterContactAType
 */
class MasterContactAType extends ContactPersonType
{
    /**
     * This identifies the master account number and related information.
     *
     * @var \Recranet\OTA\UniqueIDType[] $uniqueIDs
     */
    private $uniqueIDs = null;

    /**
     * @var \Recranet\OTA\HotelRoomListType\MasterContactAType\LoyaltyAType[] $loyalty
     */
    private $loyalty = [
        
    ];

    /**
     * Adds as uniqueID
     *
     * This identifies the master account number and related information.
     *
     * @return self
     * @param \Recranet\OTA\UniqueIDType $uniqueID
     */
    public function addToUniqueIDs(\Recranet\OTA\UniqueIDType $uniqueID)
    {
        $this->uniqueIDs[] = $uniqueID;
        return $this;
    }

    /**
     * isset uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUniqueIDs($index)
    {
        return isset($this->uniqueIDs[$index]);
    }

    /**
     * unset uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUniqueIDs($index)
    {
        unset($this->uniqueIDs[$index]);
    }

    /**
     * Gets as uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @return \Recranet\OTA\UniqueIDType[]
     */
    public function getUniqueIDs()
    {
        return $this->uniqueIDs;
    }

    /**
     * Sets a new uniqueIDs
     *
     * This identifies the master account number and related information.
     *
     * @param \Recranet\OTA\UniqueIDType[] $uniqueIDs
     * @return self
     */
    public function setUniqueIDs(array $uniqueIDs = null)
    {
        $this->uniqueIDs = $uniqueIDs;
        return $this;
    }

    /**
     * Adds as loyalty
     *
     * @return self
     * @param \Recranet\OTA\HotelRoomListType\MasterContactAType\LoyaltyAType $loyalty
     */
    public function addToLoyalty(\Recranet\OTA\HotelRoomListType\MasterContactAType\LoyaltyAType $loyalty)
    {
        $this->loyalty[] = $loyalty;
        return $this;
    }

    /**
     * isset loyalty
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyalty($index)
    {
        return isset($this->loyalty[$index]);
    }

    /**
     * unset loyalty
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyalty($index)
    {
        unset($this->loyalty[$index]);
    }

    /**
     * Gets as loyalty
     *
     * @return \Recranet\OTA\HotelRoomListType\MasterContactAType\LoyaltyAType[]
     */
    public function getLoyalty()
    {
        return $this->loyalty;
    }

    /**
     * Sets a new loyalty
     *
     * @param \Recranet\OTA\HotelRoomListType\MasterContactAType\LoyaltyAType[] $loyalty
     * @return self
     */
    public function setLoyalty(array $loyalty = null)
    {
        $this->loyalty = $loyalty;
        return $this;
    }
}

