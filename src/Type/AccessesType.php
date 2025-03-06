<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AccessesType
 *
 * Element to capture creation and last update data.
 * XSD Type: AccessesType
 */
class AccessesType
{
    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Month, day, year and optionally hour, minute, second of day the profile originated, in ISO 8601 format.
     *
     * @var \DateTime $createDateTime
     */
    private $createDateTime = null;

    /**
     * Describes the action taken on the record.
     *
     * @var \Recranet\OTA\Type\AccessesType\AccessAType[] $access
     */
    private $access = [
        
    ];

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as createDateTime
     *
     * Month, day, year and optionally hour, minute, second of day the profile originated, in ISO 8601 format.
     *
     * @return \DateTime
     */
    public function getCreateDateTime()
    {
        return $this->createDateTime;
    }

    /**
     * Sets a new createDateTime
     *
     * Month, day, year and optionally hour, minute, second of day the profile originated, in ISO 8601 format.
     *
     * @param \DateTime $createDateTime
     * @return self
     */
    public function setCreateDateTime(\DateTime $createDateTime)
    {
        $this->createDateTime = $createDateTime;
        return $this;
    }

    /**
     * Adds as access
     *
     * Describes the action taken on the record.
     *
     * @return self
     * @param \Recranet\OTA\Type\AccessesType\AccessAType $access
     */
    public function addToAccess(\Recranet\OTA\Type\AccessesType\AccessAType $access)
    {
        $this->access[] = $access;
        return $this;
    }

    /**
     * isset access
     *
     * Describes the action taken on the record.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAccess($index)
    {
        return isset($this->access[$index]);
    }

    /**
     * unset access
     *
     * Describes the action taken on the record.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAccess($index)
    {
        unset($this->access[$index]);
    }

    /**
     * Gets as access
     *
     * Describes the action taken on the record.
     *
     * @return \Recranet\OTA\Type\AccessesType\AccessAType[]
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Sets a new access
     *
     * Describes the action taken on the record.
     *
     * @param \Recranet\OTA\Type\AccessesType\AccessAType[] $access
     * @return self
     */
    public function setAccess(array $access)
    {
        $this->access = $access;
        return $this;
    }
}

