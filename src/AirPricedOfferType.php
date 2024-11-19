<?php

namespace Recranet\OTA;

/**
 * Class representing AirPricedOfferType
 *
 * Priced ancillary offer information.
 * XSD Type: AirPricedOfferType
 */
class AirPricedOfferType
{
    /**
     * The unique ID of this priced offer.
     *
     * @var string $iD
     */
    private $iD = null;

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
     * The name of the ancillary item.
     *
     * @var string $name
     */
    private $name = null;

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
     * If true, trip insurance offers are included.
     *
     * @var bool $tripInsuranceInd
     */
    private $tripInsuranceInd = null;

    /**
     * Airline or ATPCO encoded service family(s).
     *
     * @var \Recranet\OTA\AncillaryServiceDetailType $serviceFamily
     */
    private $serviceFamily = null;

    /**
     * A detailed description of the ancillary item.
     *
     * @var \Recranet\OTA\FormattedTextTextType[] $shortDescription
     */
    private $shortDescription = [
        
    ];

    /**
     * A detailed description of the ancillary item.
     *
     * @var \Recranet\OTA\FormattedTextType[] $longDescription
     */
    private $longDescription = [
        
    ];

    /**
     * Offer pricing information, including amounts, tax(s), service family, pricing rules, pricing influencers, exchange rate and redemption amounts.
     *
     * @var \Recranet\OTA\AirPricedOfferType\PricingAType $pricing
     */
    private $pricing = null;

    /**
     * Origin and Destination location and time information for the trip.
     *
     * @var \Recranet\OTA\AirPricedOfferType\OriginDestinationAType[] $originDestination
     */
    private $originDestination = [
        
    ];

    /**
     * Additional details on seat offers or change requests.
     *
     * @var \Recranet\OTA\AirPricedOfferType\SeatInfoAType $seatInfo
     */
    private $seatInfo = null;

    /**
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @var \Recranet\OTA\AirPricedOfferType\OtherServicesAType[] $otherServices
     */
    private $otherServices = [
        
    ];

    /**
     * Trip insurance offer information.
     *
     * @var \Recranet\OTA\AirPricedOfferType\TripInsuranceAType $tripInsurance
     */
    private $tripInsurance = null;

    /**
     * Booking and upgrade instructions.
     *
     * @var \Recranet\OTA\AirPricedOfferType\BookingInstructionAType $bookingInstruction
     */
    private $bookingInstruction = null;

    /**
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @var \Recranet\OTA\AirPricedOfferType\RestrictionAType[] $restriction
     */
    private $restriction = [
        
    ];

    /**
     * Terms and conditions that apply to the offer.
     *
     * @var \Recranet\OTA\AirPricedOfferType\TermsAndConditionsAType[] $termsAndConditions
     */
    private $termsAndConditions = [
        
    ];

    /**
     * Commission information associated with the offer.
     *
     * @var \Recranet\OTA\CommissionType[] $commission
     */
    private $commission = [
        
    ];

    /**
     * Images, etc. of the ancillary item.
     *
     * @var \Recranet\OTA\AirPricedOfferType\MultimediaAType[] $multimedia
     */
    private $multimedia = [
        
    ];

    /**
     * The passenger PNR or other booking reference ID.
     *
     * @var \Recranet\OTA\UniqueIDType[] $bookingReferenceID
     */
    private $bookingReferenceID = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
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
     * Gets as name
     *
     * The name of the ancillary item.
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
     * The name of the ancillary item.
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
     * Gets as tripInsuranceInd
     *
     * If true, trip insurance offers are included.
     *
     * @return bool
     */
    public function getTripInsuranceInd()
    {
        return $this->tripInsuranceInd;
    }

    /**
     * Sets a new tripInsuranceInd
     *
     * If true, trip insurance offers are included.
     *
     * @param bool $tripInsuranceInd
     * @return self
     */
    public function setTripInsuranceInd($tripInsuranceInd)
    {
        $this->tripInsuranceInd = $tripInsuranceInd;
        return $this;
    }

    /**
     * Gets as serviceFamily
     *
     * Airline or ATPCO encoded service family(s).
     *
     * @return \Recranet\OTA\AncillaryServiceDetailType
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
     * @param \Recranet\OTA\AncillaryServiceDetailType $serviceFamily
     * @return self
     */
    public function setServiceFamily(\Recranet\OTA\AncillaryServiceDetailType $serviceFamily)
    {
        $this->serviceFamily = $serviceFamily;
        return $this;
    }

    /**
     * Adds as shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return self
     * @param \Recranet\OTA\FormattedTextTextType $shortDescription
     */
    public function addToShortDescription(\Recranet\OTA\FormattedTextTextType $shortDescription)
    {
        $this->shortDescription[] = $shortDescription;
        return $this;
    }

