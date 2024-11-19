<?php

namespace Recranet\OTA;

/**
 * Class representing OntologyCompanyType
 *
 * Company name, code, travel segment with ontology reference.
 * XSD Type: OntologyCompanyType
 */
class OntologyCompanyType
{
    /**
     * Company code and/ or name.
     * Example: OTA
     *
     * @var \Recranet\OTA\OntologyCodeType $nameOrCode
     */
    private $nameOrCode = null;

    /**
     * Company primary travel segment served.
     * Example: Transportation
     *
     * @var \Recranet\OTA\OntologyCompanyType\TravelSegmentAType $travelSegment
     */
    private $travelSegment = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as nameOrCode
     *
     * Company code and/ or name.
     * Example: OTA
     *
     * @return \Recranet\OTA\OntologyCodeType
     */
    public function getNameOrCode()
    {
        return $this->nameOrCode;
    }

    /**
     * Sets a new nameOrCode
     *
     * Company code and/ or name.
     * Example: OTA
     *
     * @param \Recranet\OTA\OntologyCodeType $nameOrCode
     * @return self
     */
    public function setNameOrCode(\Recranet\OTA\OntologyCodeType $nameOrCode)
    {
        $this->nameOrCode = $nameOrCode;
        return $this;
    }

    /**
     * Gets as travelSegment
     *
     * Company primary travel segment served.
     * Example: Transportation
     *
     * @return \Recranet\OTA\OntologyCompanyType\TravelSegmentAType
     */
    public function getTravelSegment()
    {
        return $this->travelSegment;
    }

    /**
     * Sets a new travelSegment
     *
     * Company primary travel segment served.
     * Example: Transportation
     *
     * @param \Recranet\OTA\OntologyCompanyType\TravelSegmentAType $travelSegment
     * @return self
     */
    public function setTravelSegment(?\Recranet\OTA\OntologyCompanyType\TravelSegmentAType $travelSegment = null)
    {
        $this->travelSegment = $travelSegment;
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

