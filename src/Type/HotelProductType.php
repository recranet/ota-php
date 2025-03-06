<?php

namespace Recranet\OTA\Type;

/**
 * Class representing HotelProductType
 *
 * Specifies product information for a hotel. A product may be a room type, a rate plan, a room type rate plan combination or hotel policy information.
 * XSD Type: HotelProductType
 */
class HotelProductType
{
    /**
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @var string $productStatusType
     */
    private $productStatusType = null;

    /**
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @var string $chainCode
     */
    private $chainCode = null;

    /**
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @var string $brandCode
     */
    private $brandCode = null;

    /**
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @var string $hotelCode
     */
    private $hotelCode = null;

    /**
     * The IATA city code; for example DCA, ORD.
     *
     * @var string $hotelCityCode
     */
    private $hotelCityCode = null;

    /**
     * A text field used to communicate the proper name of the hotel.
     *
     * @var string $hotelName
     */
    private $hotelName = null;

    /**
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @var string $hotelCodeContext
     */
    private $hotelCodeContext = null;

    /**
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @var string $chainName
     */
    private $chainName = null;

    /**
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @var string $brandName
     */
    private $brandName = null;

    /**
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @var string $areaID
     */
    private $areaID = null;

    /**
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @var int $tTIcode
     */
    private $tTIcode = null;

    /**
     * The unique identifier element allows the trading partners to uniquely identify each HotelProduct for tracing of transactions.
     *
     * @var \Recranet\OTA\Type\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * A collection of HotelRef elements.
     *
     * @var \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType[] $hotelRefs
     */
    private $hotelRefs = null;

    /**
     * A collection of room types.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType[] $roomTypes
     */
    private $roomTypes = null;

    /**
     * A collection of rate plans.
     *
     * @var \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType[] $ratePlans
     */
    private $ratePlans = null;

    /**
     * Identifies items that are included with this product that add value or differentiate this product from other products at no additional charge (i.e. breakfast, internet, parking).
     *
     * @var \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType $valueAddInclusions
     */
    private $valueAddInclusions = null;

    /**
     * Policy Information for this product.
     *
     * @var \Recranet\OTA\Type\HotelProductType\PolicyInfoAType $policyInfo
     */
    private $policyInfo = null;

    /**
     * A collection of contacts.
     *
     * @var \Recranet\OTA\Type\ContactPersonType[] $contacts
     */
    private $contacts = null;

    /**
     * Taxes that apply to the product.
     *
     * @var \Recranet\OTA\Type\TaxType[] $taxes
     */
    private $taxes = null;

    /**
     * Fees that apply to the product.
     *
     * @var \Recranet\OTA\Type\FeeType[] $fees
     */
    private $fees = null;

    /**
     * A Container for the repeating description element.
     *
     * @var \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType[] $descriptions
     */
    private $descriptions = null;

    /**
     * A collection of charges related to additional guests.
     *
     * @var \Recranet\OTA\Type\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[] $additionalGuestAmounts
     */
    private $additionalGuestAmounts = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as productStatusType
     *
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @return string
     */
    public function getProductStatusType()
    {
        return $this->productStatusType;
    }

    /**
     * Sets a new productStatusType
     *
     * Identifies the status of the product ( i.e. Active, Deactivate).
     *
     * @param string $productStatusType
     * @return self
     */
    public function setProductStatusType($productStatusType)
    {
        $this->productStatusType = $productStatusType;
        return $this;
    }

    /**
     * Gets as chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @return string
     */
    public function getChainCode()
    {
        return $this->chainCode;
    }

    /**
     * Sets a new chainCode
     *
     * The code that identifies a hotel chain or management group. The hotel chain code is decided between vendors. This attribute is optional if the hotel is an independent property that can be identified by the HotelCode attribute.
     *
     * @param string $chainCode
     * @return self
     */
    public function setChainCode($chainCode)
    {
        $this->chainCode = $chainCode;
        return $this;
    }

    /**
     * Gets as brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @return string
     */
    public function getBrandCode()
    {
        return $this->brandCode;
    }

