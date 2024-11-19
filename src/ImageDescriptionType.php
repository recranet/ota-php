<?php

namespace Recranet\OTA;

/**
 * Class representing ImageDescriptionType
 *
 * Describes an image item.
 * XSD Type: ImageDescriptionType
 */
class ImageDescriptionType
{
    /**
     * Specifies the image category. Refer to OpenTravel Code list Picture Category Code (PIC).
     *
     * @var string $category
     */
    private $category = null;

    /**
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @var \Recranet\OTA\ImageDescriptionType\ImageFormatAType[] $imageFormat
     */
    private $imageFormat = [
        
    ];

    /**
     * The description associated with the image in a specific language.
     *
     * @var \Recranet\OTA\ImageDescriptionType\DescriptionAType[] $description
     */
    private $description = [
        
    ];

    /**
     * @var \Recranet\OTA\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as category
     *
     * Specifies the image category. Refer to OpenTravel Code list Picture Category Code (PIC).
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
     * Specifies the image category. Refer to OpenTravel Code list Picture Category Code (PIC).
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
     * Adds as imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @return self
     * @param \Recranet\OTA\ImageDescriptionType\ImageFormatAType $imageFormat
     */
    public function addToImageFormat(\Recranet\OTA\ImageDescriptionType\ImageFormatAType $imageFormat)
    {
        $this->imageFormat[] = $imageFormat;
        return $this;
    }

    /**
     * isset imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageFormat($index)
    {
        return isset($this->imageFormat[$index]);
    }

    /**
     * unset imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageFormat($index)
    {
        unset($this->imageFormat[$index]);
    }

    /**
     * Gets as imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @return \Recranet\OTA\ImageDescriptionType\ImageFormatAType[]
     */
    public function getImageFormat()
    {
        return $this->imageFormat;
    }

    /**
     * Sets a new imageFormat
     *
     * A set of images for a given category which may be provided in multiple formats.
     *
     * @param \Recranet\OTA\ImageDescriptionType\ImageFormatAType[] $imageFormat
     * @return self
     */
    public function setImageFormat(array $imageFormat = null)
    {
        $this->imageFormat = $imageFormat;
        return $this;
    }

    /**
     * Adds as description
     *
     * The description associated with the image in a specific language.
     *
     * @return self
     * @param \Recranet\OTA\ImageDescriptionType\DescriptionAType $description
     */
    public function addToDescription(\Recranet\OTA\ImageDescriptionType\DescriptionAType $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * The description associated with the image in a specific language.
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
     * The description associated with the image in a specific language.
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
     * The description associated with the image in a specific language.
     *
     * @return \Recranet\OTA\ImageDescriptionType\DescriptionAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * The description associated with the image in a specific language.
     *
     * @param \Recranet\OTA\ImageDescriptionType\DescriptionAType[] $description
     * @return self
     */
    public function setDescription(array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

