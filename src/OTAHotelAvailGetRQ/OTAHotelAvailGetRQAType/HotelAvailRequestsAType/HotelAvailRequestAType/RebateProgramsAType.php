<?php

namespace Recranet\OTA\OTAHotelAvailGetRQ\OTAHotelAvailGetRQAType\HotelAvailRequestsAType\HotelAvailRequestAType;

/**
 * Class representing RebateProgramsAType
 */
class RebateProgramsAType
{
    /**
     * When true, send all rebate program information.
     *
     * @var bool $sendDataInd
     */
    private $sendDataInd = null;

    /**
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
     *
     * @var \Recranet\OTA\RebateType[] $rebateProgram
     */
    private $rebateProgram = [
        
    ];

    /**
     * Gets as sendDataInd
     *
     * When true, send all rebate program information.
     *
     * @return bool
     */
    public function getSendDataInd()
    {
        return $this->sendDataInd;
    }

    /**
     * Sets a new sendDataInd
     *
     * When true, send all rebate program information.
     *
     * @param bool $sendDataInd
     * @return self
     */
    public function setSendDataInd($sendDataInd)
    {
        $this->sendDataInd = $sendDataInd;
        return $this;
    }

    /**
     * Adds as rebateProgram
     *
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
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
     * A rebate program the hotel participates in, such as "Value Added Tax" (VAT).
     *
     * @param \Recranet\OTA\RebateType[] $rebateProgram
     * @return self
     */
    public function setRebateProgram(array $rebateProgram)
    {
        $this->rebateProgram = $rebateProgram;
        return $this;
    }
}

