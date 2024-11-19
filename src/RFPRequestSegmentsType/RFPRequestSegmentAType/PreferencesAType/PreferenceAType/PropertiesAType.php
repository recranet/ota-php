<?php

namespace Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType;

/**
 * Class representing PropertiesAType
 */
class PropertiesAType
{
    /**
     * Used to define the preferred type of property for the event.
     *
     * @var \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[] $property
     */
    private $property = [
        
    ];

    /**
     * Adds as property
     *
     * Used to define the preferred type of property for the event.
     *
     * @return self
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType $property
     */
    public function addToProperty(\Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * Used to define the preferred type of property for the event.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * Used to define the preferred type of property for the event.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * Used to define the preferred type of property for the event.
     *
     * @return \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Used to define the preferred type of property for the event.
     *
     * @param \Recranet\OTA\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\PropertiesAType\PropertyAType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }
}

