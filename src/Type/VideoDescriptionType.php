<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VideoDescriptionType
 *
 * Describes a video item.
 * XSD Type: VideoDescriptionType
 */
class VideoDescriptionType
{
    /**
     * Specifies the video category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @var string $category
     */
    private $category = null;

    /**
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @var \Recranet\OTA\Type\VideoDescriptionType\VideoFormatAType[] $videoFormat
     */
    private $videoFormat = [
        
    ];

    /**
     * The description associated with the video in a specific language.
     *
     * @var \Recranet\OTA\Type\VideoDescriptionType\DescriptionAType[] $description
     */
    private $description = [
        
    ];

    /**
     * Gets as category
     *
     * Specifies the video category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets a new category
     *
     * Specifies the video category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @param string $category
     * @return self
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Adds as videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @return self
     * @param \Recranet\OTA\Type\VideoDescriptionType\VideoFormatAType $videoFormat
     */
    public function addToVideoFormat(\Recranet\OTA\Type\VideoDescriptionType\VideoFormatAType $videoFormat)
    {
        $this->videoFormat[] = $videoFormat;
        return $this;
    }

    /**
     * isset videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoFormat($index)
    {
        return isset($this->videoFormat[$index]);
    }

    /**
     * unset videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoFormat($index)
    {
        unset($this->videoFormat[$index]);
    }

    /**
     * Gets as videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @return \Recranet\OTA\Type\VideoDescriptionType\VideoFormatAType[]
     */
    public function getVideoFormat()
    {
        return $this->videoFormat;
    }

    /**
     * Sets a new videoFormat
     *
     * A set of video of a given category can be provided in different Format, each format will be described in this element.
     *
     * @param \Recranet\OTA\Type\VideoDescriptionType\VideoFormatAType[] $videoFormat
     * @return self
     */
    public function setVideoFormat(array $videoFormat = null)
    {
        $this->videoFormat = $videoFormat;
        return $this;
    }

    /**
     * Adds as description
     *
     * The description associated with the video in a specific language.
     *
     * @return self
     * @param \Recranet\OTA\Type\VideoDescriptionType\DescriptionAType $description
     */
    public function addToDescription(\Recranet\OTA\Type\VideoDescriptionType\DescriptionAType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * The description associated with the video in a specific language.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * The description associated with the video in a specific language.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * The description associated with the video in a specific language.
     *
     * @return \Recranet\OTA\Type\VideoDescriptionType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description associated with the video in a specific language.
     *
     * @param \Recranet\OTA\Type\VideoDescriptionType\DescriptionAType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }
}

