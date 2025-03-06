<?php

namespace Recranet\OTA\Type\SeatZoneDetailType;

/**
 * Class representing SeatTypeDetailAType
 */
class SeatTypeDetailAType
{
    /**
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with features.
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The total quantity of all seats for the specified seat type in the seat zone.
     *
     * @var int $totalQty
     */
    private $totalQty = null;

    /**
     * The quantity of all available seats for the specified seat type in the seat zone.
     *
     * @var int $availableQty
     */
    private $availableQty = null;

    /**
     * An extensible list of seat features for this seat in the seat zone. Select an item from the list or use the Other_ list value and enter a seat feature in the @extension attribute that is known to trading partners.
     *
     * @var \Recranet\OTA\Type\SeatFeaturesType[] $features
     */
    private $features = [
        
    ];

    /**
     * Gets as type
     *
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with features.
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
     * The type of seat in the seat zone, e.g. premium, non-premium and seats with features.
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
     * Gets as totalQty
     *
     * The total quantity of all seats for the specified seat type in the seat zone.
     *
     * @return int
     */
    public function getTotalQty()
    {
        return $this->totalQty;
    }

    /**
     * Sets a new totalQty
     *
     * The total quantity of all seats for the specified seat type in the seat zone.
     *
     * @param int $totalQty
     * @return self
     */
    public function setTotalQty($totalQty)
    {
        $this->totalQty = $totalQty;
        return $this;
    }

    /**
     * Gets as availableQty
     *
     * The quantity of all available seats for the specified seat type in the seat zone.
     *
     * @return int
     */
    public function getAvailableQty()
    {
        return $this->availableQty;
    }

    /**
     * Sets a new availableQty
     *
     * The quantity of all available seats for the specified seat type in the seat zone.
     *
     * @param int $availableQty
     * @return self
     */
    public function setAvailableQty($availableQty)
    {
        $this->availableQty = $availableQty;
        return $this;
    }

    /**
     * Adds as features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an item from the list or use the Other_ list value and enter a seat feature in the @extension attribute that is known to trading partners.
     *
     * @return self
     * @param \Recranet\OTA\Type\SeatFeaturesType $features
     */
    public function addToFeatures(\Recranet\OTA\Type\SeatFeaturesType $features)
    {
        $this->features[] = $features;
        return $this;
    }

    /**
     * isset features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an item from the list or use the Other_ list value and enter a seat feature in the @extension attribute that is known to trading partners.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an item from the list or use the Other_ list value and enter a seat feature in the @extension attribute that is known to trading partners.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an item from the list or use the Other_ list value and enter a seat feature in the @extension attribute that is known to trading partners.
     *
     * @return \Recranet\OTA\Type\SeatFeaturesType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * An extensible list of seat features for this seat in the seat zone. Select an item from the list or use the Other_ list value and enter a seat feature in the @extension attribute that is known to trading partners.
     *
     * @param \Recranet\OTA\Type\SeatFeaturesType[] $features
     * @return self
     */
    public function setFeatures(array $features = null)
    {
        $this->features = $features;
        return $this;
    }
}

