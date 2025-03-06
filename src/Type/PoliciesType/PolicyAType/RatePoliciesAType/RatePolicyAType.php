<?php

namespace Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType;

/**
 * Class representing RatePolicyAType
 */
class RatePolicyAType
{
    /**
     * When true, government rates subject to change without notice.
     *
     * @var bool $subjectToChangeInd
     */
    private $subjectToChangeInd = null;

    /**
     * When true, ID is required at check-in.
     *
     * @var bool $iDRequiredInd
     */
    private $iDRequiredInd = null;

    /**
     * The guest type(s) for the policy. Use a value from the OpenTravel Hotel Guest Type (GUE) code list.
     *
     * @var string[] $guestType
     */
    private $guestType = null;

    /**
     * Identifies the minimum number of nights a guest has to stay in a room in order to be eligible for the rate.
     *
     * @var int $minRoomNightCommitment
     */
    private $minRoomNightCommitment = null;

    /**
     * Used to indicate the alternate rate plan type to be offered. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @var string $rateOfferType
     */
    private $rateOfferType = null;

    /**
     * When true, a corporate ID is required to book a corporate rate.
     *
     * @var bool $corporateIDInd
     */
    private $corporateIDInd = null;

    /**
     * The type of the rate policy e.g. government and preferred.
     *
     * Select a predefined value from the list or use the "Other_" value to create an enumerated value agreed upon between trading partners.
     *
     * @var \Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType\TypeAType $type
     */
    private $type = null;

    /**
     * Details about a rate policy.
     *
     * @var \Recranet\OTA\Type\ParagraphType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as subjectToChangeInd
     *
     * When true, government rates subject to change without notice.
     *
     * @return bool
     */
    public function getSubjectToChangeInd()
    {
        return $this->subjectToChangeInd;
    }

    /**
     * Sets a new subjectToChangeInd
     *
     * When true, government rates subject to change without notice.
     *
     * @param bool $subjectToChangeInd
     * @return self
     */
    public function setSubjectToChangeInd($subjectToChangeInd)
    {
        $this->subjectToChangeInd = $subjectToChangeInd;
        return $this;
    }

    /**
     * Gets as iDRequiredInd
     *
     * When true, ID is required at check-in.
     *
     * @return bool
     */
    public function getIDRequiredInd()
    {
        return $this->iDRequiredInd;
    }

    /**
     * Sets a new iDRequiredInd
     *
     * When true, ID is required at check-in.
     *
     * @param bool $iDRequiredInd
     * @return self
     */
    public function setIDRequiredInd($iDRequiredInd)
    {
        $this->iDRequiredInd = $iDRequiredInd;
        return $this;
    }

    /**
     * Adds as guestType
     *
     * The guest type(s) for the policy. Use a value from the OpenTravel Hotel Guest Type (GUE) code list.
     *
     * @return self
     * @param string $guestType
     */
    public function addToGuestType($guestType)
    {
        $this->guestType[] = $guestType;
        return $this;
    }

    /**
     * isset guestType
     *
     * The guest type(s) for the policy. Use a value from the OpenTravel Hotel Guest Type (GUE) code list.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetGuestType($index)
    {
        return isset($this->guestType[$index]);
    }

    /**
     * unset guestType
     *
     * The guest type(s) for the policy. Use a value from the OpenTravel Hotel Guest Type (GUE) code list.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetGuestType($index)
    {
        unset($this->guestType[$index]);
    }

    /**
     * Gets as guestType
     *
     * The guest type(s) for the policy. Use a value from the OpenTravel Hotel Guest Type (GUE) code list.
     *
     * @return string[]
     */
    public function getGuestType()
    {
        return $this->guestType;
    }

    /**
     * Sets a new guestType
     *
     * The guest type(s) for the policy. Use a value from the OpenTravel Hotel Guest Type (GUE) code list.
     *
     * @param string $guestType
     * @return self
     */
    public function setGuestType(array $guestType)
    {
        $this->guestType = $guestType;
        return $this;
    }

    /**
     * Gets as minRoomNightCommitment
     *
     * Identifies the minimum number of nights a guest has to stay in a room in order to be eligible for the rate.
     *
     * @return int
     */
    public function getMinRoomNightCommitment()
    {
        return $this->minRoomNightCommitment;
    }

    /**
     * Sets a new minRoomNightCommitment
     *
     * Identifies the minimum number of nights a guest has to stay in a room in order to be eligible for the rate.
     *
     * @param int $minRoomNightCommitment
     * @return self
     */
    public function setMinRoomNightCommitment($minRoomNightCommitment)
    {
        $this->minRoomNightCommitment = $minRoomNightCommitment;
        return $this;
    }

    /**
     * Gets as rateOfferType
     *
     * Used to indicate the alternate rate plan type to be offered. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @return string
     */
    public function getRateOfferType()
    {
        return $this->rateOfferType;
    }

    /**
     * Sets a new rateOfferType
     *
     * Used to indicate the alternate rate plan type to be offered. Refer to OpenTravel Code List Rate Plan Type (RPT).
     *
     * @param string $rateOfferType
     * @return self
     */
    public function setRateOfferType($rateOfferType)
    {
        $this->rateOfferType = $rateOfferType;
        return $this;
    }

    /**
     * Gets as corporateIDInd
     *
     * When true, a corporate ID is required to book a corporate rate.
     *
     * @return bool
     */
    public function getCorporateIDInd()
    {
        return $this->corporateIDInd;
    }

    /**
     * Sets a new corporateIDInd
     *
     * When true, a corporate ID is required to book a corporate rate.
     *
     * @param bool $corporateIDInd
     * @return self
     */
    public function setCorporateIDInd($corporateIDInd)
    {
        $this->corporateIDInd = $corporateIDInd;
        return $this;
    }

    /**
     * Gets as type
     *
     * The type of the rate policy e.g. government and preferred.
     *
     * Select a predefined value from the list or use the "Other_" value to create an enumerated value agreed upon between trading partners.
     *
     * @return \Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The type of the rate policy e.g. government and preferred.
     *
     * Select a predefined value from the list or use the "Other_" value to create an enumerated value agreed upon between trading partners.
     *
     * @param \Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType\TypeAType $type
     * @return self
     */
    public function setType(?\Recranet\OTA\Type\PoliciesType\PolicyAType\RatePoliciesAType\RatePolicyAType\TypeAType $type = null)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as description
     *
     * Details about a rate policy.
     *
     * @return self
     * @param \Recranet\OTA\Type\ParagraphType $description
     */
    public function addToDescription(\Recranet\OTA\Type\ParagraphType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * Details about a rate policy.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * Details about a rate policy.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * Details about a rate policy.
     *
     * @return \Recranet\OTA\Type\ParagraphType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Details about a rate policy.
     *
     * @param \Recranet\OTA\Type\ParagraphType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

