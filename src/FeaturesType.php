<?php

namespace Recranet\OTA;

/**
 * Class representing FeaturesType
 *
 * A collection of security and physically challenged features that a hotel offers
 * XSD Type: FeaturesType
 */
class FeaturesType
{
    /**
     * Describes individual security and physically challenged features that a hotel offers.
     *
     * @var \Recranet\OTA\FeaturesType\FeatureAType[] $feature
     */
    private $feature = [
        
    ];

    /**
     * Adds as feature
     *
     * Describes individual security and physically challenged features that a hotel offers.
     *
     * @return self
     * @param \Recranet\OTA\FeaturesType\FeatureAType $feature
     */
    public function addToFeature(\Recranet\OTA\FeaturesType\FeatureAType $feature)
    {
        $this->feature[] = $feature;
        return $this;
    }

    /**
     * isset feature
     *
     * Describes individual security and physically challenged features that a hotel offers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeature($index)
    {
        return isset($this->feature[$index]);
    }

    /**
     * unset feature
     *
     * Describes individual security and physically challenged features that a hotel offers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeature($index)
    {
        unset($this->feature[$index]);
    }

    /**
     * Gets as feature
     *
     * Describes individual security and physically challenged features that a hotel offers.
     *
     * @return \Recranet\OTA\FeaturesType\FeatureAType[]
     */
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Sets a new feature
     *
     * Describes individual security and physically challenged features that a hotel offers.
     *
     * @param \Recranet\OTA\FeaturesType\FeatureAType[] $feature
     * @return self
     */
    public function setFeature(array $feature)
    {
        $this->feature = $feature;
        return $this;
    }
}

