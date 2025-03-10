<?php

namespace Recranet\OTA\Type\VideoDescriptionType;

use Recranet\OTA\Type\FormattedTextTextType;

/**
 * Class representing DescriptionAType
 */
class DescriptionAType extends FormattedTextTextType
{
    /**
     * The caption associated with the image in a specific language.
     * Example: The Empire State Building at sunset.
     *
     * @var string $caption
     */
    private $caption = null;

    /**
     * Gets as caption
     *
     * The caption associated with the image in a specific language.
     * Example: The Empire State Building at sunset.
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Sets a new caption
     *
     * The caption associated with the image in a specific language.
     * Example: The Empire State Building at sunset.
     *
     * @param string $caption
     * @return self
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }
}

