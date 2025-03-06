<?php

namespace Recranet\OTA\Type\AirPricedOfferType;

/**
 * Class representing BookingInstructionAType
 */
class BookingInstructionAType
{
    /**
     * The booking method that should be applied to the offer.
     *
     * @var string $bookingMethod
     */
    private $bookingMethod = null;

    /**
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an eticket.)
     *
     * @var string $eMDType
     */
    private $eMDType = null;

    /**
     * Special service request information.
     *
     * @var \Recranet\OTA\Type\SpecialServiceRequestType[] $sSRInfo
     */
    private $sSRInfo = [
        
    ];

    /**
     * Other service information.
     *
     * @var \Recranet\OTA\Type\OtherServiceInfoType[] $oSIInfo
     */
    private $oSIInfo = [
        
    ];

    /**
     * Upgrade instruction information.
     *
     * @var \Recranet\OTA\Type\AirPricedOfferType\BookingInstructionAType\UpgradeAType $upgrade
     */
    private $upgrade = null;

    /**
     * Gets as bookingMethod
     *
     * The booking method that should be applied to the offer.
     *
     * @return string
     */
    public function getBookingMethod()
    {
        return $this->bookingMethod;
    }

    /**
     * Sets a new bookingMethod
     *
     * The booking method that should be applied to the offer.
     *
     * @param string $bookingMethod
     * @return self
     */
    public function setBookingMethod($bookingMethod)
    {
        $this->bookingMethod = $bookingMethod;
        return $this;
    }

    /**
     * Gets as eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an eticket.)
     *
     * @return string
     */
    public function getEMDType()
    {
        return $this->eMDType;
    }

    /**
     * Sets a new eMDType
     *
     * Type of EMD. EMD-S (standalone) or EMD-A (associated with flight segment and an eticket.)
     *
     * @param string $eMDType
     * @return self
     */
    public function setEMDType($eMDType)
    {
        $this->eMDType = $eMDType;
        return $this;
    }

    /**
     * Adds as sSRInfo
     *
     * Special service request information.
     *
     * @return self
     * @param \Recranet\OTA\Type\SpecialServiceRequestType $sSRInfo
     */
    public function addToSSRInfo(\Recranet\OTA\Type\SpecialServiceRequestType $sSRInfo)
    {
        $this->sSRInfo[] = $sSRInfo;
        return $this;
    }

    /**
     * isset sSRInfo
     *
     * Special service request information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSSRInfo($index)
    {
        return isset($this->sSRInfo[$index]);
    }

    /**
     * unset sSRInfo
     *
     * Special service request information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSSRInfo($index)
    {
        unset($this->sSRInfo[$index]);
    }

    /**
     * Gets as sSRInfo
     *
     * Special service request information.
     *
     * @return \Recranet\OTA\Type\SpecialServiceRequestType[]
     */
    public function getSSRInfo()
    {
        return $this->sSRInfo;
    }

    /**
     * Sets a new sSRInfo
     *
     * Special service request information.
     *
     * @param \Recranet\OTA\Type\SpecialServiceRequestType[] $sSRInfo
     * @return self
     */
    public function setSSRInfo(array $sSRInfo = null)
    {
        $this->sSRInfo = $sSRInfo;
        return $this;
    }

    /**
     * Adds as oSIInfo
     *
     * Other service information.
     *
     * @return self
     * @param \Recranet\OTA\Type\OtherServiceInfoType $oSIInfo
     */
    public function addToOSIInfo(\Recranet\OTA\Type\OtherServiceInfoType $oSIInfo)
    {
        $this->oSIInfo[] = $oSIInfo;
        return $this;
    }

    /**
     * isset oSIInfo
     *
     * Other service information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOSIInfo($index)
    {
        return isset($this->oSIInfo[$index]);
    }

    /**
     * unset oSIInfo
     *
     * Other service information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOSIInfo($index)
    {
        unset($this->oSIInfo[$index]);
    }

    /**
     * Gets as oSIInfo
     *
     * Other service information.
     *
     * @return \Recranet\OTA\Type\OtherServiceInfoType[]
     */
    public function getOSIInfo()
    {
        return $this->oSIInfo;
    }

    /**
     * Sets a new oSIInfo
     *
     * Other service information.
     *
     * @param \Recranet\OTA\Type\OtherServiceInfoType[] $oSIInfo
     * @return self
     */
    public function setOSIInfo(array $oSIInfo = null)
    {
        $this->oSIInfo = $oSIInfo;
        return $this;
    }

    /**
     * Gets as upgrade
     *
     * Upgrade instruction information.
     *
     * @return \Recranet\OTA\Type\AirPricedOfferType\BookingInstructionAType\UpgradeAType
     */
    public function getUpgrade()
    {
        return $this->upgrade;
    }

    /**
     * Sets a new upgrade
     *
     * Upgrade instruction information.
     *
     * @param \Recranet\OTA\Type\AirPricedOfferType\BookingInstructionAType\UpgradeAType $upgrade
     * @return self
     */
    public function setUpgrade(?\Recranet\OTA\Type\AirPricedOfferType\BookingInstructionAType\UpgradeAType $upgrade = null)
    {
        $this->upgrade = $upgrade;
        return $this;
    }
}

