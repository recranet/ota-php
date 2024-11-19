<?php

namespace Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType;

/**
 * Class representing DetailInfoAType
 */
class DetailInfoAType
{
    /**
     * Service animal indicator.
     * Example: true
     * Implementer: If true, this traveler has a service animal.
     *
     * @var bool $serviceAnimalInd
     */
    private $serviceAnimalInd = null;

    /**
     * Disabled traveler indicator.
     * Example: true
     * Implementer: If true, this traveler has a disability.
     *
     * @var bool $disabledInd
     */
    private $disabledInd = null;

    /**
     * Female traveler indicator.
     * Example: true
     * Implementer: If true, this traveler is female.
     *
     * @var bool $femaleInd
     */
    private $femaleInd = null;

    /**
     * Male traveler indicator.
     * Example: true
     * Implementer: If true, this traveler is male.
     *
     * @var bool $maleInd
     */
    private $maleInd = null;

    /**
     * Identifying traveler information.
     * Implementer: Exchanging this level of personal information between trading partners may be subject to state, local and government legislation and internal or negotiated data use and sharing permissions.
     *
     * @var \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType $identification
     */
    private $identification = null;

    /**
     * Offer requestor assessed customer value.
     *
     * @var \Recranet\OTA\OntologyValueType $customerValue
     */
    private $customerValue = null;

    /**
     * Gets as serviceAnimalInd
     *
     * Service animal indicator.
     * Example: true
     * Implementer: If true, this traveler has a service animal.
     *
     * @return bool
     */
    public function getServiceAnimalInd()
    {
        return $this->serviceAnimalInd;
    }

    /**
     * Sets a new serviceAnimalInd
     *
     * Service animal indicator.
     * Example: true
     * Implementer: If true, this traveler has a service animal.
     *
     * @param bool $serviceAnimalInd
     * @return self
     */
    public function setServiceAnimalInd($serviceAnimalInd)
    {
        $this->serviceAnimalInd = $serviceAnimalInd;
        return $this;
    }

    /**
     * Gets as disabledInd
     *
     * Disabled traveler indicator.
     * Example: true
     * Implementer: If true, this traveler has a disability.
     *
     * @return bool
     */
    public function getDisabledInd()
    {
        return $this->disabledInd;
    }

    /**
     * Sets a new disabledInd
     *
     * Disabled traveler indicator.
     * Example: true
     * Implementer: If true, this traveler has a disability.
     *
     * @param bool $disabledInd
     * @return self
     */
    public function setDisabledInd($disabledInd)
    {
        $this->disabledInd = $disabledInd;
        return $this;
    }

    /**
     * Gets as femaleInd
     *
     * Female traveler indicator.
     * Example: true
     * Implementer: If true, this traveler is female.
     *
     * @return bool
     */
    public function getFemaleInd()
    {
        return $this->femaleInd;
    }

    /**
     * Sets a new femaleInd
     *
     * Female traveler indicator.
     * Example: true
     * Implementer: If true, this traveler is female.
     *
     * @param bool $femaleInd
     * @return self
     */
    public function setFemaleInd($femaleInd)
    {
        $this->femaleInd = $femaleInd;
        return $this;
    }

    /**
     * Gets as maleInd
     *
     * Male traveler indicator.
     * Example: true
     * Implementer: If true, this traveler is male.
     *
     * @return bool
     */
    public function getMaleInd()
    {
        return $this->maleInd;
    }

    /**
     * Sets a new maleInd
     *
     * Male traveler indicator.
     * Example: true
     * Implementer: If true, this traveler is male.
     *
     * @param bool $maleInd
     * @return self
     */
    public function setMaleInd($maleInd)
    {
        $this->maleInd = $maleInd;
        return $this;
    }

    /**
     * Gets as identification
     *
     * Identifying traveler information.
     * Implementer: Exchanging this level of personal information between trading partners may be subject to state, local and government legislation and internal or negotiated data use and sharing permissions.
     *
     * @return \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Sets a new identification
     *
     * Identifying traveler information.
     * Implementer: Exchanging this level of personal information between trading partners may be subject to state, local and government legislation and internal or negotiated data use and sharing permissions.
     *
     * @param \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType $identification
     * @return self
     */
    public function setIdentification(?\Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType\IdentificationAType $identification = null)
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Gets as customerValue
     *
     * Offer requestor assessed customer value.
     *
     * @return \Recranet\OTA\OntologyValueType
     */
    public function getCustomerValue()
    {
        return $this->customerValue;
    }

    /**
     * Sets a new customerValue
     *
     * Offer requestor assessed customer value.
     *
     * @param \Recranet\OTA\OntologyValueType $customerValue
     * @return self
     */
    public function setCustomerValue(?\Recranet\OTA\OntologyValueType $customerValue = null)
    {
        $this->customerValue = $customerValue;
        return $this;
    }
}

