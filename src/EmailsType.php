<?php

namespace Recranet\OTA;

/**
 * Class representing EmailsType
 *
 * A collection of email elements.
 * XSD Type: EmailsType
 */
class EmailsType
{
    /**
     * Used to pass detailed email information.
     *
     * @var \Recranet\OTA\EmailsType\EmailAType[] $email
     */
    private $email = [
        
    ];

    /**
     * Adds as email
     *
     * Used to pass detailed email information.
     *
     * @return self
     * @param \Recranet\OTA\EmailsType\EmailAType $email
     */
    public function addToEmail(\Recranet\OTA\EmailsType\EmailAType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Used to pass detailed email information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * Used to pass detailed email information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * Used to pass detailed email information.
     *
     * @return \Recranet\OTA\EmailsType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Used to pass detailed email information.
     *
     * @param \Recranet\OTA\EmailsType\EmailAType[] $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;
        return $this;
    }
}

