<?php

namespace Recranet\OTA\Type\HotelDescriptiveInfoRequestType;

/**
 * Class representing AffiliationInfoAType
 */
class AffiliationInfoAType
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendDistribSystems
     */
    private $sendDistribSystems = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendBrands
     */
    private $sendBrands = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendLoyalPrograms
     */
    private $sendLoyalPrograms = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendAwards
     */
    private $sendAwards = null;

    /**
     * Gets as sendDistribSystems
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendDistribSystems()
    {
        return $this->sendDistribSystems;
    }

    /**
     * Sets a new sendDistribSystems
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendDistribSystems
     * @return self
     */
    public function setSendDistribSystems($sendDistribSystems)
    {
        $this->sendDistribSystems = $sendDistribSystems;
        return $this;
    }

    /**
     * Gets as sendBrands
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendBrands()
    {
        return $this->sendBrands;
    }

    /**
     * Sets a new sendBrands
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendBrands
     * @return self
     */
    public function setSendBrands($sendBrands)
    {
        $this->sendBrands = $sendBrands;
        return $this;
    }

    /**
     * Gets as sendLoyalPrograms
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendLoyalPrograms()
    {
        return $this->sendLoyalPrograms;
    }

    /**
     * Sets a new sendLoyalPrograms
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendLoyalPrograms
     * @return self
     */
    public function setSendLoyalPrograms($sendLoyalPrograms)
    {
        $this->sendLoyalPrograms = $sendLoyalPrograms;
        return $this;
    }

    /**
     * Gets as sendAwards
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendAwards()
    {
        return $this->sendAwards;
    }

    /**
     * Sets a new sendAwards
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendAwards
     * @return self
     */
    public function setSendAwards($sendAwards)
    {
        $this->sendAwards = $sendAwards;
        return $this;
    }
}

