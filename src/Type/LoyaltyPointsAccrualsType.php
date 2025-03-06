<?php

namespace Recranet\OTA\Type;

/**
 * Class representing LoyaltyPointsAccrualsType
 *
 * A collection of SelectedLoyalty classes that are used to report earned bonuses.
 * XSD Type: LoyaltyPointsAccrualsType
 */
class LoyaltyPointsAccrualsType
{
    /**
     * Provides the guest's loyalty point accruals for a given stay.
     *
     * @var \Recranet\OTA\Type\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[] $selectedLoyalty
     */
    private $selectedLoyalty = [
        
    ];

    /**
     * Adds as selectedLoyalty
     *
     * Provides the guest's loyalty point accruals for a given stay.
     *
     * @return self
     * @param \Recranet\OTA\Type\LoyaltyPointsAccrualsType\SelectedLoyaltyAType $selectedLoyalty
     */
    public function addToSelectedLoyalty(\Recranet\OTA\Type\LoyaltyPointsAccrualsType\SelectedLoyaltyAType $selectedLoyalty)
    {
        $this->selectedLoyalty[] = $selectedLoyalty;
        return $this;
    }

    /**
     * isset selectedLoyalty
     *
     * Provides the guest's loyalty point accruals for a given stay.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSelectedLoyalty($index)
    {
        return isset($this->selectedLoyalty[$index]);
    }

    /**
     * unset selectedLoyalty
     *
     * Provides the guest's loyalty point accruals for a given stay.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSelectedLoyalty($index)
    {
        unset($this->selectedLoyalty[$index]);
    }

    /**
     * Gets as selectedLoyalty
     *
     * Provides the guest's loyalty point accruals for a given stay.
     *
     * @return \Recranet\OTA\Type\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[]
     */
    public function getSelectedLoyalty()
    {
        return $this->selectedLoyalty;
    }

    /**
     * Sets a new selectedLoyalty
     *
     * Provides the guest's loyalty point accruals for a given stay.
     *
     * @param \Recranet\OTA\Type\LoyaltyPointsAccrualsType\SelectedLoyaltyAType[] $selectedLoyalty
     * @return self
     */
    public function setSelectedLoyalty(array $selectedLoyalty)
    {
        $this->selectedLoyalty = $selectedLoyalty;
        return $this;
    }
}

