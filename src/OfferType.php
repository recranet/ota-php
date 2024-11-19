<?php

namespace Recranet\OTA;

/**
 * Class representing OfferType
 *
 * Defines the type of offer, the conditions under which the offer can be applied and the amounts and/or percentages deducted.
 * XSD Type: OfferType
 */
class OfferType
{
    /**
     * A code which uniquely names this offer.
     *
     * @var string $offerCode
     */
    private $offerCode = null;

    /**
     * A reference place holder for this particular offer.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * The order in which the discounts are applied.
     *
     * @var int $applicationOrder
     */
    private $applicationOrder = null;

    /**
     * Collection of offer rules.
     *
     * @var \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType[] $offerRules
     */
    private $offerRules = null;

    /**
     * Defines the characteristics of the offer.
     *
     * @var \Recranet\OTA\OfferType\DiscountAType $discount
     */
    private $discount = null;

    /**
     * Defines offers of the type "book A and get B".
     *
     * @var \Recranet\OTA\OfferType\FreeUpgradeAType $freeUpgrade
     */
    private $freeUpgrade = null;

    /**
     * A description of the offer. If the offer is based on a written contract, the appropriate paragraph from the contract could be quoted here.
     *
     * @var \Recranet\OTA\ParagraphType $offerDescription
     */
    private $offerDescription = null;

    /**
     * Collection of compatible offers.
     *
     * @var \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType[] $compatibleOffers
     */
    private $compatibleOffers = null;

    /**
     * Collection of inventory.
     *
     * @var \Recranet\OTA\OfferType\InventoriesAType\InventoryAType[] $inventories
     */
    private $inventories = null;

    /**
     * Collection of guests.
     *
     * @var \Recranet\OTA\OfferType\GuestsAType\GuestAType[] $guests
     */
    private $guests = null;

    /**
     * Gets as offerCode
     *
     * A code which uniquely names this offer.
     *
     * @return string
     */
    public function getOfferCode()
    {
        return $this->offerCode;
    }