    /**
     * Sets a new brandCode
     *
     * A code that identifies the brand or flag of a hotel, often used for independently-owned or franchised properties who are known by a specific brand.
     *
     * @param string $brandCode
     * @return self
     */
    public function setBrandCode($brandCode)
    {
        $this->brandCode = $brandCode;
        return $this;
    }

    /**
     * Gets as hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @return string
     */
    public function getHotelCode()
    {
        return $this->hotelCode;
    }

    /**
     * Sets a new hotelCode
     *
     * The code that uniquely identifies a single hotel property. The hotel code is decided between vendors.
     *
     * @param string $hotelCode
     * @return self
     */
    public function setHotelCode($hotelCode)
    {
        $this->hotelCode = $hotelCode;
        return $this;
    }

    /**
     * Gets as hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getHotelCityCode()
    {
        return $this->hotelCityCode;
    }

    /**
     * Sets a new hotelCityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $hotelCityCode
     * @return self
     */
    public function setHotelCityCode($hotelCityCode)
    {
        $this->hotelCityCode = $hotelCityCode;
        return $this;
    }

    /**
     * Gets as hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @return string
     */
    public function getHotelName()
    {
        return $this->hotelName;
    }

    /**
     * Sets a new hotelName
     *
     * A text field used to communicate the proper name of the hotel.
     *
     * @param string $hotelName
     * @return self
     */
    public function setHotelName($hotelName)
    {
        $this->hotelName = $hotelName;
        return $this;
    }

    /**
     * Gets as hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @return string
     */
    public function getHotelCodeContext()
    {
        return $this->hotelCodeContext;
    }

    /**
     * Sets a new hotelCodeContext
     *
     * A text field used to communicate the context (or source of - ex Sabre, Galileo, Worldspan, Amadeus) the HotelReferenceGroup codes.
     *
     * @param string $hotelCodeContext
     * @return self
     */
    public function setHotelCodeContext($hotelCodeContext)
    {
        $this->hotelCodeContext = $hotelCodeContext;
        return $this;
    }

    /**
     * Gets as chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @return string
     */
    public function getChainName()
    {
        return $this->chainName;
    }

    /**
     * Sets a new chainName
     *
     * The name of the hotel chain (e.g., Hilton, Marriott, Hyatt, Starwood).
     *
     * @param string $chainName
     * @return self
     */
    public function setChainName($chainName)
    {
        $this->chainName = $chainName;
        return $this;
    }

    /**
     * Gets as brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @return string
     */
    public function getBrandName()
    {
        return $this->brandName;
    }

    /**
     * Sets a new brandName
     *
     * The name of a brand of hotels (e.g., Courtyard, Hampton Inn).
     *
     * @param string $brandName
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->brandName = $brandName;
        return $this;
    }

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a hotel reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;
        return $this;
    }

    /**
     * Gets as tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @return int
     */
    public function getTTIcode()
    {
        return $this->tTIcode;
    }

