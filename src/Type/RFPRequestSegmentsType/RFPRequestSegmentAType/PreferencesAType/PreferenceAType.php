<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType;

/**
 * Class representing PreferenceAType
 */
class PreferenceAType
{
    /**
     * Used to define requirements or preferences in location for the event,
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType[] $locationCategories
     */
    private $locationCategories = [
        
    ];

    /**
     * A collection of recreation preferences.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[] $recreations
     */
    private $recreations = null;

    /**
     * A collection of preferred properties.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[] $properties
     */
    private $properties = null;

    /**
     * Used to further define event preference information.
     *
     * @var \Recranet\OTA\Type\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Adds as locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType $locationCategories
     */
    public function addToLocationCategories(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType $locationCategories)
    {
        $this->locationCategories[] = $locationCategories;
        return $this;
    }

    /**
     * isset locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationCategories($index)
    {
        return isset($this->locationCategories[$index]);
    }

    /**
     * unset locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationCategories($index)
    {
        unset($this->locationCategories[$index]);
    }

    /**
     * Gets as locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType[]
     */
    public function getLocationCategories()
    {
        return $this->locationCategories;
    }

    /**
     * Sets a new locationCategories
     *
     * Used to define requirements or preferences in location for the event,
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType[] $locationCategories
     * @return self
     */
    public function setLocationCategories(array $locationCategories = null)
    {
        $this->locationCategories = $locationCategories;
        return $this;
    }

    /**
     * Adds as recreation
     *
     * A collection of recreation preferences.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType $recreation
     */
    public function addToRecreations(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType $recreation)
    {
        $this->recreations[] = $recreation;
        return $this;
    }

    /**
     * isset recreations
     *
     * A collection of recreation preferences.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreations($index)
    {
        return isset($this->recreations[$index]);
    }

    /**
     * unset recreations
     *
     * A collection of recreation preferences.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreations($index)
    {
        unset($this->recreations[$index]);
    }

    /**
     * Gets as recreations
     *
     * A collection of recreation preferences.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     */
    public function getRecreations()
    {
        return $this->recreations;
    }

    /**
     * Sets a new recreations
     *
     * A collection of recreation preferences.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[] $recreations
     * @return self
     */
    public function setRecreations(array $recreations = null)
    {
        $this->recreations = $recreations;
        return $this;
    }

    /**
     * Adds as property
     *
     * A collection of preferred properties.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType $property
     */
    public function addToProperties(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType $property)
    {
        $this->properties[] = $property;
        return $this;
    }

    /**
     * isset properties
     *
     * A collection of preferred properties.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperties($index)
    {
        return isset($this->properties[$index]);
    }

    /**
     * unset properties
     *
     * A collection of preferred properties.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperties($index)
    {
        unset($this->properties[$index]);
    }

    /**
     * Gets as properties
     *
     * A collection of preferred properties.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets a new properties
     *
     * A collection of preferred properties.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[] $properties
     * @return self
     */
    public function setProperties(array $properties = null)
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * Gets as comments
     *
     * Used to further define event preference information.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * Used to further define event preference information.
     *
     * @param \Recranet\OTA\Type\ParagraphType $comments
     * @return self
     */
    public function setComments(?\Recranet\OTA\Type\ParagraphType $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }
}

