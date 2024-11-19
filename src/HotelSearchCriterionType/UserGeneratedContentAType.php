<?php

namespace Recranet\OTA\HotelSearchCriterionType;

/**
 * Class representing UserGeneratedContentAType
 */
class UserGeneratedContentAType
{
    /**
     * Identifies the parameters around the rating search.
     *
     * @var string $typeOfRating
     */
    private $typeOfRating = null;

    /**
     * User rating for the property on which the search is made.
     *
     * @var int $rating
     */
    private $rating = null;

    /**
     * Gets as typeOfRating
     *
     * Identifies the parameters around the rating search.
     *
     * @return string
     */
    public function getTypeOfRating()
    {
        return $this->typeOfRating;
    }

    /**
     * Sets a new typeOfRating
     *
     * Identifies the parameters around the rating search.
     *
     * @param string $typeOfRating
     * @return self
     */
    public function setTypeOfRating($typeOfRating)
    {
        $this->typeOfRating = $typeOfRating;
        return $this;
    }

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

