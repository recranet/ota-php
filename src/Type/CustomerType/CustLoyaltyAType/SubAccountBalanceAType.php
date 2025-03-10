<?php

namespace Recranet\OTA\Type\CustomerType\CustLoyaltyAType;

/**
 * Class representing SubAccountBalanceAType
 */
class SubAccountBalanceAType
{
    /**
     * Describes the type of sub account (e.g. miles, points, vouchers, stays).
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The current balance for this sub account.
     *
     * @var int $balance
     */
    private $balance = null;

    /**
     * Gets as type
     *
     * Describes the type of sub account (e.g. miles, points, vouchers, stays).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Describes the type of sub account (e.g. miles, points, vouchers, stays).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as balance
     *
     * The current balance for this sub account.
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Sets a new balance
     *
     * The current balance for this sub account.
     *
     * @param int $balance
     * @return self
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
        return $this;
    }
}