    /**
     * isset shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetShortDescription($index)
    {
        return isset($this->shortDescription[$index]);
    }

    /**
     * unset shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetShortDescription($index)
    {
        unset($this->shortDescription[$index]);
    }

    /**
     * Gets as shortDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return \Recranet\OTA\FormattedTextTextType[]
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
     * @param \Recranet\OTA\FormattedTextTextType[] $shortDescription
     * @return self
     */
    public function setShortDescription(array $shortDescription = null)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Adds as longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return self
     * @param \Recranet\OTA\FormattedTextType $longDescription
     */
    public function addToLongDescription(\Recranet\OTA\FormattedTextType $longDescription)
    {
        $this->longDescription[] = $longDescription;
        return $this;
    }

    /**
     * isset longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLongDescription($index)
    {
        return isset($this->longDescription[$index]);
    }

    /**
     * unset longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLongDescription($index)
    {
        unset($this->longDescription[$index]);
    }

    /**
     * Gets as longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @return \Recranet\OTA\FormattedTextType[]
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription
     *
     * A detailed description of the ancillary item.
     *
     * @param \Recranet\OTA\FormattedTextType[] $longDescription
     * @return self
     */
    public function setLongDescription(array $longDescription = null)
    {
        $this->longDescription = $longDescription;
        return $this;
    }

    /**
     * Gets as pricing
     *
     * Offer pricing information, including amounts, tax(s), service family, pricing rules, pricing influencers, exchange rate and redemption amounts.
     *
     * @return \Recranet\OTA\AirPricedOfferType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Offer pricing information, including amounts, tax(s), service family, pricing rules, pricing influencers, exchange rate and redemption amounts.
     *
     * @param \Recranet\OTA\AirPricedOfferType\PricingAType $pricing
     * @return self
     */
    public function setPricing(\Recranet\OTA\AirPricedOfferType\PricingAType $pricing)
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * Adds as originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @return self
     * @param \Recranet\OTA\AirPricedOfferType\OriginDestinationAType $originDestination
     */
    public function addToOriginDestination(\Recranet\OTA\AirPricedOfferType\OriginDestinationAType $originDestination)
    {
        $this->originDestination[] = $originDestination;
        return $this;
    }

    /**
     * isset originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @return \Recranet\OTA\AirPricedOfferType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Origin and Destination location and time information for the trip.
     *
     * @param \Recranet\OTA\AirPricedOfferType\OriginDestinationAType[] $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination = null)
    {
        $this->originDestination = $originDestination;
        return $this;
    }

    /**
     * Gets as seatInfo
     *
     * Additional details on seat offers or change requests.
     *
     * @return \Recranet\OTA\AirPricedOfferType\SeatInfoAType
     */
    public function getSeatInfo()
    {
        return $this->seatInfo;
    }

    /**
     * Sets a new seatInfo
     *
     * Additional details on seat offers or change requests.
     *
     * @param \Recranet\OTA\AirPricedOfferType\SeatInfoAType $seatInfo
     * @return self
     */
    public function setSeatInfo(?\Recranet\OTA\AirPricedOfferType\SeatInfoAType $seatInfo = null)
    {
        $this->seatInfo = $seatInfo;
        return $this;
    }

    /**
     * Adds as otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @return self
     * @param \Recranet\OTA\AirPricedOfferType\OtherServicesAType $otherServices
     */
    public function addToOtherServices(\Recranet\OTA\AirPricedOfferType\OtherServicesAType $otherServices)
    {
        $this->otherServices[] = $otherServices;
        return $this;
    }

    /**
     * isset otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherServices($index)
    {
        return isset($this->otherServices[$index]);
    }

    /**
     * unset otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherServices($index)
    {
        unset($this->otherServices[$index]);
    }

    /**
     * Gets as otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @return \Recranet\OTA\AirPricedOfferType\OtherServicesAType[]
     */
    public function getOtherServices()
    {
        return $this->otherServices;
    }

    /**
     * Sets a new otherServices
     *
     * Information related to non air products, such as lounge passes and clothing.
     *
     * @param \Recranet\OTA\AirPricedOfferType\OtherServicesAType[] $otherServices
     * @return self
     */
    public function setOtherServices(array $otherServices = null)
    {
        $this->otherServices = $otherServices;
        return $this;
    }

    /**
     * Gets as tripInsurance
     *
     * Trip insurance offer information.
     *
     * @return \Recranet\OTA\AirPricedOfferType\TripInsuranceAType
     */
    public function getTripInsurance()
    {
        return $this->tripInsurance;
    }

