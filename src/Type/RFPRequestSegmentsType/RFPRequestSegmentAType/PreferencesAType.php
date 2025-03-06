<?php

namespace Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType;

/**
 * Class representing PreferencesAType
 */
class PreferencesAType
{
    /**
     * Describes various preferences or requirements for the RFP.
     *
     * @var \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[] $preference
     */
    private $preference = [
        
    ];

    /**
     * Adds as preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @return self
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType $preference
     */
    public function addToPreference(\Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType $preference)
    {
        $this->preference[] = $preference;
        return $this;
    }

    /**
     * isset preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPreference($index)
    {
        return isset($this->preference[$index]);
    }

    /**
     * unset preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPreference($index)
    {
        unset($this->preference[$index]);
    }

    /**
     * Gets as preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @return \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[]
     */
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * Sets a new preference
     *
     * Describes various preferences or requirements for the RFP.
     *
     * @param \Recranet\OTA\Type\RFPRequestSegmentsType\RFPRequestSegmentAType\PreferencesAType\PreferenceAType[] $preference
     * @return self
     */
    public function setPreference(array $preference)
    {
        $this->preference = $preference;
        return $this;
    }
}

