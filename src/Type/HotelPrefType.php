<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelPrefType
 *
 * These are the hotel preference elements used on an instance of a profile.
 * XSD Type: HotelPrefType
 */
class HotelPrefType
{
    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @var string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @var bool $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @var string $hotelGuestType
     */
    private $hotelGuestType = null;

    /**
     * @var \Recranet\OTA\Type\LoyaltyPrefType[] $loyaltyPref
     */
    private $loyaltyPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PaymentFormPrefType[] $paymentFormPref
     */
    private $paymentFormPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\CompanyNamePrefType[] $hotelChainPref
     */
    private $hotelChainPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PropertyNamePrefType[] $propertyNamePref
     */
    private $propertyNamePref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PropertyLocationPrefType[] $propertyLocationPref
     */
    private $propertyLocationPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PropertyTypePrefType[] $propertyTypePref
     */
    private $propertyTypePref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PropertyClassPrefType[] $propertyClassPref
     */
    private $propertyClassPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PropertyAmenityPrefType[] $propertyAmenityPref
     */
    private $propertyAmenityPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\RoomAmenityPrefType[] $roomAmenityPref
     */
    private $roomAmenityPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\RoomLocationPrefType[] $roomLocationPref
     */
    private $roomLocationPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\BedTypePrefType[] $bedTypePref
     */
    private $bedTypePref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\FoodSrvcPrefType[] $foodSrvcPref
     */
    private $foodSrvcPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\MediaEntertainPrefType[] $mediaEntertainPref
     */
    private $mediaEntertainPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PetInfoPrefType[] $petInfoPref
     */
    private $petInfoPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\MealPrefType[] $mealPref
     */
    private $mealPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\RecreationSrvcPrefType[] $recreationSrvcPref
     */
    private $recreationSrvcPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\BusinessSrvcPrefType[] $businessSrvcPref
     */
    private $businessSrvcPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PersonalSrvcPrefType[] $personalSrvcPref
     */
    private $personalSrvcPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\SecurityFeaturePrefType[] $securityFeaturePref
     */
    private $securityFeaturePref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\PhysChallFeaturePrefType[] $physChallFeaturePref
     */
    private $physChallFeaturePref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\SpecRequestPrefType[] $specRequestPref
     */
    private $specRequestPref = [
        
    ];

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;
        return $this;
    }

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @return bool
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *
     *  false
     *
     * @param bool $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;
        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * Code identifying preferred hotel rate plan for this travel situation
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;
        return $this;
    }

    /**
     * Gets as hotelGuestType
     *
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @return string
     */
    public function getHotelGuestType()
    {
        return $this->hotelGuestType;
    }

    /**
     * Sets a new hotelGuestType
     *
     * Category of hotel guest. Refer to OpenTravel Code List Hotel Guest Type (GUE).
     *
     * @param string $hotelGuestType
     * @return self
     */
    public function setHotelGuestType($hotelGuestType)
    {
        $this->hotelGuestType = $hotelGuestType;
        return $this;
    }

    /**
     * Adds as loyaltyPref
     *
     * @return self
     * @param \Recranet\OTA\Type\LoyaltyPrefType $loyaltyPref
     */
    public function addToLoyaltyPref(\Recranet\OTA\Type\LoyaltyPrefType $loyaltyPref)
    {
        $this->loyaltyPref[] = $loyaltyPref;
        return $this;
    }

    /**
     * isset loyaltyPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLoyaltyPref($index)
    {
        return isset($this->loyaltyPref[$index]);
    }

    /**
     * unset loyaltyPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLoyaltyPref($index)
    {
        unset($this->loyaltyPref[$index]);
    }

    /**
     * Gets as loyaltyPref
     *
     * @return \Recranet\OTA\Type\LoyaltyPrefType[]
     */
    public function getLoyaltyPref()
    {
        return $this->loyaltyPref;
    }

    /**
     * Sets a new loyaltyPref
     *
     * @param \Recranet\OTA\Type\LoyaltyPrefType[] $loyaltyPref
     * @return self
     */
    public function setLoyaltyPref(array $loyaltyPref = null)
    {
        $this->loyaltyPref = $loyaltyPref;
        return $this;
    }

    /**
     * Adds as paymentFormPref
     *
     * @return self
     * @param \Recranet\OTA\Type\PaymentFormPrefType $paymentFormPref
     */
    public function addToPaymentFormPref(\Recranet\OTA\Type\PaymentFormPrefType $paymentFormPref)
    {
        $this->paymentFormPref[] = $paymentFormPref;
        return $this;
    }

    /**
     * isset paymentFormPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentFormPref($index)
    {
        return isset($this->paymentFormPref[$index]);
    }

    /**
     * unset paymentFormPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentFormPref($index)
    {
        unset($this->paymentFormPref[$index]);
    }

    /**
     * Gets as paymentFormPref
     *
     * @return \Recranet\OTA\Type\PaymentFormPrefType[]
     */
    public function getPaymentFormPref()
    {
        return $this->paymentFormPref;
    }

    /**
     * Sets a new paymentFormPref
     *
     * @param \Recranet\OTA\Type\PaymentFormPrefType[] $paymentFormPref
     * @return self
     */
    public function setPaymentFormPref(array $paymentFormPref = null)
    {
        $this->paymentFormPref = $paymentFormPref;
        return $this;
    }

    /**
     * Adds as hotelChainPref
     *
     * @return self
     * @param \Recranet\OTA\Type\CompanyNamePrefType $hotelChainPref
     */
    public function addToHotelChainPref(\Recranet\OTA\Type\CompanyNamePrefType $hotelChainPref)
    {
        $this->hotelChainPref[] = $hotelChainPref;
        return $this;
    }

    /**
     * isset hotelChainPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelChainPref($index)
    {
        return isset($this->hotelChainPref[$index]);
    }

    /**
     * unset hotelChainPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelChainPref($index)
    {
        unset($this->hotelChainPref[$index]);
    }

    /**
     * Gets as hotelChainPref
     *
     * @return \Recranet\OTA\Type\CompanyNamePrefType[]
     */
    public function getHotelChainPref()
    {
        return $this->hotelChainPref;
    }

    /**
     * Sets a new hotelChainPref
     *
     * @param \Recranet\OTA\Type\CompanyNamePrefType[] $hotelChainPref
     * @return self
     */
    public function setHotelChainPref(array $hotelChainPref = null)
    {
        $this->hotelChainPref = $hotelChainPref;
        return $this;
    }

    /**
     * Adds as propertyNamePref
     *
     * @return self
     * @param \Recranet\OTA\Type\PropertyNamePrefType $propertyNamePref
     */
    public function addToPropertyNamePref(\Recranet\OTA\Type\PropertyNamePrefType $propertyNamePref)
    {
        $this->propertyNamePref[] = $propertyNamePref;
        return $this;
    }

    /**
     * isset propertyNamePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyNamePref($index)
    {
        return isset($this->propertyNamePref[$index]);
    }

    /**
     * unset propertyNamePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyNamePref($index)
    {
        unset($this->propertyNamePref[$index]);
    }

    /**
     * Gets as propertyNamePref
     *
     * @return \Recranet\OTA\Type\PropertyNamePrefType[]
     */
    public function getPropertyNamePref()
    {
        return $this->propertyNamePref;
    }

    /**
     * Sets a new propertyNamePref
     *
     * @param \Recranet\OTA\Type\PropertyNamePrefType[] $propertyNamePref
     * @return self
     */
    public function setPropertyNamePref(array $propertyNamePref = null)
    {
        $this->propertyNamePref = $propertyNamePref;
        return $this;
    }

    /**
     * Adds as propertyLocationPref
     *
     * @return self
     * @param \Recranet\OTA\Type\PropertyLocationPrefType $propertyLocationPref
     */
    public function addToPropertyLocationPref(\Recranet\OTA\Type\PropertyLocationPrefType $propertyLocationPref)
    {
        $this->propertyLocationPref[] = $propertyLocationPref;
        return $this;
    }

    /**
     * isset propertyLocationPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyLocationPref($index)
    {
        return isset($this->propertyLocationPref[$index]);
    }

    /**
     * unset propertyLocationPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyLocationPref($index)
    {
        unset($this->propertyLocationPref[$index]);
    }

    /**
     * Gets as propertyLocationPref
     *
     * @return \Recranet\OTA\Type\PropertyLocationPrefType[]
     */
    public function getPropertyLocationPref()
    {
        return $this->propertyLocationPref;
    }

    /**
     * Sets a new propertyLocationPref
     *
     * @param \Recranet\OTA\Type\PropertyLocationPrefType[] $propertyLocationPref
     * @return self
     */
    public function setPropertyLocationPref(array $propertyLocationPref = null)
    {
        $this->propertyLocationPref = $propertyLocationPref;
        return $this;
    }

    /**
     * Adds as propertyTypePref
     *
     * @return self
     * @param \Recranet\OTA\Type\PropertyTypePrefType $propertyTypePref
     */
    public function addToPropertyTypePref(\Recranet\OTA\Type\PropertyTypePrefType $propertyTypePref)
    {
        $this->propertyTypePref[] = $propertyTypePref;
        return $this;
    }

    /**
     * isset propertyTypePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyTypePref($index)
    {
        return isset($this->propertyTypePref[$index]);
    }

    /**
     * unset propertyTypePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyTypePref($index)
    {
        unset($this->propertyTypePref[$index]);
    }

    /**
     * Gets as propertyTypePref
     *
     * @return \Recranet\OTA\Type\PropertyTypePrefType[]
     */
    public function getPropertyTypePref()
    {
        return $this->propertyTypePref;
    }

    /**
     * Sets a new propertyTypePref
     *
     * @param \Recranet\OTA\Type\PropertyTypePrefType[] $propertyTypePref
     * @return self
     */
    public function setPropertyTypePref(array $propertyTypePref = null)
    {
        $this->propertyTypePref = $propertyTypePref;
        return $this;
    }

    /**
     * Adds as propertyClassPref
     *
     * @return self
     * @param \Recranet\OTA\Type\PropertyClassPrefType $propertyClassPref
     */
    public function addToPropertyClassPref(\Recranet\OTA\Type\PropertyClassPrefType $propertyClassPref)
    {
        $this->propertyClassPref[] = $propertyClassPref;
        return $this;
    }

    /**
     * isset propertyClassPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyClassPref($index)
    {
        return isset($this->propertyClassPref[$index]);
    }

    /**
     * unset propertyClassPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyClassPref($index)
    {
        unset($this->propertyClassPref[$index]);
    }

    /**
     * Gets as propertyClassPref
     *
     * @return \Recranet\OTA\Type\PropertyClassPrefType[]
     */
    public function getPropertyClassPref()
    {
        return $this->propertyClassPref;
    }

    /**
     * Sets a new propertyClassPref
     *
     * @param \Recranet\OTA\Type\PropertyClassPrefType[] $propertyClassPref
     * @return self
     */
    public function setPropertyClassPref(array $propertyClassPref = null)
    {
        $this->propertyClassPref = $propertyClassPref;
        return $this;
    }

    /**
     * Adds as propertyAmenityPref
     *
     * @return self
     * @param \Recranet\OTA\Type\PropertyAmenityPrefType $propertyAmenityPref
     */
    public function addToPropertyAmenityPref(\Recranet\OTA\Type\PropertyAmenityPrefType $propertyAmenityPref)
    {
        $this->propertyAmenityPref[] = $propertyAmenityPref;
        return $this;
    }

    /**
     * isset propertyAmenityPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPropertyAmenityPref($index)
    {
        return isset($this->propertyAmenityPref[$index]);
    }

    /**
     * unset propertyAmenityPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPropertyAmenityPref($index)
    {
        unset($this->propertyAmenityPref[$index]);
    }

    /**
     * Gets as propertyAmenityPref
     *
     * @return \Recranet\OTA\Type\PropertyAmenityPrefType[]
     */
    public function getPropertyAmenityPref()
    {
        return $this->propertyAmenityPref;
    }

    /**
     * Sets a new propertyAmenityPref
     *
     * @param \Recranet\OTA\Type\PropertyAmenityPrefType[] $propertyAmenityPref
     * @return self
     */
    public function setPropertyAmenityPref(array $propertyAmenityPref = null)
    {
        $this->propertyAmenityPref = $propertyAmenityPref;
        return $this;
    }

    /**
     * Adds as roomAmenityPref
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomAmenityPrefType $roomAmenityPref
     */
    public function addToRoomAmenityPref(\Recranet\OTA\Type\RoomAmenityPrefType $roomAmenityPref)
    {
        $this->roomAmenityPref[] = $roomAmenityPref;
        return $this;
    }

    /**
     * isset roomAmenityPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomAmenityPref($index)
    {
        return isset($this->roomAmenityPref[$index]);
    }

    /**
     * unset roomAmenityPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomAmenityPref($index)
    {
        unset($this->roomAmenityPref[$index]);
    }

    /**
     * Gets as roomAmenityPref
     *
     * @return \Recranet\OTA\Type\RoomAmenityPrefType[]
     */
    public function getRoomAmenityPref()
    {
        return $this->roomAmenityPref;
    }

    /**
     * Sets a new roomAmenityPref
     *
     * @param \Recranet\OTA\Type\RoomAmenityPrefType[] $roomAmenityPref
     * @return self
     */
    public function setRoomAmenityPref(array $roomAmenityPref = null)
    {
        $this->roomAmenityPref = $roomAmenityPref;
        return $this;
    }

    /**
     * Adds as roomLocationPref
     *
     * @return self
     * @param \Recranet\OTA\Type\RoomLocationPrefType $roomLocationPref
     */
    public function addToRoomLocationPref(\Recranet\OTA\Type\RoomLocationPrefType $roomLocationPref)
    {
        $this->roomLocationPref[] = $roomLocationPref;
        return $this;
    }

    /**
     * isset roomLocationPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomLocationPref($index)
    {
        return isset($this->roomLocationPref[$index]);
    }

    /**
     * unset roomLocationPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomLocationPref($index)
    {
        unset($this->roomLocationPref[$index]);
    }

    /**
     * Gets as roomLocationPref
     *
     * @return \Recranet\OTA\Type\RoomLocationPrefType[]
     */
    public function getRoomLocationPref()
    {
        return $this->roomLocationPref;
    }

    /**
     * Sets a new roomLocationPref
     *
     * @param \Recranet\OTA\Type\RoomLocationPrefType[] $roomLocationPref
     * @return self
     */
    public function setRoomLocationPref(array $roomLocationPref = null)
    {
        $this->roomLocationPref = $roomLocationPref;
        return $this;
    }

    /**
     * Adds as bedTypePref
     *
     * @return self
     * @param \Recranet\OTA\Type\BedTypePrefType $bedTypePref
     */
    public function addToBedTypePref(\Recranet\OTA\Type\BedTypePrefType $bedTypePref)
    {
        $this->bedTypePref[] = $bedTypePref;
        return $this;
    }

    /**
     * isset bedTypePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBedTypePref($index)
    {
        return isset($this->bedTypePref[$index]);
    }

    /**
     * unset bedTypePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBedTypePref($index)
    {
        unset($this->bedTypePref[$index]);
    }

    /**
     * Gets as bedTypePref
     *
     * @return \Recranet\OTA\Type\BedTypePrefType[]
     */
    public function getBedTypePref()
    {
        return $this->bedTypePref;
    }

    /**
     * Sets a new bedTypePref
     *
     * @param \Recranet\OTA\Type\BedTypePrefType[] $bedTypePref
     * @return self
     */
    public function setBedTypePref(array $bedTypePref = null)
    {
        $this->bedTypePref = $bedTypePref;
        return $this;
    }

    /**
     * Adds as foodSrvcPref
     *
     * @return self
     * @param \Recranet\OTA\Type\FoodSrvcPrefType $foodSrvcPref
     */
    public function addToFoodSrvcPref(\Recranet\OTA\Type\FoodSrvcPrefType $foodSrvcPref)
    {
        $this->foodSrvcPref[] = $foodSrvcPref;
        return $this;
    }

    /**
     * isset foodSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFoodSrvcPref($index)
    {
        return isset($this->foodSrvcPref[$index]);
    }

    /**
     * unset foodSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFoodSrvcPref($index)
    {
        unset($this->foodSrvcPref[$index]);
    }

    /**
     * Gets as foodSrvcPref
     *
     * @return \Recranet\OTA\Type\FoodSrvcPrefType[]
     */
    public function getFoodSrvcPref()
    {
        return $this->foodSrvcPref;
    }

    /**
     * Sets a new foodSrvcPref
     *
     * @param \Recranet\OTA\Type\FoodSrvcPrefType[] $foodSrvcPref
     * @return self
     */
    public function setFoodSrvcPref(array $foodSrvcPref = null)
    {
        $this->foodSrvcPref = $foodSrvcPref;
        return $this;
    }

    /**
     * Adds as mediaEntertainPref
     *
     * @return self
     * @param \Recranet\OTA\Type\MediaEntertainPrefType $mediaEntertainPref
     */
    public function addToMediaEntertainPref(\Recranet\OTA\Type\MediaEntertainPrefType $mediaEntertainPref)
    {
        $this->mediaEntertainPref[] = $mediaEntertainPref;
        return $this;
    }

    /**
     * isset mediaEntertainPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMediaEntertainPref($index)
    {
        return isset($this->mediaEntertainPref[$index]);
    }

    /**
     * unset mediaEntertainPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMediaEntertainPref($index)
    {
        unset($this->mediaEntertainPref[$index]);
    }

    /**
     * Gets as mediaEntertainPref
     *
     * @return \Recranet\OTA\Type\MediaEntertainPrefType[]
     */
    public function getMediaEntertainPref()
    {
        return $this->mediaEntertainPref;
    }

    /**
     * Sets a new mediaEntertainPref
     *
     * @param \Recranet\OTA\Type\MediaEntertainPrefType[] $mediaEntertainPref
     * @return self
     */
    public function setMediaEntertainPref(array $mediaEntertainPref = null)
    {
        $this->mediaEntertainPref = $mediaEntertainPref;
        return $this;
    }

    /**
     * Adds as petInfoPref
     *
     * @return self
     * @param \Recranet\OTA\Type\PetInfoPrefType $petInfoPref
     */
    public function addToPetInfoPref(\Recranet\OTA\Type\PetInfoPrefType $petInfoPref)
    {
        $this->petInfoPref[] = $petInfoPref;
        return $this;
    }

    /**
     * isset petInfoPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPetInfoPref($index)
    {
        return isset($this->petInfoPref[$index]);
    }

    /**
     * unset petInfoPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPetInfoPref($index)
    {
        unset($this->petInfoPref[$index]);
    }

    /**
     * Gets as petInfoPref
     *
     * @return \Recranet\OTA\Type\PetInfoPrefType[]
     */
    public function getPetInfoPref()
    {
        return $this->petInfoPref;
    }

    /**
     * Sets a new petInfoPref
     *
     * @param \Recranet\OTA\Type\PetInfoPrefType[] $petInfoPref
     * @return self
     */
    public function setPetInfoPref(array $petInfoPref = null)
    {
        $this->petInfoPref = $petInfoPref;
        return $this;
    }

    /**
     * Adds as mealPref
     *
     * @return self
     * @param \Recranet\OTA\Type\MealPrefType $mealPref
     */
    public function addToMealPref(\Recranet\OTA\Type\MealPrefType $mealPref)
    {
        $this->mealPref[] = $mealPref;
        return $this;
    }

    /**
     * isset mealPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMealPref($index)
    {
        return isset($this->mealPref[$index]);
    }

    /**
     * unset mealPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMealPref($index)
    {
        unset($this->mealPref[$index]);
    }

    /**
     * Gets as mealPref
     *
     * @return \Recranet\OTA\Type\MealPrefType[]
     */
    public function getMealPref()
    {
        return $this->mealPref;
    }

    /**
     * Sets a new mealPref
     *
     * @param \Recranet\OTA\Type\MealPrefType[] $mealPref
     * @return self
     */
    public function setMealPref(array $mealPref = null)
    {
        $this->mealPref = $mealPref;
        return $this;
    }

    /**
     * Adds as recreationSrvcPref
     *
     * @return self
     * @param \Recranet\OTA\Type\RecreationSrvcPrefType $recreationSrvcPref
     */
    public function addToRecreationSrvcPref(\Recranet\OTA\Type\RecreationSrvcPrefType $recreationSrvcPref)
    {
        $this->recreationSrvcPref[] = $recreationSrvcPref;
        return $this;
    }

    /**
     * isset recreationSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreationSrvcPref($index)
    {
        return isset($this->recreationSrvcPref[$index]);
    }

    /**
     * unset recreationSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreationSrvcPref($index)
    {
        unset($this->recreationSrvcPref[$index]);
    }

    /**
     * Gets as recreationSrvcPref
     *
     * @return \Recranet\OTA\Type\RecreationSrvcPrefType[]
     */
    public function getRecreationSrvcPref()
    {
        return $this->recreationSrvcPref;
    }

    /**
     * Sets a new recreationSrvcPref
     *
     * @param \Recranet\OTA\Type\RecreationSrvcPrefType[] $recreationSrvcPref
     * @return self
     */
    public function setRecreationSrvcPref(array $recreationSrvcPref = null)
    {
        $this->recreationSrvcPref = $recreationSrvcPref;
        return $this;
    }

    /**
     * Adds as businessSrvcPref
     *
     * @return self
     * @param \Recranet\OTA\Type\BusinessSrvcPrefType $businessSrvcPref
     */
    public function addToBusinessSrvcPref(\Recranet\OTA\Type\BusinessSrvcPrefType $businessSrvcPref)
    {
        $this->businessSrvcPref[] = $businessSrvcPref;
        return $this;
    }

    /**
     * isset businessSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetBusinessSrvcPref($index)
    {
        return isset($this->businessSrvcPref[$index]);
    }

    /**
     * unset businessSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetBusinessSrvcPref($index)
    {
        unset($this->businessSrvcPref[$index]);
    }

    /**
     * Gets as businessSrvcPref
     *
     * @return \Recranet\OTA\Type\BusinessSrvcPrefType[]
     */
    public function getBusinessSrvcPref()
    {
        return $this->businessSrvcPref;
    }

    /**
     * Sets a new businessSrvcPref
     *
     * @param \Recranet\OTA\Type\BusinessSrvcPrefType[] $businessSrvcPref
     * @return self
     */
    public function setBusinessSrvcPref(array $businessSrvcPref = null)
    {
        $this->businessSrvcPref = $businessSrvcPref;
        return $this;
    }

    /**
     * Adds as personalSrvcPref
     *
     * @return self
     * @param \Recranet\OTA\Type\PersonalSrvcPrefType $personalSrvcPref
     */
    public function addToPersonalSrvcPref(\Recranet\OTA\Type\PersonalSrvcPrefType $personalSrvcPref)
    {
        $this->personalSrvcPref[] = $personalSrvcPref;
        return $this;
    }

    /**
     * isset personalSrvcPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPersonalSrvcPref($index)
    {
        return isset($this->personalSrvcPref[$index]);
    }

    /**
     * unset personalSrvcPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPersonalSrvcPref($index)
    {
        unset($this->personalSrvcPref[$index]);
    }

    /**
     * Gets as personalSrvcPref
     *
     * @return \Recranet\OTA\Type\PersonalSrvcPrefType[]
     */
    public function getPersonalSrvcPref()
    {
        return $this->personalSrvcPref;
    }

    /**
     * Sets a new personalSrvcPref
     *
     * @param \Recranet\OTA\Type\PersonalSrvcPrefType[] $personalSrvcPref
     * @return self
     */
    public function setPersonalSrvcPref(array $personalSrvcPref = null)
    {
        $this->personalSrvcPref = $personalSrvcPref;
        return $this;
    }

    /**
     * Adds as securityFeaturePref
     *
     * @return self
     * @param \Recranet\OTA\Type\SecurityFeaturePrefType $securityFeaturePref
     */
    public function addToSecurityFeaturePref(\Recranet\OTA\Type\SecurityFeaturePrefType $securityFeaturePref)
    {
        $this->securityFeaturePref[] = $securityFeaturePref;
        return $this;
    }

    /**
     * isset securityFeaturePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSecurityFeaturePref($index)
    {
        return isset($this->securityFeaturePref[$index]);
    }

    /**
     * unset securityFeaturePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSecurityFeaturePref($index)
    {
        unset($this->securityFeaturePref[$index]);
    }

    /**
     * Gets as securityFeaturePref
     *
     * @return \Recranet\OTA\Type\SecurityFeaturePrefType[]
     */
    public function getSecurityFeaturePref()
    {
        return $this->securityFeaturePref;
    }

    /**
     * Sets a new securityFeaturePref
     *
     * @param \Recranet\OTA\Type\SecurityFeaturePrefType[] $securityFeaturePref
     * @return self
     */
    public function setSecurityFeaturePref(array $securityFeaturePref = null)
    {
        $this->securityFeaturePref = $securityFeaturePref;
        return $this;
    }

    /**
     * Adds as physChallFeaturePref
     *
     * @return self
     * @param \Recranet\OTA\Type\PhysChallFeaturePrefType $physChallFeaturePref
     */
    public function addToPhysChallFeaturePref(\Recranet\OTA\Type\PhysChallFeaturePrefType $physChallFeaturePref)
    {
        $this->physChallFeaturePref[] = $physChallFeaturePref;
        return $this;
    }

    /**
     * isset physChallFeaturePref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPhysChallFeaturePref($index)
    {
        return isset($this->physChallFeaturePref[$index]);
    }

    /**
     * unset physChallFeaturePref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPhysChallFeaturePref($index)
    {
        unset($this->physChallFeaturePref[$index]);
    }

    /**
     * Gets as physChallFeaturePref
     *
     * @return \Recranet\OTA\Type\PhysChallFeaturePrefType[]
     */
    public function getPhysChallFeaturePref()
    {
        return $this->physChallFeaturePref;
    }

    /**
     * Sets a new physChallFeaturePref
     *
     * @param \Recranet\OTA\Type\PhysChallFeaturePrefType[] $physChallFeaturePref
     * @return self
     */
    public function setPhysChallFeaturePref(array $physChallFeaturePref = null)
    {
        $this->physChallFeaturePref = $physChallFeaturePref;
        return $this;
    }

    /**
     * Adds as specRequestPref
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecRequestPrefType $specRequestPref
     */
    public function addToSpecRequestPref(\Recranet\OTA\Type\SpecRequestPrefType $specRequestPref)
    {
        $this->specRequestPref[] = $specRequestPref;
        return $this;
    }

    /**
     * isset specRequestPref
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecRequestPref($index)
    {
        return isset($this->specRequestPref[$index]);
    }

    /**
     * unset specRequestPref
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecRequestPref($index)
    {
        unset($this->specRequestPref[$index]);
    }

    /**
     * Gets as specRequestPref
     *
     * @return \Recranet\OTA\Type\SpecRequestPrefType[]
     */
    public function getSpecRequestPref()
    {
        return $this->specRequestPref;
    }

    /**
     * Sets a new specRequestPref
     *
     * @param \Recranet\OTA\Type\SpecRequestPrefType[] $specRequestPref
     * @return self
     */
    public function setSpecRequestPref(array $specRequestPref = null)
    {
        $this->specRequestPref = $specRequestPref;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

