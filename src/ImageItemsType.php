<?php

namespace Recranet\OTA;

/**
 * Class representing ImageItemsType
 *
 * Collection of image items.
 * XSD Type: ImageItemsType
 */
class ImageItemsType
{
    /**
     * Image of a given category.
     *
     * @var \Recranet\OTA\ImageItemsType\ImageItemAType[] $imageItem
     */
    private $imageItem = [
        
    ];

    /**
     * Adds as imageItem
     *
     * Image of a given category.
     *
     * @return self
     * @param \Recranet\OTA\ImageItemsType\ImageItemAType $imageItem
     */
    public function addToImageItem(\Recranet\OTA\ImageItemsType\ImageItemAType $imageItem)
    {
        $this->imageItem[] = $imageItem;
        return $this;
    }

    /**
     * isset imageItem
     *
     * Image of a given category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetImageItem($index)
    {
        return isset($this->imageItem[$index]);
    }

    /**
     * unset imageItem
     *
     * Image of a given category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetImageItem($index)
    {
        unset($this->imageItem[$index]);
    }

    /**
     * Gets as imageItem
     *
     * Image of a given category.
     *
     * @return \Recranet\OTA\ImageItemsType\ImageItemAType[]
     */
    public function getImageItem()
    {
        return $this->imageItem;
    }

    /**
     * Sets a new imageItem
     *
     * Image of a given category.
     *
     * @param \Recranet\OTA\ImageItemsType\ImageItemAType[] $imageItem
     * @return self
     */
    public function setImageItem(array $imageItem)
    {
        $this->imageItem = $imageItem;
        return $this;
    }
}

