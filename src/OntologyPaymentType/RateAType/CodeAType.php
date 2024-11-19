<?php

namespace Recranet\OTA\OntologyPaymentType\RateAType;

use Recranet\OTA\OntologyCodeType;

/**
 * Class representing CodeAType
 */
class CodeAType extends OntologyCodeType
{
    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

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

