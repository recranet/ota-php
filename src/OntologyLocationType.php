<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyLocationType
 *
 * Location information with ontology reference.
 * XSD Type: OntologyLocationType
 */
class OntologyLocationType
{
    /**
     * Location type.
     * Example: Origin
     *
     * @var \Recranet\OTA\OntologyLocationType\TypeAType $type
     */
    private $type = null;

    /**
     * General location code and name.
     *
     * @var \Recranet\OTA\OntologyLocationType\GeneralLocationAType $generalLocation
     */
    private $generalLocation = null;

    /**
     * Geocodes.
     *
     * @var \Recranet\OTA\OntologyLocationType\GeocodeAType $geocode
     */
    private $geocode = null;

    /**
     * Physical location.
     *
     * @var \Recranet\OTA\OntologyLocationType\PhysicalLocationAType $physicalLocation
     */
    private $physicalLocation = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as type
     *
     * Location type.
     * Example: Origin
     *
     * @return \Recranet\OTA\OntologyLocationType\TypeAType
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Location type.
     * Example: Origin
     *
     * @param \Recranet\OTA\OntologyLocationType\TypeAType $type
     * @return self
     */
    public function setType(\Recranet\OTA\OntologyLocationType\TypeAType $type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as generalLocation
     *
     * General location code and name.
     *
     * @return \Recranet\OTA\OntologyLocationType\GeneralLocationAType
     */
    public function getGeneralLocation()
    {
        return $this->generalLocation;
    }

    /**
     * Sets a new generalLocation
     *
     * General location code and name.
     *
     * @param \Recranet\OTA\OntologyLocationType\GeneralLocationAType $generalLocation
     * @return self
     */
    public function setGeneralLocation(?\Recranet\OTA\OntologyLocationType\GeneralLocationAType $generalLocation = null)
    {
        $this->generalLocation = $generalLocation;
        return $this;
    }

    /**
     * Gets as geocode
     *
     * Geocodes.
     *
     * @return \Recranet\OTA\OntologyLocationType\GeocodeAType
     */
    public function getGeocode()
    {
        return $this->geocode;
    }

    /**
     * Sets a new geocode
     *
     * Geocodes.
     *
     * @param \Recranet\OTA\OntologyLocationType\GeocodeAType $geocode
     * @return self
     */
    public function setGeocode(?\Recranet\OTA\OntologyLocationType\GeocodeAType $geocode = null)
    {
        $this->geocode = $geocode;
        return $this;
    }

    /**
     * Gets as physicalLocation
     *
     * Physical location.
     *
     * @return \Recranet\OTA\OntologyLocationType\PhysicalLocationAType
     */
    public function getPhysicalLocation()
    {
        return $this->physicalLocation;
    }

    /**
     * Sets a new physicalLocation
     *
     * Physical location.
     *
     * @param \Recranet\OTA\OntologyLocationType\PhysicalLocationAType $physicalLocation
     * @return self
     */
    public function setPhysicalLocation(?\Recranet\OTA\OntologyLocationType\PhysicalLocationAType $physicalLocation = null)
    {
        $this->physicalLocation = $physicalLocation;
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

