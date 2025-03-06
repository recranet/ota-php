<?php

namespace Recranet\OTA\Type\AirPricedOfferType;

use Recranet\OTA\Type\ImageDescriptionType;

/**
 * Class representing MultimediaAType
 */
class MultimediaAType extends ImageDescriptionType
{
    /**
     * The sequence order the image should be displayed in.
     *
     * @var int $sequence
     */
    private $sequence = null;

    /**
     * The name of a page or page section where the image should be displayed.
     *
     * @var string $contentUsageType
     */
    private $contentUsageType = null;

    /**
     * Gets as sequence
     *
     * The sequence order the image should be displayed in.
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Sets a new sequence
     *
     * The sequence order the image should be displayed in.
     *
     * @param int $sequence
     * @return self
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * Gets as contentUsageType
     *
     * The name of a page or page section where the image should be displayed.
     *
     * @return string
     */
    public function getContentUsageType()
    {
        return $this->contentUsageType;
    }

    /**
     * Sets a new contentUsageType
     *
     * The name of a page or page section where the image should be displayed.
     *
     * @param string $contentUsageType
     * @return self
     */
    public function setContentUsageType($contentUsageType)
    {
        $this->contentUsageType = $contentUsageType;
        return $this;
    }
}

