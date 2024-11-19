<?php

namespace Recranet\OTA\OntologyPaymentType;

/**
 * Class representing RateAType
 */
class RateAType
{
    /**
     * Rate category.
     * Example: Corporate
     *
     * @var \Recranet\OTA\OntologyPaymentType\RateAType\CategoryAType $category
     */
    private $category = null;

    /**
     * Rate code.
     * Example: IBM
     *
     * @var \Recranet\OTA\OntologyPaymentType\RateAType\CodeAType $code
     */
    private $code = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as category
     *
     * Rate category.
     * Example: Corporate
     *
     * @return \Recranet\OTA\OntologyPaymentType\RateAType\CategoryAType
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Rate category.
     * Example: Corporate
     *
     * @param \Recranet\OTA\OntologyPaymentType\RateAType\CategoryAType $category
     * @return self
     */
    public function setCategory(?\Recranet\OTA\OntologyPaymentType\RateAType\CategoryAType $category = null)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Gets as code
     *
     * Rate code.
     * Example: IBM
     *
     * @return \Recranet\OTA\OntologyPaymentType\RateAType\CodeAType
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Rate code.
     * Example: IBM
     *
     * @param \Recranet\OTA\OntologyPaymentType\RateAType\CodeAType $code
     * @return self
     */
    public function setCode(?\Recranet\OTA\OntologyPaymentType\RateAType\CodeAType $code = null)
    {
        $this->code = $code;
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

