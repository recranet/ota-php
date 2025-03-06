<?php

namespace Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing AudioVisualsAType
 */
class AudioVisualsAType
{
    /**
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @var string $providedBy
     */
    private $providedBy = null;

    /**
     * Identifes the name of the provider of the item or service.
     *
     * @var string $providerName
     */
    private $providerName = null;

    /**
     * Defines a specific audio visual need and its charge for this function.
     *
     * @var \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType\AudioVisualAType[] $audioVisual
     */
    private $audioVisual = [
        
    ];

    /**
     * Gets as providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @return string
     */
    public function getProvidedBy()
    {
        return $this->providedBy;
    }

    /**
     * Sets a new providedBy
     *
     * Identifies who will provide the item or service (e.g., group, venue).
     *
     * @param string $providedBy
     * @return self
     */
    public function setProvidedBy($providedBy)
    {
        $this->providedBy = $providedBy;
        return $this;
    }

    /**
     * Gets as providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @return string
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * Identifes the name of the provider of the item or service.
     *
     * @param string $providerName
     * @return self
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        return $this;
    }

    /**
     * Adds as audioVisual
     *
     * Defines a specific audio visual need and its charge for this function.
     *
     * @return self
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType\AudioVisualAType $audioVisual
     */
    public function addToAudioVisual(\Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType\AudioVisualAType $audioVisual)
    {
        $this->audioVisual[] = $audioVisual;
        return $this;
    }

    /**
     * isset audioVisual
     *
     * Defines a specific audio visual need and its charge for this function.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAudioVisual($index)
    {
        return isset($this->audioVisual[$index]);
    }

    /**
     * unset audioVisual
     *
     * Defines a specific audio visual need and its charge for this function.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAudioVisual($index)
    {
        unset($this->audioVisual[$index]);
    }

    /**
     * Gets as audioVisual
     *
     * Defines a specific audio visual need and its charge for this function.
     *
     * @return \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType\AudioVisualAType[]
     */
    public function getAudioVisual()
    {
        return $this->audioVisual;
    }

    /**
     * Sets a new audioVisual
     *
     * Defines a specific audio visual need and its charge for this function.
     *
     * @param \Recranet\OTA\Type\PostEventSiteReportType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualsAType\AudioVisualAType[] $audioVisual
     * @return self
     */
    public function setAudioVisual(array $audioVisual)
    {
        $this->audioVisual = $audioVisual;
        return $this;
    }
}

