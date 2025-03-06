<?php

namespace Recranet\OTA\Type\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType;

/**
 * Class representing IdentificationAType
 */
class IdentificationAType
{
    /**
     * Traveler name.
     *
     * @var \Recranet\OTA\Type\OntologyNameType $name
     */
    private $name = null;

    /**
     * Traveler age and birth information.
     *
     * @var \Recranet\OTA\Type\OntologyAgeBirthDateType $age
     */
    private $age = null;

    /**
     * Traveler address.
     *
     * @var \Recranet\OTA\Type\OntologyAddressType $address
     */
    private $address = null;

    /**
     * Traveler contact information.
     *
     * @var \Recranet\OTA\Type\OntologyContactType $contact
     */
    private $contact = null;

    /**
     * Traveler loyalty program information.
     *
     * @var \Recranet\OTA\Type\OntologyLoyaltyType[] $loyaltyProgram
     */
    private $loyaltyProgram = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as name
     *
     * Traveler name.
     *
     * @return \Recranet\OTA\Type\OntologyNameType
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
     * @param \Recranet\OTA\Type\OntologyNameType $name
     * @return self
     */
    public function setName(?\Recranet\OTA\Type\OntologyNameType $name = null)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as age
     *
     * Traveler age and birth information.
     *
     * @return \Recranet\OTA\Type\OntologyAgeBirthDateType
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
     * @param \Recranet\OTA\Type\OntologyAgeBirthDateType $age
     * @return self
     */
    public function setAge(?\Recranet\OTA\Type\OntologyAgeBirthDateType $age = null)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * Gets as address
     *
     * Traveler address.
     *
     * @return \Recranet\OTA\Type\OntologyAddressType
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
     * @param \Recranet\OTA\Type\OntologyAddressType $address
     * @return self
     */
    public function setAddress(?\Recranet\OTA\Type\OntologyAddressType $address = null)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as contact
     *
     * Traveler contact information.
     *
     * @return \Recranet\OTA\Type\OntologyContactType
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
     * @param \Recranet\OTA\Type\OntologyContactType $contact
     * @return self
     */
    public function setContact(?\Recranet\OTA\Type\OntologyContactType $contact = null)
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
     * @param \Recranet\OTA\Type\OntologyLoyaltyType $loyaltyProgram
     */
    public function addToLoyaltyProgram(\Recranet\OTA\Type\OntologyLoyaltyType $loyaltyProgram)
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
     * @return \Recranet\OTA\Type\OntologyLoyaltyType[]
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
     * @param \Recranet\OTA\Type\OntologyLoyaltyType[] $loyaltyProgram
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
     * @return \Recranet\OTA\Type\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\Type\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

