<?php

namespace Recranet\OTA\Type\SourceType;

use Recranet\OTA\Type\UniqueIDType;

/**
 * Class representing RequestorIDAType
 */
class RequestorIDAType extends UniqueIDType
{
    /**
     * This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     *
     * @var string $messagePassword
     */
    private $messagePassword = null;

    /**
     * The name of the person making the request- may be the travel agent, a traveler on a direct booking, or a third party.
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Gets as messagePassword
     *
     * This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     *
     * @return string
     */
    public function getMessagePassword()
    {
        return $this->messagePassword;
    }

    /**
     * Sets a new messagePassword
     *
     * This password provides an additional level of security that the recipient can use to validate the sending party's authority to use the message.
     *
     * @param string $messagePassword
     * @return self
     */
    public function setMessagePassword($messagePassword)
    {
        $this->messagePassword = $messagePassword;
        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the person making the request- may be the travel agent, a traveler on a direct booking, or a third party.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the person making the request- may be the travel agent, a traveler on a direct booking, or a third party.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}

