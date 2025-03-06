<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AdjustmentsType
 *
 * AdjustmentsType.
 * XSD Type: AdjustmentsType
 */
class AdjustmentsType
{
    /**
     * @var string $requestID
     */
    private $requestID = null;

    /**
     * @var \Recranet\OTA\Type\AdjustmentsType\AdjustmentAType[] $adjustment
     */
    private $adjustment = [
        
    ];

    /**
     * Gets as requestID
     *
     * @return string
     */
    public function getRequestID()
    {
        return $this->requestID;
    }

    /**
     * Sets a new requestID
     *
     * @param string $requestID
     * @return self
     */
    public function setRequestID($requestID)
    {
        $this->requestID = $requestID;
        return $this;
    }

    /**
     * Adds as adjustment
     *
     * @return self
     * @param \Recranet\OTA\Type\AdjustmentsType\AdjustmentAType $adjustment
     */
    public function addToAdjustment(\Recranet\OTA\Type\AdjustmentsType\AdjustmentAType $adjustment)
    {
        $this->adjustment[] = $adjustment;
        return $this;
    }

    /**
     * isset adjustment
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdjustment($index)
    {
        return isset($this->adjustment[$index]);
    }

    /**
     * unset adjustment
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdjustment($index)
    {
        unset($this->adjustment[$index]);
    }

    /**
     * Gets as adjustment
     *
     * @return \Recranet\OTA\Type\AdjustmentsType\AdjustmentAType[]
     */
    public function getAdjustment()
    {
        return $this->adjustment;
    }

    /**
     * Sets a new adjustment
     *
     * @param \Recranet\OTA\Type\AdjustmentsType\AdjustmentAType[] $adjustment
     * @return self
     */
    public function setAdjustment(array $adjustment)
    {
        $this->adjustment = $adjustment;
        return $this;
    }
}

