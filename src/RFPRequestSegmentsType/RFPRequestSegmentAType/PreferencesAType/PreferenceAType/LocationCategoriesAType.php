<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType;

/**
 * Class representing LocationCategoriesAType
 */
class LocationCategoriesAType
{
    /**
     * Preferred event location.
     *
     * @var \Recranet\OTA\LocationGeneralType $location
     */
    private $location = null;

    /**
     * Used to define the preferences or requirements regarding an event location.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType[] $category
     */
    private $category = [
        
    ];

    /**
     * Gets as location
     *
     * Preferred event location.
     *
     * @return \Recranet\OTA\LocationGeneralType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Preferred event location.
     *
     * @param \Recranet\OTA\LocationGeneralType $location
     * @return self
     */
    public function setLocation(?\Recranet\OTA\LocationGeneralType $location = null)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Adds as category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType $category
     */
    public function addToCategory(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType $category)
    {
        $this->category[] = $category;
        return $this;
    }

    /**
     * isset category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCategory($index)
    {
        return isset($this->category[$index]);
    }

    /**
     * unset category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCategory($index)
    {
        unset($this->category[$index]);
    }

    /**
     * Gets as category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType[]
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Used to define the preferences or requirements regarding an event location.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\LocationCategoriesAType\CategoryAType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }
}

