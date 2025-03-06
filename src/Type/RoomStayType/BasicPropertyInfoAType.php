<?php

namespace Recranet\OTA\Type\RoomStayType;

use Recranet\OTA\Type\BasicPropertyInfoType;

/**
 * Class representing BasicPropertyInfoAType
 */
class BasicPropertyInfoAType extends BasicPropertyInfoType
{
    /**
     * Information linked to user content.
     *
     * @var \Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType $userGeneratedContent
     */
    private $userGeneratedContent = null;

    /**
     * Gets as userGeneratedContent
     *
     * Information linked to user content.
     *
     * @return \Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType
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
     * @param \Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType $userGeneratedContent
     * @return self
     */
    public function setUserGeneratedContent(?\Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType\UserGeneratedContentAType $userGeneratedContent = null)
    {
        $this->userGeneratedContent = $userGeneratedContent;
        return $this;
    }
}

