<?php

namespace Recranet\OTA\OntologyLocationType;

/**
 * Class representing GeocodeAType
 */
class GeocodeAType
{
    /**
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @var string $ontologyRefID
     */
    private $ontologyRefID = null;

    /**
     * Latitude.
     * Example: 28.0847797393799
     *
     * @var string $latitude
     */
    private $latitude = null;

    /**
     * Longitude.
     * Example: -82.6114349365234
     *
     * @var string $longitude
     */
    private $longitude = null;

    /**
     * Geocoded universal address.
     * Example: 83G48 MNDPH
     *
     * @var \Recranet\OTA\OntologyLocationType\GeocodeAType\UniversalAddressAType $universalAddress
     */
    private $universalAddress = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as ontologyRefID
     *
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @return string
     */
    public function getOntologyRefID()
    {
        return $this->ontologyRefID;
    }

    /**
     * Sets a new ontologyRefID
     *
     * Ontology reference.
     * Example: 1
     * Implementer: This is a reference to a unique set of ontology information with a unique ID that is specified in the Ontology/@RefID attribute.
     *
     * @param string $ontologyRefID
     * @return self
     */
    public function setOntologyRefID($ontologyRefID)
    {
        $this->ontologyRefID = $ontologyRefID;
        return $this;
    }

    /**
     * Gets as latitude
     *
     * Latitude.
     * Example: 28.0847797393799
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * Latitude.
     * Example: 28.0847797393799
     *
     * @param string $latitude
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * Longitude.
     * Example: -82.6114349365234
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * Longitude.
     * Example: -82.6114349365234
     *
     * @param string $longitude
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Gets as universalAddress
     *
     * Geocoded universal address.
     * Example: 83G48 MNDPH
     *
     * @return \Recranet\OTA\OntologyLocationType\GeocodeAType\UniversalAddressAType
     */
    public function getUniversalAddress()
    {
        return $this->universalAddress;
    }

    /**
     * Sets a new universalAddress
     *
     * Geocoded universal address.
     * Example: 83G48 MNDPH
     *
     * @param \Recranet\OTA\OntologyLocationType\GeocodeAType\UniversalAddressAType $universalAddress
     * @return self
     */
    public function setUniversalAddress(?\Recranet\OTA\OntologyLocationType\GeocodeAType\UniversalAddressAType $universalAddress = null)
    {
        $this->universalAddress = $universalAddress;
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

