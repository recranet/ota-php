<?php

namespace Recranet\OTA\Type\BasicPropertyInfoType;

/**
 * Class representing AwardAType
 */
class AwardAType
{
    /**
     * The name of the award or ratings provider.
     *
     * @var string $provider
     */
    private $provider = null;

    /**
     * The actual award or rating received by the hotel facility.
     *
     * @var string $rating
     */
    private $rating = null;

    /**
     * Gets as provider
     *
     * The name of the award or ratings provider.
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Sets a new provider
     *
     * The name of the award or ratings provider.
     *
     * @param string $provider
     * @return self
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
        return $this;
    }

    /**
     * Gets as rating
     *
     * The actual award or rating received by the hotel facility.
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * The actual award or rating received by the hotel facility.
     *
     * @param string $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }
}

