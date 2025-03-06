<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType;

/**
 * Class representing RecreationsAType
 */
class RecreationsAType
{
    /**
     * Used to define recreation preferences for the event site.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[] $recreation
     */
    private $recreation = [
        
    ];

    /**
     * Adds as recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType $recreation
     */
    public function addToRecreation(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType $recreation)
    {
        $this->recreation[] = $recreation;
        return $this;
    }

    /**
     * isset recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreation($index)
    {
        return isset($this->recreation[$index]);
    }

    /**
     * unset recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreation($index)
    {
        unset($this->recreation[$index]);
    }

    /**
     * Gets as recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[]
     */
    public function getRecreation()
    {
        return $this->recreation;
    }

    /**
     * Sets a new recreation
     *
     * Used to define recreation preferences for the event site.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType\RecreationsAType\RecreationAType[] $recreation
     * @return self
     */
    public function setRecreation(array $recreation)
    {
        $this->recreation = $recreation;
        return $this;
    }
}

