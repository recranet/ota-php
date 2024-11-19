<?php

namespace Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType;

/**
 * Class representing RFPIDsAType
 */
class RFPIDsAType
{
    /**
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an individual RFP.
     *
     * @var \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType[] $rFPID
     */
    private $rFPID = [
        
    ];

    /**
     * Adds as rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an individual RFP.
     *
     * @return self
     * @param \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType $rFPID
     */
    public function addToRFPID(\Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType $rFPID)
    {
        $this->rFPID[] = $rFPID;
        return $this;
    }

    /**
     * isset rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an individual RFP.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRFPID($index)
    {
        return isset($this->rFPID[$index]);
    }

    /**
     * unset rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an individual RFP.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRFPID($index)
    {
        unset($this->rFPID[$index]);
    }

    /**
     * Gets as rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an individual RFP.
     *
     * @return \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType[]
     */
    public function getRFPID()
    {
        return $this->rFPID;
    }

    /**
     * Sets a new rFPID
     *
     * Corresponds to the RFP_ID used in OTA_HotelRFP_RQ.xsd and OTA_HotelRFP_NotifRQ.xsd. This is a UniqueID that is associated with an individual RFP.
     *
     * @param \Recranet\OTA\OTAHotelRFPMeetingNotifRS\OTAHotelRFPMeetingNotifRSAType\MessageIDAType\RFPIDsAType\RFPIDAType[] $rFPID
     * @return self
     */
    public function setRFPID(array $rFPID)
    {
        $this->rFPID = $rFPID;
        return $this;
    }
}

