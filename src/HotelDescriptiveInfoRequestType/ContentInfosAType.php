<?php

namespace Recranet\OTA\HotelDescriptiveInfoRequestType;

/**
 * Class representing ContentInfosAType
 */
class ContentInfosAType
{
    /**
     * Used for requesting specific content information.
     *
     * @var \Recranet\OTA\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[] $contentInfo
     */
    private $contentInfo = [
        
    ];

    /**
     * Adds as contentInfo
     *
     * Used for requesting specific content information.
     *
     * @return self
     * @param \Recranet\OTA\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType $contentInfo
     */
    public function addToContentInfo(\Recranet\OTA\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType $contentInfo)
    {
        $this->contentInfo[] = $contentInfo;
        return $this;
    }

    /**
     * isset contentInfo
     *
     * Used for requesting specific content information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContentInfo($index)
    {
        return isset($this->contentInfo[$index]);
    }

    /**
     * unset contentInfo
     *
     * Used for requesting specific content information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContentInfo($index)
    {
        unset($this->contentInfo[$index]);
    }

    /**
     * Gets as contentInfo
     *
     * Used for requesting specific content information.
     *
     * @return \Recranet\OTA\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[]
     */
    public function getContentInfo()
    {
        return $this->contentInfo;
    }

    /**
     * Sets a new contentInfo
     *
     * Used for requesting specific content information.
     *
     * @param \Recranet\OTA\HotelDescriptiveInfoRequestType\ContentInfosAType\ContentInfoAType[] $contentInfo
     * @return self
     */
    public function setContentInfo(array $contentInfo)
    {
        $this->contentInfo = $contentInfo;
        return $this;
    }
}

