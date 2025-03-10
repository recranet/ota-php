<?php

namespace Recranet\OTA\Type;

/**
 * Class representing AirOfferType
 *
 * Summary ancillary offer information without pricing.
 * XSD Type: AirOfferType
 */
class AirOfferType
{
    /**
     * The unique ID of this priced offer.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * The name of the ancillary item or offer.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * If true, this offer is associated with another offer and may not be sold individually.
     *
     * @var bool $bundleInd
     */
    private $bundleInd = null;

    /**
     * The unique ID of a priced offer that this offer is associated with.
     *
     * @var string $bundleID
     */
    private $bundleID = null;

    /**
     * If true, this is an offer that must be shown to the customer.
     *
     * @var bool $mandatoryInd
     */
    private $mandatoryInd = null;

    /**
     * If true, this is an offer that must be accepted by the customer.
     *
     * @var bool $acceptInd
     */
    private $acceptInd = null;

    /**
     * Airline or ATPCO encoded service family(s).
     *
     * @var \Recranet\OTA\Type\AncillaryServiceDetailType $serviceFamily
     */
    private $serviceFamily = null;

    /**
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @var \Recranet\OTA\Type\AirOfferType\RestrictionAType[] $restriction
     */
    private $restriction = [
        
    ];

    /**
     * A detailed description of the ancillary item.
     *
     * @var \Recranet\OTA\Type\FormattedTextTextType $shortDescription
     */
    private $shortDescription = null;

    /**
     * Terms and conditions that apply to the offer.
     *
     * @var \Recranet\OTA\Type\AirOfferType\TermsAndConditionsAType[] $termsAndConditions
     */
    private $termsAndConditions = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as iD
     *
     * The unique ID of this priced offer.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * The unique ID of this priced offer.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the ancillary item or offer.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the ancillary item or offer.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as bundleInd
     *
     * If true, this offer is associated with another offer and may not be sold individually.
     *
     * @return bool
     */
    public function getBundleInd()
    {
        return $this->bundleInd;
    }

    /**
     * Sets a new bundleInd
     *
     * If true, this offer is associated with another offer and may not be sold individually.
     *
     * @param bool $bundleInd
     * @return self
     */
    public function setBundleInd($bundleInd)
    {
        $this->bundleInd = $bundleInd;
        return $this;
    }

    /**
     * Gets as bundleID
     *
     * The unique ID of a priced offer that this offer is associated with.
     *
     * @return string
     */
    public function getBundleID()
    {
        return $this->bundleID;
    }

    /**
     * Sets a new bundleID
     *
     * The unique ID of a priced offer that this offer is associated with.
     *
     * @param string $bundleID
     * @return self
     */
    public function setBundleID($bundleID)
    {
        $this->bundleID = $bundleID;
        return $this;
    }

    /**
     * Gets as mandatoryInd
     *
     * If true, this is an offer that must be shown to the customer.
     *
     * @return bool
     */
    public function getMandatoryInd()
    {
        return $this->mandatoryInd;
    }

    /**
     * Sets a new mandatoryInd
     *
     * If true, this is an offer that must be shown to the customer.
     *
     * @param bool $mandatoryInd
     * @return self
     */
    public function setMandatoryInd($mandatoryInd)
    {
        $this->mandatoryInd = $mandatoryInd;
        return $this;
    }

    /**
     * Gets as acceptInd
     *
     * If true, this is an offer that must be accepted by the customer.
     *
     * @return bool
     */
    public function getAcceptInd()
    {
        return $this->acceptInd;
    }

    /**
     * Sets a new acceptInd
     *
     * If true, this is an offer that must be accepted by the customer.
     *
     * @param bool $acceptInd
     * @return self
     */
    public function setAcceptInd($acceptInd)
    {
        $this->acceptInd = $acceptInd;
        return $this;
    }

    /**
     * Gets as serviceFamily
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @return \Recranet\OTA\Type\AncillaryServiceDetailType
     */
    public function getServiceFamily()
    {
        return $this->serviceFamily;
    }

    /**
     * Sets a new serviceFamily
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @param \Recranet\OTA\Type\AncillaryServiceDetailType $serviceFamily
     * @return self
     */
    public function setServiceFamily(?\Recranet\OTA\Type\AncillaryServiceDetailType $serviceFamily = null)
    {
        $this->serviceFamily = $serviceFamily;
        return $this;
    }

    /**
     * Adds as restriction
     *
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @return self
     * @param \Recranet\OTA\Type\AirOfferType\RestrictionAType $restriction
     */
    public function addToRestriction(\Recranet\OTA\Type\AirOfferType\RestrictionAType $restriction)
    {
        $this->restriction[] = $restriction;
        return $this;
    }

    /**
     * isset restriction
     *
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRestriction($index)
    {
        return isset($this->restriction[$index]);
    }

    /**
     * unset restriction
     *
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRestriction($index)
    {
        unset($this->restriction[$index]);
    }

    /**
     * Gets as restriction
     *
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @return \Recranet\OTA\Type\AirOfferType\RestrictionAType[]
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * Sets a new restriction
     *
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @param \Recranet\OTA\Type\AirOfferType\RestrictionAType[] $restriction
     * @return self
     */
    public function setRestriction(array $restriction = null)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Gets as shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return \Recranet\OTA\Type\FormattedTextTextType
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param \Recranet\OTA\Type\FormattedTextTextType $shortDescription
     * @return self
     */
    public function setShortDescription(?\Recranet\OTA\Type\FormattedTextTextType $shortDescription = null)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Adds as termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @return self
     * @param \Recranet\OTA\Type\AirOfferType\TermsAndConditionsAType $termsAndConditions
     */
    public function addToTermsAndConditions(\Recranet\OTA\Type\AirOfferType\TermsAndConditionsAType $termsAndConditions)
    {
        $this->termsAndConditions[] = $termsAndConditions;
        return $this;
    }

    /**
     * isset termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTermsAndConditions($index)
    {
        return isset($this->termsAndConditions[$index]);
    }

    /**
     * unset termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTermsAndConditions($index)
    {
        unset($this->termsAndConditions[$index]);
    }

    /**
     * Gets as termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @return \Recranet\OTA\Type\AirOfferType\TermsAndConditionsAType[]
     */
    public function getTermsAndConditions()
    {
        return $this->termsAndConditions;
    }

    /**
     * Sets a new termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @param \Recranet\OTA\Type\AirOfferType\TermsAndConditionsAType[] $termsAndConditions
     * @return self
     */
    public function setTermsAndConditions(array $termsAndConditions = null)
    {
        $this->termsAndConditions = $termsAndConditions;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

