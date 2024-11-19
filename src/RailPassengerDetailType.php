<?php

namespace Recranet\OTA;

/**
 * Class representing RailPassengerDetailType
 *
 * Detailed information about a rail passenger, such as the person's name, contact information, travel profile, etc.
 * XSD Type: RailPassengerDetailType
 */
class RailPassengerDetailType
{
    /**
     * Date of birth.
     *
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Name and document identification for a passenger.
     *
     * @var \Recranet\OTA\PersonNameType $identification
     */
    private $identification = null;

    /**
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @var \Recranet\OTA\RailPassengerDetailType\ProfileRefAType $profileRef
     */
    private $profileRef = null;

    /**
     * Telephone number for the person traveling.
     *
     * @var \Recranet\OTA\RailPassengerDetailType\TelephoneAType[] $telephone
     */
    private $telephone = [
        
    ];

    /**
     * Email address of the person traveling.
     *
     * @var \Recranet\OTA\RailPassengerDetailType\EmailAType[] $email
     */
    private $email = [
        
    ];

    /**
     * Address information of the person traveling.
     *
     * @var \Recranet\OTA\RailPassengerDetailType\AddressAType[] $address
     */
    private $address = [
        
    ];

    /**
     * Identifies the loyalty program(s) that the customer belongs to and associated information.
     *
     * @var \Recranet\OTA\RailPassengerDetailType\CustLoyaltyAType[] $custLoyalty
     */
    private $custLoyalty = [
        
    ];

    /**
     * Gets as birthDate
     *
     * Date of birth.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Date of birth.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as identification
     *
     * Name and document identification for a passenger.
     *
     * @return \Recranet\OTA\PersonNameType
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Sets a new identification
     *
     * Name and document identification for a passenger.
     *
     * @param \Recranet\OTA\PersonNameType $identification
     * @return self
     */
    public function setIdentification(\Recranet\OTA\PersonNameType $identification)
    {
        $this->identification = $identification;
        return $this;
    }

    /**
     * Gets as profileRef
     *
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @return \Recranet\OTA\RailPassengerDetailType\ProfileRefAType
     */
    public function getProfileRef()
    {
        return $this->profileRef;
    }

    /**
     * Sets a new profileRef
     *
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @param \Recranet\OTA\RailPassengerDetailType\ProfileRefAType $profileRef
     * @return self
     */
    public function setProfileRef(?\Recranet\OTA\RailPassengerDetailType\ProfileRefAType $profileRef = null)
    {
        $this->profileRef = $profileRef;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone number for the person traveling.
     *
     * @return self
     * @param \Recranet\OTA\RailPassengerDetailType\TelephoneAType $telephone
     */
    public function addToTelephone(\Recranet\OTA\RailPassengerDetailType\TelephoneAType $telephone)
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
     * @return \Recranet\OTA\RailPassengerDetailType\TelephoneAType[]
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
     * @param \Recranet\OTA\RailPassengerDetailType\TelephoneAType[] $telephone
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
     * @param \Recranet\OTA\RailPassengerDetailType\EmailAType $email
     */
    public function addToEmail(\Recranet\OTA\RailPassengerDetailType\EmailAType $email)
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
     * @return \Recranet\OTA\RailPassengerDetailType\EmailAType[]
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
     * @param \Recranet\OTA\RailPassengerDetailType\EmailAType[] $email
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
     * @param \Recranet\OTA\RailPassengerDetailType\AddressAType $address
     */
    public function addToAddress(\Recranet\OTA\RailPassengerDetailType\AddressAType $address)
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
     * @return \Recranet\OTA\RailPassengerDetailType\AddressAType[]
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
     * @param \Recranet\OTA\RailPassengerDetailType\AddressAType[] $address
     * @return self
     */
    public function setAddress(array $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated information.
     *
     * @return self
     * @param \Recranet\OTA\RailPassengerDetailType\CustLoyaltyAType $custLoyalty
     */
    public function addToCustLoyalty(\Recranet\OTA\RailPassengerDetailType\CustLoyaltyAType $custLoyalty)
    {
        $this->custLoyalty[] = $custLoyalty;
        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated information.
     *
     * @return \Recranet\OTA\RailPassengerDetailType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated information.
     *
     * @param \Recranet\OTA\RailPassengerDetailType\CustLoyaltyAType[] $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty = null)
    {
        $this->custLoyalty = $custLoyalty;
        return $this;
    }
}

