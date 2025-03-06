<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\OntologyAddressType\StreetAType $street
     */
    private $street = null;

    /**
     * City.
     * Example: NYC
     *
     * @var \Recranet\OTA\Type\OntologyAddressType\CityAType $city
     */
    private $city = null;

    /**
     * State or province.
     * Example: NY
     *
     * @var \Recranet\OTA\Type\OntologyAddressType\StateProvinceAType $stateProvince
     */
    private $stateProvince = null;

    /**
     * Postal code.
     * Example: NYC
     *
     * @var \Recranet\OTA\Type\OntologyAddressType\PostalAType $postal
     */
    private $postal = null;

    /**
     * Country.
     * Example: USA
     *
     * @var \Recranet\OTA\Type\OntologyAddressType\CountryAType $country
     */
    private $country = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
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
     * @return \Recranet\OTA\Type\OntologyAddressType\StreetAType
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
     * @param \Recranet\OTA\Type\OntologyAddressType\StreetAType $street
     * @return self
     */
    public function setStreet(?\Recranet\OTA\Type\OntologyAddressType\StreetAType $street = null)
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
     * @return \Recranet\OTA\Type\OntologyAddressType\CityAType
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
     * @param \Recranet\OTA\Type\OntologyAddressType\CityAType $city
     * @return self
     */
    public function setCity(?\Recranet\OTA\Type\OntologyAddressType\CityAType $city = null)
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
     * @return \Recranet\OTA\Type\OntologyAddressType\StateProvinceAType
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
     * @param \Recranet\OTA\Type\OntologyAddressType\StateProvinceAType $stateProvince
     * @return self
     */
    public function setStateProvince(?\Recranet\OTA\Type\OntologyAddressType\StateProvinceAType $stateProvince = null)
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
     * @return \Recranet\OTA\Type\OntologyAddressType\PostalAType
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
     * @param \Recranet\OTA\Type\OntologyAddressType\PostalAType $postal
     * @return self
     */
    public function setPostal(?\Recranet\OTA\Type\OntologyAddressType\PostalAType $postal = null)
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
     * @return \Recranet\OTA\Type\OntologyAddressType\CountryAType
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
     * @param \Recranet\OTA\Type\OntologyAddressType\CountryAType $country
     * @return self
     */
    public function setCountry(?\Recranet\OTA\Type\OntologyAddressType\CountryAType $country = null)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\Type\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\Type\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

