<?php

namespace Recranet\OTA;

/**
 * Class representing RailPersonInfoType
 *
 * Defines information about a person taking a rail journey, including name and contact information.
 * XSD Type: RailPersonInfoType
 */
class RailPersonInfoType
{
    /**
     * Name information of the person traveling.
     *
     * @var \Recranet\OTA\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Telephone number for the person traveling.
     *
     * @var \Recranet\OTA\RailPersonInfoType\TelephoneAType[] $telephone
     */
    private $telephone = [
        
    ];

    /**
     * Email address of the person traveling.
     *
     * @var \Recranet\OTA\RailPersonInfoType\EmailAType[] $email
     */
    private $email = [
        
    ];

    /**
     * Address information of the person traveling.
     *
     * @var \Recranet\OTA\RailPersonInfoType\AddressAType[] $address
     */
    private $address = [
        
    ];

    /**
     * Gets as personName
     *
     * Name information of the person traveling.
     *
     * @return \Recranet\OTA\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * Name information of the person traveling.
     *
     * @param \Recranet\OTA\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Recranet\OTA\PersonNameType $personName)
    {
        $this->personName = $personName;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone number for the person traveling.
     *
     * @return self
     * @param \Recranet\OTA\RailPersonInfoType\TelephoneAType $telephone
     */
    public function addToTelephone(\Recranet\OTA\RailPersonInfoType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;
        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone number for the person traveling.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Telephone number for the person traveling.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Telephone number for the person traveling.
     *
     * @return \Recranet\OTA\RailPersonInfoType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone number for the person traveling.
     *
     * @param \Recranet\OTA\RailPersonInfoType\TelephoneAType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone = null)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Adds as email
     *
     * Email address of the person traveling.
     *
     * @return self
     * @param \Recranet\OTA\RailPersonInfoType\EmailAType $email
     */
    public function addToEmail(\Recranet\OTA\RailPersonInfoType\EmailAType $email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * Email address of the person traveling.
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
     * Email address of the person traveling.
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
     * Email address of the person traveling.
     *
     * @return \Recranet\OTA\RailPersonInfoType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email address of the person traveling.
     *
     * @param \Recranet\OTA\RailPersonInfoType\EmailAType[] $email
     * @return self
     */
    public function setEmail(array $email = null)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as address
     *
     * Address information of the person traveling.
     *
     * @return self
     * @param \Recranet\OTA\RailPersonInfoType\AddressAType $address
     */
    public function addToAddress(\Recranet\OTA\RailPersonInfoType\AddressAType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * Address information of the person traveling.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * Address information of the person traveling.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * Address information of the person traveling.
     *
     * @return \Recranet\OTA\RailPersonInfoType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information of the person traveling.
     *
     * @param \Recranet\OTA\RailPersonInfoType\AddressAType[] $address
     * @return self
     */
    public function setAddress(array $address = null)
    {
        $this->address = $address;
        return $this;
    }
}

