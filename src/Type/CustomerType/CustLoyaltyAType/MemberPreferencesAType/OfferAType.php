<?php

namespace Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType;

/**
 * Class representing OfferAType
 */
class OfferAType
{
    /**
     * An enumerated list of offer sources.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * Preferred method of offer communication.
     *
     * @var \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType[] $communication
     */
    private $communication = [
        
    ];

    /**
     * Gets as type
     *
     * An enumerated list of offer sources.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * An enumerated list of offer sources.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as communication
     *
     * Preferred method of offer communication.
     *
     * @return self
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType $communication
     */
    public function addToCommunication(\Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType $communication)
    {
        $this->communication[] = $communication;
        return $this;
    }

    /**
     * isset communication
     *
     * Preferred method of offer communication.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommunication($index)
    {
        return isset($this->communication[$index]);
    }

    /**
     * unset communication
     *
     * Preferred method of offer communication.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommunication($index)
    {
        unset($this->communication[$index]);
    }

    /**
     * Gets as communication
     *
     * Preferred method of offer communication.
     *
     * @return \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Sets a new communication
     *
     * Preferred method of offer communication.
     *
     * @param \Recranet\OTA\Type\CustomerType\CustLoyaltyAType\MemberPreferencesAType\OfferAType\CommunicationAType[] $communication
     * @return self
     */
    public function setCommunication(array $communication = null)
    {
        $this->communication = $communication;
        return $this;
    }
}

