<?php

namespace Recranet\OTA\CodeListFeeType\AmountAType;

use Recranet\OTA\ListLoyaltyPrgCurrencyType;

/**
 * Class representing AlternateCurrencyAType
 */
class AlternateCurrencyAType extends ListLoyaltyPrgCurrencyType
{
    /**
     * Redemption unit quantity.
     * Example: 50000
     * Note: This is the quantity of the specified loyalty currency unit required for payment of this fee.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * Gets as quantity
     *
     * Redemption unit quantity.
     * Example: 50000
     * Note: This is the quantity of the specified loyalty currency unit required for payment of this fee.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Redemption unit quantity.
     * Example: 50000
     * Note: This is the quantity of the specified loyalty currency unit required for payment of this fee.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }
}

