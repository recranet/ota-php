<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ProfilesType
 *
 * A collection of Profile objects or Unique IDs of Profiles.
 * XSD Type: ProfilesType
 */
class ProfilesType
{
    /**
     * A collection of Profiles or Unique IDs of Profiles.
     *
     * @var \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profileInfo
     */
    private $profileInfo = [
        
    ];

    /**
     * Adds as profileInfo
     *
     * A collection of Profiles or Unique IDs of Profiles.
     *
     * @return self
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo
     */
    public function addToProfileInfo(\Recranet\OTA\Type\ProfilesType\ProfileInfoAType $profileInfo)
    {
        $this->profileInfo[] = $profileInfo;
        return $this;
    }

    /**
     * isset profileInfo
     *
     * A collection of Profiles or Unique IDs of Profiles.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileInfo($index)
    {
        return isset($this->profileInfo[$index]);
    }

    /**
     * unset profileInfo
     *
     * A collection of Profiles or Unique IDs of Profiles.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileInfo($index)
    {
        unset($this->profileInfo[$index]);
    }

    /**
     * Gets as profileInfo
     *
     * A collection of Profiles or Unique IDs of Profiles.
     *
     * @return \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[]
     */
    public function getProfileInfo()
    {
        return $this->profileInfo;
    }

    /**
     * Sets a new profileInfo
     *
     * A collection of Profiles or Unique IDs of Profiles.
     *
     * @param \Recranet\OTA\Type\ProfilesType\ProfileInfoAType[] $profileInfo
     * @return self
     */
    public function setProfileInfo(array $profileInfo)
    {
        $this->profileInfo = $profileInfo;
        return $this;
    }
}

