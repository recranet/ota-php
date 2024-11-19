<?php

namespace Recranet\OTA\HotelRatePlanType;

/**
 * Class representing SupplementsAType
 */
class SupplementsAType
{
    /**
     * Single supplement with conditions of application.
     *
     * @var \Recranet\OTA\HotelRatePlanType\SupplementsAType\SupplementAType[] $supplement
     */
    private $supplement = [
        
    ];

    /**
     * Adds as supplement
     *
     * Single supplement with conditions of application.
     *
     * @return self
     * @param \Recranet\OTA\HotelRatePlanType\SupplementsAType\SupplementAType $supplement
     */
    public function addToSupplement(\Recranet\OTA\HotelRatePlanType\SupplementsAType\SupplementAType $supplement)
    {
        $this->supplement[] = $supplement;
        return $this;
    }

    /**
     * isset supplement
     *
     * Single supplement with conditions of application.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSupplement($index)
    {
        return isset($this->supplement[$index]);
    }

    /**
     * unset supplement
     *
     * Single supplement with conditions of application.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSupplement($index)
    {
        unset($this->supplement[$index]);
    }

    /**
     * Gets as supplement
     *
     * Single supplement with conditions of application.
     *
     * @return \Recranet\OTA\HotelRatePlanType\SupplementsAType\SupplementAType[]
     */
    public function getSupplement()
    {
        return $this->supplement;
    }

    /**
     * Sets a new supplement
     *
     * Single supplement with conditions of application.
     *
     * @param \Recranet\OTA\HotelRatePlanType\SupplementsAType\SupplementAType[] $supplement
     * @return self
     */
    public function setSupplement(array $supplement)
    {
        $this->supplement = $supplement;
        return $this;
    }
}

