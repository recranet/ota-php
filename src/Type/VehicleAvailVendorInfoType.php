<?php

namespace Recranet\OTA\Type;

/**
 * Class representing VehicleAvailVendorInfoType
 *
 * The VehicleAvailVendorInfoType complex type identifies the data that describes supplemental information relevant to a vendor and made available at the time that availability and rates are checked.
 * XSD Type: VehicleAvailVendorInfoType
 */
class VehicleAvailVendorInfoType
{
    /**
     * A collection of free-format messages associated with this vendor.
     *
     * @var \Recranet\OTA\Type\VendorMessageType[] $vendorMessages
     */
    private $vendorMessages = null;

    /**
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @var \Recranet\OTA\Type\OffLocationServicePricedType[] $offLocServices
     */
    private $offLocServices = [
        
    ];

    /**
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @var \Recranet\OTA\Type\MonetaryRuleType[] $paymentRules
     */
    private $paymentRules = null;

    /**
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @var \Recranet\OTA\Type\VehicleLocationDetailsType[] $locationDetails
     */
    private $locationDetails = [
        
    ];

    /**
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @var \Recranet\OTA\Type\VehicleAvailVendorInfoType\TourInfoAType $tourInfo
     */
    private $tourInfo = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as vendorMessage
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @return self
     * @param \Recranet\OTA\Type\VendorMessageType $vendorMessage
     */
    public function addToVendorMessages(\Recranet\OTA\Type\VendorMessageType $vendorMessage)
    {
        $this->vendorMessages[] = $vendorMessage;
        return $this;
    }

    /**
     * isset vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetVendorMessages($index)
    {
        return isset($this->vendorMessages[$index]);
    }

    /**
     * unset vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetVendorMessages($index)
    {
        unset($this->vendorMessages[$index]);
    }

    /**
     * Gets as vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @return \Recranet\OTA\Type\VendorMessageType[]
     */
    public function getVendorMessages()
    {
        return $this->vendorMessages;
    }

    /**
     * Sets a new vendorMessages
     *
     * A collection of free-format messages associated with this vendor.
     *
     * @param \Recranet\OTA\Type\VendorMessageType[] $vendorMessages
     * @return self
     */
    public function setVendorMessages(array $vendorMessages = null)
    {
        $this->vendorMessages = $vendorMessages;
        return $this;
    }

    /**
     * Adds as offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @return self
     * @param \Recranet\OTA\Type\OffLocationServicePricedType $offLocServices
     */
    public function addToOffLocServices(\Recranet\OTA\Type\OffLocationServicePricedType $offLocServices)
    {
        $this->offLocServices[] = $offLocServices;
        return $this;
    }

    /**
     * isset offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOffLocServices($index)
    {
        return isset($this->offLocServices[$index]);
    }

    /**
     * unset offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOffLocServices($index)
    {
        unset($this->offLocServices[$index]);
    }

    /**
     * Gets as offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @return \Recranet\OTA\Type\OffLocationServicePricedType[]
     */
    public function getOffLocServices()
    {
        return $this->offLocServices;
    }

    /**
     * Sets a new offLocServices
     *
     * Information on off-airport location services, for example, vehicle delivery, customer pickup, along with the associated price.
     *
     * @param \Recranet\OTA\Type\OffLocationServicePricedType[] $offLocServices
     * @return self
     */
    public function setOffLocServices(array $offLocServices = null)
    {
        $this->offLocServices = $offLocServices;
        return $this;
    }

    /**
     * Adds as paymentRule
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @return self
     * @param \Recranet\OTA\Type\MonetaryRuleType $paymentRule
     */
    public function addToPaymentRules(\Recranet\OTA\Type\MonetaryRuleType $paymentRule)
    {
        $this->paymentRules[] = $paymentRule;
        return $this;
    }

    /**
     * isset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentRules($index)
    {
        return isset($this->paymentRules[$index]);
    }

    /**
     * unset paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentRules($index)
    {
        unset($this->paymentRules[$index]);
    }

    /**
     * Gets as paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @return \Recranet\OTA\Type\MonetaryRuleType[]
     */
    public function getPaymentRules()
    {
        return $this->paymentRules;
    }

    /**
     * Sets a new paymentRules
     *
     * A collection of payment rules associated with this reservation. This instance of PaymentRules would be used if there were payment rules that were applicable, regardless of the vehicle.
     *
     * @param \Recranet\OTA\Type\MonetaryRuleType[] $paymentRules
     * @return self
     */
    public function setPaymentRules(array $paymentRules = null)
    {
        $this->paymentRules = $paymentRules;
        return $this;
    }

    /**
     * Adds as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return self
     * @param \Recranet\OTA\Type\VehicleLocationDetailsType $locationDetails
     */
    public function addToLocationDetails(\Recranet\OTA\Type\VehicleLocationDetailsType $locationDetails)
    {
        $this->locationDetails[] = $locationDetails;
        return $this;
    }

    /**
     * isset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetLocationDetails($index)
    {
        return isset($this->locationDetails[$index]);
    }

    /**
     * unset locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetLocationDetails($index)
    {
        unset($this->locationDetails[$index]);
    }

    /**
     * Gets as locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @return \Recranet\OTA\Type\VehicleLocationDetailsType[]
     */
    public function getLocationDetails()
    {
        return $this->locationDetails;
    }

    /**
     * Sets a new locationDetails
     *
     * Detailed information about the associated rental facilities, for example, address, phone number, hours of operation.
     *
     * @param \Recranet\OTA\Type\VehicleLocationDetailsType[] $locationDetails
     * @return self
     */
    public function setLocationDetails(array $locationDetails = null)
    {
        $this->locationDetails = $locationDetails;
        return $this;
    }

    /**
     * Gets as tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @return \Recranet\OTA\Type\VehicleAvailVendorInfoType\TourInfoAType
     */
    public function getTourInfo()
    {
        return $this->tourInfo;
    }

    /**
     * Sets a new tourInfo
     *
     * Details of a tour with which this availability information is associated. Availability and rate information may vary if associated with a tour.
     *
     * @param \Recranet\OTA\Type\VehicleAvailVendorInfoType\TourInfoAType $tourInfo
     * @return self
     */
    public function setTourInfo(?\Recranet\OTA\Type\VehicleAvailVendorInfoType\TourInfoAType $tourInfo = null)
    {
        $this->tourInfo = $tourInfo;
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