    /**
     * Sets a new tTIcode
     *
     * TTI hotel reference code.
     * Example: 123
     * Note: This code is maintained by the Travel Technology Initiative (TTI) and provides a unique way to identify a property across a multiplicity of channels, service providers, tour companies, representation companies and third parties involved in the booking, administration and fulfillment of travel within the hospitality industry. For more information: http://www.tti.org/tticodes.html
     *
     * @param int $tTIcode
     * @return self
     */
    public function setTTIcode($tTIcode)
    {
        $this->tTIcode = $tTIcode;
        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each HotelProduct for tracing of transactions.
     *
     * @return \Recranet\OTA\Type\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The unique identifier element allows the trading partners to uniquely identify each HotelProduct for tracing of transactions.
     *
     * @param \Recranet\OTA\Type\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(?\Recranet\OTA\Type\UniqueIDType $uniqueID = null)
    {
        $this->uniqueID = $uniqueID;
        return $this;
    }

    /**
     * Adds as hotelRef
     *
     * A collection of HotelRef elements.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType $hotelRef
     */
    public function addToHotelRefs(\Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType $hotelRef)
    {
        $this->hotelRefs[] = $hotelRef;
        return $this;
    }

    /**
     * isset hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetHotelRefs($index)
    {
        return isset($this->hotelRefs[$index]);
    }

    /**
     * unset hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetHotelRefs($index)
    {
        unset($this->hotelRefs[$index]);
    }

    /**
     * Gets as hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @return \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRefs()
    {
        return $this->hotelRefs;
    }

    /**
     * Sets a new hotelRefs
     *
     * A collection of HotelRef elements.
     *
     * @param \Recranet\OTA\Type\HotelProductType\HotelRefsAType\HotelRefAType[] $hotelRefs
     * @return self
     */
    public function setHotelRefs(array $hotelRefs = null)
    {
        $this->hotelRefs = $hotelRefs;
        return $this;
    }

    /**
     * Adds as roomType
     *
     * A collection of room types.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType $roomType
     */
    public function addToRoomTypes(\Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType $roomType)
    {
        $this->roomTypes[] = $roomType;
        return $this;
    }

    /**
     * isset roomTypes
     *
     * A collection of room types.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoomTypes($index)
    {
        return isset($this->roomTypes[$index]);
    }

    /**
     * unset roomTypes
     *
     * A collection of room types.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoomTypes($index)
    {
        unset($this->roomTypes[$index]);
    }

    /**
     * Gets as roomTypes
     *
     * A collection of room types.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType[]
     */
    public function getRoomTypes()
    {
        return $this->roomTypes;
    }

    /**
     * Sets a new roomTypes
     *
     * A collection of room types.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RoomTypesAType\RoomTypeAType[] $roomTypes
     * @return self
     */
    public function setRoomTypes(array $roomTypes = null)
    {
        $this->roomTypes = $roomTypes;
        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * A collection of rate plans.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType $ratePlan
     */
    public function addToRatePlans(\Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType $ratePlan)
    {
        $this->ratePlans[] = $ratePlan;
        return $this;
    }

    /**
     * isset ratePlans
     *
     * A collection of rate plans.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * A collection of rate plans.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * A collection of rate plans.
     *
     * @return \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * A collection of rate plans.
     *
     * @param \Recranet\OTA\Type\HotelProductType\RatePlansAType\RatePlanAType[] $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans = null)
    {
        $this->ratePlans = $ratePlans;
        return $this;
    }

    /**
     * Gets as valueAddInclusions
     *
     * Identifies items that are included with this product that add value or differentiate this product from other products at no additional charge (i.e. breakfast, internet, parking).
     *
     * @return \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType
     */
    public function getValueAddInclusions()
    {
        return $this->valueAddInclusions;
    }

    /**
     * Sets a new valueAddInclusions
     *
     * Identifies items that are included with this product that add value or differentiate this product from other products at no additional charge (i.e. breakfast, internet, parking).
     *
     * @param \Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType $valueAddInclusions
     * @return self
     */
    public function setValueAddInclusions(?\Recranet\OTA\Type\HotelProductType\ValueAddInclusionsAType $valueAddInclusions = null)
    {
        $this->valueAddInclusions = $valueAddInclusions;
        return $this;
    }

    /**
     * Gets as policyInfo
     *
     * Policy Information for this product.
     *
     * @return \Recranet\OTA\Type\HotelProductType\PolicyInfoAType
     */
    public function getPolicyInfo()
    {
        return $this->policyInfo;
    }

    /**
     * Sets a new policyInfo
     *
     * Policy Information for this product.
     *
     * @param \Recranet\OTA\Type\HotelProductType\PolicyInfoAType $policyInfo
     * @return self
     */
    public function setPolicyInfo(?\Recranet\OTA\Type\HotelProductType\PolicyInfoAType $policyInfo = null)
    {
        $this->policyInfo = $policyInfo;
        return $this;
    }

    /**
     * Adds as contact
     *
     * A collection of contacts.
     *
     * @return self
     * @param \Recranet\OTA\Type\ContactPersonType $contact
     */
    public function addToContacts(\Recranet\OTA\Type\ContactPersonType $contact)
    {
        $this->contacts[] = $contact;
        return $this;
    }

    /**
     * isset contacts
     *
     * A collection of contacts.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * A collection of contacts.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * A collection of contacts.
     *
     * @return \Recranet\OTA\Type\ContactPersonType[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * A collection of contacts.
     *
     * @param \Recranet\OTA\Type\ContactPersonType[] $contacts
     * @return self
     */
    public function setContacts(array $contacts = null)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Adds as tax
     *
     * Taxes that apply to the product.
     *
     * @return self
     * @param \Recranet\OTA\Type\TaxType $tax
     */
    public function addToTaxes(\Recranet\OTA\Type\TaxType $tax)
    {
        $this->taxes[] = $tax;
        return $this;
    }

    /**
     * isset taxes
     *
     * Taxes that apply to the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxes($index)
    {
        return isset($this->taxes[$index]);
    }

    /**
     * unset taxes
     *
     * Taxes that apply to the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxes($index)
    {
        unset($this->taxes[$index]);
    }

    /**
     * Gets as taxes
     *
     * Taxes that apply to the product.
     *
     * @return \Recranet\OTA\Type\TaxType[]
     */
    public function getTaxes()
    {
        return $this->taxes;
    }

    /**
     * Sets a new taxes
     *
     * Taxes that apply to the product.
     *
     * @param \Recranet\OTA\Type\TaxType[] $taxes
     * @return self
     */
    public function setTaxes(array $taxes = null)
    {
        $this->taxes = $taxes;
        return $this;
    }

    /**
     * Adds as fee
     *
     * Fees that apply to the product.
     *
     * @return self
     * @param \Recranet\OTA\Type\FeeType $fee
     */
    public function addToFees(\Recranet\OTA\Type\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * Fees that apply to the product.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * Fees that apply to the product.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * Fees that apply to the product.
     *
     * @return \Recranet\OTA\Type\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * Fees that apply to the product.
     *
     * @param \Recranet\OTA\Type\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Adds as description
     *
     * A Container for the repeating description element.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType $description
     */
    public function addToDescriptions(\Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType $description)
    {
        $this->descriptions[] = $description;
        return $this;
    }

    /**
     * isset descriptions
     *
     * A Container for the repeating description element.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescriptions($index)
    {
        return isset($this->descriptions[$index]);
    }

    /**
     * unset descriptions
     *
     * A Container for the repeating description element.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescriptions($index)
    {
        unset($this->descriptions[$index]);
    }

    /**
     * Gets as descriptions
     *
     * A Container for the repeating description element.
     *
     * @return \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType[]
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Sets a new descriptions
     *
     * A Container for the repeating description element.
     *
     * @param \Recranet\OTA\Type\HotelProductType\DescriptionsAType\DescriptionAType[] $descriptions
     * @return self
     */
    public function setDescriptions(array $descriptions = null)
    {
        $this->descriptions = $descriptions;
        return $this;
    }

    /**
     * Adds as additionalGuestAmount
     *
     * A collection of charges related to additional guests.
     *
     * @return self
     * @param \Recranet\OTA\Type\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount
     */
    public function addToAdditionalGuestAmounts(\Recranet\OTA\Type\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType $additionalGuestAmount)
    {
        $this->additionalGuestAmounts[] = $additionalGuestAmount;
        return $this;
    }

    /**
     * isset additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAdditionalGuestAmounts($index)
    {
        return isset($this->additionalGuestAmounts[$index]);
    }

    /**
     * unset additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAdditionalGuestAmounts($index)
    {
        unset($this->additionalGuestAmounts[$index]);
    }

    /**
     * Gets as additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @return \Recranet\OTA\Type\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[]
     */
    public function getAdditionalGuestAmounts()
    {
        return $this->additionalGuestAmounts;
    }

    /**
     * Sets a new additionalGuestAmounts
     *
     * A collection of charges related to additional guests.
     *
     * @param \Recranet\OTA\Type\HotelProductType\AdditionalGuestAmountsAType\AdditionalGuestAmountAType[] $additionalGuestAmounts
     * @return self
     */
    public function setAdditionalGuestAmounts(array $additionalGuestAmounts = null)
    {
        $this->additionalGuestAmounts = $additionalGuestAmounts;
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

