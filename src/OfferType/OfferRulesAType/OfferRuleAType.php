<?php

namespace Recranet\OTA\OfferType\OfferRulesAType;

/**
 * Class representing OfferRuleAType
 */
class OfferRuleAType
{
    /**
     * Indicates a specific day on which the guest must stay over in order to be eligible for the offer.
     *
     * @var string $stayOverDate
     */
    private $stayOverDate = null;

    /**
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @var int $minTotalOccupancy
     */
    private $minTotalOccupancy = null;

    /**
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @var int $maxTotalOccupancy
     */
    private $maxTotalOccupancy = null;

    /**
     * The maximum number of times a rate may be booked contiguously within a reservation (often used with packages).
     *
     * @var int $maxContiguousBookings
     */
    private $maxContiguousBookings = null;

    /**
     * Maximum days before the arrival date for which this offer may be booked.
     *
     * @var \DateInterval $maxAdvancedBookingOffset
     */
    private $maxAdvancedBookingOffset = null;

    /**
     * Minimum days before the arrival date for which this offer may be booked.
     *
     * @var \DateInterval $minAdvancedBookingOffset
     */
    private $minAdvancedBookingOffset = null;

    /**
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @var \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType[] $dateRestriction
     */
    private $dateRestriction = [
        
    ];

    /**
     * A collection of lengths of stay.
     *
     * @var \Recranet\OTA\LengthsOfStayType $lengthsOfStay
     */
    private $lengthsOfStay = null;

    /**
     * A collection of Day Of Week restrictions.
     *
     * @var \Recranet\OTA\DOWRestrictionsType $dOWRestrictions
     */
    private $dOWRestrictions = null;

    /**
     * Provides parameters of occupancy limits.
     *
     * @var \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType[] $occupancy
     */
    private $occupancy = [
        
    ];

    /**
     * Collection of inventory.
     *
     * @var \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[] $inventories
     */
    private $inventories = null;

    /**
     * Gets as stayOverDate
     *
     * Indicates a specific day on which the guest must stay over in order to be eligible for the offer.
     *
     * @return string
     */
    public function getStayOverDate()
    {
        return $this->stayOverDate;
    }

    /**
     * Sets a new stayOverDate
     *
     * Indicates a specific day on which the guest must stay over in order to be eligible for the offer.
     *
     * @param string $stayOverDate
     * @return self
     */
    public function setStayOverDate($stayOverDate)
    {
        $this->stayOverDate = $stayOverDate;
        return $this;
    }

    /**
     * Gets as minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @return int
     */
    public function getMinTotalOccupancy()
    {
        return $this->minTotalOccupancy;
    }

    /**
     * Sets a new minTotalOccupancy
     *
     * Defines the minimum number of total occupants required for a rate plan.
     *
     * @param int $minTotalOccupancy
     * @return self
     */
    public function setMinTotalOccupancy($minTotalOccupancy)
    {
        $this->minTotalOccupancy = $minTotalOccupancy;
        return $this;
    }

    /**
     * Gets as maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @return int
     */
    public function getMaxTotalOccupancy()
    {
        return $this->maxTotalOccupancy;
    }

    /**
     * Sets a new maxTotalOccupancy
     *
     * Defines the maximum number of total occupants allowed for a rate plan.
     *
     * @param int $maxTotalOccupancy
     * @return self
     */
    public function setMaxTotalOccupancy($maxTotalOccupancy)
    {
        $this->maxTotalOccupancy = $maxTotalOccupancy;
        return $this;
    }

    /**
     * Gets as maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a reservation (often used with packages).
     *
     * @return int
     */
    public function getMaxContiguousBookings()
    {
        return $this->maxContiguousBookings;
    }

    /**
     * Sets a new maxContiguousBookings
     *
     * The maximum number of times a rate may be booked contiguously within a reservation (often used with packages).
     *
     * @param int $maxContiguousBookings
     * @return self
     */
    public function setMaxContiguousBookings($maxContiguousBookings)
    {
        $this->maxContiguousBookings = $maxContiguousBookings;
        return $this;
    }

    /**
     * Gets as maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this offer may be booked.
     *
     * @return \DateInterval
     */
    public function getMaxAdvancedBookingOffset()
    {
        return $this->maxAdvancedBookingOffset;
    }

