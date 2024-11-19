<?php

namespace Recranet\OTA\PropertiesType;

use Recranet\OTA\PropertyValueMatchType;

/**
 * Class representing PropertyAType
 */
class PropertyAType extends PropertyValueMatchType
{
    /**
     * Rebate programs the hotel is participating in.
     *
     * @var \Recranet\OTA\RebateType[] $rebateProgram
     */
    private $rebateProgram = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @return self
     * @param \Recranet\OTA\RebateType $rebateProgram
     */
    public function addToRebateProgram(\Recranet\OTA\RebateType $rebateProgram)
    {
        $this->rebateProgram[] = $rebateProgram;
        return $this;
    }

    /**
     * isset rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRebateProgram($index)
    {
        return isset($this->rebateProgram[$index]);
    }

    /**
     * unset rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRebateProgram($index)
    {
        unset($this->rebateProgram[$index]);
    }

    /**
     * Gets as rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @return \Recranet\OTA\RebateType[]
     */
    public function getRebateProgram()
    {
        return $this->rebateProgram;
    }

    /**
     * Sets a new rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @param \Recranet\OTA\RebateType[] $rebateProgram
     * @return self
     */
    public function setRebateProgram(array $rebateProgram = null)
    {
        $this->rebateProgram = $rebateProgram;
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

