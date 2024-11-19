<?php

namespace Recranet\OTA\HotelDescriptiveInfoRequestType;

/**
 * Class representing AreaInfoAType
 */
class AreaInfoAType
{
    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendRefPoints
     */
    private $sendRefPoints = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendAttractions
     */
    private $sendAttractions = null;

    /**
     * Send this data. "True" means send the data.
     *
     * @var bool $sendRecreations
     */
    private $sendRecreations = null;

    /**
     * Gets as sendRefPoints
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendRefPoints()
    {
        return $this->sendRefPoints;
    }

    /**
     * Sets a new sendRefPoints
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendRefPoints
     * @return self
     */
    public function setSendRefPoints($sendRefPoints)
    {
        $this->sendRefPoints = $sendRefPoints;
        return $this;
    }

    /**
     * Gets as sendAttractions
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendAttractions()
    {
        return $this->sendAttractions;
    }

    /**
     * Sets a new sendAttractions
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendAttractions
     * @return self
     */
    public function setSendAttractions($sendAttractions)
    {
        $this->sendAttractions = $sendAttractions;
        return $this;
    }

    /**
     * Gets as sendRecreations
     *
     * Send this data. "True" means send the data.
     *
     * @return bool
     */
    public function getSendRecreations()
    {
        return $this->sendRecreations;
    }

    /**
     * Sets a new sendRecreations
     *
     * Send this data. "True" means send the data.
     *
     * @param bool $sendRecreations
     * @return self
     */
    public function setSendRecreations($sendRecreations)
    {
        $this->sendRecreations = $sendRecreations;
        return $this;
    }
}

