<?php

namespace Recranet\OTA\AffiliationInfoType\PartnerInfosAType;

/**
 * Class representing PartnerInfoAType
 */
class PartnerInfoAType
{
    /**
     * Provides general information for the partner.
     *
     * @var \Recranet\OTA\ContactInfoType $contact
     */
    private $contact = null;

    /**
     * Describes the partnership program.
     *
     * @var \Recranet\OTA\ParagraphType $description
     */
    private $description = null;

    /**
     * Gets as contact
     *
     * Provides general information for the partner.
     *
     * @return \Recranet\OTA\ContactInfoType
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
     * @param \Recranet\OTA\ContactInfoType $contact
     * @return self
     */
    public function setContact(?\Recranet\OTA\ContactInfoType $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as description
     *
     * Describes the partnership program.
     *
     * @return \Recranet\OTA\ParagraphType
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
     * @param \Recranet\OTA\ParagraphType $description
     * @return self
     */
    public function setDescription(?\Recranet\OTA\ParagraphType $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

