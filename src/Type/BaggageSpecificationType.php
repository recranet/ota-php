<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\BaggageWeightType $weight
     */
    private $weight = null;

    /**
     * Size amounts and unit of measure.
     * Note: Baggage size may be specified as individual size units (height, length, width) with an associated unit of measure, or as linear dimensions.
     *
     * @var \Recranet\OTA\Type\BaggageSizeType $size
     */
    private $size = null;

    /**
     * Specialty item details.
     *
     * @var \Recranet\OTA\Type\BaggageSpecificationType\SpecialItemAType $specialItem
     */
    private $specialItem = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
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
     * @return \Recranet\OTA\Type\BaggageWeightType
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
     * @param \Recranet\OTA\Type\BaggageWeightType $weight
     * @return self
     */
    public function setWeight(?\Recranet\OTA\Type\BaggageWeightType $weight = null)
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
     * @return \Recranet\OTA\Type\BaggageSizeType
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
     * @param \Recranet\OTA\Type\BaggageSizeType $size
     * @return self
     */
    public function setSize(?\Recranet\OTA\Type\BaggageSizeType $size = null)
    {
        $this->size = $size;
        return $this;
    }

    /**
     * Gets as specialItem
     *
     * Specialty item details.
     *
     * @return \Recranet\OTA\Type\BaggageSpecificationType\SpecialItemAType
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
     * @param \Recranet\OTA\Type\BaggageSpecificationType\SpecialItemAType $specialItem
     * @return self
     */
    public function setSpecialItem(?\Recranet\OTA\Type\BaggageSpecificationType\SpecialItemAType $specialItem = null)
    {
        $this->specialItem = $specialItem;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

