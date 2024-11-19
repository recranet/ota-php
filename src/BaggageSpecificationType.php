<?php

namespace Recranet\OTA;

/**
 * Class representing BaggageSpecificationType
 *
 * Baggage specification.
 * XSD Type: BaggageSpecificationType
 */
class BaggageSpecificationType
{
    /**
     * Baggage quantity.
     * Example: 2
     *
     * @var int $pieces
     */
    private $pieces = null;

    /**
     * Weight amount and unit of measure.
     *
     * @var \Recranet\OTA\BaggageWeightType $weight
     */
    private $weight = null;

    /**
     * Size amounts and unit of measure.
     * Note: Baggage size may be specified as individual size units (height, length, width) with an associated unit of measure, or as linear dimensions.
     *
     * @var \Recranet\OTA\BaggageSizeType $size
     */
    private $size = null;

    /**
     * Specialty item details.
     *
     * @var \Recranet\OTA\BaggageSpecificationType\SpecialItemAType $specialItem
     */
    private $specialItem = null;

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as pieces
     *
     * Baggage quantity.
     * Example: 2
     *
     * @return int
     */
    public function getPieces()
    {
        return $this->pieces;
    }

    /**
     * Sets a new pieces
     *
     * Baggage quantity.
     * Example: 2
     *
     * @param int $pieces
     * @return self
     */
    public function setPieces($pieces)
    {
        $this->pieces = $pieces;
        return $this;
    }

    /**
     * Gets as weight
     *
     * Weight amount and unit of measure.
     *
     * @return \Recranet\OTA\BaggageWeightType
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Sets a new weight
     *
     * Weight amount and unit of measure.
     *
     * @param \Recranet\OTA\BaggageWeightType $weight
     * @return self
     */
    public function setWeight(?\Recranet\OTA\BaggageWeightType $weight = null)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * Gets as size
     *
     * Size amounts and unit of measure.
     * Note: Baggage size may be specified as individual size units (height, length, width) with an associated unit of measure, or as linear dimensions.
     *
     * @return \Recranet\OTA\BaggageSizeType
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Sets a new size
     *
     * Size amounts and unit of measure.
     * Note: Baggage size may be specified as individual size units (height, length, width) with an associated unit of measure, or as linear dimensions.
     *
     * @param \Recranet\OTA\BaggageSizeType $size
     * @return self
     */
    public function setSize(?\Recranet\OTA\BaggageSizeType $size = null)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as specialItem
     *
     * Specialty item details.
     *
     * @return \Recranet\OTA\BaggageSpecificationType\SpecialItemAType
     */
    public function getSpecialItem()
    {
        return $this->specialItem;
    }

    /**
     * Sets a new specialItem
     *
     * Specialty item details.
     *
     * @param \Recranet\OTA\BaggageSpecificationType\SpecialItemAType $specialItem
     * @return self
     */
    public function setSpecialItem(?\Recranet\OTA\BaggageSpecificationType\SpecialItemAType $specialItem = null)
    {
        $this->specialItem = $specialItem;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

