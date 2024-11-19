<?php

namespace Recranet\OTA;

/**
 * Class representing AirOfferChoiceType
 *
 * A choice between specifying summary, priced or traveler purchased ancillary offers.
 * XSD Type: AirOfferChoiceType
 */
class AirOfferChoiceType
{
    /**
     * Summary, non-priced air offers.
     *
     * @var \Recranet\OTA\AirOfferChoiceType\SummaryAType[] $summary
     */
    private $summary = [
        
    ];

    /**
     * Priced air offers.
     *
     * @var \Recranet\OTA\AirOfferChoiceType\PricedAType[] $priced
     */
    private $priced = [
        
    ];

    /**
     * Air offers already purchased for a trip.
     *
     * @var \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType[] $purchased
     */
    private $purchased = null;

    /**
     * Adds as summary
     *
     * Summary, non-priced air offers.
     *
     * @return self
     * @param \Recranet\OTA\AirOfferChoiceType\SummaryAType $summary
     */
    public function addToSummary(\Recranet\OTA\AirOfferChoiceType\SummaryAType $summary)
    {
        $this->summary[] = $summary;
        return $this;
    }

    /**
     * isset summary
     *
     * Summary, non-priced air offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSummary($index)
    {
        return isset($this->summary[$index]);
    }

    /**
     * unset summary
     *
     * Summary, non-priced air offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSummary($index)
    {
        unset($this->summary[$index]);
    }

    /**
     * Gets as summary
     *
     * Summary, non-priced air offers.
     *
     * @return \Recranet\OTA\AirOfferChoiceType\SummaryAType[]
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * Sets a new summary
     *
     * Summary, non-priced air offers.
     *
     * @param \Recranet\OTA\AirOfferChoiceType\SummaryAType[] $summary
     * @return self
     */
    public function setSummary(array $summary = null)
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * Adds as priced
     *
     * Priced air offers.
     *
     * @return self
     * @param \Recranet\OTA\AirOfferChoiceType\PricedAType $priced
     */
    public function addToPriced(\Recranet\OTA\AirOfferChoiceType\PricedAType $priced)
    {
        $this->priced[] = $priced;
        return $this;
    }

    /**
     * isset priced
     *
     * Priced air offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPriced($index)
    {
        return isset($this->priced[$index]);
    }

    /**
     * unset priced
     *
     * Priced air offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPriced($index)
    {
        unset($this->priced[$index]);
    }

    /**
     * Gets as priced
     *
     * Priced air offers.
     *
     * @return \Recranet\OTA\AirOfferChoiceType\PricedAType[]
     */
    public function getPriced()
    {
        return $this->priced;
    }

    /**
     * Sets a new priced
     *
     * Priced air offers.
     *
     * @param \Recranet\OTA\AirOfferChoiceType\PricedAType[] $priced
     * @return self
     */
    public function setPriced(array $priced = null)
    {
        $this->priced = $priced;
        return $this;
    }

    /**
     * Adds as purchasedItem
     *
     * Air offers already purchased for a trip.
     *
     * @return self
     * @param \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType $purchasedItem
     */
    public function addToPurchased(\Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType $purchasedItem)
    {
        $this->purchased[] = $purchasedItem;
        return $this;
    }

    /**
     * isset purchased
     *
     * Air offers already purchased for a trip.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPurchased($index)
    {
        return isset($this->purchased[$index]);
    }

    /**
     * unset purchased
     *
     * Air offers already purchased for a trip.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPurchased($index)
    {
        unset($this->purchased[$index]);
    }

    /**
     * Gets as purchased
     *
     * Air offers already purchased for a trip.
     *
     * @return \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType[]
     */
    public function getPurchased()
    {
        return $this->purchased;
    }

    /**
     * Sets a new purchased
     *
     * Air offers already purchased for a trip.
     *
     * @param \Recranet\OTA\AirPurchasedOfferType\PurchasedItemAType[] $purchased
     * @return self
     */
    public function setPurchased(array $purchased = null)
    {
        $this->purchased = $purchased;
        return $this;
    }
}

