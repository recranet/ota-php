<?php

namespace Recranet\OTA\Type\AffiliationInfoType;

/**
 * Class representing LoyalProgramsAType
 */
class LoyalProgramsAType
{
    /**
     * The LoyalProgram class defines the loyalty programs that this hotel participates in.
     *
     * @var \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[] $loyalProgram
     */
    private $loyalProgram = [
        
    ];

    /**
     * Adds as loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates in.
     *
     * @return self
     * @param \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType $loyalProgram
     */
    public function addToLoyalProgram(\Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType $loyalProgram)
    {
        $this->loyalProgram[] = $loyalProgram;
        return $this;
    }

    /**
     * isset loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates in.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyalProgram($index)
    {
        return isset($this->loyalProgram[$index]);
    }

    /**
     * unset loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates in.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyalProgram($index)
    {
        unset($this->loyalProgram[$index]);
    }

    /**
     * Gets as loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates in.
     *
     * @return \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[]
     */
    public function getLoyalProgram()
    {
        return $this->loyalProgram;
    }

    /**
     * Sets a new loyalProgram
     *
     * The LoyalProgram class defines the loyalty programs that this hotel participates in.
     *
     * @param \Recranet\OTA\Type\AffiliationInfoType\LoyalProgramsAType\LoyalProgramAType[] $loyalProgram
     * @return self
     */
    public function setLoyalProgram(array $loyalProgram)
    {
        $this->loyalProgram = $loyalProgram;
        return $this;
    }
}

