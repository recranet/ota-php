<?php

namespace Recranet\OTA\Type\DirectBillType;

use Recranet\OTA\Type\CompanyNameType;

/**
 * Class representing CompanyNameAType
 */
class CompanyNameAType extends CompanyNameType
{
    /**
     * This may be used to pass the name of the contact at the company for which the direct bill applies.
     *
     * @var string $contactName
     */
    private $contactName = null;

    /**
     * Gets as contactName
     *
     * This may be used to pass the name of the contact at the company for which the direct bill applies.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName
     *
     * This may be used to pass the name of the contact at the company for which the direct bill applies.
     *
     * @param string $contactName
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }
}

