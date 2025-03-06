<?php

namespace Recranet\OTA\Type;

/**
 * Class representing CommissionsType
 *
 * A collection of multiple Commission elements.
 * XSD Type: CommissionsType
 */
class CommissionsType
{
    /**
     * Contains details pertaining to commissions.
     *
     * @var \Recranet\OTA\Type\CommissionType[] $commission
     */
    private $commission = [
        
    ];

    /**
     * Adds as commission
     *
     * Contains details pertaining to commissions.
     *
     * @return self
     * @param \Recranet\OTA\Type\CommissionType $commission
     */
    public function addToCommission(\Recranet\OTA\Type\CommissionType $commission)
    {
        $this->commission[] = $commission;
        return $this;
    }

    /**
     * isset commission
     *
     * Contains details pertaining to commissions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommission($index)
    {
        return isset($this->commission[$index]);
    }

    /**
     * unset commission
     *
     * Contains details pertaining to commissions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommission($index)
    {
        unset($this->commission[$index]);
    }

    /**
     * Gets as commission
     *
     * Contains details pertaining to commissions.
     *
     * @return \Recranet\OTA\Type\CommissionType[]
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Contains details pertaining to commissions.
     *
     * @param \Recranet\OTA\Type\CommissionType[] $commission
     * @return self
     */
    public function setCommission(array $commission)
    {
        $this->commission = $commission;
        return $this;
    }
}