    /**
     * Sets a new maxAdvancedBookingOffset
     *
     * Maximum days before the arrival date for which this offer may be booked.
     *
     * @param \DateInterval $maxAdvancedBookingOffset
     * @return self
     */
    public function setMaxAdvancedBookingOffset(\DateInterval $maxAdvancedBookingOffset)
    {
        $this->maxAdvancedBookingOffset = $maxAdvancedBookingOffset;
        return $this;
    }

    /**
     * Gets as minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this offer may be booked.
     *
     * @return \DateInterval
     */
    public function getMinAdvancedBookingOffset()
    {
        return $this->minAdvancedBookingOffset;
    }

    /**
     * Sets a new minAdvancedBookingOffset
     *
     * Minimum days before the arrival date for which this offer may be booked.
     *
     * @param \DateInterval $minAdvancedBookingOffset
     * @return self
     */
    public function setMinAdvancedBookingOffset(\DateInterval $minAdvancedBookingOffset)
    {
        $this->minAdvancedBookingOffset = $minAdvancedBookingOffset;
        return $this;
    }

    /**
     * Adds as dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType $dateRestriction
     */
    public function addToDateRestriction(\Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType $dateRestriction)
    {
        $this->dateRestriction[] = $dateRestriction;
        return $this;
    }

    /**
     * isset dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDateRestriction($index)
    {
        return isset($this->dateRestriction[$index]);
    }

    /**
     * unset dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDateRestriction($index)
    {
        unset($this->dateRestriction[$index]);
    }

    /**
     * Gets as dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @return \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType[]
     */
    public function getDateRestriction()
    {
        return $this->dateRestriction;
    }

    /**
     * Sets a new dateRestriction
     *
     * Defines date restrictions for booking and/or stays with this offer.
     *
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\DateRestrictionAType[] $dateRestriction
     * @return self
     */
    public function setDateRestriction(array $dateRestriction = null)
    {
        $this->dateRestriction = $dateRestriction;
        return $this;
    }

    /**
     * Gets as lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @return \Recranet\OTA\LengthsOfStayType
     */
    public function getLengthsOfStay()
    {
        return $this->lengthsOfStay;
    }

    /**
     * Sets a new lengthsOfStay
     *
     * A collection of lengths of stay.
     *
     * @param \Recranet\OTA\LengthsOfStayType $lengthsOfStay
     * @return self
     */
    public function setLengthsOfStay(?\Recranet\OTA\LengthsOfStayType $lengthsOfStay = null)
    {
        $this->lengthsOfStay = $lengthsOfStay;
        return $this;
    }

    /**
     * Gets as dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @return \Recranet\OTA\DOWRestrictionsType
     */
    public function getDOWRestrictions()
    {
        return $this->dOWRestrictions;
    }

    /**
     * Sets a new dOWRestrictions
     *
     * A collection of Day Of Week restrictions.
     *
     * @param \Recranet\OTA\DOWRestrictionsType $dOWRestrictions
     * @return self
     */
    public function setDOWRestrictions(?\Recranet\OTA\DOWRestrictionsType $dOWRestrictions = null)
    {
        $this->dOWRestrictions = $dOWRestrictions;
        return $this;
    }

    /**
     * Adds as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType $occupancy
     */
    public function addToOccupancy(\Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType $occupancy)
    {
        $this->occupancy[] = $occupancy;
        return $this;
    }

    /**
     * isset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOccupancy($index)
    {
        return isset($this->occupancy[$index]);
    }

    /**
     * unset occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOccupancy($index)
    {
        unset($this->occupancy[$index]);
    }

    /**
     * Gets as occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @return \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType[]
     */
    public function getOccupancy()
    {
        return $this->occupancy;
    }

    /**
     * Sets a new occupancy
     *
     * Provides parameters of occupancy limits.
     *
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\OccupancyAType[] $occupancy
     * @return self
     */
    public function setOccupancy(array $occupancy = null)
    {
        $this->occupancy = $occupancy;
        return $this;
    }

    /**
     * Adds as inventory
     *
     * Collection of inventory.
     *
     * @return self
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType $inventory
     */
    public function addToInventories(\Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType $inventory)
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
     * @return \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[]
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
     * @param \Recranet\OTA\OfferType\OfferRulesAType\OfferRuleAType\InventoriesAType\InventoryAType[] $inventories
     * @return self
     */
    public function setInventories(array $inventories = null)
    {
        $this->inventories = $inventories;
        return $this;
    }
}