    /**
     * Sets a new offerCode
     *
     * A code which uniquely names this offer.
     *
     * @param string $offerCode
     * @return self
     */
    public function setOfferCode($offerCode)
    {
        $this->offerCode = $offerCode;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * A reference place holder for this particular offer.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A reference place holder for this particular offer.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as applicationOrder
     *
     * The order in which the discounts are applied.
     *
     * @return int
     */
    public function getApplicationOrder()
    {
        return $this->applicationOrder;
    }

    /**
     * Sets a new applicationOrder
     *
     * The order in which the discounts are applied.
     *
     * @param int $applicationOrder
     * @return self
     */
    public function setApplicationOrder($applicationOrder)
    {
        $this->applicationOrder = $applicationOrder;
        return $this;
    }

    /**
     * Adds as offerRule
     *
     * Collection of offer rules.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType $offerRule
     */
    public function addToOfferRules(\Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType $offerRule)
    {
        $this->offerRules[] = $offerRule;
        return $this;
    }

    /**
     * isset offerRules
     *
     * Collection of offer rules.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOfferRules($index)
    {
        return isset($this->offerRules[$index]);
    }

    /**
     * unset offerRules
     *
     * Collection of offer rules.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOfferRules($index)
    {
        unset($this->offerRules[$index]);
    }

    /**
     * Gets as offerRules
     *
     * Collection of offer rules.
     *
     * @return \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType[]
     */
    public function getOfferRules()
    {
        return $this->offerRules;
    }

    /**
     * Sets a new offerRules
     *
     * Collection of offer rules.
     *
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType[] $offerRules
     * @return self
     */
    public function setOfferRules(array $offerRules = null)
    {
        $this->offerRules = $offerRules;
        return $this;
    }

    /**
     * Gets as discount
     *
     * Defines the characteristics of the offer.
     *
     * @return \Recranet\OTA\OfferType\DiscountAType
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Defines the characteristics of the offer.
     *
     * @param \Recranet\OTA\OfferType\DiscountAType $discount
     * @return self
     */
    public function setDiscount(?\Recranet\OTA\OfferType\DiscountAType $discount = null)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as freeUpgrade
     *
     * Defines offers of the type "book A and get B".
     *
     * @return \Recranet\OTA\OfferType\FreeUpgradeAType
     */
    public function getFreeUpgrade()
    {
        return $this->freeUpgrade;
    }

    /**
     * Sets a new freeUpgrade
     *
     * Defines offers of the type "book A and get B".
     *
     * @param \Recranet\OTA\OfferType\FreeUpgradeAType $freeUpgrade
     * @return self
     */
    public function setFreeUpgrade(?\Recranet\OTA\OfferType\FreeUpgradeAType $freeUpgrade = null)
    {
        $this->freeUpgrade = $freeUpgrade;
        return $this;
    }

    /**
     * Gets as offerDescription
     *
     * A description of the offer. If the offer is based on a written contract, the appropriate paragraph from the contract could be quoted here.
     *
     * @return \Recranet\OTA\ParagraphType
     */
    public function getOfferDescription()
    {
        return $this->offerDescription;
    }

    /**
     * Sets a new offerDescription
     *
     * A description of the offer. If the offer is based on a written contract, the appropriate paragraph from the contract could be quoted here.
     *
     * @param \Recranet\OTA\ParagraphType $offerDescription
     * @return self
     */
    public function setOfferDescription(?\Recranet\OTA\ParagraphType $offerDescription = null)
    {
        $this->offerDescription = $offerDescription;
        return $this;
    }

    /**
     * Adds as compatibleOffer
     *
     * Collection of compatible offers.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType $compatibleOffer
     */
    public function addToCompatibleOffers(\Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType $compatibleOffer)
    {
        $this->compatibleOffers[] = $compatibleOffer;
        return $this;
    }

    /**
     * isset compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCompatibleOffers($index)
    {
        return isset($this->compatibleOffers[$index]);
    }

    /**
     * unset compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCompatibleOffers($index)
    {
        unset($this->compatibleOffers[$index]);
    }

    /**
     * Gets as compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @return \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType[]
     */
    public function getCompatibleOffers()
    {
        return $this->compatibleOffers;
    }

    /**
     * Sets a new compatibleOffers
     *
     * Collection of compatible offers.
     *
     * @param \Recranet\OTA\OfferType\CompatibleOffersAType\CompatibleOfferAType[] $compatibleOffers
     * @return self
     */
    public function setCompatibleOffers(array $compatibleOffers = null)
    {
        $this->compatibleOffers = $compatibleOffers;
        return $this;
    }

    /**
     * Adds as inventory
     *
     * Collection of inventory.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\InventoriesAType\InventoryAType $inventory
     */
    public function addToInventories(\Recranet\OTA\OfferType\InventoriesAType\InventoryAType $inventory)
    {
        $this->inventories[] = $inventory;
        return $this;
    }

    /**
     * isset inventories
     *
     * Collection of inventory.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInventories($index)
    {
        return isset($this->inventories[$index]);
    }

    /**
     * unset inventories
     *
     * Collection of inventory.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInventories($index)
    {
        unset($this->inventories[$index]);
    }

    /**
     * Gets as inventories
     *
     * Collection of inventory.
     *
     * @return \Recranet\OTA\OfferType\InventoriesAType\InventoryAType[]
     */
    public function getInventories()
    {
        return $this->inventories;
    }

    /**
     * Sets a new inventories
     *
     * Collection of inventory.
     *
     * @param \Recranet\OTA\OfferType\InventoriesAType\InventoryAType[] $inventories
     * @return self
     */
    public function setInventories(array $inventories = null)
    {
        $this->inventories = $inventories;
        return $this;
    }

    /**
     * Adds as guest
     *
     * Collection of guests.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\GuestsAType\GuestAType $guest
     */
    public function addToGuests(\Recranet\OTA\OfferType\GuestsAType\GuestAType $guest)
    {
        $this->guests[] = $guest;
        return $this;
    }

    /**
     * isset guests
     *
     * Collection of guests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuests($index)
    {
        return isset($this->guests[$index]);
    }

    /**
     * unset guests
     *
     * Collection of guests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuests($index)
    {
        unset($this->guests[$index]);
    }

    /**
     * Gets as guests
     *
     * Collection of guests.
     *
     * @return \Recranet\OTA\OfferType\GuestsAType\GuestAType[]
     */
    public function getGuests()
    {
        return $this->guests;
    }

    /**
     * Sets a new guests
     *
     * Collection of guests.
     *
     * @param \Recranet\OTA\OfferType\GuestsAType\GuestAType[] $guests
     * @return self
     */
    public function setGuests(array $guests = null)
    {
        $this->guests = $guests;
        return $this;
    }
}

