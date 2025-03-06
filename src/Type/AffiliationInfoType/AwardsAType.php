<?php

namespace Recranet\OTA\Type\AffiliationInfoType;

/**
 * Class representing AwardsAType
 */
class AwardsAType
{
    /**
     * Provides detailed information regarding each award for this hotel.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType[] $award
     */
    private $award = [
        
    ];

    /**
     * Adds as award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @return self
     * @param \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType $award
     */
    public function addToAward(\Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType $award)
    {
        $this->award[] = $award;
        return $this;
    }

    /**
     * isset award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAward($index)
    {
        return isset($this->award[$index]);
    }

    /**
     * unset award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAward($index)
    {
        unset($this->award[$index]);
    }

    /**
     * Gets as award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType[]
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * Sets a new award
     *
     * Provides detailed information regarding each award for this hotel.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\AwardsAType\AwardAType[] $award
     * @return self
     */
    public function setAward(array $award)
    {
        $this->award = $award;
        return $this;
    }
}

