<?php

namespace Recranet\OTA\AccommodationType\BerthAvailabilityDetailAType\CarAType\CompartmentAType;

/**
 * Class representing BerthAType
 */
class BerthAType
{
    /**
     * The berth number.
     *
     * @var string $number
     */
    private $number = null;

    /**
     * The berth position, such as Lower and Middle.
     *
     * @var string $position
     */
    private $position = null;

    /**
     * When true, the berth is available.
     *
     * @var bool $availableInd
     */
    private $availableInd = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as number
     *
     * The berth number.
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
     * The berth number.
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
     * The berth position, such as Lower and Middle.
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
     * The berth position, such as Lower and Middle.
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
     * Gets as availableInd
     *
     * When true, the berth is available.
     *
     * @return bool
     */
    public function getAvailableInd()
    {
        return $this->availableInd;
    }

    /**
     * Sets a new availableInd
     *
     * When true, the berth is available.
     *
     * @param bool $availableInd
     * @return self
     */
    public function setAvailableInd($availableInd)
    {
        $this->availableInd = $availableInd;
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

