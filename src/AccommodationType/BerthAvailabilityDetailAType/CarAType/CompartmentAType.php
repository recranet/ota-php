<?php

namespace Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType;

/**
 * Class representing CompartmentAType
 */
class CompartmentAType
{
    /**
     * The compartment number.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * The compartment position, such as Close to restaurant car.
     *
     * @var string $position
     */
    private $position = null;

    /**
     * A berth in this compartment.
     *
     * @var \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType\BerthAType[] $berth
     */
    private $berth = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as number
     *
     * The compartment number.
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets a new number
     *
     * The compartment number.
     *
     * @param string $number
     * @return self
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Gets as position
     *
     * The compartment position, such as Close to restaurant car.
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * The compartment position, such as Close to restaurant car.
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * Adds as berth
     *
     * A berth in this compartment.
     *
     * @return self
     * @param \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType\BerthAType $berth
     */
    public function addToBerth(\Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType\BerthAType $berth)
    {
        $this->berth[] = $berth;
        return $this;
    }

    /**
     * isset berth
     *
     * A berth in this compartment.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBerth($index)
    {
        return isset($this->berth[$index]);
    }

    /**
     * unset berth
     *
     * A berth in this compartment.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBerth($index)
    {
        unset($this->berth[$index]);
    }

    /**
     * Gets as berth
     *
     * A berth in this compartment.
     *
     * @return \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType\BerthAType[]
     */
    public function getBerth()
    {
        return $this->berth;
    }

    /**
     * Sets a new berth
     *
     * A berth in this compartment.
     *
     * @param \Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType\BerthAType[] $berth
     * @return self
     */
    public function setBerth(array $berth = null)
    {
        $this->berth = $berth;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

