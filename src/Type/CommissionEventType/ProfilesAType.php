<?php

namespace Recranet\OTA\Type\CommissionEventType;

/**
 * Class representing ProfilesAType
 */
class ProfilesAType
{
    /**
     * Provides the details for a profile.
     *
     * @var \Recranet\OTA\Type\ProfileType[] $profile
     */
    private $profile = [
        
    ];

    /**
     * Adds as profile
     *
     * Provides the details for a profile.
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfileType $profile
     */
    public function addToProfile(\Recranet\OTA\Type\ProfileType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * Provides the details for a profile.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfile($index)
    {
        return isset($this->profile[$index]);
    }

    /**
     * unset profile
     *
     * Provides the details for a profile.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfile($index)
    {
        unset($this->profile[$index]);
    }

    /**
     * Gets as profile
     *
     * Provides the details for a profile.
     *
     * @return \Recranet\OTA\Type\ProfileType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Provides the details for a profile.
     *
     * @param \Recranet\OTA\Type\ProfileType[] $profile
     * @return self
     */
    public function setProfile(array $profile = null)
    {
        $this->profile = $profile;
        return $this;
    }
}

