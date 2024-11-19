<?php

namespace Recranet\OTA\RestaurantsType;

use Recranet\OTA\RestaurantType;

/**
 * Class representing RestaurantAType
 */
class RestaurantAType extends RestaurantType
{
    /**
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @var bool $removal
     */
    private $removal = null;

    /**
     * A reference to an award associated with this restaurant.
     *
     * @var string $awardsRPH
     */
    private $awardsRPH = null;

    /**
     * Collection of features offered by a hotel.
     *
     * @var \Recranet\OTA\FeaturesType\FeatureAType[] $features
     */
    private $features = null;

    /**
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @var \Recranet\OTA\ContactInfoRootType[] $contactInfos
     */
    private $contactInfos = null;

    /**
     * Collection of type of restaurant offered.
     *
     * @var \Recranet\OTA\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[] $srvcInfoCodes
     */
    private $srvcInfoCodes = null;

    /**
     * Gets as removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @return bool
     */
    public function getRemoval()
    {
        return $this->removal;
    }

    /**
     * Sets a new removal
     *
     * If true, this item is obsolete and should be removed from the receiving system.
     *
     *  false
     *
     * @param bool $removal
     * @return self
     */
    public function setRemoval($removal)
    {
        $this->removal = $removal;
        return $this;
    }

    /**
     * Gets as awardsRPH
     *
     * A reference to an award associated with this restaurant.
     *
     * @return string
     */
    public function getAwardsRPH()
    {
        return $this->awardsRPH;
    }

    /**
     * Sets a new awardsRPH
     *
     * A reference to an award associated with this restaurant.
     *
     * @param string $awardsRPH
     * @return self
     */
    public function setAwardsRPH($awardsRPH)
    {
        $this->awardsRPH = $awardsRPH;
        return $this;
    }

    /**
     * Adds as feature
     *
     * Collection of features offered by a hotel.
     *
     * @return self
     * @param \Recranet\OTA\FeaturesType\FeatureAType $feature
     */
    public function addToFeatures(\Recranet\OTA\FeaturesType\FeatureAType $feature)
    {
        $this->features[] = $feature;
        return $this;
    }

    /**
     * isset features
     *
     * Collection of features offered by a hotel.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFeatures($index)
    {
        return isset($this->features[$index]);
    }

    /**
     * unset features
     *
     * Collection of features offered by a hotel.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFeatures($index)
    {
        unset($this->features[$index]);
    }

    /**
     * Gets as features
     *
     * Collection of features offered by a hotel.
     *
     * @return \Recranet\OTA\FeaturesType\FeatureAType[]
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * Sets a new features
     *
     * Collection of features offered by a hotel.
     *
     * @param \Recranet\OTA\FeaturesType\FeatureAType[] $features
     * @return self
     */
    public function setFeatures(array $features = null)
    {
        $this->features = $features;
        return $this;
    }

    /**
     * Adds as contactInfo
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @return self
     * @param \Recranet\OTA\ContactInfoRootType $contactInfo
     */
    public function addToContactInfos(\Recranet\OTA\ContactInfoRootType $contactInfo)
    {
        $this->contactInfos[] = $contactInfo;
        return $this;
    }

    /**
     * isset contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContactInfos($index)
    {
        return isset($this->contactInfos[$index]);
    }

    /**
     * unset contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContactInfos($index)
    {
        unset($this->contactInfos[$index]);
    }

    /**
     * Gets as contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @return \Recranet\OTA\ContactInfoRootType[]
     */
    public function getContactInfos()
    {
        return $this->contactInfos;
    }

    /**
     * Sets a new contactInfos
     *
     * Collection of contact information (e.g., restaurant address, phone number).
     *
     * @param \Recranet\OTA\ContactInfoRootType[] $contactInfos
     * @return self
     */
    public function setContactInfos(array $contactInfos = null)
    {
        $this->contactInfos = $contactInfos;
        return $this;
    }

    /**
     * Adds as srvcInfoCode
     *
     * Collection of type of restaurant offered.
     *
     * @return self
     * @param \Recranet\OTA\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode
     */
    public function addToSrvcInfoCodes(\Recranet\OTA\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType $srvcInfoCode)
    {
        $this->srvcInfoCodes[] = $srvcInfoCode;
        return $this;
    }

    /**
     * isset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSrvcInfoCodes($index)
    {
        return isset($this->srvcInfoCodes[$index]);
    }

    /**
     * unset srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSrvcInfoCodes($index)
    {
        unset($this->srvcInfoCodes[$index]);
    }

    /**
     * Gets as srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @return \Recranet\OTA\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[]
     */
    public function getSrvcInfoCodes()
    {
        return $this->srvcInfoCodes;
    }

    /**
     * Sets a new srvcInfoCodes
     *
     * Collection of type of restaurant offered.
     *
     * @param \Recranet\OTA\RestaurantsType\RestaurantAType\SrvcInfoCodesAType\SrvcInfoCodeAType[] $srvcInfoCodes
     * @return self
     */
    public function setSrvcInfoCodes(array $srvcInfoCodes = null)
    {
        $this->srvcInfoCodes = $srvcInfoCodes;
        return $this;
    }
}

