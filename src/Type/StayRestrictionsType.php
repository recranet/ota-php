<?php

namespace Recranet\OTA\Type;

/**
 * Class representing StayRestrictionsType
 *
 * Type defining Min and Max Stay Restrictions.
 * XSD Type: StayRestrictionsType
 */
class StayRestrictionsType
{
    /**
     * True indicates that Stay Restrictions exist.
     *
     * @var bool $stayRestrictionsInd
     */
    private $stayRestrictionsInd = null;

    /**
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @var \Recranet\OTA\Type\StayRestrictionsType\MinimumStayAType $minimumStay
     */
    private $minimumStay = null;

    /**
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @var \Recranet\OTA\Type\StayRestrictionsType\MaximumStayAType $maximumStay
     */
    private $maximumStay = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as stayRestrictionsInd
     *
     * True indicates that Stay Restrictions exist.
     *
     * @return bool
     */
    public function getStayRestrictionsInd()
    {
        return $this->stayRestrictionsInd;
    }

    /**
     * Sets a new stayRestrictionsInd
     *
     * True indicates that Stay Restrictions exist.
     *
     * @param bool $stayRestrictionsInd
     * @return self
     */
    public function setStayRestrictionsInd($stayRestrictionsInd)
    {
        $this->stayRestrictionsInd = $stayRestrictionsInd;
        return $this;
    }

    /**
     * Gets as minimumStay
     *
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @return \Recranet\OTA\Type\StayRestrictionsType\MinimumStayAType
     */
    public function getMinimumStay()
    {
        return $this->minimumStay;
    }

    /**
     * Sets a new minimumStay
     *
     * Specifies restrictions for the shortest length/period of time or earliest day return travel can commence or be completed.
     *
     * @param \Recranet\OTA\Type\StayRestrictionsType\MinimumStayAType $minimumStay
     * @return self
     */
    public function setMinimumStay(?\Recranet\OTA\Type\StayRestrictionsType\MinimumStayAType $minimumStay = null)
    {
        $this->minimumStay = $minimumStay;
        return $this;
    }

    /**
     * Gets as maximumStay
     *
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @return \Recranet\OTA\Type\StayRestrictionsType\MaximumStayAType
     */
    public function getMaximumStay()
    {
        return $this->maximumStay;
    }

    /**
     * Sets a new maximumStay
     *
     * Specifies restrictions for the longest length/period of time or last day to begin or complete the return.
     *
     * @param \Recranet\OTA\Type\StayRestrictionsType\MaximumStayAType $maximumStay
     * @return self
     */
    public function setMaximumStay(?\Recranet\OTA\Type\StayRestrictionsType\MaximumStayAType $maximumStay = null)
    {
        $this->maximumStay = $maximumStay;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

