<?php

namespace Recranet\OTA\BasicPropertyInfoType;

/**
 * Class representing ContactNumbersAType
 */
class ContactNumbersAType
{
    /**
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @var \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[] $contactNumber
     */
    private $contactNumber = [
        
    ];

    /**
     * Adds as contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @return self
     * @param \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType $contactNumber
     */
    public function addToContactNumber(\Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType $contactNumber)
    {
        $this->contactNumber[] = $contactNumber;
        return $this;
    }

    /**
     * isset contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactNumber($index)
    {
        return isset($this->contactNumber[$index]);
    }

    /**
     * unset contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactNumber($index)
    {
        unset($this->contactNumber[$index]);
    }

    /**
     * Gets as contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @return \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[]
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Sets a new contactNumber
     *
     * Contact numbers of the hotel property. Examples are telephone and fax numbers.
     *
     * @param \Recranet\OTA\BasicPropertyInfoType\ContactNumbersAType\ContactNumberAType[] $contactNumber
     * @return self
     */
    public function setContactNumber(array $contactNumber = null)
    {
        $this->contactNumber = $contactNumber;
        return $this;
    }
}

