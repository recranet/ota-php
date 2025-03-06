<?php

namespace Recranet\OTA\Type\AffiliationInfoType\PartnerInfosAType;

/**
 * Class representing PartnerInfoAType
 */
class PartnerInfoAType
{
    /**
     * Provides general information for the partner.
     *
     * @var \Recranet\OTA\Type\ContactInfoType $contact
     */
    private $contact = null;

    /**
     * Describes the partnership program.
     *
     * @var \Recranet\OTA\Type\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as contact
     *
     * Provides general information for the partner.
     *
     * @return \Recranet\OTA\Type\ContactInfoType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Provides general information for the partner.
     *
     * @param \Recranet\OTA\Type\ContactInfoType $contact
     * @return self
     */
    public function setContact(?\Recranet\OTA\Type\ContactInfoType $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as description
     *
     * Describes the partnership program.
     *
     * @return \Recranet\OTA\Type\ParagraphType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Describes the partnership program.
     *
     * @param \Recranet\OTA\Type\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\Type\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

