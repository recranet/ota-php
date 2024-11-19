<?php

namespace Recranet\OTA;

/**
 * Class representing VideoItemsType
 *
 * Collection of video items.
 * XSD Type: VideoItemsType
 */
class VideoItemsType
{
    /**
     * Each video item represents a specific category.
     *
     * @var \Recranet\OTA\VideoItemsType\VideoItemAType[] $videoItem
     */
    private $videoItem = [
        
    ];

    /**
     * Adds as videoItem
     *
     * Each video item represents a specific category.
     *
     * @return self
     * @param \Recranet\OTA\VideoItemsType\VideoItemAType $videoItem
     */
    public function addToVideoItem(\Recranet\OTA\VideoItemsType\VideoItemAType $videoItem)
    {
        $this->videoItem[] = $videoItem;
        return $this;
    }

    /**
     * isset videoItem
     *
     * Each video item represents a specific category.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVideoItem($index)
    {
        return isset($this->videoItem[$index]);
    }

    /**
     * unset videoItem
     *
     * Each video item represents a specific category.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVideoItem($index)
    {
        unset($this->videoItem[$index]);
    }

    /**
     * Gets as videoItem
     *
     * Each video item represents a specific category.
     *
     * @return \Recranet\OTA\VideoItemsType\VideoItemAType[]
     */
    public function getVideoItem()
    {
        return $this->videoItem;
    }

    /**
     * Sets a new videoItem
     *
     * Each video item represents a specific category.
     *
     * @param \Recranet\OTA\VideoItemsType\VideoItemAType[] $videoItem
     * @return self
     */
    public function setVideoItem(array $videoItem)
    {
        $this->videoItem = $videoItem;
        return $this;
    }
}

