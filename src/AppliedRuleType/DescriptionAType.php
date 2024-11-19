<?php

namespace Recranet\OTA\AppliedRuleType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType
{
    /**
     * A short description of the rule text with a language identifier.
     *
     * @var \Recranet\OTA\FreeTextType $shortDescription
     */
    private $shortDescription = null;

    /**
     * A long description of the rule text with a language identifier.
     *
     * @var \Recranet\OTA\FreeTextType $longDescription
     */
    private $longDescription = null;

    /**
     * Gets as shortDescription
     *
     * A short description of the rule text with a language identifier.
     *
     * @return \Recranet\OTA\FreeTextType
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
     * @param \Recranet\OTA\FreeTextType $shortDescription
     * @return self
     */
    public function setShortDescription(?\Recranet\OTA\FreeTextType $shortDescription = null)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * Gets as longDescription
     *
     * A long description of the rule text with a language identifier.
     *
     * @return \Recranet\OTA\FreeTextType
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
     * @param \Recranet\OTA\FreeTextType $longDescription
     * @return self
     */
    public function setLongDescription(?\Recranet\OTA\FreeTextType $longDescription = null)
    {
        $this->longDescription = $longDescription;
        return $this;
    }
}

