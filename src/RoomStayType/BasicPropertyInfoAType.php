<?php

namespace Recranet\OTA\RoomStayType;

use Recranet\OTA\BasicPropertyInfoType;

/**
 * Class representing BasicPropertyInfoAType
 */
class BasicPropertyInfoAType extends BasicPropertyInfoType
{
    /**
     * Information linked to user content.
     *
     * @var \Recranet\OTA\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType $userGeneratedContent
     */
    private $userGeneratedContent = null;

    /**
     * Gets as userGeneratedContent
     *
     * Information linked to user content.
     *
     * @return \Recranet\OTA\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType
     */
    public function getUserGeneratedContent()
    {
        return $this->userGeneratedContent;
    }

    /**
     * Sets a new userGeneratedContent
     *
     * Information linked to user content.
     *
     * @param \Recranet\OTA\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType $userGeneratedContent
     * @return self
     */
    public function setUserGeneratedContent(?\Recranet\OTA\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType $userGeneratedContent = null)
    {
        $this->userGeneratedContent = $userGeneratedContent;
        return $this;
    }
}

