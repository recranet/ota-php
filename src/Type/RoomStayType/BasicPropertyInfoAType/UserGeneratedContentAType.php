<?php

namespace Recranet\OTA\Type\RoomStayType\BasicPropertyInfoAType;

/**
 * Class representing UserGeneratedContentAType
 */
class UserGeneratedContentAType
{
    /**
     * User rating for the property on which the search is made.
     *
     * @var int $rating
     */
    private $rating = null;

    /**
     * Gets as rating
     *
     * User rating for the property on which the search is made.
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * User rating for the property on which the search is made.
     *
     * @param int $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }
}

