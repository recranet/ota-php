<?php

namespace Recranet\OTA\CustomerType\CustLoyaltyAType;

/**
 * Class representing SecurityInfoAType
 */
class SecurityInfoAType
{
    /**
     * @var string $username
     */
    private $username = null;

    /**
     * @var string $password
     */
    private $password = null;

    /**
     * Alternate method to password for account access.
     *
     * @var \Recranet\OTA\CustomerType\CustLoyaltyAType\SecurityInfoAType\PasswordHintAType[] $passwordHint
     */
    private $passwordHint = [
        
    ];

    /**
     * Gets as username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Sets a new username
     *
     * @param string $username
     * @return self
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Adds as passwordHint
     *
     * Alternate method to password for account access.
     *
     * @return self
     * @param \Recranet\OTA\CustomerType\CustLoyaltyAType\SecurityInfoAType\PasswordHintAType $passwordHint
     */
    public function addToPasswordHint(\Recranet\OTA\CustomerType\CustLoyaltyAType\SecurityInfoAType\PasswordHintAType $passwordHint)
    {
        $this->passwordHint[] = $passwordHint;
        return $this;
    }

    /**
     * isset passwordHint
     *
     * Alternate method to password for account access.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPasswordHint($index)
    {
        return isset($this->passwordHint[$index]);
    }

    /**
     * unset passwordHint
     *
     * Alternate method to password for account access.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPasswordHint($index)
    {
        unset($this->passwordHint[$index]);
    }

    /**
     * Gets as passwordHint
     *
     * Alternate method to password for account access.
     *
     * @return \Recranet\OTA\CustomerType\CustLoyaltyAType\SecurityInfoAType\PasswordHintAType[]
     */
    public function getPasswordHint()
    {
        return $this->passwordHint;
    }

    /**
     * Sets a new passwordHint
     *
     * Alternate method to password for account access.
     *
     * @param \Recranet\OTA\CustomerType\CustLoyaltyAType\SecurityInfoAType\PasswordHintAType[] $passwordHint
     * @return self
     */
    public function setPasswordHint(array $passwordHint = null)
    {
        $this->passwordHint = $passwordHint;
        return $this;
    }
}

