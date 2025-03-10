<?php

namespace Recranet\OTA\Type\HotelInfoType\OwnershipManagementInfosAType;

use Recranet\OTA\Type\ContactInfoType;

/**
 * Class representing OwnershipManagementInfoAType
 */
class OwnershipManagementInfoAType extends ContactInfoType
{
    /**
     * Indicates the relationship of the contact or company, contained in the Contact element, to the property. Refer to OpenTravel Code List Relationship (REL).
     *
     * @var string $relationshipTypeCode
     */
    private $relationshipTypeCode = null;

    /**
     * Gets as relationshipTypeCode
     *
     * Indicates the relationship of the contact or company, contained in the Contact element, to the property. Refer to OpenTravel Code List Relationship (REL).
     *
     * @return string
     */
    public function getRelationshipTypeCode()
    {
        return $this->relationshipTypeCode;
    }

    /**
     * Sets a new relationshipTypeCode
     *
     * Indicates the relationship of the contact or company, contained in the Contact element, to the property. Refer to OpenTravel Code List Relationship (REL).
     *
     * @param string $relationshipTypeCode
     * @return self
     */
    public function setRelationshipTypeCode($relationshipTypeCode)
    {
        $this->relationshipTypeCode = $relationshipTypeCode;
        return $this;
    }
}

