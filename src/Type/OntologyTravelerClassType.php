<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyTravelerClassType
 *
 * Traveler classification information with ontology reference.
 * XSD Type: OntologyTravelerClassType
 */
class OntologyTravelerClassType
{
    /**
     * Total disabled traveler quantity.
     * Example: 1
     *
     * @var int $disabledQty
     */
    private $disabledQty = null;

    /**
     * Age category.
     * Example: Adult
     *
     * @var \Recranet\OTA\Type\OntologyTravelerClassType\AgeCategoryAType[] $ageCategory
     */
    private $ageCategory = [
        
    ];

    /**
     * Passenger category.
     * Example: Disabled
     *
     * @var \Recranet\OTA\Type\OntologyTravelerClassType\PassengerCategoryAType[] $passengerCategory
     */
    private $passengerCategory = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as disabledQty
     *
     * Total disabled traveler quantity.
     * Example: 1
     *
     * @return int
     */
    public function getDisabledQty()
    {
        return $this->disabledQty;
    }

    /**
     * Sets a new disabledQty
     *
     * Total disabled traveler quantity.
     * Example: 1
     *
     * @param int $disabledQty
     * @return self
     */
    public function setDisabledQty($disabledQty)
    {
        $this->disabledQty = $disabledQty;
        return $this;
    }

    /**
     * Adds as ageCategory
     *
     * Age category.
     * Example: Adult
     *
     * @return self
     * @param \Recranet\OTA\Type\OntologyTravelerClassType\AgeCategoryAType $ageCategory
     */
    public function addToAgeCategory(\Recranet\OTA\Type\OntologyTravelerClassType\AgeCategoryAType $ageCategory)
    {
        $this->ageCategory[] = $ageCategory;
        return $this;
    }

    /**
     * isset ageCategory
     *
     * Age category.
     * Example: Adult
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAgeCategory($index)
    {
        return isset($this->ageCategory[$index]);
    }

    /**
     * unset ageCategory
     *
     * Age category.
     * Example: Adult
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAgeCategory($index)
    {
        unset($this->ageCategory[$index]);
    }

    /**
     * Gets as ageCategory
     *
     * Age category.
     * Example: Adult
     *
     * @return \Recranet\OTA\Type\OntologyTravelerClassType\AgeCategoryAType[]
     */
    public function getAgeCategory()
    {
        return $this->ageCategory;
    }

    /**
     * Sets a new ageCategory
     *
     * Age category.
     * Example: Adult
     *
     * @param \Recranet\OTA\Type\OntologyTravelerClassType\AgeCategoryAType[] $ageCategory
     * @return self
     */
    public function setAgeCategory(array $ageCategory = null)
    {
        $this->ageCategory = $ageCategory;
        return $this;
    }

    /**
     * Adds as passengerCategory
     *
     * Passenger category.
     * Example: Disabled
     *
     * @return self
     * @param \Recranet\OTA\Type\OntologyTravelerClassType\PassengerCategoryAType $passengerCategory
     */
    public function addToPassengerCategory(\Recranet\OTA\Type\OntologyTravelerClassType\PassengerCategoryAType $passengerCategory)
    {
        $this->passengerCategory[] = $passengerCategory;
        return $this;
    }

    /**
     * isset passengerCategory
     *
     * Passenger category.
     * Example: Disabled
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPassengerCategory($index)
    {
        return isset($this->passengerCategory[$index]);
    }

    /**
     * unset passengerCategory
     *
     * Passenger category.
     * Example: Disabled
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPassengerCategory($index)
    {
        unset($this->passengerCategory[$index]);
    }

    /**
     * Gets as passengerCategory
     *
     * Passenger category.
     * Example: Disabled
     *
     * @return \Recranet\OTA\Type\OntologyTravelerClassType\PassengerCategoryAType[]
     */
    public function getPassengerCategory()
    {
        return $this->passengerCategory;
    }

    /**
     * Sets a new passengerCategory
     *
     * Passenger category.
     * Example: Disabled
     *
     * @param \Recranet\OTA\Type\OntologyTravelerClassType\PassengerCategoryAType[] $passengerCategory
     * @return self
     */
    public function setPassengerCategory(array $passengerCategory = null)
    {
        $this->passengerCategory = $passengerCategory;
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

