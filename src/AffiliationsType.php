<?php

namespace Recranet\OTA;

/**
 * Class representing AffiliationsType
 *
 * Defines an entity that provides travel services or benefits to a customer or company.
 * XSD Type: AffiliationsType
 */
class AffiliationsType
{
    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Detailed information for a membership organization that has travel benefits, programs or discounts.
     *
     * @var \Recranet\OTA\OrganizationType[] $organization
     */
    private $organization = [
        
    ];

    /**
     * Employer information associated to this affiliation.
     *
     * @var \Recranet\OTA\EmployerType[] $employer
     */
    private $employer = [
        
    ];

    /**
     * Information on the organization responsible for arranging travel.
     *
     * @var \Recranet\OTA\TravelArrangerType[] $travelArranger
     */
    private $travelArranger = [
        
    ];

    /**
     * A club that offers special privileges and related services for this affiliation.
     *
     * @var \Recranet\OTA\TravelClubType[] $travelClub
     */
    private $travelClub = [
        
    ];

    /**
     * Travel insurance associated to this affiliation.
     *
     * @var \Recranet\OTA\InsuranceType[] $insurance
     */
    private $insurance = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Adds as organization
     *
     * Detailed information for a membership organization that has travel benefits, programs or discounts.
     *
     * @return self
     * @param \Recranet\OTA\OrganizationType $organization
     */
    public function addToOrganization(\Recranet\OTA\OrganizationType $organization)
    {
        $this->organization[] = $organization;
        return $this;
    }

    /**
     * isset organization
     *
     * Detailed information for a membership organization that has travel benefits, programs or discounts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrganization($index)
    {
        return isset($this->organization[$index]);
    }

    /**
     * unset organization
     *
     * Detailed information for a membership organization that has travel benefits, programs or discounts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrganization($index)
    {
        unset($this->organization[$index]);
    }

    /**
     * Gets as organization
     *
     * Detailed information for a membership organization that has travel benefits, programs or discounts.
     *
     * @return \Recranet\OTA\OrganizationType[]
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * Detailed information for a membership organization that has travel benefits, programs or discounts.
     *
     * @param \Recranet\OTA\OrganizationType[] $organization
     * @return self
     */
    public function setOrganization(array $organization = null)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Adds as employer
     *
     * Employer information associated to this affiliation.
     *
     * @return self
     * @param \Recranet\OTA\EmployerType $employer
     */
    public function addToEmployer(\Recranet\OTA\EmployerType $employer)
    {
        $this->employer[] = $employer;
        return $this;
    }

    /**
     * isset employer
     *
     * Employer information associated to this affiliation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmployer($index)
    {
        return isset($this->employer[$index]);
    }

    /**
     * unset employer
     *
     * Employer information associated to this affiliation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmployer($index)
    {
        unset($this->employer[$index]);
    }

    /**
     * Gets as employer
     *
     * Employer information associated to this affiliation.
     *
     * @return \Recranet\OTA\EmployerType[]
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Sets a new employer
     *
     * Employer information associated to this affiliation.
     *
     * @param \Recranet\OTA\EmployerType[] $employer
     * @return self
     */
    public function setEmployer(array $employer = null)
    {
        $this->employer = $employer;
        return $this;
    }

    /**
     * Adds as travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @return self
     * @param \Recranet\OTA\TravelArrangerType $travelArranger
     */
    public function addToTravelArranger(\Recranet\OTA\TravelArrangerType $travelArranger)
    {
        $this->travelArranger[] = $travelArranger;
        return $this;
    }

    /**
     * isset travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelArranger($index)
    {
        return isset($this->travelArranger[$index]);
    }

    /**
     * unset travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelArranger($index)
    {
        unset($this->travelArranger[$index]);
    }

    /**
     * Gets as travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @return \Recranet\OTA\TravelArrangerType[]
     */
    public function getTravelArranger()
    {
        return $this->travelArranger;
    }

    /**
     * Sets a new travelArranger
     *
     * Information on the organization responsible for arranging travel.
     *
     * @param \Recranet\OTA\TravelArrangerType[] $travelArranger
     * @return self
     */
    public function setTravelArranger(array $travelArranger = null)
    {
        $this->travelArranger = $travelArranger;
        return $this;
    }

    /**
     * Adds as travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @return self
     * @param \Recranet\OTA\TravelClubType $travelClub
     */
    public function addToTravelClub(\Recranet\OTA\TravelClubType $travelClub)
    {
        $this->travelClub[] = $travelClub;
        return $this;
    }

    /**
     * isset travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTravelClub($index)
    {
        return isset($this->travelClub[$index]);
    }

    /**
     * unset travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTravelClub($index)
    {
        unset($this->travelClub[$index]);
    }

    /**
     * Gets as travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @return \Recranet\OTA\TravelClubType[]
     */
    public function getTravelClub()
    {
        return $this->travelClub;
    }

    /**
     * Sets a new travelClub
     *
     * A club that offers special privileges and related services for this affiliation.
     *
     * @param \Recranet\OTA\TravelClubType[] $travelClub
     * @return self
     */
    public function setTravelClub(array $travelClub = null)
    {
        $this->travelClub = $travelClub;
        return $this;
    }

    /**
     * Adds as insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @return self
     * @param \Recranet\OTA\InsuranceType $insurance
     */
    public function addToInsurance(\Recranet\OTA\InsuranceType $insurance)
    {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * isset insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetInsurance($index)
    {
        return isset($this->insurance[$index]);
    }

    /**
     * unset insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetInsurance($index)
    {
        unset($this->insurance[$index]);
    }

    /**
     * Gets as insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @return \Recranet\OTA\InsuranceType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Travel insurance associated to this affiliation.
     *
     * @param \Recranet\OTA\InsuranceType[] $insurance
     * @return self
     */
    public function setInsurance(array $insurance = null)
    {
        $this->insurance = $insurance;
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

