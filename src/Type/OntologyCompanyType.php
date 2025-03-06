<?php

namespace Recranet\OTA\Type;

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
     * @var \Recranet\OTA\Type\OntologyCodeType $nameOrCode
     */
    private $nameOrCode = null;

    /**
     * Company primary travel segment served.
     * Example: Transportation
     *
     * @var \Recranet\OTA\Type\OntologyCompanyType\TravelSegmentAType $travelSegment
     */
    private $travelSegment = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as nameOrCode
     *
     * Company code and/ or name.
     * Example: OTA
     *
     * @return \Recranet\OTA\Type\OntologyCodeType
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
     * @param \Recranet\OTA\Type\OntologyCodeType $nameOrCode
     * @return self
     */
    public function setNameOrCode(\Recranet\OTA\Type\OntologyCodeType $nameOrCode)
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
     * @return \Recranet\OTA\Type\OntologyCompanyType\TravelSegmentAType
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
     * @param \Recranet\OTA\Type\OntologyCompanyType\TravelSegmentAType $travelSegment
     * @return self
     */
    public function setTravelSegment(?\Recranet\OTA\Type\OntologyCompanyType\TravelSegmentAType $travelSegment = null)
    {
        $this->travelSegment = $travelSegment;
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

