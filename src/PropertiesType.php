<?php

namespace Recranet\OTA;

/**
 * Class representing PropertiesType
 *
 *
 * XSD Type: PropertiesType
 */
class PropertiesType
{
    /**
     * Detailed property level information.
     *
     * @var \Recranet\OTA\PropertiesType\PropertyAType[] $property
     */
    private $property = [
        
    ];

    /**
     * Adds as property
     *
     * Detailed property level information.
     *
     * @return self
     * @param \Recranet\OTA\PropertiesType\PropertyAType $property
     */
    public function addToProperty(\Recranet\OTA\PropertiesType\PropertyAType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * Detailed property level information.
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
     * Detailed property level information.
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
     * Detailed property level information.
     *
     * @return \Recranet\OTA\PropertiesType\PropertyAType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * Detailed property level information.
     *
     * @param \Recranet\OTA\PropertiesType\PropertyAType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }
}

