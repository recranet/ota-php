<?php

namespace Recranet\OTA;

/**
 * Class representing RevenueDetailsType
 *
 * The line item detail of specific revenue transactions.
 * XSD Type: RevenueDetailsType
 */
class RevenueDetailsType
{
    /**
     * Contains line item details about specific revenue transactions.
     *
     * @var \Recranet\OTA\RevenueDetailType[] $revenueDetail
     */
    private $revenueDetail = [
        
    ];

    /**
     * Adds as revenueDetail
     *
     * Contains line item details about specific revenue transactions.
     *
     * @return self
     * @param \Recranet\OTA\RevenueDetailType $revenueDetail
     */
    public function addToRevenueDetail(\Recranet\OTA\RevenueDetailType $revenueDetail)
    {
        $this->revenueDetail[] = $revenueDetail;
        return $this;
    }

    /**
     * isset revenueDetail
     *
     * Contains line item details about specific revenue transactions.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRevenueDetail($index)
    {
        return isset($this->revenueDetail[$index]);
    }

    /**
     * unset revenueDetail
     *
     * Contains line item details about specific revenue transactions.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRevenueDetail($index)
    {
        unset($this->revenueDetail[$index]);
    }

    /**
     * Gets as revenueDetail
     *
     * Contains line item details about specific revenue transactions.
     *
     * @return \Recranet\OTA\RevenueDetailType[]
     */
    public function getRevenueDetail()
    {
        return $this->revenueDetail;
    }

    /**
     * Sets a new revenueDetail
     *
     * Contains line item details about specific revenue transactions.
     *
     * @param \Recranet\OTA\RevenueDetailType[] $revenueDetail
     * @return self
     */
    public function setRevenueDetail(array $revenueDetail)
    {
        $this->revenueDetail = $revenueDetail;
        return $this;
    }
}

