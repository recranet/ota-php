<?php

namespace Recranet\OTA\DonationType;

/**
 * Class representing DonorInfoAType
 */
class DonorInfoAType
{
    /**
     * The donor name.
     *
     * @var \Recranet\OTA\DonationType\DonorInfoAType\NameAType $name
     */
    private $name = null;

    /**
     * Donor address and email address information.
     *
     * @var \Recranet\OTA\DonationType\DonorInfoAType\ContactInfoAType $contactInfo
     */
    private $contactInfo = null;

    /**
     * Gets as name
     *
     * The donor name.
     *
     * @return \Recranet\OTA\DonationType\DonorInfoAType\NameAType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The donor name.
     *
     * @param \Recranet\OTA\DonationType\DonorInfoAType\NameAType $name
     * @return self
     */
    public function setName(?\Recranet\OTA\DonationType\DonorInfoAType\NameAType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as contactInfo
     *
     * Donor address and email address information.
     *
     * @return \Recranet\OTA\DonationType\DonorInfoAType\ContactInfoAType
     */
    public function getContactInfo()
    {
        return $this->contactInfo;
    }

    /**
     * Sets a new contactInfo
     *
     * Donor address and email address information.
     *
     * @param \Recranet\OTA\DonationType\DonorInfoAType\ContactInfoAType $contactInfo
     * @return self
     */
    public function setContactInfo(?\Recranet\OTA\DonationType\DonorInfoAType\ContactInfoAType $contactInfo = null)
    {
        $this->contactInfo = $contactInfo;
        return $this;
    }
}

