<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyAddressType
 *
 * Address information with ontology reference.
 * XSD Type: OntologyAddressType
 */
class OntologyAddressType
{
    /**
     * Information use and sharing restriction indicator.
     * Example: true
     * Implementer: If true, this traveler information may only be used to determine relevant offers.
     *
     * @var bool $privacyInd
     */
    private $privacyInd = null;

    /**
     * Street.
     *
     * @var \Recranet\OTA\OntologyAddressType\StreetAType $street
     */
    private $street = null;

    /**
     * City.
     * Example: NYC
     *
     * @var \Recranet\OTA\OntologyAddressType\CityAType $city
     */
    private $city = null;

    /**
     * State or province.
     * Example: NY
     *
     * @var \Recranet\OTA\OntologyAddressType\StateProvinceAType $stateProvince
     */
    private $stateProvince = null;

    /**
     * Postal code.
     * Example: NYC
     *
     * @var \Recranet\OTA\OntologyAddressType\PostalAType $postal
     */
    private $postal = null;

    /**
     * Country.
     * Example: USA
     *
     * @var \Recranet\OTA\OntologyAddressType\CountryAType $country
     */
    private $country = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as privacyInd
     *
     * Information use and sharing restriction indicator.
     * Example: true
     * Implementer: If true, this traveler information may only be used to determine relevant offers.
     *
     * @return bool
     */
    public function getPrivacyInd()
    {
        return $this->privacyInd;
    }

    /**
     * Sets a new privacyInd
     *
     * Information use and sharing restriction indicator.
     * Example: true
     * Implementer: If true, this traveler information may only be used to determine relevant offers.
     *
     * @param bool $privacyInd
     * @return self
     */
    public function setPrivacyInd($privacyInd)
    {
        $this->privacyInd = $privacyInd;
        return $this;
    }

    /**
     * Gets as street
     *
     * Street.
     *
     * @return \Recranet\OTA\OntologyAddressType\StreetAType
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * Street.
     *
     * @param \Recranet\OTA\OntologyAddressType\StreetAType $street
     * @return self
     */
    public function setStreet(?\Recranet\OTA\OntologyAddressType\StreetAType $street = null)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as city
     *
     * City.
     * Example: NYC
     *
     * @return \Recranet\OTA\OntologyAddressType\CityAType
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * City.
     * Example: NYC
     *
     * @param \Recranet\OTA\OntologyAddressType\CityAType $city
     * @return self
     */
    public function setCity(?\Recranet\OTA\OntologyAddressType\CityAType $city = null)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as stateProvince
     *
     * State or province.
     * Example: NY
     *
     * @return \Recranet\OTA\OntologyAddressType\StateProvinceAType
     */
    public function getStateProvince()
    {
        return $this->stateProvince;
    }

    /**
     * Sets a new stateProvince
     *
     * State or province.
     * Example: NY
     *
     * @param \Recranet\OTA\OntologyAddressType\StateProvinceAType $stateProvince
     * @return self
     */
    public function setStateProvince(?\Recranet\OTA\OntologyAddressType\StateProvinceAType $stateProvince = null)
    {
        $this->stateProvince = $stateProvince;
        return $this;
    }

    /**
     * Gets as postal
     *
     * Postal code.
     * Example: NYC
     *
     * @return \Recranet\OTA\OntologyAddressType\PostalAType
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Sets a new postal
     *
     * Postal code.
     * Example: NYC
     *
     * @param \Recranet\OTA\OntologyAddressType\PostalAType $postal
     * @return self
     */
    public function setPostal(?\Recranet\OTA\OntologyAddressType\PostalAType $postal = null)
    {
        $this->postal = $postal;
        return $this;
    }

    /**
     * Gets as country
     *
     * Country.
     * Example: USA
     *
     * @return \Recranet\OTA\OntologyAddressType\CountryAType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * Country.
     * Example: USA
     *
     * @param \Recranet\OTA\OntologyAddressType\CountryAType $country
     * @return self
     */
    public function setCountry(?\Recranet\OTA\OntologyAddressType\CountryAType $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

