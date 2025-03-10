<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ServiceType
 *
 * A ServiceType class.
 * XSD Type: ServiceType
 */
class ServiceType
{
    /**
     * An enumerated type that defines how a service is priced. Values: Per stay, Per person, Per night, Per person per night, Per use.
     *
     * @var string $servicePricingType
     */
    private $servicePricingType = null;

    /**
     * An enumerated type that defines the status of the reservation for this service.
     *
     * @var string $reservationStatusType
     */
    private $reservationStatusType = null;

    /**
     * A unique ID for a service that may be referenced elsewhere in the schema.
     *
     * @var string $serviceRPH
     */
    private $serviceRPH = null;

    /**
     * The representation of the specific service being reserved.
     *
     * @var string $serviceInventoryCode
     */
    private $serviceInventoryCode = null;

    /**
     * The representation of the rate plan under which this service was booked.
     *
     * @var string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * The representation of the block code under which the inventory for this service is categorized.
     *
     * @var string $inventoryBlockCode
     */
    private $inventoryBlockCode = null;

    /**
     * Whether the price for this service is guaranteed or quoted and subject to change. Values: False (Price NOT guaranteed) and True (Price is guaranteed).
     *
     * @var bool $priceGuaranteed
     */
    private $priceGuaranteed = null;

    /**
     * Whether the price for this service is included in the room rate.
     * Values: False (or No), and True (or Yes).
     *
     * @var bool $inclusive
     */
    private $inclusive = null;

    /**
     * The number of tickets, rounds of golf, etc. Also serves as the number of persons when pricing class is per person or per person per night.
     *
     * @var int $quantity
     */
    private $quantity = null;

    /**
     * When true, the service has been requested by the guest.
     *
     * @var bool $requestedIndicator
     */
    private $requestedIndicator = null;

    /**
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @var string $uRL
     */
    private $uRL = null;

    /**
     * A reference to the type of object defined by the UniqueID element. Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @var string $type
     */
    private $type = null;

    /**
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @var string $instance
     */
    private $instance = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string $iD
     */
    private $iD = null;

    /**
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @var string $iDContext
     */
    private $iDContext = null;

    /**
     * When true, the service is required and/or mandatory.
     *
     * @var bool $requiredInd
     */
    private $requiredInd = null;

    /**
     * The representation of the specific service category for this specific service.
     *
     * @var string $serviceCategoryCode
     */
    private $serviceCategoryCode = null;

    /**
     * The selling price of this Service.
     *
     * @var \Recranet\OTA\Type\AmountType[] $price
     */
    private $price = [
        
    ];

    /**
     * Details on the Service including Guest Counts, Time Span of this Service, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Service and finally financial information related to the Service, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @var \Recranet\OTA\Type\ServiceType\ServiceDetailsAType $serviceDetails
     */
    private $serviceDetails = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as servicePricingType
     *
     * An enumerated type that defines how a service is priced. Values: Per stay, Per person, Per night, Per person per night, Per use.
     *
     * @return string
     */
    public function getServicePricingType()
    {
        return $this->servicePricingType;
    }

    /**
     * Sets a new servicePricingType
     *
     * An enumerated type that defines how a service is priced. Values: Per stay, Per person, Per night, Per person per night, Per use.
     *
     * @param string $servicePricingType
     * @return self
     */
    public function setServicePricingType($servicePricingType)
    {
        $this->servicePricingType = $servicePricingType;
        return $this;
    }

    /**
     * Gets as reservationStatusType
     *
     * An enumerated type that defines the status of the reservation for this service.
     *
     * @return string
     */
    public function getReservationStatusType()
    {
        return $this->reservationStatusType;
    }

    /**
     * Sets a new reservationStatusType
     *
     * An enumerated type that defines the status of the reservation for this service.
     *
     * @param string $reservationStatusType
     * @return self
     */
    public function setReservationStatusType($reservationStatusType)
    {
        $this->reservationStatusType = $reservationStatusType;
        return $this;
    }

    /**
     * Gets as serviceRPH
     *
     * A unique ID for a service that may be referenced elsewhere in the schema.
     *
     * @return string
     */
    public function getServiceRPH()
    {
        return $this->serviceRPH;
    }

    /**
     * Sets a new serviceRPH
     *
     * A unique ID for a service that may be referenced elsewhere in the schema.
     *
     * @param string $serviceRPH
     * @return self
     */
    public function setServiceRPH($serviceRPH)
    {
        $this->serviceRPH = $serviceRPH;
        return $this;
    }

    /**
     * Gets as serviceInventoryCode
     *
     * The representation of the specific service being reserved.
     *
     * @return string
     */
    public function getServiceInventoryCode()
    {
        return $this->serviceInventoryCode;
    }

