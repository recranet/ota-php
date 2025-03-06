<?php

namespace Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType;

/**
 * Class representing LocationCategoriesAType
 */
class LocationCategoriesAType
{
    /**
     * Preferred event location.
     *
     * @var \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType $location
     */
    private $location = null;

    /**
     * Used to define the preferences or requirements regarding an event location.
     *
     * @var \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType[] $category
     */
    private $category = [
        
    ];

    /**
     * Gets as location
     *
     * Preferred event location.
     *
     * @return \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType
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
     * @param \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType $location
     * @return self
     */
    public function setLocation(?\Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\LocationAType $location = null)
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
     * @param \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType $category
     */
    public function addToCategory(\Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType $category)
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
     * @return \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType[]
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
     * @param \Recranet\OTA\Type\EventReportType\GeneralEventInfoAType\DatesAType\DateAType\LocationCategoriesAType\CategoryAType[] $category
     * @return self
     */
    public function setCategory(array $category = null)
    {
        $this->category = $category;
        return $this;
    }
}

