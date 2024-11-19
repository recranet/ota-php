<?php

namespace Recranet\OTA\VehicleLocationAdditionalFeesType;

/**
 * Class representing TaxesAType
 */
class TaxesAType
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
     * This element is used to describe one specific tax that may apply.
     *
     * @var \Recranet\OTA\VehicleLocationAdditionalFeesType\TaxesAType\TaxAType[] $tax
     */
    private $tax = [
        
    ];

    /**
     * General information about the additional taxes that may apply.
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
     * Adds as tax
     *
     * This element is used to describe one specific tax that may apply.
     *
     * @return self
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\TaxesAType\TaxAType $tax
     */
    public function addToTax(\Recranet\OTA\VehicleLocationAdditionalFeesType\TaxesAType\TaxAType $tax)
    {
        $this->tax[] = $tax;
        return $this;
    }

    /**
     * isset tax
     *
     * This element is used to describe one specific tax that may apply.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * This element is used to describe one specific tax that may apply.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * This element is used to describe one specific tax that may apply.
     *
     * @return \Recranet\OTA\VehicleLocationAdditionalFeesType\TaxesAType\TaxAType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * This element is used to describe one specific tax that may apply.
     *
     * @param \Recranet\OTA\VehicleLocationAdditionalFeesType\TaxesAType\TaxAType[] $tax
     * @return self
     */
    public function setTax(array $tax = null)
    {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Gets as info
     *
     * General information about the additional taxes that may apply.
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
     * General information about the additional taxes that may apply.
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