    /**
     * Sets a new serviceInventoryCode
     *
     * The representation of the specific service being reserved.
     *
     * @param string $serviceInventoryCode
     * @return self
     */
    public function setServiceInventoryCode($serviceInventoryCode)
    {
        $this->serviceInventoryCode = $serviceInventoryCode;
        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * The representation of the rate plan under which this service was booked.
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
     * The representation of the rate plan under which this service was booked.
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
     * Gets as inventoryBlockCode
     *
     * The representation of the block code under which the inventory for this service is categorized.
     *
     * @return string
     */
    public function getInventoryBlockCode()
    {
        return $this->inventoryBlockCode;
    }

    /**
     * Sets a new inventoryBlockCode
     *
     * The representation of the block code under which the inventory for this service is categorized.
     *
     * @param string $inventoryBlockCode
     * @return self
     */
    public function setInventoryBlockCode($inventoryBlockCode)
    {
        $this->inventoryBlockCode = $inventoryBlockCode;
        return $this;
    }

    /**
     * Gets as priceGuaranteed
     *
     * Whether the price for this service is guaranteed or quoted and subject to change. Values: False (Price NOT guaranteed) and True (Price is guaranteed).
     *
     * @return bool
     */
    public function getPriceGuaranteed()
    {
        return $this->priceGuaranteed;
    }

    /**
     * Sets a new priceGuaranteed
     *
     * Whether the price for this service is guaranteed or quoted and subject to change. Values: False (Price NOT guaranteed) and True (Price is guaranteed).
     *
     * @param bool $priceGuaranteed
     * @return self
     */
    public function setPriceGuaranteed($priceGuaranteed)
    {
        $this->priceGuaranteed = $priceGuaranteed;
        return $this;
    }

    /**
     * Gets as inclusive
     *
     * Whether the price for this service is included in the room rate.
     * Values: False (or No), and True (or Yes).
     *
     * @return bool
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }

    /**
     * Sets a new inclusive
     *
     * Whether the price for this service is included in the room rate.
     * Values: False (or No), and True (or Yes).
     *
     * @param bool $inclusive
     * @return self
     */
    public function setInclusive($inclusive)
    {
        $this->inclusive = $inclusive;
        return $this;
    }

    /**
     * Gets as quantity
     *
     * The number of tickets, rounds of golf, etc. Also serves as the number of persons when pricing class is per person or per person per night.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The number of tickets, rounds of golf, etc. Also serves as the number of persons when pricing class is per person or per person per night.
     *
     * @param int $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Gets as requestedIndicator
     *
     * When true, the service has been requested by the guest.
     *
     * @return bool
     */
    public function getRequestedIndicator()
    {
        return $this->requestedIndicator;
    }

    /**
     * Sets a new requestedIndicator
     *
     * When true, the service has been requested by the guest.
     *
     * @param bool $requestedIndicator
     * @return self
     */
    public function setRequestedIndicator($requestedIndicator)
    {
        $this->requestedIndicator = $requestedIndicator;
        return $this;
    }

    /**
     * Gets as uRL
     *
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @return string
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @param string $uRL
     * @return self
     */
    public function setURL($uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }

    /**
     * Gets as type
     *
     * A reference to the type of object defined by the UniqueID element. Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * A reference to the type of object defined by the UniqueID element. Refer to OpenTravel Code List Unique ID Type (UIT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as instance
     *
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Sets a new instance
     *
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @param string $instance
     * @return self
     */
    public function setInstance($instance)
    {
        $this->instance = $instance;
        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;
        return $this;
    }

    /**
     * Gets as iDContext
     *
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @return string
     */
    public function getIDContext()
    {
        return $this->iDContext;
    }

    /**
     * Sets a new iDContext
     *
     * Used to identify the source of the identifier (e.g., IATA, ABTA).
     *
     * @param string $iDContext
     * @return self
     */
    public function setIDContext($iDContext)
    {
        $this->iDContext = $iDContext;
        return $this;
    }

    /**
     * Gets as requiredInd
     *
     * When true, the service is required and/or mandatory.
     *
     * @return bool
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * When true, the service is required and/or mandatory.
     *
     * @param bool $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;
        return $this;
    }

    /**
     * Gets as serviceCategoryCode
     *
     * The representation of the specific service category for this specific service.
     *
     * @return string
     */
    public function getServiceCategoryCode()
    {
        return $this->serviceCategoryCode;
    }

    /**
     * Sets a new serviceCategoryCode
     *
     * The representation of the specific service category for this specific service.
     *
     * @param string $serviceCategoryCode
     * @return self
     */
    public function setServiceCategoryCode($serviceCategoryCode)
    {
        $this->serviceCategoryCode = $serviceCategoryCode;
        return $this;
    }

    /**
     * Adds as price
     *
     * The selling price of this Service.
     *
     * @return self
     * @param \Recranet\OTA\Type\AmountType $price
     */
    public function addToPrice(\Recranet\OTA\Type\AmountType $price)
    {
        $this->price[] = $price;
        return $this;
    }

    /**
     * isset price
     *
     * The selling price of this Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPrice($index)
    {
        return isset($this->price[$index]);
    }

    /**
     * unset price
     *
     * The selling price of this Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPrice($index)
    {
        unset($this->price[$index]);
    }

    /**
     * Gets as price
     *
     * The selling price of this Service.
     *
     * @return \Recranet\OTA\Type\AmountType[]
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * The selling price of this Service.
     *
     * @param \Recranet\OTA\Type\AmountType[] $price
     * @return self
     */
    public function setPrice(array $price = null)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as serviceDetails
     *
     * Details on the Service including Guest Counts, Time Span of this Service, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Service and finally financial information related to the Service, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @return \Recranet\OTA\Type\ServiceType\ServiceDetailsAType
     */
    public function getServiceDetails()
    {
        return $this->serviceDetails;
    }

    /**
     * Sets a new serviceDetails
     *
     * Details on the Service including Guest Counts, Time Span of this Service, pointers to Res Guests, guest Memberships, Comments and Special Requests pertaining to this particular Service and finally financial information related to the Service, including Guarantee, Deposit and Payment and Cancellation Penalties.
     *
     * @param \Recranet\OTA\Type\ServiceType\ServiceDetailsAType $serviceDetails
     * @return self
     */
    public function setServiceDetails(?\Recranet\OTA\Type\ServiceType\ServiceDetailsAType $serviceDetails = null)
    {
        $this->serviceDetails = $serviceDetails;
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

