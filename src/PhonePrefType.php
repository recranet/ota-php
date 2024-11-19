<?php

namespace Recranet\OTA;

/**
 * Class representing PhonePrefType
 *
 * Identifies a telephone number preference.
 * XSD Type: PhonePrefType
 */
class PhonePrefType
{
    /**
     * Identifies a telephone number.
     *
     * @var \Recranet\OTA\PhonePrefType\TelephoneAType $telephone
     */
    private $telephone = null;

    /**
     * Gets as telephone
     *
     * Identifies a telephone number.
     *
     * @return \Recranet\OTA\PhonePrefType\TelephoneAType
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Identifies a telephone number.
     *
     * @param \Recranet\OTA\PhonePrefType\TelephoneAType $telephone
     * @return self
     */
    public function setTelephone(\Recranet\OTA\PhonePrefType\TelephoneAType $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }
}

