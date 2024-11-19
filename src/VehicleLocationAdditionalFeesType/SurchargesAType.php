<?php

namespace Recranet\OTA\VehicleLocationAdditionalFeesType;

/**
 * Class representing SurchargesAType
 */
class SurchargesAType
{
    /**
     * The starting value of the time span.
     *
     * @var \DateTime $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @var \DateInterval $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @var \DateTime $end
     */
    private $end = null;

    /**
     * This element is used to describe one specific surcharge that may apply.
     *
     * @var \Recranet\OTA\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType[] $surcharge
     */
    private $surcharge = [
        
    ];

    /**
     * General information about the additional surcharges that may apply.
     *
     * @var \Recranet\OTA\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time values representing a single duration of time, encoded as a single string.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \DateTime $end
     * @return self
     */
    public function setEnd(\DateTime $end)
    {
        $this->end = $end;
        return $this;
    }

    /**
     * Adds as surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType $surcharge
     */
    public function addToSurcharge(\Recranet\OTA\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType $surcharge)
    {
        $this->surcharge[] = $surcharge;
        return $this;
    }

    /**
     * isset surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSurcharge($index)
    {
        return isset($this->surcharge[$index]);
    }

    /**
     * unset surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSurcharge($index)
    {
        unset($this->surcharge[$index]);
    }

    /**
     * Gets as surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @return \Recranet\OTA\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType[]
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * Sets a new surcharge
     *
     * This element is used to describe one specific surcharge that may apply.
     *
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\SurchargesAType\SurchargeAType[] $surcharge
     * @return self
     */
    public function setSurcharge(array $surcharge = null)
    {
        $this->surcharge = $surcharge;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional surcharges that may apply.
     *
     * @return \Recranet\OTA\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information about the additional surcharges that may apply.
     *
     * @param \Recranet\OTA\FormattedTextType $info
     * @return self
     */
    public function setInfo(?\Recranet\OTA\FormattedTextType $info = null)
    {
        $this->info = $info;
        return $this;
    }
}

