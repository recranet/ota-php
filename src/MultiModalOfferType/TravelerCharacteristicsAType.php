<?php

namespace Recranet\OTA\MultiModalOfferType;

/**
 * Class representing TravelerCharacteristicsAType
 */
class TravelerCharacteristicsAType
{
    /**
     * Trip purpose.
     *
     * @var \Recranet\OTA\OntologyTripPurposeType $tripPurpose
     */
    private $tripPurpose = null;

    /**
     * Traveler classification information.
     *
     * @var \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType $classification
     */
    private $classification = null;

    /**
     * Detailed traveler information.
     *
     * @var \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType[] $detailInfo
     */
    private $detailInfo = [
        
    ];

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as tripPurpose
     *
     * Trip purpose.
     *
     * @return \Recranet\OTA\OntologyTripPurposeType
     */
    public function getTripPurpose()
    {
        return $this->tripPurpose;
    }

    /**
     * Sets a new tripPurpose
     *
     * Trip purpose.
     *
     * @param \Recranet\OTA\OntologyTripPurposeType $tripPurpose
     * @return self
     */
    public function setTripPurpose(?\Recranet\OTA\OntologyTripPurposeType $tripPurpose = null)
    {
        $this->tripPurpose = $tripPurpose;
        return $this;
    }

    /**
     * Gets as classification
     *
     * Traveler classification information.
     *
     * @return \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Sets a new classification
     *
     * Traveler classification information.
     *
     * @param \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType $classification
     * @return self
     */
    public function setClassification(?\Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\ClassificationAType $classification = null)
    {
        $this->classification = $classification;
        return $this;
    }

    /**
     * Adds as detailInfo
     *
     * Detailed traveler information.
     *
     * @return self
     * @param \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType $detailInfo
     */
    public function addToDetailInfo(\Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType $detailInfo)
    {
        $this->detailInfo[] = $detailInfo;
        return $this;
    }

    /**
     * isset detailInfo
     *
     * Detailed traveler information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDetailInfo($index)
    {
        return isset($this->detailInfo[$index]);
    }

    /**
     * unset detailInfo
     *
     * Detailed traveler information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDetailInfo($index)
    {
        unset($this->detailInfo[$index]);
    }

    /**
     * Gets as detailInfo
     *
     * Detailed traveler information.
     *
     * @return \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType[]
     */
    public function getDetailInfo()
    {
        return $this->detailInfo;
    }

    /**
     * Sets a new detailInfo
     *
     * Detailed traveler information.
     *
     * @param \Recranet\OTA\MultiModalOfferType\TravelerCharacteristicsAType\DetailInfoAType[] $detailInfo
     * @return self
     */
    public function setDetailInfo(array $detailInfo = null)
    {
        $this->detailInfo = $detailInfo;
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