    /**
     * Sets a new tripInsurance
     *
     * Trip insurance offer information.
     *
     * @param \Recranet\OTA\AirPricedOfferType\TripInsuranceAType $tripInsurance
     * @return self
     */
    public function setTripInsurance(?\Recranet\OTA\AirPricedOfferType\TripInsuranceAType $tripInsurance = null)
    {
        $this->tripInsurance = $tripInsurance;
        return $this;
    }

    /**
     * Gets as bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @return \Recranet\OTA\AirPricedOfferType\BookingInstructionAType
     */
    public function getBookingInstruction()
    {
        return $this->bookingInstruction;
    }

    /**
     * Sets a new bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @param \Recranet\OTA\AirPricedOfferType\BookingInstructionAType $bookingInstruction
     * @return self
     */
    public function setBookingInstruction(?\Recranet\OTA\AirPricedOfferType\BookingInstructionAType $bookingInstruction = null)
    {
        $this->bookingInstruction = $bookingInstruction;
        return $this;
    }

    /**
     * Adds as restriction
     *
     * Restrictions that apply to the priced offer, such as ???Seat requests available up to 24 hours before departure".
     *
     * @return self
     * @param \Recranet\OTA\AirPricedOfferType\RestrictionAType $restriction
     */
    public function addToRestriction(\Recranet\OTA\AirPricedOfferType\RestrictionAType $restriction)
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
     * @return \Recranet\OTA\AirPricedOfferType\RestrictionAType[]
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
     * @param \Recranet\OTA\AirPricedOfferType\RestrictionAType[] $restriction
     * @return self
     */
    public function setRestriction(array $restriction = null)
    {
        $this->restriction = $restriction;
        return $this;
    }

    /**
     * Adds as termsAndConditions
     *
     * Terms and conditions that apply to the offer.
     *
     * @return self
     * @param \Recranet\OTA\AirPricedOfferType\TermsAndConditionsAType $termsAndConditions
     */
    public function addToTermsAndConditions(\Recranet\OTA\AirPricedOfferType\TermsAndConditionsAType $termsAndConditions)
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
     * @return \Recranet\OTA\AirPricedOfferType\TermsAndConditionsAType[]
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
     * @param \Recranet\OTA\AirPricedOfferType\TermsAndConditionsAType[] $termsAndConditions
     * @return self
     */
    public function setTermsAndConditions(array $termsAndConditions = null)
    {
        $this->termsAndConditions = $termsAndConditions;
        return $this;
    }

    /**
     * Adds as commission
     *
     * Commission information associated with the offer.
     *
     * @return self
     * @param \Recranet\OTA\CommissionType $commission
     */
    public function addToCommission(\Recranet\OTA\CommissionType $commission)
    {
        $this->commission[] = $commission;
        return $this;
    }

    /**
     * isset commission
     *
     * Commission information associated with the offer.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCommission($index)
    {
        return isset($this->commission[$index]);
    }

    /**
     * unset commission
     *
     * Commission information associated with the offer.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCommission($index)
    {
        unset($this->commission[$index]);
    }

    /**
     * Gets as commission
     *
     * Commission information associated with the offer.
     *
     * @return \Recranet\OTA\CommissionType[]
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Commission information associated with the offer.
     *
     * @param \Recranet\OTA\CommissionType[] $commission
     * @return self
     */
    public function setCommission(array $commission = null)
    {
        $this->commission = $commission;
        return $this;
    }

    /**
     * Adds as multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @return self
     * @param \Recranet\OTA\AirPricedOfferType\MultimediaAType $multimedia
     */
    public function addToMultimedia(\Recranet\OTA\AirPricedOfferType\MultimediaAType $multimedia)
    {
        $this->multimedia[] = $multimedia;
        return $this;
    }

    /**
     * isset multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMultimedia($index)
    {
        return isset($this->multimedia[$index]);
    }

    /**
     * unset multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMultimedia($index)
    {
        unset($this->multimedia[$index]);
    }

    /**
     * Gets as multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @return \Recranet\OTA\AirPricedOfferType\MultimediaAType[]
     */
    public function getMultimedia()
    {
        return $this->multimedia;
    }

    /**
     * Sets a new multimedia
     *
     * Images, etc. of the ancillary item.
     *
     * @param \Recranet\OTA\AirPricedOfferType\MultimediaAType[] $multimedia
     * @return self
     */
    public function setMultimedia(array $multimedia = null)
    {
        $this->multimedia = $multimedia;
        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @return self
     * @param \Recranet\OTA\UniqueIDType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Recranet\OTA\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;
        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @return \Recranet\OTA\UniqueIDType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The passenger PNR or other booking reference ID.
     *
     * @param \Recranet\OTA\UniqueIDType[] $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID = null)
    {
        $this->bookingReferenceID = $bookingReferenceID;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

