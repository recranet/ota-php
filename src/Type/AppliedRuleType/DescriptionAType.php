<?php

namespace Recranet\OTA\Type\AppliedRuleType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType
{
    /**
     * A short description of the rule text with a language identifier.
     *
     * @var \Recranet\OTA\Type\FreeTextType $shortDescription
     */
    private $shortDescription = null;

    /**
     * A long description of the rule text with a language identifier.
     *
     * @var \Recranet\OTA\Type\FreeTextType $longDescription
     */
    private $longDescription = null;

    /**
     * Gets as shortDescription
     *
     * A short description of the rule text with a language identifier.
     *
     * @return \Recranet\OTA\Type\FreeTextType
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Sets a new shortDescription
     *
     * A short description of the rule text with a language identifier.
     *
     * @param \Recranet\OTA\Type\FreeTextType $shortDescription
     * @return self
     */
    public function setShortDescription(?\Recranet\OTA\Type\FreeTextType $shortDescription = null)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Gets as longDescription
     *
     * A long description of the rule text with a language identifier.
     *
     * @return \Recranet\OTA\Type\FreeTextType
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Sets a new longDescription
     *
     * A long description of the rule text with a language identifier.
     *
     * @param \Recranet\OTA\Type\FreeTextType $longDescription
     * @return self
     */
    public function setLongDescription(?\Recranet\OTA\Type\FreeTextType $longDescription = null)
    {
        $this->longDescription = $longDescription;
        return $this;
    }
}

