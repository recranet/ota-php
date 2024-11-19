<?php

namespace Recranet\OTA\ViewershipsType\ViewershipAType;

/**
 * Class representing ProfilesAType
 */
class ProfilesAType
{
    /**
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @var \Recranet\OTA\ProfileType[] $profile
     */
    private $profile = [
        
    ];

    /**
     * Adds as profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @return self
     * @param \Recranet\OTA\ProfileType $profile
     */
    public function addToProfile(\Recranet\OTA\ProfileType $profile)
    {
        $this->profile[] = $profile;
        return $this;
    }

    /**
     * isset profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
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
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
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
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @return \Recranet\OTA\ProfileType[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * Profile associated with the Viewership, i.e. the information required to identify the company, agency, etc that is allowed to view the information.
     *
     * @param \Recranet\OTA\ProfileType[] $profile
     * @return self
     */
    public function setProfile(array $profile)
    {
        $this->profile = $profile;
        return $this;
    }
}

