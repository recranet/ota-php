<?php

namespace Recranet\OTA\Type\HotelSearchCriterionType;

/**
 * Class representing RebateProgramsAType
 */
class RebateProgramsAType
{
    /**
     * Information about a rebate program the hotel participates in, such as "Value Added Tax" (VAT).
     *
     * @var \Recranet\OTA\Type\RebateType[] $rebateProgram
     */
    private $rebateProgram = [
        
    ];

    /**
     * Adds as rebateProgram
     *
     * Information about a rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * Information about a rebate program the hotel participates in, such as "Value Added Tax" (VAT).
     *
     * @param \Recranet\OTA\Type\RebateType[] $rebateProgram
     * @return self
     */
    public function setRebateProgram(array $rebateProgram)
    {
        $this->rebateProgram = $rebateProgram;
        return $this;
    }
}

