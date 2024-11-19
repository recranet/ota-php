<?php

namespace Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType;

/**
 * Class representing IdentificationAType
 */
class IdentificationAType
{
    /**
     * Traveler name.
     *
     * @var \Recranet\OTA\OntologyNameType $name
     */
    private $name = null;

    /**
     * Traveler age and birth information.
     *
     * @var \Recranet\OTA\OntologyAgeBirthDateType $age
     */
    private $age = null;

    /**
     * Traveler address.
     *
     * @var \Recranet\OTA\OntologyAddressType $address
     */
    private $address = null;

    /**
     * Traveler contact information.
     *
     * @var \Recranet\OTA\OntologyContactType $contact
     */
    private $contact = null;

    /**
     * Traveler loyalty program information.
     *
     * @var \Recranet\OTA\OntologyLoyaltyType[] $loyaltyProgram
     */
    private $loyaltyProgram = [
        
    ];

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as name
     *
     * Traveler name.
     *
     * @return \Recranet\OTA\OntologyNameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Traveler name.
     *
     * @param \Recranet\OTA\OntologyNameType $name
     * @return self
     */
    public function setName(?\Recranet\OTA\OntologyNameType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as age
     *
     * Traveler age and birth information.
     *
     * @return \Recranet\OTA\OntologyAgeBirthDateType
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Traveler age and birth information.
     *
     * @param \Recranet\OTA\OntologyAgeBirthDateType $age
     * @return self
     */
    public function setAge(?\Recranet\OTA\OntologyAgeBirthDateType $age = null)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as address
     *
     * Traveler address.
     *
     * @return \Recranet\OTA\OntologyAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Traveler address.
     *
     * @param \Recranet\OTA\OntologyAddressType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\OntologyAddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as contact
     *
     * Traveler contact information.
     *
     * @return \Recranet\OTA\OntologyContactType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Traveler contact information.
     *
     * @param \Recranet\OTA\OntologyContactType $contact
     * @return self
     */
    public function setContact(?\Recranet\OTA\OntologyContactType $contact = null)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Adds as loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @return self
     * @param \Recranet\OTA\OntologyLoyaltyType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Recranet\OTA\OntologyLoyaltyType $loyaltyProgram)
    {
        $this->loyaltyProgram[] = $loyaltyProgram;
        return $this;
    }

    /**
     * isset loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyProgram($index)
    {
        return isset($this->loyaltyProgram[$index]);
    }

    /**
     * unset loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyProgram($index)
    {
        unset($this->loyaltyProgram[$index]);
    }

    /**
     * Gets as loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @return \Recranet\OTA\OntologyLoyaltyType[]
     */
    public function getLoyaltyProgram()
    {
        return $this->loyaltyProgram;
    }

    /**
     * Sets a new loyaltyProgram
     *
     * Traveler loyalty program information.
     *
     * @param \Recranet\OTA\OntologyLoyaltyType[] $loyaltyProgram
     * @return self
     */
    public function setLoyaltyProgram(array $loyaltyProgram = null)
    {
        $this->loyaltyProgram = $loyaltyProgram;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

