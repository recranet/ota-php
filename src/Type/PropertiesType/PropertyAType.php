<?php

namespace Recranet\OTA\Type\PropertiesType;

use Recranet\OTA\Type\PropertyValueMatchType;

/**
 * Class representing PropertyAType
 */
class PropertyAType extends PropertyValueMatchType
{
    /**
     * Rebate programs the hotel is participating in.
     *
     * @var \Recranet\OTA\Type\RebateType[] $rebateProgram
     */
    private $rebateProgram = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as rebateProgram
     *
     * Rebate programs the hotel is participating in.
     *
     * @return self
     * @param \Recranet\OTA\Type\RebateType $rebateProgram
     */
    public function addToRebateProgram(\Recranet\OTA\Type\RebateType $rebateProgram)
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
     * @return \Recranet\OTA\Type\RebateType[]
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
     * @param \Recranet\OTA\Type\RebateType[] $rebateProgram
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

