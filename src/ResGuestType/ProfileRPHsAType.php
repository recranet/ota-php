<?php

namespace Recranet\OTA\ResGuestType;

/**
 * Class representing ProfileRPHsAType
 */
class ProfileRPHsAType
{
    /**
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @var \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType[] $profileRPH
     */
    private $profileRPH = [
        
    ];

    /**
     * Adds as profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @return self
     * @param \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType $profileRPH
     */
    public function addToProfileRPH(\Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType $profileRPH)
    {
        $this->profileRPH[] = $profileRPH;
        return $this;
    }

    /**
     * isset profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetProfileRPH($index)
    {
        return isset($this->profileRPH[$index]);
    }

    /**
     * unset profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetProfileRPH($index)
    {
        unset($this->profileRPH[$index]);
    }

    /**
     * Gets as profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @return \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType[]
     */
    public function getProfileRPH()
    {
        return $this->profileRPH;
    }

    /**
     * Sets a new profileRPH
     *
     * Used to reference a profile found in the Profile element in ResGlobablInfo.
     *
     * @param \Recranet\OTA\ResGuestType\ProfileRPHsAType\ProfileRPHAType[] $profileRPH
     * @return self
     */
    public function setProfileRPH(array $profileRPH)
    {
        $this->profileRPH = $profileRPH;
        return $this;
    }
}

